<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obaña</title>
    <link rel="stylesheet" href="tabs.css"> <!-- Your existing CSS file -->
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h2 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #4B0082;
        }

        .name-and-photo {
            display: flex;
            align-items: center;
        }

        .name {
            margin-right: 10px;
            color: #4B0082;
            font-weight: bold;
            font-size: 18px;
        }

        .profile-photo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            cursor: pointer;
            margin-left: 10px; /* Add some spacing between images */
        }

        /* Styles for the card */
        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 3000px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
        }

        .card p {
            margin: 10px 0;
            color: #4B0082;
            font-size: 16px;
        }

        /* Centering GIF */
        .centered-gif {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }

        .centered-gif img {
            max-width: 100%;
            height: auto;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .modal-content {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .modal-content img {
            width: 20%;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
            cursor: pointer;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 25px;
            color: white;
            font-size: 35px;
            cursor: pointer;
        }

        .modal-close-button {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #4B0082;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Footer styles */
        footer {
            font-family: Arial, sans-serif;
            background-color: #151B54; /* Dark blue */
            color: white;
            text-align: center;
            padding: 3px;
            padding-top: 10px;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            font-size: 14px;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<h2>
    Worksheets
    <div class="name-and-photo">
        <span class="name">OBAÑA, ALCEL MARIE O.</span>
        <!-- Trigger the modal -->
        <img src="assets/img/belat.gif" alt="Profile Photo" class="profile-photo" id="profileImage">
    </div>
</h2>

<!-- Modal -->
<div id="myModal" class="modal">
    <span class="close" id="closeModal">&times;</span>
    <div class="modal-content" id="modalImages">
        <img src="belat.gif" alt="Photo 1">
        <img src="assets/img/belat2.jpg" alt="Photo 2">
        <img src="assets/img/belat3.jpg" alt="Photo 3">
        <img src="assets/img/belat4.jpg" alt="Photo 4">
        <img src="assets/img/belat5.jpg" alt="Photo 5">
        <img src="assets/img/belat6.jpg" alt="Photo 6">
    </div>
    <button class="modal-close-button" id="modalCloseButton">Close</button> <!-- Close button in modal -->
</div>

<!-- Tab Navigation -->
<div class="tab">
    <button class="tablinks" onclick="openTab(event, 'Tab1')">Worksheet 1-1</button>
    <button class="tablinks" onclick="openTab(event, 'Tab2')">Worksheet 1-3</button>
    <button class="tablinks" onclick="openTab(event, 'Tab3')">Worksheet 1-4</button>
    <button class="tablinks" onclick="openTab(event, 'Tab4')">Worksheet 1-5</button>
</div>

<div class="card">
    <h3>Advanced Web Development: Back End</h3>
</div>

<!-- Tab 1 Content -->
<div id="Tab1" class="tab-content">
    <?php 
        include 'tab1.php';
    ?> <!-- Load tab1.php content here -->
</div>

<!-- Tab 2 Content -->
<div id="Tab2" class="tab-content">
    <?php include 'tab2.php'; ?> <!-- Load tab2.php content here -->
</div>

<!-- Tab 3 Content -->
<div id="Tab3" class="tab-content">
    <?php include 'tab3.php'; ?> <!-- Load tab3.php content here -->
</div>

<div id="Tab4" class="tab-content">
    <?php include 'tab4.php'; ?> <!-- Load tab4.php content here -->
</div>

<!-- Centered GIF -->
<div class="centered-gif">
    <img src="cat.gif" alt="Cat GIF" width="400" height="100">
</div>

<!-- JavaScript for Switching Tabs and Modal -->
<script>
    function openTab(evt, tabName) {
        // Hide all tab contents
        const tabcontent = document.getElementsByClassName("tab-content");
        for (let i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        
        // Remove the active class from all tab links
        const tablinks = document.getElementsByClassName("tablinks");
        for (let i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Display the current tab and add an "active" class to the button
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Modal functionality
    const modal = document.getElementById("myModal");
    const closeModal = document.getElementById("closeModal");
    const img = document.getElementById("profileImage");
    const modalCloseButton = document.getElementById("modalCloseButton");

    img.onclick = function() {
        modal.style.display = "block"; // Show the modal
    }

    closeModal.onclick = function() {
        modal.style.display = "none"; // Close the modal when the x button is clicked
    }

    modalCloseButton.onclick = function() {
        modal.style.display = "none"; // Close the modal when the Close button is clicked
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none"; // Close the modal if clicked outside of it
        }
    }
</script>

<!-- Footer -->
<footer>
    <h6>Instructor: Jim Mar Delos Reyes</h6>
</footer>

</body>
</html>
