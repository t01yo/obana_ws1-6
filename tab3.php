<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Charts</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Add space between charts */
        .chart-container {
            margin-bottom: 20px; /* Adjust this value for more or less space */
        }
    </style>
</head>
<body>

<div class="chart-container">
    <canvas id="customer-chart" width="200" height="100"></canvas>
</div>

<div class="chart-container">
    <canvas id="product-chart" width="200" height="100"></canvas> 
</div>

<div class="chart-container">
    <canvas id="myAreaChart" width="200" height="100"></canvas>
</div>

<script>
    // Customer Chart (Bar Chart)
    const customerCtx = document.getElementById('customer-chart');
    new Chart(customerCtx, {
        type: 'bar',
        data: {
            labels: [
                'Ernst Handel', 'QUICK-Stop', 'Save-a-lot Markets', 'Rattlesnake Canyon Grocery',
                'Hungry Owl All-Night Grocers', 'Frankenversand', 'Mère Paillarde', 
                'Blondel père et fils', 'Bottom-Dollar Markets', 'Seven Seas Imports'
            ],
            datasets: [{
                label: 'Total Products Ordered',
                data: [1418, 749, 667, 573, 565, 553, 422, 367, 350, 321],
                backgroundColor: 'rgba(75, 192, 192, 0.6)', // Teal
                borderColor: 'rgba(75, 192, 192, 1)', // Dark Teal
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Product Orders Chart (Column Chart)
    const productCtx = document.getElementById('product-chart');
    new Chart(productCtx, {
        type: 'bar', // Changed to 'bar' for column chart
        data: {
            labels: [
                'Camembert Pierrot', 
                'Raclette Courdavault', 
                'Chang', 
                'Pavlova', 
                'Flëtemysost', 
                'Alice Mutton', 
                'Tarte au sucre', 
                'Geitost', 
                'Tourtière', 
                'Steeleye Stout'
            ],
            datasets: [{
                label: 'Total Orders',
                data: [430, 346, 341, 338, 336, 331, 325, 316, 280, 279],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)', // Red
                    'rgba(255, 159, 64, 0.6)', // Orange
                    'rgba(255, 205, 86, 0.6)', // Yellow
                    'rgba(75, 192, 192, 0.6)', // Teal
                    'rgba(54, 162, 235, 0.6)', // Blue
                    'rgba(153, 102, 255, 0.6)', // Purple
                    'rgba(201, 203, 207, 0.6)', // Grey
                    'rgba(124, 252, 0, 0.6)', // Green
                    'rgba(0, 0, 0, 0.6)', // Black
                    'rgba(255, 20, 147, 0.6)' // Deep Pink
                ],
                borderColor: 'rgba(255, 255, 255, 1)',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Total Product Orders (Column Chart)' // Updated title
                }
            }
        }
    });

    // Yearly Orders Percentage Chart (Area Chart)
    const areaCtx = document.getElementById('myAreaChart');
    
    new Chart(areaCtx, {
        type: 'line',
        data: {
            labels: ['1996', '1997'],
            datasets: [{
                label: 'Total Orders (%)',
                data: [77.55, 22.45], // Percentages
                backgroundColor: 'rgba(255, 182, 193, 0.4)', // Baby Pink Fill
                borderColor: 'rgba(255, 182, 193, 1)', // Darker Baby Pink Border
                borderWidth: 2,
                fill: true // Fill the area under the line
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Yearly Orders Percentage (Area Chart)'
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        // Format y-axis to show percentage
                        callback: function(value) {
                            return value + '%';
                        }
                    }
                }
            }
        }
    });
    </script>

</body>
</html>
