<?php $pageTitle = 'Contact Us'; ?>
<?php include 'includes/header.php'; ?>

<main>

<!-- Hero Full-width Image -->
<div style="position:relative; width:100%; height:250px; overflow:hidden; border-radius:10px;">

    <!-- Image (reduced height, sleek look) -->
    <img src="images/contact.png" 
         alt="Contact Us" 
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
        <h1 style="margin:0; font-size:42px; font-weight:bold; color:white">Contact Us </h1>
        <p style="margin-top:8px; font-size:22px;">
        We're Here to Help Plan Your Perfect Journey
        </p>
    </div>

</div>

<section class="contact-hero">
    <h1> Send Us a Message! </h1>
    <p class="contact-subtitle">We’d love to hear from you! Reach out to us with any questions or feedback.</p>
</section>

    <section class="contact-form-section">
        <?php if (isset($_GET['success'])): ?>
            <p class="success-message">Your message has been sent successfully!</p>
        <?php elseif (isset($_GET['error'])): ?>
            <p class="error-message">An error occurred. Please try again.</p>
        <?php endif; ?>

    <form action="php/contact_handler.php" method="POST" class="contact-form">
    
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="subject">Subject:</label>
    <select id="subject" name="subject" required
        style="width:100%; padding:12px; font-size:16px; height:45px; border-radius:4px;">
    <option value="" disabled selected>Select a subject</option>
    <option value="General Inquiry">General Inquiry</option>
    <option value="Tour Booking">Tour Booking</option>
    <option value="Feedback">Feedback</option>
    </select>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="5" placeholder="Hi! How can we help you..." required></textarea>

    <button type="submit">Send</button>
    </form>    
        
    </section>

    <!-- FAQ SECTION -->
    <section class="faq-section" style="margin-top:50px;">
        <h2>Frequently Asked Questions</h2>

        <div class="faq-item" style="margin-top:20px;">
            <h4>What is the best time to visit Salalah?</h4>
            <p>The Khareef season (June to September) is the most popular time when Salalah transforms into a lush green paradise. 
                However, winter months (November to March) offer pleasant weather perfect for beach activities and outdoor exploration.</p>
        </div>

        <div class="faq-item" style="margin-top:20px;">
            <h4>Do I need a visa to visit Oman?</h4>
            <p>Most nationalities can obtain an e-visa online before arrival or visa on arrival at Salalah International Airport. 
                Check with the Royal Oman Police website for specific requirements based on your nationality.</p>
        </div>

        <div class="faq-item" style="margin-top:20px;">
            <h4>What currency is used in Salalah?</h4>
            <p>The official currency is the Omani Rial (OMR). Credit cards are widely accepted in hotels, restaurants, and shopping centers. 
                ATMs are readily available throughout the city.</p>
        </div>

        <div class="faq-item" style="margin-top:20px;">
            <h4>Is Salalah safe for tourists?</h4>
            <p>Yes, Salalah and Oman in general are very safe destinations with low crime rates. 
                The local people are known for their hospitality and friendliness towards visitors. Standard travel precautions are always recommended.</p>
        </div>

        <div class="faq-item" style="margin-top:20px;">
            <h4>What should I wear in Salalah?</h4>
            <p>Modest dress is recommended out of respect for local culture. Light, breathable clothing is suitable for the warm climate. 
                When visiting religious sites, ensure shoulders and knees are covered. Beachwear should be reserved for beach areas.</p>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>


