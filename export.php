<?php
include 'connect.php'; // Include the database connection file

// Get the table number from the request
$table = isset($_GET['table']) ? (int)$_GET['table'] : 1;

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

// Fetch the records for the selected table
$sql = $sqlQueries[$table - 1]; // Get the correct SQL query based on the table number
$result = $con->query($sql);

// Create a new PHP Excel file
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="exported_table.xls"');

$output = fopen('php://output', 'w');

// Write the column headers
if ($result->num_rows > 0) {
    $headerDisplayed = false; // Flag to indicate if the header has been displayed
    while ($row = $result->fetch_assoc()) {
        if (!$headerDisplayed) {
            fputcsv($output, array_keys($row), "\t"); // Write headers as tab-separated
            $headerDisplayed = true;
        }
        fputcsv($output, $row, "\t"); // Write data rows as tab-separated
    }
} else {
    echo "No records found.";
}

fclose($output);
exit();
?>
