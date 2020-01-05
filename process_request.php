<?php 
require('models/OrderCalculator.php');
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