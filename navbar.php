<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(135deg, #0d6efd, #8a2be2, #00bcd4);">
    <div class="container">
        <a class="navbar-brand" href="index.php"><b>yoxo6</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#certifications">Certifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hero">Hero</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#where-we-host">Locations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- CSS Styles for Navbar -->
<style>
    /* Styling for Navbar */
    nav.navbar {
        background-color: #007bff; /* Blue background */
        padding: 10px 0;
    }
    
    .navbar-brand {
        color: #fff !important; /* White text for brand */
        font-size: 1.5rem;
    }

    .navbar-nav .nav-item .nav-link {
        color: #fff !important; /* White text for links */
        font-size: 1.1rem;
        padding: 8px 15px;
        transition: color 0.3s ease;
    }

    .navbar-nav .nav-item .nav-link:hover {
        color: #ffcc00 !important; /* Gold color on hover */
    }

    /* Mobile responsive adjustments */
    .navbar-toggler {
        border-color: #fff; /* White toggle icon */
    }

    .navbar-toggler-icon {
        background-color: #fff; /* White toggle icon */
    }

    @media (max-width: 991px) {
        .navbar-nav {
            text-align: center;
        }

        .navbar-nav .nav-item {
            margin-bottom: 10px;
        }
    }
</style>
