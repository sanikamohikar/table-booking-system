<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Brahmanandam - Restaurant Table Booking</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .container {
    width: 90%;
    margin: 0 auto;
    max-width: 1200px;
  }
  
  header {
    background-color: #23507d;
    padding: 20px 0;
  }
  
  header h1 {
    margin: 0;
    color: #faf8f8;
    text-align: center;
  }
  
  nav ul {
    list-style-type: none;
    padding: 0;
    text-align: center;
  }
  
  nav ul li {
    display: inline;
    margin: 0 10px;
  }
  
  nav ul li a {
    text-decoration: none;
    color: #333;
    transition: color 0.3s ease;
  }
  
  nav ul li a:hover {
    color: #ff5733;
  }
  
  section.about {
    background-color: #fff;
    padding: 50px 0;
  }
  
  section.about h2 {
    text-align: left;
    color: #333;
  }
  
  .about-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  
  .about-text {
    flex: 1;
  }
  
  .about-text p {
    text-align: justify;
    color: #0d0f11;
  }
  
  .about-images {
    flex: 1;
    display: flex;
    justify-content: space-between;
  }
  
  .about-images img {
    width: 30%;
    border-radius: 10px;
  }
  
  footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding:20px 0;
  }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width:3 rem; height:3 rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Brahmanandam</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link active">About</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark  mb-5">
                <div class="container text-center ">
                <!-- <img src="https://www.tajhotels.com/content/dam/luxury/tajbengal/gallery/HIGH-TEA-DETAIL-2.jpg/jcr:content/renditions/cq5dam.web.1280.1280.jpeg" class="img-rounded" alt="Cinque Terre" height="550px" width="100%">   -->
                </div>
            </div>
            
            <div class="container">
      <h1><b>Our Restaurant</b></h1>
      </div>
  </header>
  <section class="about">
    <div class="container">
      <h1>About Us</h1>
      <div class="about-content">
        <div class="about-text px-4">
          <p>Welcome to Our Restaurant! We pride ourselves on serving delicious meals made from locally sourced ingredients. Our team is passionate about providing a memorable dining experience for our guests.</p>
          <p>Whether you're joining us for a casual lunch, a romantic dinner, or a special celebration, we strive to exceed your expectations with every dish we serve.</p>
          <p>Come visit us today and discover why we're one of the top-rated restaurants in town!</p>
        </div>
        <div class="about-images">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCRxfSFPPkByS4HGRzJHCAHXeb8E0MQJ5MAA&s" alt="Food 1">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQch632yFBdd4l_AhwJeTe7HxhMof-IrV33A&s" alt="Food 1">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTg7xaChzi_25jo5t_aolq2yRDeFGi0I8nBQ&s" alt="Food 2">
        </div>
      </div>
    </div>
  </section>

        </div>
        <!-- Navbar & Hero End -->
      <!-- Service Start -->
      <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Master Chefs</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Online Booking</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
    <div class="recommandation " >
            <h3 style="padding-left: 20px;">Highly recommended dishes in Brahmanandam </h3>
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class=" rounded pt-3">
                            <div class="p-2 ">
                            <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2020/01/rogan-josh.jpg?resize=1024,750&quality=82&strip=all" class="img-circle w-100 " alt="Cinque Terre"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class=" rounded pt-3">
                            <div class="p-2">
                            <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2020/01/masala-dosa.jpg?resize=1024,750&quality=82&strip=all" class="img-circle w-100  " alt="Cinque Terre"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class=" rounded pt-3">
                            <div class="p-2">
                            <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2020/01/chicken-tikka-masala.jpg?quality=82&strip=1&w=970" class="img-circle w-100 h-100" alt="Cinque Terre"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class=" rounded pt-3">
                            <div class="p-2">
                            <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2020/01/papdi-chaat.jpg?resize=1024,750&quality=82&strip=all" class="img-circle w-100 " alt="Cinque Terre">   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- About End -->
<div class="container  wow fadeInUp " data-wow-delay="0.1s ">
<h3 style="text-align:center;margin-top:50px;" >Unique Dining</h3>
       
 <p style="text-align:center;margin-top:50px;"> In our bid to deliver authentic, undiluted experiences, we’ve introduced a unique regional home style dining experience. Always prepared with a local touch, the home-style cooking ensures that you maintain good health throughout your stay. And at the same time it gives you the opportunity to dabble in the local delicacies.<a href="about.php">Read more</a></p></div>
 <div class="container">
 <div class="row g-4">
    <div class="col-sm wow fadeInUp" data-wow-delay="0.1s">
    <img src="https://www.tajhotels.com/content/dam/luxury/hotels/Taj-Dubai/BB-singapore.jpg/jcr:content/renditions/cq5dam.web.756.756.jpeg" class="img-circle rounded w-100 " alt="Cinque Terre">   
    </div>
    <div class="col-sm wow fadeInUp" data-wow-delay="0.1s">
    <img src="https://www.tajhotels.com/content/dam/luxury/hotels/taj-palace-delhi/images/dining/restuarants/loya/1-img.jpg/jcr:content/renditions/cq5dam.web.756.756.jpeg" class="img-circle rounded w-100 " alt="Cinque Terre">
    </div>
 </div>
 </div>
</div>  
<?php include 'footer.php'; ?>        
