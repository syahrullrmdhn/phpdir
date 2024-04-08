<?php
function calculateDiscount($totalPurchase) {
    $discount = 0;

    if ($totalPurchase >= 100000 && $totalPurchase < 200000) {
        $discount = $totalPurchase * 0.1;
    } elseif ($totalPurchase >= 200000 && $totalPurchase < 300000) {
        $discount = $totalPurchase * 0.2;
    } elseif ($totalPurchase >= 300000) {
        $discount = $totalPurchase * 0.3;
    }

    return $discount;
}

$totalPurchase = 90000; 
$discount = calculateDiscount($totalPurchase);
$totalToPay = $totalPurchase - $discount;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 300px;
            margin: 0 auto;
            text-align: center;
            border: 1px solid #000;
            padding: 10px;
            border-radius: 5px;
        }
        .total {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Struk Pembelian</h2>
    <p>Total Pembelian: Rp. <?php echo number_format($totalPurchase); ?></p>
    <p>Diskon: Rp. <?php echo number_format($discount); ?></p>
    <p class="total">Total Yang Harus Dibayar: Rp. <?php echo number_format($totalToPay); ?></p>
</div>

</body>
</html>
