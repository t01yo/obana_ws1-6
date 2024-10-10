<html>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<h2>
    <?php
    $contentTitle = isset($_POST['contentTitle']) ? $_POST['contentTitle'] : '';
    echo $contentTitle;
    ?>
</h2>
<input type="text" id="myInput" onkeyup="searchin()" placeholder="Search..." title="Type in something">

<table id="myTable" class="table">
    <thead>
        <tr>
            <th onclick="sortTable(0)">Customer Name</th>
            <th onclick="sortTable(1)">Contact Name</th>                          
            <th onclick="sortTable(2)">Country</th>
            <th onclick="sortTable(3)">Product Name</th>
            <th onclick="sortTable(4)">Unit</th>
            <th onclick="sortTable(5)">Price</th>
            <th onclick="sortTable(6)">Order Date</th>
            <th onclick="sortTable(7)">Quantity</th>
        </tr>
    </thead>

    <tbody>
        <?php
        include 'connect.php';

        // SQL query to fetch relevant customer and order details for product "Tofu"
        $sql = "SELECT customers.CustomerName, customers.ContactName, customers.Country, 
                       products.ProductName, products.Unit, products.Price, 
                       orders.OrderDate, order_details.Quantity
                FROM customers
                INNER JOIN orders ON customers.CustomerID = orders.CustomerID
                INNER JOIN order_details ON orders.OrderID = order_details.OrderID
                INNER JOIN products ON order_details.ProductID = products.ProductID
                WHERE products.ProductName = 'Tofu'";

        $all_sql = $con->query($sql);

        // Check if the query executed successfully
        if ($all_sql && mysqli_num_rows($all_sql) > 0) {
            while ($row = mysqli_fetch_array($all_sql)) {
        ?>
        <tr>
            <td><?php echo htmlspecialchars($row["CustomerName"]); ?></td>
            <td><?php echo htmlspecialchars($row["ContactName"]); ?></td>                          
            <td><?php echo htmlspecialchars($row["Country"]); ?></td>
            <td><?php echo htmlspecialchars($row["ProductName"]); ?></td>
            <td><?php echo htmlspecialchars($row["Unit"]); ?></td>
            <td><?php echo htmlspecialchars($row["Price"]); ?></td>
            <td><?php echo htmlspecialchars($row["OrderDate"]); ?></td>
            <td><?php echo htmlspecialchars($row["Quantity"]); ?></td>
        </tr>
        <?php 
            }
        } else {
            echo "<tr><td colspan='8'>No data found.</td></tr>";
        }

        // Close the database connection
        $con->close();
        ?>
    </tbody>
</table>

</body>
</html>
