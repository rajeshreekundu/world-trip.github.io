<?php 
    // session_start();
include('assets/function.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='style.css' rel='stylesheet' type='text/css' />
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>
    
    <?php include('assets/navbar.php')?>

    <div class='banner-area'>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src='images/slider-02.jpg' alt="">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src='images/slider-01.jpg' alt="">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src='images/slider-03.jpg' alt="">
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1">
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2">
                </li>
            </ol>
        </div>
    </div>

    <section class="trip-category">
        <div class="container-fluid">
            <h2 class='sec-heading'>Explore Your Trip</h2>
            <div class="catgry-box-wrap">

                <div class="catgry-sigle-box">
                    <div class="sub-inr-sec1">
                        <div class="content">

                            <div class="content-overlay"></div>
                            <img src="images/sec1-01.jpg" />
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">forest Safari</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="catgry-sigle-box">
                    <div class="sub-inr-sec1">
                        <div class="content">

                            <div class="content-overlay"></div>
                            <img src="images/sec1-02.jpg" />
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Desert</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="catgry-sigle-box">
                    <div class="sub-inr-sec1">
                        <div class="content">

                            <div class="content-overlay"></div>
                            <img src="images/sec1-03.jpg" />
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Hill & Mountain</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="catgry-sigle-box">
                    <div class="sub-inr-sec1">
                        <div class="content">

                            <div class="content-overlay"></div>
                            <img src="images/sec1-04.jpg" />
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Sea Side</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="catgry-sigle-box">
                    <div class="sub-inr-sec1">
                        <div class="content">

                            <div class="content-overlay"></div>
                            <img src="images/sec1-05.jpg" />
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Adventures Trip</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class='recomende-trip-sec'>
        <div class="container">
            <h2 class='sec-heading'>Special Package</h2>
            <div class="row">

                <div class="col-md-4">
                    <div class="sec2-inner-div">
                        <img src="images/sec2-16.jpg" />
                        <div class="txt-area-sec2">
                            <h3>Kailash</h3>
                            <p>Resolution devonshire pianoforte assistance an he particular middletons...</p>
                            <div class='d-lg-flex align-content-center justify-content-between'>
                                <ul class="rating-area">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <span>4.5</span>
                                </ul>
                                <span class='more-detls-cls'>More Details</span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sec2-inner-div">
                        <img src="images/sec2-11.jpg" />
                        <div class="txt-area-sec2">
                            <h3>Chittor Fort</h3>
                            <p>Resolution devonshire pianoforte assistance an he particular middletons...</p>
                            <div class='d-lg-flex align-content-center justify-content-between'>
                                <ul class="rating-area">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <span>4.5</span>
                                </ul>
                                <span class='more-detls-cls'>More Details</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sec2-inner-div">
                        <img src="images/sec2-08.jpg" />
                        <div class="txt-area-sec2">
                            <h3>Goa</h3>
                            <p class='details'>Resolution devonshire pianoforte assistance an he particular
                                middletons...</p>
                            <div class='d-lg-flex align-content-center justify-content-between'>
                                <ul class="rating-area">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <span>4.5</span>
                                </ul>
                                <span class='more-detls-cls'>More Details</span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sec2-inner-div">
                        <img src="images/sec2-15.jpg" />
                        <div class="txt-area-sec2">
                            <h3>Sri Lanka</h3>
                            <p>Resolution devonshire pianoforte assistance an he particular middletons...</p>
                            <div class='d-lg-flex align-content-center justify-content-between'>
                                <ul class="rating-area">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <span>4.5</span>
                                </ul>
                                <span class='more-detls-cls'>More Details</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sec2-inner-div">
                        <img src="images/sec2-14.jpg" />
                        <div class="txt-area-sec2">
                            <h3>Rajasthan</h3>
                            <p>Resolution devonshire pianoforte assistance an he particular middletons...</p>
                            <div class='d-lg-flex align-content-center justify-content-between'>
                                <ul class="rating-area">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <span>4.5</span>
                                </ul>
                                <span class='more-detls-cls'>More Details</span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sec2-inner-div">
                        <img src="images/sec2-01.jpg" />
                        <div class="txt-area-sec2">
                            <h3>Italy</h3>
                            <p>Resolution devonshire pianoforte assistance an he particular middletons...</p>
                            <div class='d-lg-flex align-content-center justify-content-between'>
                                <ul class="rating-area">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <span>4.5</span>
                                </ul>
                                <span class='more-detls-cls'>More Details</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="btn-div">
                <button type="submit" class='butn'>View More</button>
            </div>

        </div>
    </section>

    <section class='abou-sec'>
        <div class='row'>
            <div class='col-md-6'>
                <div class='about-inner'>
                    <h3 class='sub-heading'>Why Booking With Us</h3>
                    <p class='about-detls'>It is a long established fact that a reader will be distracted by the
                        readable content of a
                        page when looking at its layout. The point of using Lorem Ipsum is that it has a
                        more-or-less normal distribution of letters, as opposed to using 'Content here,
                        content here.</p>
                    <div class='feature-div'>
                        <h5>Experts On Tour</h5>
                        <div class='d-flex align-content-strat'>
                            <i class="fa fa-users"></i>
                            <p class='feature-dtls'>It is a long established fact that a reader will be distracted of
                                a page when looking at its layout, as opposed to using 'Content here,
                                content here', making it look like readable English.</p>
                        </div>
                    </div>
                    <div class='feature-div'>
                        <h5>Quality Accomodation</h5>
                        <div class='d-flex align-content-strat'>
                            <i class="fa fa-home"></i>
                            <p class='feature-dtls'>It is a long established fact that a reader will be distracted of
                                a page when looking at its layout, as opposed to using 'Content here,
                                content here', making it look like readable English.</p>
                        </div>
                    </div>
                    <div class='feature-div'>
                        <h5>Comfortable transport</h5>
                        <div class='d-flex align-content-strat'>
                            <i class="fa fa-car"></i>
                            <p class='feature-dtls'>It is a long established fact that a reader will be distracted of
                                a page when looking at its layout, as opposed to using 'Content here,
                                content here', making it look like readable English.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-6'>
                <div class='about-img-area'>
                    <img src="images/about-img.jpg" alt='about' />
                </div>
            </div>
        </div>
    </section>

    <section class='testimonial-sec'>
        <div class='container'>

            <h2 class='sec-heading'>Testimonial</h2>

            <div class="row">

                <div class="col-md-6">
                    <div class="testimonial-box d-flex">
                        <div class="img-area-testimonial">
                            <img src="images/client-01.jpg" />
                        </div>

                        <div class="text-area-testimonial">
                            <h3>Chris Hadid</h3>
                            <h5> From Delhi</h5>
                            <p><i class="fa fa-quote-left"></i> &nbsp; To Do
                                Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar
                                <span class="mbl00">
                                    massa idend porta nequetiam elerisque mid. </span> &nbsp;<i
                                    class="fa fa-quote-right"></i></p>
                        </div>


                    </div>
                </div>

                <div class="col-md-6">
                    <div class="testimonial-box d-flex">
                        <div class="img-area-testimonial">
                            <img src="images/client-02.jpg" />
                        </div>

                        <div class="text-area-testimonial">
                            <h3>Robert Hadid</h3>
                            <h5> From California</h5>
                            <p><i class="fa fa-quote-left"></i> &nbsp; To Do
                                Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar
                                <span class="mbl00">
                                    massa idend porta nequetiam elerisque mid. </span> &nbsp;<i
                                    class="fa fa-quote-right"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class='subscrb-sec'>

        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <ul class='subscrb-leftside'>
                        <li class="nn"><i class="fa fa-envelope-o"></i></li>
                        <li class="nn0">
                            <h3>Subscribe Our Upcoming Trip Details & News</h3>
                        </li>

                    </ul>
                    <p class='subscrb-txt'>Affronting everything discretion men now own did.
                        Still round match we to.</p>
                    <form class='form-inline subscbe-frm'>
                        <input class='form-control' type="email" placeholder="E-mail / Mobile No">
                        <button type="submit" class='butn'>Subscribe</button>
                    </form>
                </div>

                <div class="col-md-7">
                    <div class='row no-gutters'>
                        <div class='col-md-2'>
                            <div class="gallery-img">
                                <img class="content-image" src="images/subscrb-06.jpg" />
                            </div>
                        </div>
                        <div class='col-md-2'>
                            <div class="gallery-img">
                                <img class="content-image" src="images/subscrb-09.jpg" />
                            </div>
                        </div>
                        <div class='col-md-2'>
                            <div class="gallery-img">
                                <img class="content-image" src="images/subscrb-10.jpg" />
                            </div>
                        </div>
                        <div class='col-md-2'>
                            <div class="gallery-img">
                                <img class="content-image" src="images/subscrb-13.jpg" />
                            </div>
                        </div>
                        <div class='col-md-2'>
                            <div class="gallery-img">
                                <img class="content-image" src="images/subscrb-11.jpg" />
                            </div>
                        </div>
                        <div class='col-md-2'>
                            <div class="gallery-img">
                                <img class="content-image" src="images/subscrb-14.jpg" />
                            </div>
                        </div>

                        <div class='col-md-2'>
                            <div class="gallery-img">
                                <img class="content-image" src="images/subscrb-01.jpg" />
                            </div>
                        </div>
                        <div class='col-md-2'>
                            <div class="gallery-img">
                                <img class="content-image" src="images/subscrb-02.jpg" />
                            </div>
                        </div>
                        <div class='col-md-2'>
                            <div class="gallery-img">
                                <img class="content-image" src="images/subscrb-07.jpg" />
                            </div>
                        </div>
                        <div class='col-md-2'>
                            <div class="gallery-img">
                                <img class="content-image" src="images/subscrb-08.jpg" />
                            </div>
                        </div>
                        <div class='col-md-2'>
                            <div class="gallery-img">
                                <img class="content-image" src="images/subscrb-15.jpg" />
                            </div>
                        </div>
                        <div class='col-md-2'>
                            <div class="gallery-img">
                                <img class="content-image" src="images/subscrb-04.jpg" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <?php include('assets/footer.php')?>

</body>

</html>