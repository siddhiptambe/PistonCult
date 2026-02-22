<?php
include 'backend/conn.php';

$name = "";
$phone = "";
$address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['un'] ?? '';
    $phone = $_POST['phno'] ?? '';
    $address = $_POST['address'] ?? '';
}

if (isset($_GET['id20'])) {
    $id = $_GET['id20'];
    $or = "SELECT `ID_CART`,`NAME`, `IMAGE`, `Price` FROM cart WHERE ID_CART=$id";
    $result2 = mysqli_query($conn, $or);
    if ($result2 && mysqli_num_rows($result2) > 0) {

        $batchQuery2 = "SELECT MAX(Batch_Product) as max_batch2 FROM order_details";
        $batchResult2 = mysqli_query($conn, $batchQuery2);
        $row2 = mysqli_fetch_assoc($batchResult2);
        $currentBatch2 = $row2['max_batch2'] ?? 0;
        $newBatch2 = $currentBatch2 + 1;

        while ($row2 = mysqli_fetch_assoc($result2)) {

           // Prepare the insert statement for the destination table
            $ID_CART2 = mysqli_real_escape_string($conn, $row2['ID_CART']);
            $NAME2 = mysqli_real_escape_string($conn, $row2['NAME']);
            $IMAGE2 = mysqli_real_escape_string($conn, $row2['IMAGE']);
            $Price2 = mysqli_real_escape_string($conn, $row2['Price']);
    
            $order = "INSERT INTO order_details (`ID_ORDER`,`NAME`,`IMAGE`,`Price`,`Order_Name`,`Order_Phno`,`Address`,`Batch_Product`) 
                VALUES ('$ID_CART2', '$NAME2', '$IMAGE2', '$Price2', '$name', '$phone', '$address', '$newBatch2')";

            if ($conn->query($order) === TRUE) {
                
                // SQL to delete data from source_table after copying
                sleep(5);
                $delete = "DELETE FROM cart WHERE ID_CART=$id";
                if ($conn->query($delete) === TRUE) {
                    header("Location: order_preview.php?batch=" . urlencode($newBatch2));
                    exit();
                } else {
                }
            } else {
            }
        }
    }
}
?>
