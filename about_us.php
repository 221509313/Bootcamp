<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - IT Bootcamp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 800px;
            margin-top: 50px;
        }
        .about-text {
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 30px;
        }
        .about-image {
            width: 100%;
            height: auto;
            margin-bottom: 30px;
        }
        .highlight {
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php include_once "navbar.php"; ?>
    <div class="container">
        <h2 class="text-center text-primary">About Us</h2>
        <p class="text-center about-text">
            At <span class="highlight">IT Bootcamp</span>, we believe that university education alone is not enough to make you the best candidate for a job in today's competitive job market. 
            While universities provide a solid foundation, they don't always offer the industry-specific skills that employers are looking for.
        </p>
        
        <p class="text-center about-text">
            That's where we come in! Our bootcamp helps graduates and individuals enhance their skills by providing online certifications and hands-on industry experience. 
            With our comprehensive training programs in technologies like <span class="highlight">JavaScript, PHP, Java, SQL, HTML, CSS, A+ and more</span>, we prepare you for the real-world challenges you’ll face in the workplace.
        </p>

        <p class="text-center about-text">
            Our goal is to bridge the gap between academic knowledge and practical, job-ready skills. By the end of our bootcamp, you'll have the confidence and experience needed to stand out to employers, 
            making you a valuable asset in the tech industry.
        </p>

        <div class="text-center">
            <img src="assets/class.jpg" alt="Class Image" class="about-image">
        </div>

        <p class="text-center about-text">
            Whether you're a recent graduate or someone looking to upskill or someone who dont know anything at all, our program offers flexible learning opportunities to help you gain the knowledge and credentials that employers value most. 
            Start your journey today and unlock the door to endless career opportunities in the tech field!
        </p>

        <div class="text-center">
            <a href="bootcamp_registration.php"  class="btn btn-primary">Sign Up Now</a>
        </div>
    </div>
    <?php include_once "footer.php"; ?>
</body>
</html>
