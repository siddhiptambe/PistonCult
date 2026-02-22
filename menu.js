const APP_ID = 'B8AE47E7-A911-4FA0-852D-072ED197581A';
const API_TOKEN = '5f4c213e01f03c71c1130a0bf528f50552b41b44'; 
const sb = new SendBird({ appId: APP_ID });
let currentUserId = '';
let currentChannel = null;
let unseenMessageCount = 0;
const chatMessages = document.getElementById("chatMessages");
const messageInput = document.getElementById("messageInput");
const sendMessageButton = document.getElementById("sendMessage");
const notification = document.getElementById("notification");
const notificationText = document.getElementById("notification-text");

function yes(){
    var overlay = document.getElementById("overlay");
    if (overlay.style.display = "flex") {
        overlay.style.display = "none";
    }  
}

window.onload = async function() {
    
    const userId = getCookie("id");
    const nickname = getCookie("un");

    if (!userId || !nickname) { 
        
        return;
    }

    document.getElementById('current-user').textContent = nickname;

    try {
        
        await connectUser(userId, nickname);
    } catch (error) {
        console.error('Error during initialization:', error);
    }
};


document.addEventListener('DOMContentLoaded', () => {
    const registerForm = document.getElementById('registerForm');
    
    if (registerForm) {
        registerForm.addEventListener('submit', (event) => {
            event.preventDefault();
            const userId = document.getElementById('userId').value.trim();
            const nickname = document.getElementById('nickname').value.trim();

            if (!userId || !nickname) {
                showError('Please fill in all fields');
                return;
            }

            registerUser(userId, nickname);
        });
    }
});

function registerUser(userId, nickname) {
    const url = `https://api-${APP_ID}.sendbird.com/v3/users`;
    const headers = {
        'Content-Type': 'application/json',
        'Api-Token': API_TOKEN
    };
    const data = {
        user_id: userId,
        nickname: nickname,
        profile_url: "https://via.placeholder.com/150"
    };

    fetch(url, {
        method: 'POST',
        headers: headers,
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            throw new Error(data.message || 'Failed to register user');
        }

        localStorage.setItem('sendbird_user_id', userId);
        localStorage.setItem('sendbird_nickname', nickname);

        window.open('chat.php','__self');
    })
    .catch(error => {
        console.error("Error:", error);
        showError(error.message);
    });
}

function showError(message) {
    document.getElementById('error-message').textContent = message;
}


function getCookie(name) {
    const cookies = document.cookie.split('; '); // Split all cookies into an array
    for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i].split('='); // Split each cookie into name & value
        if (cookie[0] === name) {
            return decodeURIComponent(cookie[1]); // Decode and return value
        }
    }
    return null; // Return null if cookie not found
}

const nicknameCache = {};  // Cache to store nicknames

function getUserNickname(userId, elementId) {
    if (nicknameCache[userId]) {
        document.getElementById(elementId).textContent = nicknameCache[userId]; // Update immediately if cached
        return;
    }

    const API_TOKEN = "5f4c213e01f03c71c1130a0bf528f50552b41b44";  // Replace with your actual API Token
    const url = `https://api-${APP_ID}.sendbird.com/v3/users/${encodeURIComponent(userId)}`;

    fetch(url, {
        method: "GET",
        headers: {
            "Api-Token": API_TOKEN,
            "Content-Type": "application/json"
        }
    })
    .then(response => response.json())
    .then(data => {
        const nickname = data.nickname || "Unknown";
        nicknameCache[userId] = nickname;  // Cache the nickname
        const senderElement = document.getElementById(elementId);
        if (senderElement) {
            senderElement.textContent = nickname;
        }
    })
    .catch(error => {
        console.error("Error fetching user nickname:", error);
    });
}


function connectUser(userId, nickname) {
    
    return new Promise((resolve, reject) => {
        sb.connect(userId, (user, error) => {
            if (error) {
                console.error('Connection error:', error);
                reject(error);
                return;
            }

            console.log('Connected as:', userId);
            currentUserId = userId;

            sb.updateCurrentUserInfo(nickname, null, (response, error) => {
                if (error) {
                    console.error('Error updating user info:', error);
                    reject(error);
                    return;
                }
                joinOrCreateChannel().then(resolve).catch(reject);
            });
        });
    });
}

function joinOrCreateChannel() {
    return new Promise((resolve, reject) => {
        const FIXED_CHANNEL_URL = "sendbird_group_channel_149823150_aa743c4e6c386cc5d8bdbdaf7a9d2f8a24082ff3";
        
        sb.GroupChannel.getChannel(FIXED_CHANNEL_URL, (channel, error) => {
            if (channel) {
                currentChannel = channel;
                enterChannel(currentChannel);
                resolve(currentChannel);
            } else {
                const params = new sb.GroupChannelParams();
                params.channelUrl = FIXED_CHANNEL_URL;
                params.name = "Global Group Chat";
                params.isPublic = true;
                params.isDistinct = false;
                params.operatorUserIds = [currentUserId];

                sb.GroupChannel.createChannel(params, (newChannel, createError) => {
                    if (createError) {
                        console.error('Error creating channel:', createError);
                        reject(createError);
                        return;
                    }
                    currentChannel = newChannel;
                    enterChannel(newChannel);
                    resolve(newChannel);
                });
            }
        });
    });
}

function enterChannel(channel) {
    channel.join((response, error) => {
        if (error) {
            console.error('Error joining channel:', error);
            return;
        }

        currentChannel = channel;
        loadPreviousMessages();
        setupMessageHandling();
        console.log('Successfully joined channel:', channel.url);
    });
}

function loadPreviousMessages() 
{
    if (!currentChannel) 
    {
        return;
    }
    const messageListParams = new sb.MessageListParams();
    messageListParams.prevResultSize = 50;
    messageListParams.reverse = true;
    currentChannel.getMessagesByTimestamp(Date.now(), messageListParams, (messages, error) => {
        if (error) 
        {
            console.error('Error loading messages:', error);
            return;
        }
        const messagesDiv = document.getElementById('chatMessages');
        messagesDiv.innerHTML = '';
        messages.reverse().forEach((message) => {
            displayMessage(message);
        });
        messagesDiv.scrollTop = messagesDiv.scrollHeight;
    });
}

let lastDisplayedDate = '';
function displayMessage(message) 
{
    const div = document.createElement('div');
    const isCurrentUser = message.sender.userId === currentUserId;
    div.className = `message ${isCurrentUser ? 'sent' : 'received'}`;
    const timestamp = new Date(message.createdAt);
    const date = timestamp.toLocaleDateString();
    const time = timestamp.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    const day = timestamp.toLocaleDateString('en-US', { weekday: 'long' });

    let dateDisplay = '';
    if (date !== lastDisplayedDate) 
    {
        dateDisplay = `<div class="date-divider">${day}, ${date}</div>`;
        lastDisplayedDate = date;
    }

    const senderId = message.sender.userId;
    const senderElementId = `sender-${message.messageId}`;

    // Placeholder name until we fetch the correct one
    const senderName = isCurrentUser ? 'You' : (message.sender.nickname || "Fetching...");

    div.innerHTML = `
        ${dateDisplay}
        <div class="message-container">
            <div class="sender-name" id="${senderElementId}">${senderName}</div>
            <div class="message-bubble">
                <span class="message-content">${message.message}</span>
                <span class="message-time">${time}</span>
            </div>
        </div>
    `;

    chatMessages.appendChild(div);
    chatMessages.scrollTop = chatMessages.scrollHeight;

    // Fetch nickname only if it's missing
    if (!message.sender.nickname) {
        getUserNickname(senderId, senderElementId);
    }
}


function sendMessage() 
{
    const messageText = messageInput.value.trim();
    if (!messageText) 
    {
        console.error("Message input is empty.");
        return;
    }
    if (!currentChannel) 
    {
        console.error("No channel selected. Unable to send message.");
        return;
    }
    console.log(`Sending message: "${messageText}" to channel: ${currentChannel.url}`);
    currentChannel.sendUserMessage(messageText, (message, error) => {
        if (error) 
        {
            console.error("Error sending message:", error);
            alert("Failed to send the message. Please try again.");
            return;
        }
        console.log("Message sent successfully:", message);
        messageInput.value = "";
        displayMessage(message);
    });
}

sendMessageButton.addEventListener("click", sendMessage);
messageInput.addEventListener("keypress", (e) => {
    if (e.key === "Enter") sendMessage();
});


function setupMessageHandling() 
{
    sb.removeChannelHandler('GLOBAL_HANDLER');
    const channelHandler = new sb.ChannelHandler();
    channelHandler.onMessageReceived = function(channel, message) 
    {
        if (channel.url === currentChannel.url) 
        {
            displayMessage(message);
            if (message.sender.userId !== currentUserId) 
            {
                showNotification("New Message", ++unseenMessageCount);
            }
        }
    };
    sb.addChannelHandler('GLOBAL_HANDLER', channelHandler);
}

function showNotification(title, count) 
{
    if (count <= 0) 
    {
        return;
    }
    notification.style.display = "block";
    notificationText.textContent = `${count} new message${count > 1 ? 's' : ''}`;
    setTimeout(() => {
        notification.style.display = "none";
        unseenMessageCount = 0;
    }, 5000);
}

function setupNotificationReset() 
{
    sendMessageButton.addEventListener("click", () => {
        unseenMessageCount = 0;
        notification.style.display = "none";
    });
    chatMessages.addEventListener("click", () => {
        unseenMessageCount = 0;
        notification.style.display = "none";
    });
    messageInput.addEventListener("focus", () => {
        unseenMessageCount = 0;
        notification.style.display = "none";
    });
}
setupNotificationReset();