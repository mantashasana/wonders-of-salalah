<?php 
include 'includes/header.php'; 

// Database connection
$servername = "localhost";
$username = "root"; // adjust if needed
$password = "";     // adjust if needed
$dbname = "tourism_website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all attractions
$sql = "SELECT * FROM Attractions";
$result = $conn->query($sql);
?>

<!-- Hero Full-width Image -->
<div style="position:relative; width:100%; height:250px; overflow:hidden; border-radius:10px;">
    <!-- Image (reduced height, sleek look) -->
    <img src="images/attractions.jpg" 
         alt="Tourist Attractions" 
         style="
            width:100%; 
            height:55vh; 
            object-fit:cover;
            filter:brightness(60%); /* less transparency */
            position: relative;
         ">
    <!-- Text on image -->
    <div style="
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%, -50%);
        text-align:center;
        color:white;
    ">
        <h1 style="margin:0; font-size:42px; font-weight:bold; color:white">Tourist Attractions</h1>
        <p style="margin-top:8px; font-size:22px;">
            Discover Salalah's most beautiful destinations
        </p>
    </div>

</div>

<div class="container">
    <!-- Heading and Intro Paragraph -->
    <h2>Famous Tourist Destinations</h2>
    <p style="text-align:center; max-width:800px; margin:0 auto 30px auto;">
        Explore the breathtaking natural wonders, historical sites, and cultural landmarks that make Salalah a unique destination.
    </p>

    <!-- Attractions as Cards -->
    <div class="card-container">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<h3>' . $row['Name'] . '</h3>';
                echo '<img src="images/' . basename($row['ImagePath']) . '" alt="' . $row['Name'] . '">';
                echo '<p>' . $row['Description'] . '</p>';
                echo '<p><strong>Location:</strong> ' . $row['Location'] . '</p>'; // <-- Paste here
                echo '</div>';
            }
        } else {
            echo "<p>No attractions found.</p>";
        }
        ?>
    </div>

    <div style="margin-top:50px;">
    <h2 style="text-align:center; color: darkgreen;">5-Day Itinerary</h2>
    <h5 style="color:black; text-align: center;">Explore Salalah's history, culture, nature, and modern charm through this curated journey.</h5>

    <?php
    // Fetch all itinerary entries joined with attraction names
    $sqlItinerary = "
        SELECT i.DayNumber, GROUP_CONCAT(a.Name SEPARATOR ', ') AS Locations,
               GROUP_CONCAT(i.Notes SEPARATOR ' | ') AS Activities
        FROM Itinerary i
        JOIN Attractions a ON i.AttractionID = a.AttractionID
        GROUP BY i.DayNumber
        ORDER BY i.DayNumber
    ";

    $itineraryResult = $conn->query($sqlItinerary);

    if ($itineraryResult->num_rows > 0) {
        echo '<table border="2" cellspacing="2" cellpadding="20" style="width:70%; border-collapse:collapse;
         margin:20px auto; font-family: Arial, sans-serif; text-align:center; box-shadow:0 4px 10px rgba(0,0,0,0.1);">';
        echo '<tr style="background-color:#1f4c22; color:white; text-transform:uppercase;">';
        echo '<th style="text-align:center;">DAY</th>';
        echo '<th>LOCATIONS</th>';
        echo '<th>ACTIVITIES</th>';
        echo '</tr>';

        $rowIndex = 0; // for alternating row colors
        while($row = $itineraryResult->fetch_assoc()) {
            $bgColor = ($rowIndex % 2 == 0) ? '#f9f9f9' : '#ffffff';
            echo '<tr style="background-color:' . $bgColor . ';">';
            echo '<td style="text-align:center; padding:20px;">' . $row['DayNumber'] . '</td>';
            echo '<td style="padding:20px;">' . $row['Locations'] . '</td>';
            echo '<td style="padding:20px;">' . $row['Activities'] . '</td>';
            echo '</tr>';
            $rowIndex++;
        }

        echo '</table>';
    } else {
        echo "<p style='text-align:center;'>No itinerary found.</p>";
    }
    ?>
</div>

<?php 
$conn->close();
include 'includes/footer.php'; 
?>


