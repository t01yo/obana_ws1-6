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
            <th onclick="sortTable(3)">City</th>
            <th onclick="sortTable(4)">Postal Code</th>
            <th onclick="sortTable(5)">Order ID</th>
            <th onclick="sortTable(6)">Order Date</th>
        </tr>
    </thead>

    <tbody>
        <?php
        include 'connect.php';

        // Ensure you connect to the migration database
        $sql = "SELECT customers.CustomerName, customers.ContactName, customers.Country, customers.City, 
                       customers.PostalCode, orders.OrderID, orders.OrderDate 
                FROM customers 
                INNER JOIN orders ON customers.CustomerID = orders.CustomerID";

        $all_sql = $con->query($sql);

        // Check if query executed successfully
        if ($all_sql) {
            while ($row = mysqli_fetch_array($all_sql)) {
        ?>
        <tr>
            <td><?php echo $row["CustomerName"]; ?></td>
            <td><?php echo $row["ContactName"]; ?></td>
            <td><?php echo $row["Country"]; ?></td>
            <td><?php echo $row["City"]; ?></td>
            <td><?php echo $row["PostalCode"]; ?></td>
            <td><?php echo $row["OrderID"]; ?></td>
            <td><?php echo $row["OrderDate"]; ?></td>
        </tr>
        <?php 
            }
        } else {
            echo "<tr><td colspan='7'>No data found.</td></tr>";
        }

        // Close the database connection
        $con->close();
        ?>
    </tbody>
</table>

</body>
</html>
