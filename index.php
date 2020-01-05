<?php
require('process_request.php')
?>

<head>
    <title>Stickee Test</title>
    <style>
        table, td {border: 1px solid black; text-align: center; padding: 5px;}
    </style>
</head>

<body>
    <h1>Order Fulfillment Calculator</h1>
    <form action="index.php" method="post">
        <input name="quantity" type="text" placeholder="order quantity">
        <input type="submit">
    </form>
    <p>Units Ordered: <?php print $quantity; ?></p>
    <p>packs required: </p>
    <table>
        <tr>
            <th>Pack</th>
            <th>Quantity</th>
        </tr>
        <?php getResults($results); ?>
    </table>
</body>