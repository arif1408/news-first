<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
        <meta name="description" content="">
        <title>News Portal Website</title>        
		
        <link rel="icon" type="image/png" href="{{ asset('uploads/favicon.png') }}">

        <!-- All CSS -->
        <link rel="stylesheet" href="{{ asset('dist-front/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist-front/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('dist-front/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist-front/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('dist-front/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist-front/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist-front/css/select2-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist-front/css/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist-front/css/spacing.css') }}">
        <link rel="stylesheet" href="{{ asset('dist-front/css/font_awesome_5_free.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist-front/css/style.css') }}">
        
        <!-- All Javascripts -->
        <script src="{{ asset('dist-front/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('dist-front/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('dist-front/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('dist-front/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('dist-front/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('dist-front/js/wow.min.js') }}"></script>
        <script src="{{ asset('dist-front/js/select2.full.js') }}"></script>
        <script src="{{ asset('dist-front/js/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('dist-front/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('dist-front/js/acmeticker.js') }}"></script>

        <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700&display=swap" rel="stylesheet">

        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6212352ed76fda0a"></script>        
        
        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84213520-6"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-84213520-6');
        </script>

    </head>
    <body>
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li class="today-text">Today: January 20, 2022</li>
                            <li class="email-text">contact@arefindev.com</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="right">
                            <li class="menu"><a href="faq.html">FAQ</a></li>
                            <li class="menu"><a href="about.html">About</a></li>
                            <li class="menu"><a href="contact.html">Contact</a></li>
                            <li class="menu"><a href="login.html">Login</a></li>
                            <li>
                                <div class="language-switch">
                                    <select name="">
                                        <option value="">English</option>
                                        <option value="">Hindi</option>
                                        <option value="">Arabic</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="heading-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center">
                        <div class="logo">
                            <a href="index.html">
                                <img src="uploads/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="ad-section-1">
                            <a href=""><img src="uploads/ad-1.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="website-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Sports
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Football</a></li>
                                            <li><a class="dropdown-item" href="#">Cricket</a></li>
                                            <li><a class="dropdown-item" href="#">Baseball</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        National
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Dhaka</a></li>
                                            <li><a class="dropdown-item" href="#">Khulna</a></li>
                                            <li><a class="dropdown-item" href="#">Sylhet</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Lifestyle
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Insurance</a></li>
                                            <li><a class="dropdown-item" href="#">Working from Home</a></li>
                                            <li><a class="dropdown-item" href="#">Habits</a></li>
                                            <li><a class="dropdown-item" href="#">Entrepreneur</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Technology
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Computer</a></li>
                                            <li><a class="dropdown-item" href="#">Mobile</a></li>
                                            <li><a class="dropdown-item" href="#">Programming</a></li>
                                            <li><a class="dropdown-item" href="#">Freelancing</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Job List
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Government</a></li>
                                            <li><a class="dropdown-item" href="#">Non Government</a></li>
                                            <li><a class="dropdown-item" href="#">Corporate</a></li>
                                            <li><a class="dropdown-item" href="#">Accounting</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Health
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Parenting</a></li>
                                            <li><a class="dropdown-item" href="#">Diseases</a></li>
                                            <li><a class="dropdown-item" href="#">Diet</a></li>
                                            <li><a class="dropdown-item" href="#">Weight Loss</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Travel
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Adventures</a></li>
                                            <li><a class="dropdown-item" href="#">Explore</a></li>
                                            <li><a class="dropdown-item" href="#">Postcards</a></li>
                                            <li><a class="dropdown-item" href="#">Taste</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Gallery
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="photo-gallery.html">Photo Gallery</a></li>
                                            <li><a class="dropdown-item" href="video-gallery.html">Video Gallery</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>       


        
        <div class="news-ticker-item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="acme-news-ticker">
                            <div class="acme-news-ticker-label">Latest News</div>
                            <div class="acme-news-ticker-box">
                                <ul class="my-news-ticker">
                                    <li><a href="">Helicopter crashes into waves off crowded Miami beach</a></li>
                                    <li><a href="">Canadian police appear to end protesters' siege of Ottawa</a></li>
                                    <li><a href="">Speedskating champ chooses sportsmanship over Olympic medal</a></li>
                                    <li><a href="">USDA head: US farmers to help if Ukraine exports threatened</a></li>
                                    <li><a href="">Actor Lindsey Pearlman found dead after going missing in LA</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="home-main">
            <div class="container">
                <div class="row g-2">
                    <div class="col-lg-8 col-md-12 left">
                        <div class="inner">
                            <div class="photo">
                                <div class="bg"></div>
                                <img src="uploads/n1.jpg" alt="">
                                <div class="text">
                                    <div class="text-inner">
                                        <div class="category">
                                            <span class="badge bg-success badge-sm">Politics</span>
                                        </div>
                                        <h2><a href="">Top five ranked teams in world lined up to take part in competition</a></h2>
                                        <div class="date-user">
                                            <div class="user">
                                                <a href="">Paul David</a>
                                            </div>
                                            <div class="date">
                                                <a href="">10 Jan, 2022</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="inner inner-right">
                            <div class="photo">
                                <div class="bg"></div>
                                <img src="uploads/n2.jpg" alt="">
                                <div class="text">
                                    <div class="text-inner">
                                        <div class="category">
                                            <span class="badge bg-success badge-sm">Politics</span>
                                        </div>
                                        <h2><a href="">Top five ranked teams in world lined up to take part in competition</a></h2>
                                        <div class="date-user">
                                            <div class="user">
                                                <a href="">Paul David</a>
                                            </div>
                                            <div class="date">
                                                <a href="">10 Jan, 2022</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inner inner-right">
                            <div class="photo">
                                <div class="bg"></div>
                                <img src="uploads/n3.jpg" alt="">
                                <div class="text">
                                    <div class="text-inner">
                                        <div class="category">
                                            <span class="badge bg-success badge-sm">Politics</span>
                                        </div>
                                        <h2><a href="">Top five ranked teams in world lined up to take part in competition</a></h2>
                                        <div class="date-user">
                                            <div class="user">
                                                <a href="">Paul David</a>
                                            </div>
                                            <div class="date">
                                                <a href="">10 Jan, 2022</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="ad-section-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href=""><img src="uploads/ad-1.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="search-section">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" name="" class="form-control" placeholder="Title or Description">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="" class="form-select">
                                    <option value="">Select Category</option>
                                    <option value="">Sports</option>
                                    <option value="">National</option>
                                    <option value="">Lifestyle</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="" class="form-select">
                                    <option value="">Select SubCategory</option>
                                    <option value="">Football</option>
                                    <option value="">Cricket</option>
                                    <option value="">Baseball</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="home-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6 left-col">
                        <div class="left">
        
                            <!-- News Of Category -->
                            <div class="news-total-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <h2>Sports</h2>
                                    </div>
                                    <div class="col-lg-6 col-md-12 see-all">
                                        <a href="" class="btn btn-primary btn-sm">See All News</a>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="bar"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="left-side">
                                            <div class="photo">
                                                <img src="uploads/n6.jpg" alt="">
                                            </div>
                                            <div class="category">
                                                <span class="badge bg-success">International</span>
                                            </div>
                                            <h3><a href="">Haaland scores before going off injured in Dortmund win and it is very real</a></h3>
                                            <div class="date-user">
                                                <div class="user">
                                                    <a href="">Paul David</a>
                                                </div>
                                                <div class="date">
                                                    <a href="">10 Jan, 2022</a>
                                                </div>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, omnis signiferumque in mei, mei ex enim concludaturque. Senserit salutandi euripidis no per, modus maiestatis scribentur est an. Cum ei doctus oporteat contentiones, vix ...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="right-side">
                                            <div class="right-side-item">
                                                <div class="left">
                                                    <img src="uploads/n5.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">International</span>
                                                    </div>
                                                    <h2><a href="">Remote island nation in Pacific under lockdown for first time</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-side-item">
                                                <div class="left">
                                                    <img src="uploads/n5.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">International</span>
                                                    </div>
                                                    <h2><a href="">Remote island nation in Pacific under lockdown for first time</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-side-item">
                                                <div class="left">
                                                    <img src="uploads/n5.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">International</span>
                                                    </div>
                                                    <h2><a href="">Remote island nation in Pacific under lockdown for first time</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-side-item">
                                                <div class="left">
                                                    <img src="uploads/n5.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">International</span>
                                                    </div>
                                                    <h2><a href="">Remote island nation in Pacific under lockdown for first time</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- // News Of Category -->
        
        
        
                            <!-- News Of Category -->
                            <div class="news-total-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <h2>Sports</h2>
                                    </div>
                                    <div class="col-lg-6 col-md-12 see-all">
                                        <a href="" class="btn btn-primary btn-sm">See All News</a>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="bar"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="left-side">
                                            <div class="photo">
                                                <img src="uploads/n6.jpg" alt="">
                                            </div>
                                            <div class="category">
                                                <span class="badge bg-success">International</span>
                                            </div>
                                            <h3><a href="">Haaland scores before going off injured in Dortmund win and it is very real</a></h3>
                                            <div class="date-user">
                                                <div class="user">
                                                    <a href="">Paul David</a>
                                                </div>
                                                <div class="date">
                                                    <a href="">10 Jan, 2022</a>
                                                </div>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, omnis signiferumque in mei, mei ex enim concludaturque. Senserit salutandi euripidis no per, modus maiestatis scribentur est an. Cum ei doctus oporteat contentiones, vix ...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="right-side">
                                            <div class="right-side-item">
                                                <div class="left">
                                                    <img src="uploads/n5.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">International</span>
                                                    </div>
                                                    <h2><a href="">Remote island nation in Pacific under lockdown for first time</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-side-item">
                                                <div class="left">
                                                    <img src="uploads/n5.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">International</span>
                                                    </div>
                                                    <h2><a href="">Remote island nation in Pacific under lockdown for first time</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-side-item">
                                                <div class="left">
                                                    <img src="uploads/n5.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">International</span>
                                                    </div>
                                                    <h2><a href="">Remote island nation in Pacific under lockdown for first time</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-side-item">
                                                <div class="left">
                                                    <img src="uploads/n5.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">International</span>
                                                    </div>
                                                    <h2><a href="">Remote island nation in Pacific under lockdown for first time</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- // News Of Category -->
        
        
        
        
        
        
                            <!-- News Of Category -->
                            <div class="news-total-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <h2>Sports</h2>
                                    </div>
                                    <div class="col-lg-6 col-md-12 see-all">
                                        <a href="" class="btn btn-primary btn-sm">See All News</a>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="bar"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="left-side">
                                            <div class="photo">
                                                <img src="uploads/n6.jpg" alt="">
                                            </div>
                                            <div class="category">
                                                <span class="badge bg-success">International</span>
                                            </div>
                                            <h3><a href="">Haaland scores before going off injured in Dortmund win and it is very real</a></h3>
                                            <div class="date-user">
                                                <div class="user">
                                                    <a href="">Paul David</a>
                                                </div>
                                                <div class="date">
                                                    <a href="">10 Jan, 2022</a>
                                                </div>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, omnis signiferumque in mei, mei ex enim concludaturque. Senserit salutandi euripidis no per, modus maiestatis scribentur est an. Cum ei doctus oporteat contentiones, vix ...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="right-side">
                                            <div class="right-side-item">
                                                <div class="left">
                                                    <img src="uploads/n5.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">International</span>
                                                    </div>
                                                    <h2><a href="">Remote island nation in Pacific under lockdown for first time</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-side-item">
                                                <div class="left">
                                                    <img src="uploads/n5.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">International</span>
                                                    </div>
                                                    <h2><a href="">Remote island nation in Pacific under lockdown for first time</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-side-item">
                                                <div class="left">
                                                    <img src="uploads/n5.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">International</span>
                                                    </div>
                                                    <h2><a href="">Remote island nation in Pacific under lockdown for first time</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-side-item">
                                                <div class="left">
                                                    <img src="uploads/n5.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">International</span>
                                                    </div>
                                                    <h2><a href="">Remote island nation in Pacific under lockdown for first time</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- // News Of Category -->
        
        
        
        
        
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sidebar-col">
                        <div class="sidebar">

                            <div class="widget">
                                <div class="ad-sidebar">
                                    <a href=""><img src="uploads/ad-3.png" alt=""></a>
                                </div>
                            </div>
                        
                            <div class="widget">
                                <div class="tag-heading">
                                    <h2>Tags</h2>
                                </div>
                                <div class="tag">
                                    <div class="tag-item">
                                        <a href=""><span class="badge bg-secondary">business</span></a>
                                    </div>
                                    <div class="tag-item">
                                        <a href=""><span class="badge bg-secondary">river</span></a>
                                    </div>
                                    <div class="tag-item">
                                        <a href=""><span class="badge bg-secondary">politics</span></a>
                                    </div>
                                    <div class="tag-item">
                                        <a href=""><span class="badge bg-secondary">google</span></a>
                                    </div>
                                    <div class="tag-item">
                                        <a href=""><span class="badge bg-secondary">tree</span></a>
                                    </div>
                                    <div class="tag-item">
                                        <a href=""><span class="badge bg-secondary">airplane</span></a>
                                    </div>
                                    <div class="tag-item">
                                        <a href=""><span class="badge bg-secondary">tiles</span></a>
                                    </div>
                                    <div class="tag-item">
                                        <a href=""><span class="badge bg-secondary">recent</span></a>
                                    </div>
                                    <div class="tag-item">
                                        <a href=""><span class="badge bg-secondary">brand</span></a>
                                    </div>
                                    <div class="tag-item">
                                        <a href=""><span class="badge bg-secondary">election</span></a>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="widget">
                                <div class="archive-heading">
                                    <h2>Archive</h2>
                                </div>
                                <div class="archive">
                                    <select name="" class="form-select">
                                        <option value="">Select Month</option>
                                        <option value="">February 2022</option>
                                        <option value="">January 2022</option>
                                        <option value="">December 2021</option>
                                        <option value="">November 2021</option>
                                        <option value="">October 2021</option>
                                        <option value="">September 2021</option>
                                        <option value="">August 2021</option>
                                        <option value="">July 2021</option>
                                    </select>
                                </div>
                            </div>
                        
                            <div class="widget">
                                <div class="live-channel">
                                    <div class="live-channel-heading">
                                        <h2>Live Channel - RT News</h2>
                                    </div>
                                    <div class="live-channel-item">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/V0I5eglJMRI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="widget">
                                <div class="news">
                                    <div class="news-heading">
                                        <h2>Popular News</h2>
                                    </div>           
                        
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Recent News</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Popular News</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <div class="news-item">
                                                <div class="left">
                                                    <img src="uploads/n5.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">International</span>
                                                    </div>
                                                    <h2><a href="">Remote island nation in Pacific under lockdown for first time</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="news-item">
                                                <div class="left">
                                                    <img src="uploads/n6.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">Business</span>
                                                    </div>
                                                    <h2><a href="">Serbia revokes Rio Tinto lithium mine permits following protests</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="news-item">
                                                <div class="left">
                                                    <img src="uploads/n7.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">Business</span>
                                                    </div>
                                                    <h2><a href="">Toyota Land Cruiser customers in Japan face four-year wait</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="news-item">
                                                <div class="left">
                                                    <img src="uploads/n8.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">Sports</span>
                                                    </div>
                                                    <h2><a href="">Haaland scores before going off injured in Dortmund win and it is very real</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="news-item">
                                                <div class="left">
                                                    <img src="uploads/n5.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">International</span>
                                                    </div>
                                                    <h2><a href="">Remote island nation in Pacific under lockdown for first time</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="news-item">
                                                <div class="left">
                                                    <img src="uploads/n6.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">Business</span>
                                                    </div>
                                                    <h2><a href="">Serbia revokes Rio Tinto lithium mine permits following protests</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="news-item">
                                                <div class="left">
                                                    <img src="uploads/n7.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">Business</span>
                                                    </div>
                                                    <h2><a href="">Toyota Land Cruiser customers in Japan face four-year wait</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="news-item">
                                                <div class="left">
                                                    <img src="uploads/n8.jpg" alt="">
                                                </div>
                                                <div class="right">
                                                    <div class="category">
                                                        <span class="badge bg-success">Sports</span>
                                                    </div>
                                                    <h2><a href="">Haaland scores before going off injured in Dortmund win and it is very real</a></h2>
                                                    <div class="date-user">
                                                        <div class="user">
                                                            <a href="">Paul David</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="">10 Jan, 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="widget">
                                <div class="ad-sidebar">
                                    <a href=""><img src="uploads/ad-3.png" alt=""></a>
                                </div>
                            </div>
                        
                            <div class="widget">
                                <div class="poll-heading">
                                    <h2>Online Poll</h2>
                                </div>
                                <div class="poll">
                                    <div class="question">
                                        Do you think that Apple products will be able to survive in the next 20 years?
                                    </div>
                                    <div class="answer-option">
                                        <form action="" method="post">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="poll" id="poll_id_1">
                                                <label class="form-check-label" for="poll_id_1">Yes</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="poll" id="poll_id_2">
                                                <label class="form-check-label" for="poll_id_2">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="poll" id="poll_id_3">
                                                <label class="form-check-label" for="poll_id_3">No Comment</label>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="poll-result.html" class="btn btn-primary old">Old Result</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="video-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="video-heading">
                            <h2>Videos</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="video-carousel owl-carousel">
                            <div class="item">
                                <div class="video-thumb">
                                    <img src="http://img.youtube.com/vi/tvsyp08Uylw/0.jpg" alt="">
                                    <div class="bg"></div>
                                    <div class="icon">
                                        <a href="http://www.youtube.com/watch?v=tvsyp08Uylw" class="video-button"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="video-caption">
                                    <a href="">Haaland scores before going off injured in Dortmund win and it is very real</a>
                                </div>
                                <div class="video-date">
                                    <i class="fas fa-calendar-alt"></i> Feb 28, 2022
                                </div>
                            </div>
                            <div class="item">
                                <div class="video-thumb">
                                    <img src="http://img.youtube.com/vi/PKATJiyz0iI/0.jpg" alt="">
                                    <div class="bg"></div>
                                    <div class="icon">
                                        <a href="http://www.youtube.com/watch?v=PKATJiyz0iI" class="video-button"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="video-caption">
                                    <a href="">Haaland scores before going off injured in Dortmund win and it is very real</a>
                                </div>
                                <div class="video-date">
                                    <i class="fas fa-calendar-alt"></i> Feb 28, 2022
                                </div>
                            </div>
                            <div class="item">
                                <div class="video-thumb">
                                    <img src="http://img.youtube.com/vi/ekgUjyWe1Yc/0.jpg" alt="">
                                    <div class="bg"></div>
                                    <div class="icon">
                                        <a href="http://www.youtube.com/watch?v=ekgUjyWe1Yc" class="video-button"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="video-caption">
                                    <a href="">Haaland scores before going off injured in Dortmund win and it is very real</a>
                                </div>
                                <div class="video-date">
                                    <i class="fas fa-calendar-alt"></i> Feb 28, 2022
                                </div>
                            </div>
                            <div class="item">
                                <div class="video-thumb">
                                    <img src="http://img.youtube.com/vi/LEcpS6pX9kY/0.jpg" alt="">
                                    <div class="bg"></div>
                                    <div class="icon">
                                        <a href="http://www.youtube.com/watch?v=LEcpS6pX9kY" class="video-button"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="video-caption">
                                    <a href="">Haaland scores before going off injured in Dortmund win and it is very real</a>
                                </div>
                                <div class="video-date">
                                    <i class="fas fa-calendar-alt"></i> Feb 28, 2022
                                </div>
                            </div>
                            <div class="item">
                                <div class="video-thumb">
                                    <img src="http://img.youtube.com/vi/N88TwF4D2PI/0.jpg" alt="">
                                    <div class="bg"></div>
                                    <div class="icon">
                                        <a href="http://www.youtube.com/watch?v=N88TwF4D2PI" class="video-button"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="video-caption">
                                    <a href="">Haaland scores before going off injured in Dortmund win and it is very real</a>
                                </div>
                                <div class="video-date">
                                    <i class="fas fa-calendar-alt"></i> Feb 28, 2022
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <div class="ad-section-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href=""><img src="uploads/ad-1.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading">About Us</h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading">Useful Links</h2>
                            <ul class="useful-links">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="terms.html">Terms and Conditions</a></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                                <li><a href="disclaimer.html">Disclaimer</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading">Contact</h2>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="right">
                                    34 Antiger Lane,<br>
                                    PK Lane, USA, 12937
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="right">
                                    contact@arefindev.com
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="right">
                                    122-222-1212
                                </div>
                            </div>
                            <ul class="social">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading">Newsletter</h2>
                            <p>
                                In order to get the latest news and other great items, please subscribe us here: 
                            </p>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Subscribe Now">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright">
            Copyright 2022, ArefinDev. All Rights Reserved.
        </div>
     
        <div class="scroll-top">
            <i class="fas fa-angle-up"></i>
        </div>
		
        <script src="{{ asset('dist-front/js/custom.js') }}"></script>        
		
   </body>
</html>