<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to IT Bootcamp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Hero Section */
        .hero {
            background: url('assets/class.jpg') no-repeat center center / cover;
            height: 100vh;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        .hero p {
            font-size: 1.5rem;
            margin: 20px 0;
        }

        .features {
            padding: 50px 20px;
            background-color: #f8f9fa;
        }

        .features .feature {
            text-align: center;
            margin-bottom: 30px;
        }

        .cta {
            padding: 40px 20px;
            background-color: #007bff;
            color: white;
            text-align: center;
        }

        .cta a {
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            background-color: #0056b3;
            border-radius: 5px;
            text-decoration: none;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #007bff;
        }

        .navbar .navbar-brand {
            color: white !important;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa !important;
        }

        /* Certifications Section */
        .certifications {
            background-image: url('assets/class.jpg');
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            padding: 60px 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin: 50px 0;
            color: white; /* Ensure text is white */
        }

        .certifications h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #007bff;
            font-weight: bold;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
        }

        .certifications p {
            font-size: 1.2rem;
            margin-bottom: 20px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .certifications ul {
            list-style-type: none;
            padding: 0;
            font-size: 1.2rem;
            text-align: left;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .certifications ul li {
            margin: 15px 0;
            padding: 8px 0;
            border-bottom: 1px solid #ddd;
            color: white;
        }

        .certifications ul li strong {
            color: #007bff;
        }

        /* Where We Host Section */
        .where-we-host {
            padding: 50px 20px;
            background-color: #f1f1f1;
            text-align: center;
            border-radius: 10px;
            margin: 50px 0;
        }

        .where-we-host h2 {
            font-size: 2.5rem;
            color: #007bff;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .locations {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .location-card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            width: 250px;
            text-align: center;
            margin-bottom: 30px;
        }

        .location-card i {
            font-size: 3rem;
            color: #007bff;
            margin-bottom: 15px;
        }

        .location-card h4 {
            font-size: 1.5rem;
            color: #333;
        }

        .location-card p {
            color: #555;
            font-size: 1.1rem;
        }
    </style>
</head>

<body>
<?php include_once "navbar.php"; ?>

    <!-- Hero Section -->
    <div class="hero" id="hero">
        <h1>Welcome to yoxo6 IT Bootcamp</h1>
        <p>Master in-demand IT skills and prepare for online certifications.</p>
        <a href="bootcamp_registration.php" class="btn btn-primary btn-lg">Register Now</a>
    </div>

    <div class="features">
        <div class="row container mx-auto">
            <div class="col-md-4 feature">
                <img src="assets/ai_image1.jpg" class="img-fluid rounded-circle" alt="Learning" />
                <h3>Hands-on Learning</h3>
                <p>Interactive sessions with real-world projects and challenges.</p>
            </div>
            <div class="col-md-4 feature">
                <img src="assets/ai_image2.jpg" class="img-fluid rounded-circle" alt="Certification" />
                <h3>Industry Certification</h3>
                <p>Prepare and pass online certifications from top IT companies.</p>
            </div>
            <div class="col-md-4 feature">
                <img src="assets/bootcamp.jpg" class="img-fluid rounded-circle" alt="Community" />
                <h3>Global Community</h3>
                <p>Join a network of aspiring IT professionals and mentors.</p>
            </div>
        </div>
    </div>

    <!-- Certifications Section -->
    <div class="certifications" id="certifications">
    <h2>Certifications We Help You Acquire</h2>
    <p>At yoxo6 IT Bootcamp, we teach you the skills required and help you acquire industry-recognized certifications, including:</p>
    <ul>
        <li><strong style="color: #ffffff;">Cisco Certifications:</strong> CCNA, CCNP, CCIE</li>
        <li><strong style="color: #ffffff;">CompTIA Certifications:</strong> A+, Network+, Security+, Cloud+, CySA+</li>
        <li><strong style="color: #ffffff;">AWS Certifications:</strong> Solutions Architect, Developer Associate</li>
        <li><strong style="color: #ffffff;">Microsoft Azure Certifications:</strong> Azure Administrator, Azure Solutions Architect Expert</li>
        <li><strong style="color: #ffffff;">Oracle Certified Professional Java Programmer (OCPJP)</strong></li>
        <li><strong style="color: #ffffff;">Project Management Professional (PMP)</strong></li>
        <li><strong style="color: #ffffff;">PHP Certifications</strong> - Learn and master the most popular server-side scripting language.</li>
        <li><strong style="color: #ffffff;">HTML5 and CSS3 Certifications</strong> - Master modern web development with HTML5 and CSS3.</li>
        <li><strong style="color: #ffffff;">JavaScript Certifications</strong> - Gain expertise in front-end development with JavaScript.</li>
        <li><strong style="color: #ffffff;">Bootstrap Certifications</strong> - Learn the most popular CSS framework for responsive design.</li>
        <li><strong style="color: #ffffff;">Python Certifications</strong> - Become proficient in Python for data science, web development, and automation.</li>
        <li><strong style="color: #ffffff;">SQL Certifications</strong> - Master SQL to manage and query databases efficiently.</li>
        <li><strong style="color: #ffffff;">MySQL Certifications</strong> - Learn how to use MySQL for scalable database management.</li>
        <li><strong style="color: #ffffff;">AI (Artificial Intelligence) Certifications</strong> - Gain knowledge in AI concepts, machine learning, and deep learning to stay ahead in the tech industry.</li>
    </ul>
    <p>We focus on teaching you the required knowledge and preparing you for the certification exams. Join us and get certified!</p>
</div>

    <!-- Where We Host Section -->
    <div class="where-we-host" id="where-we-host">
        <h2>Where We Host Our Bootcamp</h2>
        <div class="locations">
            <div class="location-card">
                <i class="fas fa-building"></i>
                <h4>Sandton</h4>
                <p>Our main location in the heart of Sandton, with easy access to public transport.</p>
            </div>
            <div class="location-card">
                <i class="fas fa-building"></i>
                <h4>Rosebank</h4>
                <p>Conveniently located in Rosebank, a hub for technology and innovation.</p>
            </div>
            <div class="location-card">
                <i class="fas fa-building"></i>
                <h4>Pretoria</h4>
                <p>Our Pretoria campus offers modern classrooms and resources.</p>
            </div>
            <div class="location-card">
                <i class="fas fa-building"></i>
                <h4>Vanderbaijlpark</h4>
                <p>Our Vanderbaijlpark campus offers modern classrooms and resources.</p>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="cta" style="background: linear-gradient(135deg, #0d6efd, #8a2be2, #00bcd4);">
        <h2>Start Your IT Career Today!</h2>
        <p>Register for the yoxo6 IT Bootcamp and build your future in tech.</p>
        <a href="bootcamp_registration.php">Sign Up Now</a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>
