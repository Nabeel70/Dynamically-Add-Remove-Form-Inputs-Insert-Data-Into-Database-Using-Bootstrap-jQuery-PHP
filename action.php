<?php

$conn = new PDO('mysql:host=localhost;dbname=forms', 'root', '');

foreach ($_POST['product_bill'] as $key => $value) {
    $sql = 'INSERT INTO khata_voucher (khata, quality, bill, customer, lot, thaan, qty) VALUES (:khata, :quality, :bill, :customer, :lot, :thaan, :qty)';
    // $sql = "INSERT INTO `khata_voucher`(`khata`, `quality`, `bill`, `customer`, `lot`, `thaan`, `qty`)
    // VALUES ('{$khata}','{$quality}','{$bill}','{$customer}','{$lot}','{$thaan}','{$qty}')";

    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'bill' => $value,
        'khata' => $_POST['product_khata'],
        'quality' => $_POST['product_quality'],
        'customer' => $_POST['product_customer'][$key],
        'lot' => $_POST['product_lot'][$key],
        'thaan' => $_POST['product_thaan'][$key],
        'qty' => $_POST['product_qty'][$key]
        // 'price' => $_POST['product_price'][$key],
        // 'qty' => $_POST['product_qty'][$key]

        
//         $khata = $_POST['khata'];
// $quality = $_POST['quality'];
// $bill = $_POST['bill'];
// $customer = $_POST['customer'];
// $lot = $_POST['lot'];
// $thaan = $_POST['thaan'];
// $qty = $_POST['qty'];
        ]);
}
echo 'Items Inserted successfully';
?>