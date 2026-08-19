<?php 
include 'includes/header.php'; 
?>

<!-- Hero Full-width Image -->
<div style="position:relative; width:100%; height:250px; overflow:hidden; border-radius:10px;">

    <!-- Image (reduced height, sleek look) -->
    <img src="images/history.png" 
         alt="History and Culture" 
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
        <h1 style="margin:0; font-size:42px; font-weight:bold; color:white">History and Culture</h1>
        <p style="margin-top:8px; font-size:22px;">
            Join through Salalah's Rich Heritage
        </p>
    </div>

</div>

<div class="container">
    <!-- Heading and Intro Paragraph -->
    <h2 style="text-align:center; margin-top:30px;">A Land of Ancient Traditions</h2>
    <p style="text-align:center; max-width:800px; margin:10px auto 20px auto;">
        Salalah's history stretches back thousands of years, serving as a crucial hub on the ancient frankincense trade route. Known as the "Land of Frankincense," 
        this region was once the world's primary source of this precious aromatic resin, more valuable than gold in ancient times. 
        The frankincense trees that still grow in the Dhofar mountains are a living connection to this illustrious past.
    </p>
    <p style="text-align:center; max-width:800px; margin:10px auto 20px auto;">
        The city's strategic location made it a vital port for maritime trade between Arabia, Africa, India, and the Far East. 
        Archaeological evidence reveals sophisticated ancient civilizations that thrived here, including the legendary city of Ubar, 
        often called the "Atlantis of the Sands," rediscovered in the early 1990s.
    </p>
    <p style="text-align:center; max-width:800px; margin:10px auto 30px auto;">
        Salalah's cultural identity is deeply rooted in Omani traditions,
         yet it maintains a distinct character influenced by its proximity to Yemen and historical connections with East Africa. 
         The Dhofari people have preserved their unique dialect, customs, and traditional practices through generations.
    </p>

<!-- Cultural Heritage Gallery -->
<h3 style="text-align:center; margin-top:30px;">Cultural Heritage Gallery</h3>

<div style="position:relative; width:50%; margin:20px auto; border-radius:12px; overflow:hidden;">
    <img id="sliderImage" src="images/traditional_arch.jpg" style="width:100%; height:auto; display:block; border-radius:12px;">
    <div id="sliderText" style="position:absolute; bottom:15px; left:15px; max-width:90%; color:white;">
        <h4 id="sliderTitle" style="margin:0; font-size:20px; color:white;">Traditional Architecture</h4>
        <p id="sliderDesc" style="margin:5px 0 0 0; font-size:14px; color:white;">
            Discover the unique architectural heritage of Salalah
        </p>
    </div>
</div>

<!-- Buttons BELOW the image -->
<div style="text-align:center; margin-top:10px;">
    <button onclick="prevImg()">◀ Previous</button>
    <button onclick="nextImg()">Next ▶</button>
</div>

<script>
    const gallery = [
        {
            image: "images/traditional_arch.jpg",
            title: "Traditional Architecture",
            desc: "Discover the unique architectural heritage of Salalah"
        },
        {
            image: "images/Frankincense_Heritage.jpg",
            title: "Frankincense Heritage",
            desc: "The legendary land of frankincense and ancient trade routes"
        },
        {
            image: "images/Cultural_Celebrations.jpg",
            title: "Cultural Celebrations",
            desc: "Experience vibrant traditions and festive celebrations"
        },
        {
            image: "images/Traditional_Markets.jpg",
            title: "Traditional Markets",
            desc: "Explore bustling souqs filled with local treasures"
        }
    ];

    let i = 0;

    function nextImg() {
        i = (i + 1) % gallery.length;
        updateSlider();
    }

    function prevImg() {
        i = (i - 1 + gallery.length) % gallery.length;
        updateSlider();
    }

    function updateSlider() {
        document.getElementById("sliderImage").src = gallery[i].image;
        document.getElementById("sliderTitle").innerText = gallery[i].title;
        document.getElementById("sliderDesc").innerText = gallery[i].desc;
    }
</script>

    <!-- Cultural Highlights as Cards -->
    <h3 style="text-align:center; margin-top:50px;">Cultural Highlights</h3>
    <div class="card-container">
        <div class="card">
            <h4>Historical Background</h4>
            <p>
                Salalah was once a major center of the frankincense trade, connecting Arabia with Africa, India, and the Mediterranean world. 
                The ancient ports of Al-Baleed and Samharam are UNESCO World Heritage sites highlighting Dhofar’s importance in global trade routes.
            </p>
        </div>

        <div class="card">
            <h4>Cultural Heritage of Dhofar</h4>
            <p>
                The culture of Salalah is influenced by African, Yemeni, and Indian traditions. Dhofaris are known for hospitality, traditional songs, 
                folklore, and distinctive clothing. Many speak the ancient South Arabian language “Jebbali” (Shehri).
            </p>
        </div>

        <div class="card">
            <h4>Traditional Customs</h4>
            <p>
                Dhofar is famous for mountain tribes, camel herding, and traditional dances like “Bar’a” and “Al-Medem.” 
                Incense burning, especially frankincense, plays a major role in daily life.
            </p>
        </div>

        <div class="card">
            <h4>Dhofari Architecture</h4>
            <p>
                Salalah’s architecture includes white coastal houses, stone-built mountain homes, and restored forts such as Taqah Castle and Al-Baleed ruins. 
                Traditional homes feature carved wooden doors and open courtyards.
            </p>
        </div>
    </div>

    <!-- Experience Salalah's Heritage (Video Section) -->
    <h3 style="text-align:center; margin-top:50px;">Experience Salalah's Heritage</h3>
    <h6 style="text-align:center; margin-bottom:20px;">Watch this video to immerse yourself in the rich cultural traditions of Salalah</h6>
    <iframe 
        width="100%"
        height="350"
        src="https://www.youtube.com/embed/ZaCzkHkgrlc?si=ArN5pHRfcdAfS0BU" 
        title="Salalah Culture Video" 
        frameborder="0" 
        allowfullscreen>
    </iframe>

    <!-- UNESCO Heritage Sites as Cards -->
    <h3 style="text-align:center; margin-top:50px;">UNESCO Heritage Sites</h3>
    <div class="card-container">
        <div class="card">
            <img src="images/albaleed.jpg" alt="Al Baleed" style="width:100%; height:auto; border-radius:6px; margin-bottom:10px;">
            <h4>Al Baleed Archaeological Park</h4>
            <p>Ancient port city ruins showcasing the frankincense trade era with museum exhibits and archaeological remains.</p>
        </div>

        <div class="card">
            <img src="images/wadidawkah.jpg" alt="Wadi Dawkah" style="width:100%; height:auto; border-radius:6px; margin-bottom:10px;">
            <h4>Wadi Dawkah</h4>
            <p>Protected frankincense tree reserve with thousands of ancient trees, part of the Frankincense Trail UNESCO site.</p>
        </div>

        <div class="card">
            <img src="images/sumhuram.jpg" alt="Sumhuram" style="width:100%; height:auto; border-radius:6px; margin-bottom:10px;">
            <h4>Sumhuram (Khor Rori)</h4>
            <p>Ancient fortified city and port dating back to the 3rd century BCE, crucial to the frankincense maritime trade.</p>
        </div>
    </div>

<?php 
include 'includes/footer.php'; 
?> 



