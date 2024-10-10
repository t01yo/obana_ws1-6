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
        </tr>
    </thead>

    <tbody>
        <?php
        include 'connect.php';

        // Ensure connection to the migration database
        $con->select_db('migration');

        // SQL query to fetch customers who have not placed any orders
        $sql = "SELECT customers.CustomerName, customers.ContactName, customers.Country
                FROM customers
                LEFT JOIN orders ON customers.CustomerID = orders.CustomerID
                WHERE orders.OrderID IS NULL";

        $all_sql = $con->query($sql);

        // Check if query executed successfully
        if ($all_sql && mysqli_num_rows($all_sql) > 0) {
            while ($row = mysqli_fetch_array($all_sql)) {
        ?>
        <tr>
            <td><?php echo htmlspecialchars($row["CustomerName"]); ?></td>
            <td><?php echo htmlspecialchars($row["ContactName"]); ?></td>                          
            <td><?php echo htmlspecialchars($row["Country"]); ?></td>
        </tr>
        <?php 
            }
        } else {
            echo "<tr><td colspan='3'>No customers found.</td></tr>";
        }

        // Close the database connection
        $con->close();
        ?>
    </tbody>
</table>

</body>
</html>
