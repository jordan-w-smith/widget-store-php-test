<?php
require('./OrderCalculator.php');
$quantity = 0;
$results = "";
if ($_POST) {
    $quantity = $_POST['quantity'];
    $orderCalculator2 = new OrderCalculator();
    $order2 = new Order($quantity);
    $results = $orderCalculator2->processOrder($order2);
}

$resultKey = "";
$resultValue = "";

function getResults($results) {
    if ($_POST) {
        foreach ($results as $key => $value) {
            print '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
        }
    }
}

?>

<head>
    <title>Stickee Test</title>
</head>

<body>
    <h1>Order Fulfillment Calculator</h1>
    <form action="index.php" method="post">
        <input name="quantity" type="text" placeholder="order quantity">
        <input type="submit">
    </form>
    <p>Units Ordered: <?php print $quantity; ?></p>
    <p>packs required: </p>
    <p><?php print_r($results); ?></p>
    <table>
        <tr>
            <th>Pack</th>
            <th>Quantity</th>
        </tr>
        <?php getResults($results); ?>
    </table>
</body>