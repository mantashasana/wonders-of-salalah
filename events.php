<?php 
include 'includes/header.php'; 
?>

<!-- Hero Full-width Image -->
<div style="position:relative; width:100%; height:250px; overflow:hidden; border-radius:10px;">

    <!-- Image (reduced height, sleek look) -->
    <img src="images/events.png" 
         alt="Events and Transportation" 
         style="
            width:100%; 
            height:40vh; 
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
        <h1 style="margin:0; font-size:42px; font-weight:bold; color:white">Events and Transportation </h1>
        <p style="margin-top:8px; font-size:22px;">
            Plan your Journey and Join the Celebrations!
        </p>
    </div>

</div>

<div class="container" style="margin-top:30px;">

    <!-- Page Title -->
    <h2 style="text-align:center;">Upcoming Events & Festivals</h2>
    <h5 style="text-align:center; color:#555; margin-top:5px; margin-bottom:30px;">
        Experience the vibrant cultural celebrations and exciting events throughout the year in Salalah
    </h5>

    <?php
    
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourism_website";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch events

$images = [
    'Salalah Khareef Festival'   => 'images/khareeffestival.png',
    'Salalah Marathon'           => 'images/SalalahMarathon.jpg',
    'Frankincense Festival'      => 'images/FrankinsenseFestival.jpg',
    'Traditional Camel Racing'   => 'images/camelracing.png'
];

$sql = "SELECT * FROM Events ORDER BY EventDate ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="card-container">';
    while($row = $result->fetch_assoc()) {
        echo '<div class="card">';
        echo '<img src="' . $images[$row['EventName']] . '" alt="' . $row['EventName'] .
         '" style="width:100%; height:auto; border-radius:6px; margin-bottom:10px;">';       
        echo '<h4>' . $row['EventName'] . '</h4>';
        echo '<p><strong>🗓️ Date:</strong> ' . $row['EventDate'] . '</p>';
        echo '<p><strong>Location:</strong> ' . $row['Location'] . '</p>';
        echo '<p>' . $row['Description'] . '</p>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "<p>No upcoming events found.</p>";
}

$conn->close();
?>
        
    
    <!-- TRANSPORTATION SERVICES -->
    <h2 style="text-align:center; margin-top:50px;">Transportation Services</h2>
    <h5 style="text-align:center; color:#555; margin-top:5px; margin-bottom:30px;">
        Navigate Salalah with ease using our comprehensive transportation options
    </h5>

    <div class="card-container">
        <div class="card">
            <h4>🚕 Taxis</h4>
            <p><strong>Fare:</strong> Starting at 0.300 OMR</p>
            <p>Orange and white taxis available citywide. Metered fares apply. OTaxi and Marhaba apps are available.</p>
        </div>

        <div class="card">
            <h4>🚗 Car Rental</h4>
            <p><strong>Cost:</strong> 15–40 OMR/day</p>
            <p>Car rental agencies at the airport and city center. 4WD recommended for mountains and desert trips.</p>
        </div>

        <div class="card">
            <h4>🚌 Public Buses</h4>
            <p><strong>Fare:</strong> 0.200–0.500 OMR</p>
            <p>Mwasalat buses connect main areas. Air-conditioned and affordable with fixed routes.</p>
        </div>

        <div class="card">
            <h4>🛣️ Inter-city Buses</h4>
            <p><strong>Fare:</strong> Salalah → Muscat: 10–12 OMR</p>
            <p>Comfortable long-distance buses connecting Salalah with Muscat and other major cities.</p>
        </div>

        
  <!-- GETTING AROUND SALALAH -->
  <h2 style="text-align:center; margin-top:50px;">Getting Around Salalah</h2>
    <div style="display:flex; gap:20px; flex-wrap:wrap; margin-top:20px;">
        <!-- Map -->
        <div style="flex:1; min-width:800px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d244123.0363339072!2d54.112425!3d17.051977!3m2!1i1024!2i768!4f13.1!3m
                3!1m2!1s0x3dd3df964481c879%3A0xa5e758c7c82eb314!2sSalalah%2C%20Oman!5e0!3m2!1sen!2sus!4v1763728350601!5m2!1sen!2sus"
                width="100%" 
                height="450"
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <!-- Travel Info -->
        <div style="flex:1; min-width:300px; background:#f9f9f9; padding:20px; border-radius:6px;">
            <h4>Travel Tips</h4>
            <ul>
                <li>Download OTaxi or Marhaba apps for convenient rides</li>
                <li>Negotiate taxi fares if meter is not used</li>
                <li>Book car rentals early during Khareef season</li>
                <li>Keep small OMR notes for bus fares</li>
            </ul>
            <h4>Operating Hours</h4>
            <ul>
                <li>Taxis: 24/7</li>
                <li>Public buses: 6:00 AM – 10:00 PM</li>
                <li>Car rentals: 8:00 AM – 8:00 PM</li>
                <li>Airport transfers: All flight times</li>
            </ul>
            <h4>Popular Routes</h4>
            <ul>
                <li>Airport → City Center: 10–15 minutes</li>
                <li>City → Al Mughsail Beach: 40 minutes</li>
                <li>City → Wadi Darbat: 35 minutes</li>
                <li>Salalah → Muscat: 12 hours by bus</li>
            </ul>
        </div>
    </div>
</div>

<?php 
include 'includes/footer.php'; 
?>