<?php
include 'connect.php'; // Include the database connection file

// Set the number of records per page
$recordsPerPage = 10;

// Get the current table number and page number from the URL, default to 1 if not set
$table = isset($_GET['table']) ? (int)$_GET['table'] : 1;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the starting record for the query
$start = ($page - 1) * $recordsPerPage;

// Function to fetch records
function fetchRecords($con, $sql, $start, $recordsPerPage) {
    $sql .= " LIMIT $start, $recordsPerPage"; // Add LIMIT clause to SQL
    return $con->query($sql);
}

// Define SQL queries for each table
$sqlQueries = [
    "SELECT customers.CustomerName, customers.ContactName, customers.Country, customers.City, 
            customers.PostalCode, orders.OrderID, orders.OrderDate 
    FROM customers 
    INNER JOIN orders ON customers.CustomerID = orders.CustomerID",
    
    "SELECT customers.CustomerName, customers.ContactName, products.ProductName, order_details.Quantity, products.Price
    FROM customers 
    INNER JOIN orders ON customers.CustomerID = orders.CustomerID
    INNER JOIN order_details ON orders.OrderID = order_details.OrderID
    INNER JOIN products ON order_details.ProductID = products.ProductID
    WHERE customers.Country = 'Sweden'",
    
    "SELECT customers.CustomerName, customers.ContactName, customers.Country, 
            products.ProductName, products.Unit, products.Price, 
            orders.OrderDate, order_details.Quantity
    FROM customers
    INNER JOIN orders ON customers.CustomerID = orders.CustomerID
    INNER JOIN order_details ON orders.OrderID = order_details.OrderID
    INNER JOIN products ON order_details.ProductID = products.ProductID
    WHERE products.ProductName = 'Tofu'",
    
    "SELECT products.ProductID, products.ProductName, products.Price, order_details.Quantity 
    FROM customers 
    INNER JOIN orders ON customers.CustomerID = orders.CustomerID 
    INNER JOIN order_details ON orders.OrderID = order_details.OrderID 
    INNER JOIN products ON order_details.ProductID = products.ProductID 
    WHERE customers.Country = 'Switzerland'",
    
    "SELECT customers.CustomerName, customers.ContactName, customers.Country
    FROM customers
    LEFT JOIN orders ON customers.CustomerID = orders.CustomerID
    WHERE orders.OrderID IS NULL"
];

// Function to count total records for pagination
function countRecords($con, $sql) {
    $result = $con->query($sql);
    return $result->num_rows;
}

// Get total records for each query
$totalRecords = [];
foreach ($sqlQueries as $sql) {
    $totalRecords[] = countRecords($con, $sql);
}
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('form.pagination-form').submit(function(e) {
            e.preventDefault(); // Prevent the form from submitting normally
            var form = $(this);
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(), // Serialize the form data
                success: function(response) {
                    // Update the corresponding table's content with the response
                    var tableId = 'myTable' + form.find('input[name="table"]').val();
                    $('#' + tableId + ' tbody').html($(response).find('#' + tableId + ' tbody').html());
                    // Update the pagination links as well
                    $('.pagination[data-table="' + form.find('input[name="table"]').val() + '"]').html($(response).find('.pagination[data-table="' + form.find('input[name="table"]').val() + '"]').html());
                }
            });
        });
    });
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        .pagination {
            display: flex;
            align-items: center; /* Center align items vertically */
            justify-content: flex-end; /* Align pagination to the right */
            margin-top: 10px;
        }

        .pagination-form {
            margin: 0 5px; /* Optional: adds space between buttons */
        }

        button {
            padding: 5px 10px;
            border: none;
            background-color: #007BFF;
            color: white;
            cursor: pointer;
        }

        button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .export-button {
            padding: 5px 10px;
            border: none;
            background-color: #3EB489; /* Change button color to light green */
            color: black; /* Set text color */
            cursor: pointer;
        }

        .export-button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
    </style>
</head>
<body>

<!-- Loop through each table -->
<?php for ($i = 0; $i < count($sqlQueries); $i++): ?>
    <?php
    // Set the title based on the current table index
    $titles = [
        "Customers who have placed an order",
        "Customers and their ordered products with price and quantity from Sweden",
        "Customers who ordered Tofu",
        "Customers from Switzerland who placed an order",
        "Customers with no orders"
    ];
    ?>
    <h3 style="margin-top: 20px; color: #2E8B57;"><?php echo $titles[$i]; ?></h3> <!-- Updated title color -->
    <table id="myTable<?php echo $i + 1; ?>" class="table">
        <thead>
            <tr>
                <?php
                // Define header based on table index
                if ($i == 0) {
                    echo '<th>Customer Name</th><th>Contact Name</th><th>Country</th><th>City</th><th>Postal Code</th><th>Order ID</th><th>Order Date</th>';
                } elseif ($i == 1) {
                    echo '<th>Customer Name</th><th>Contact Name</th><th>Product Name</th><th>Quantity</th><th>Price</th>';
                } elseif ($i == 2) {
                    echo '<th>Customer Name</th><th>Contact Name</th><th>Country</th><th>Product Name</th><th>Unit</th><th>Price</th><th>Order Date</th><th>Quantity</th>';
                } elseif ($i == 3) {
                    echo '<th>Product ID</th><th>Product Name</th><th>Price</th><th>Quantity</th>';
                } else {
                    echo '<th>Customer Name</th><th>Contact Name</th><th>Country</th>';
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch records for the current table
            $result = fetchRecords($con, $sqlQueries[$i], $start, $recordsPerPage);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    foreach ($row as $key => $value) {
                        if (!is_numeric($key)) { // Only display associative array values
                            echo "<td>" . htmlspecialchars($value) . "</td>";
                        }
                    }
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='" . ($i == 3 ? 4 : 7) . "'>No data found.</td></tr>"; // Adjust colspan based on table
            }
            ?>
        </tbody>
    </table>

    <!-- Pagination for the current table -->
    <div class="pagination" data-table="<?php echo $i + 1; ?>">
        <form action="" method="get" class="pagination-form" style="display:inline;">
            <input type="hidden" name="table" value="<?php echo $i + 1; ?>">
            <input type="hidden" name="page" value="<?php echo max(1, $page - 1); ?>">
            <button type="submit" <?php echo $page <= 1 ? 'disabled' : ''; ?>>Previous</button>
        </form>
        
        <form action="" method="get" class="pagination-form" style="display:inline;">
            <input type="hidden" name="table" value="<?php echo $i + 1; ?>">
            <input type="hidden" name="page" value="<?php echo min(ceil($totalRecords[$i] / $recordsPerPage), $page + 1); ?>">
            <button type="submit" <?php echo $page >= ceil($totalRecords[$i] / $recordsPerPage) ? 'disabled' : ''; ?>>Next</button>
        </form>

        <!-- Export to Excel Button -->
        <form action="export.php" method="get" style="display: inline;">
            <input type="hidden" name="table" value="<?php echo $i + 1; ?>">
            <button type="submit" class="export-button">Export to Excel</button>
        </form>
    </div>
<?php endfor; ?>

</body>
</html>
