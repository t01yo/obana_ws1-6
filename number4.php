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
            <th onclick="sortTable(0)">Product ID</th>
            <th onclick="sortTable(1)">Product Name</th>
            <th onclick="sortTable(2)">Price</th>
            <th onclick="sortTable(3)">Quantity</th>
        </tr>
    </thead>

    <tbody>
        <?php
        include 'connect.php';

        // SQL query to fetch product details for customers from Switzerland
        $sql = "SELECT products.ProductID, products.ProductName, products.Price, order_details.Quantity 
                FROM customers 
                INNER JOIN orders ON customers.CustomerID = orders.CustomerID 
                INNER JOIN order_details ON orders.OrderID = order_details.OrderID 
                INNER JOIN products ON order_details.ProductID = products.ProductID 
                WHERE customers.Country = 'Switzerland'";

        $all_sql = $con->query($sql);

        // Check if query executed successfully
        if ($all_sql && mysqli_num_rows($all_sql) > 0) {
            while ($row = mysqli_fetch_array($all_sql)) {
        ?>
        <tr>
            <td><?php echo htmlspecialchars($row["ProductID"]); ?></td>
            <td><?php echo htmlspecialchars($row["ProductName"]); ?></td>
            <td><?php echo htmlspecialchars($row["Price"]); ?></td>
            <td><?php echo htmlspecialchars($row["Quantity"]); ?></td>
        </tr>
        <?php 
            }
        } else {
            echo "<tr><td colspan='4'>No data found.</td></tr>";
        }

        // Close the database connection
        $con->close();
        ?>
    </tbody>
</table>

</body>
</html>
