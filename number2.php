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
            <th onclick="sortTable(2)">Product Name</th>
            <th onclick="sortTable(3)">Quantity</th>
            <th onclick="sortTable(4)">Price</th>
        </tr>
    </thead>

    <tbody>
        <?php
        include 'connect.php';

        // Ensure the connection is to the migration database
        $con->select_db('migration');

        // SQL query to fetch customer and order details for customers from Sweden
        $sql = "SELECT customers.CustomerName, customers.ContactName, products.ProductName, order_details.Quantity, products.Price
                FROM customers 
                INNER JOIN orders ON customers.CustomerID = orders.CustomerID
                INNER JOIN order_details ON orders.OrderID = order_details.OrderID
                INNER JOIN products ON order_details.ProductID = products.ProductID
                WHERE customers.Country = 'Sweden'";
        
        $all_sql = $con->query($sql);

        // Check if the query executed successfully
        if ($all_sql && mysqli_num_rows($all_sql) > 0) {
            while ($row = mysqli_fetch_array($all_sql)) {
        ?>
        <tr>
            <td><?php echo htmlspecialchars($row["CustomerName"]); ?></td>
            <td><?php echo htmlspecialchars($row["ContactName"]); ?></td>                          
            <td><?php echo htmlspecialchars($row["ProductName"]); ?></td>
            <td><?php echo htmlspecialchars($row["Quantity"]); ?></td>
            <td><?php echo htmlspecialchars($row["Price"]); ?></td>
        </tr>
        <?php 
            }
        } else {
            echo "<tr><td colspan='5'>No data found.</td></tr>";
        }

        // Close the database connection
        $con->close();
        ?>
    </tbody>
</table>

</body>
</html>
