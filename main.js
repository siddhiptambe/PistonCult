function calculateTotalPrice() {
    let rows = document.querySelectorAll("tbody tr");
    let subtotal = 0;

    rows.forEach(row => {
        let price = parseFloat(row.querySelector(".price").textContent.replace("₹", ""));
        let quantity = row.querySelector(".quantity").value;
        let total = price * quantity;
        
        row.querySelector(".total").textContent = `₹${total.toFixed(2)}`;
        subtotal += total;
    });

    document.querySelector(".total-price").textContent = `₹${subtotal.toFixed(2)}`;

    document.querySelector(".transaction-total-price").textContent = `$${subtotal.toFixed(2)}`;

    return subtotal; // Returns the total price if needed
}

function showTransactionBox() {
    document.getElementById("transaction-box").style.display = "flex";
    calculateTotalPrice();
}

function closeTransactionBox() {
    document.getElementById("transaction-box").style.display = "none";
}

function confirmOrder() {
    alert("✅ Order Confirmed! You'll pay in cash upon delivery. 🚗💨");
    closeTransactionBox();
}

function updateTotalPrice() {
    let rows = document.querySelectorAll("tbody tr");
    let subtotal = 0;

    rows.forEach(row => {
        let price = parseFloat(row.querySelector(".price").textContent.replace("₹", ""));
        let quantity = parseInt(row.querySelector(".quantity").value);
        let total = price * quantity;

        row.querySelector(".total").textContent = `₹${total.toFixed(2)}`;
        subtotal += total;
    });

    document.querySelector(".total-price").textContent = `$${subtotal.toFixed(2)}`;
}