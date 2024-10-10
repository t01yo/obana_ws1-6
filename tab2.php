<!DOCTYPE html>
<html lang="en">
<head>
  <title>ws_1-3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    /* Add space above the loaded content */
    #load-here {
      margin-top: 20px; /* Adjust this value for more or less space */
    }

    /* Ensure buttons are responsive */
    .btn {
      flex: 1 1 auto; /* Allow buttons to grow and shrink */
      margin: 5px; /* Add margin for spacing */
    }

    /* Styling for the section that loads content */
    section {
      border: 1px solid #ccc; /* Add border for clarity */
      border-radius: 5px; /* Rounded corners */
      padding: 15px; /* Padding inside the section */
      background-color: #f9f9f9; /* Background color */
    }

    /* Add padding below the container */
    .container {
      padding-bottom: 30px; /* Adjust this value for more or less space */
    }
  </style>

</head>
<body>

<div class="container mt-3">
  <div class="row">
    <div class="col-12 col-md-8 d-flex flex-wrap justify-content-start">
      <button id="n1" type="button" class="btn btn-outline-dark">Number 1</button>
      <button id="n2" type="button" class="btn btn-outline-dark">Number 2</button>
      <button id="n3" type="button" class="btn btn-outline-dark">Number 3</button>
      <button id="n4" type="button" class="btn btn-outline-dark">Number 4</button>
      <button id="n5" type="button" class="btn btn-outline-dark">Number 5</button>
    </div>

    <div class="col-12 col-md-4 text-end">
      <select id="nums" name="nums" class="form-select">
        <option selected>Select number</option>
        <option value="n1">Number 1</option>
        <option value="n2">Number 2</option>
        <option value="n3">Number 3</option>
        <option value="n4">Number 4</option>
        <option value="n5">Number 5</option>
      </select>
    </div>
  </div>

  <section id="load-here"></section> 
</div>

<script type="text/javascript">
  var but1 = document.getElementById('n1');
  var but2 = document.getElementById('n2');
  var but3 = document.getElementById('n3');
  var but4 = document.getElementById('n4');
  var but5 = document.getElementById('n5');
  var butnums = document.getElementById('nums');

  but1.addEventListener('click', function() {
    var contentTitle = "<h3 style='color: #2E8B57;'>Customers who have placed an order</h3>"; // Sea green
    fetch('number1.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: 'contentTitle=' + encodeURIComponent(contentTitle),
    })
    .then(response => response.text())
    .then(data1 => {
      document.getElementById('load-here').innerHTML = data1;
    })
    .catch(error => console.error('Error:', error));
  });

  but2.addEventListener('click', function() {
    var contentTitle = "<h3 style='color: #2E8B57;'>Customers and its ordered products with its price and quantity from the country Sweden</h3>"; // Sea green
    fetch('number2.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: 'contentTitle=' + encodeURIComponent(contentTitle),
    })
    .then(response => response.text())
    .then(data2 => {
      document.getElementById('load-here').innerHTML = data2;
    })
    .catch(error => console.error('Error:', error));
  });

  but3.addEventListener('click', function() {
    var contentTitle = "<h3 style='color: #2E8B57;'>Customers that have ordered Tofu product</h3>"; // Sea green
    fetch('number3.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: 'contentTitle=' + encodeURIComponent(contentTitle),
    })
    .then(response => response.text())
    .then(data3 => {
      document.getElementById('load-here').innerHTML = data3;
    })
    .catch(error => console.error('Error:', error));
  });

  but4.addEventListener('click', function() {
    var contentTitle = "<h3 style='color: #2E8B57;'>Products ordered by customers from Switzerland</h3>"; // Sea green
    fetch('number4.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: 'contentTitle=' + encodeURIComponent(contentTitle),
    })
    .then(response => response.text())
    .then(data4 => {
      document.getElementById('load-here').innerHTML = data4;
    })
    .catch(error => console.error('Error:', error));
  });

  but5.addEventListener('click', function() {
    var contentTitle = "<h3 style='color: #2E8B57;'>Customers who have not placed any orders</h3>"; // Sea green
    fetch('number5.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: 'contentTitle=' + encodeURIComponent(contentTitle),
    })
    .then(response => response.text())
    .then(data5 => {
      document.getElementById('load-here').innerHTML = data5;
    })
    .catch(error => console.error('Error:', error));
  });

  butnums.addEventListener('change', function() {
    var contentTitle = "";
    var nums = butnums.value;
    var dafile = "";
    if (nums == "n1") {
      contentTitle = "<h3 style='color: #2E8B57;'>List of Customers</h3>"; // Sea green
      dafile = "number1.php";
    } else if (nums == "n2") {
      contentTitle = "<h3 style='color: #2E8B57;'>List of Products</h3>"; // Sea green
      dafile = "number2.php";
    } else if (nums == "n3") {
      contentTitle = "<h3 style='color: #2E8B57;'>List of Orders</h3>"; // Sea green
      dafile = "number3.php";
    } else if (nums == "n4") {
      contentTitle = "<h3 style='color: #2E8B57;'>List of Employees</h3>"; // Sea green
      dafile = "number4.php";
    } else if (nums == "n5") {
      contentTitle = "<h3 style='color: #2E8B57;'>List of Services</h3>"; // Sea green
      dafile = "number5.php";
    }

    fetch(dafile, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: 'contentTitle=' + encodeURIComponent(contentTitle),
    })
    .then(response => response.text())
    .then(datas => {
      document.getElementById('load-here').innerHTML = datas;
    })
    .catch(error => console.error('Error:', error));
  });
</script>

<script type="text/javascript">
  function searchin() {
    var searchInput = document.getElementById('myInput');
    var table = document.getElementById('myTable');
    var rows = table.getElementsByTagName('tr');

    searchInput.addEventListener('input', function() {
      var filter = searchInput.value.toLowerCase();

      for (var i = 1; i < rows.length; i++) {
        var row = rows[i];
        var cells = row.getElementsByTagName('td');
        var shouldHide = true;

        for (var j = 0; j < cells.length; j++) {
          var cell = cells[j];
          if (cell.textContent.toLowerCase().indexOf(filter) > -1) {
            shouldHide = false;
            break;
          }
        }

        row.style.display = shouldHide ? 'none' : '';
      }
    });
  }
</script>

<script>
  function sortTable(n) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("myTable");
    switching = true;
    dir = "asc";
    while (switching) {
      switching = false;
      rows = table.rows;
      for (i = 1; i < (rows.length - 1); i++) {
        shouldSwitch = false;
        x = rows[i].getElementsByTagName("TD")[n];
        y = rows[i + 1].getElementsByTagName("TD")[n];
        if (dir == "asc") {
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            shouldSwitch = true;
            break;
          }
        } else if (dir == "desc") {
          if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
            shouldSwitch = true;
            break;
          }
        }
      }
      if (shouldSwitch) {
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        switchcount++;
      } else {
        if (switchcount == 0 && dir == "asc") {
          dir = "desc";
          switching = true;
        }
      }
    }
  }
</script>
</body>
</html>
  