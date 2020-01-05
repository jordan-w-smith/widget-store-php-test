<?php
require('./OrderCalculator.php');
$results = "";
if ($_POST['quantity']) {
    $quantity=$_POST['quantity'];
    $orderCalculator2 = new OrderCalculator();
    $order2 = new Order($quantity);
    $results = $orderCalculator2->processOrder($order2);
}

?>
<head>
    <title>Stickee Test</title>
</head>
<body>
    <h1>Stickee Test</h1>
    <p><?php echo "php is working"?></p>
    <form action="index.php" method="post">
        <input name="quantity" type="text" placeholder="order quantity">
        <input type="submit">
    </form>
    <p>packs required: </p>
    <p><?php print_r($results);?></p>
    <table>
        <tr>
            <th>Pack Name</th>
            <th>Quantity</th>
        </tr>
        <tr>
            <td>examplepack</td>
            <td>3</td>
        </tr>
    </table>
    <p>Key</p>
    <p>Value</p>
</body

