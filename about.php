<?php 
include('assets/function.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link href='style.css' rel='stylesheet' type='text/css' />

</head>

<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>

    <?php include('assets/navbar.php')?>

    <div class='banner-sec'>
        <h3 class='baner-headng'>About Us</h3>
    </div>
    <div class='aboutpage-sec'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-6'>
                    <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual
                        form of a document or a typeface without relying on meaningful content. Lorem
                        ipsum may be used as a placeholder before the final copy is available. It is
                        also used to temporarily replace text in a process called greeking, which allows
                        designers to consider the form of a webpage or publication, without the meaning
                        of the text influencing the design. Lorem ipsum is a placeholder text commonly used
                        to demonstrate the visual form of a document or a typeface without relying on
                        meaningful content. Lorem ipsum may be used as a placeholder before the final
                        copy is available.</p>
                </div>
                <div class='col-md-6'>
                    <img src="images/aboutpage-img.jpg" class='img-fluid' alt="abot-img" />
                </div>
            </div>
        </div>
    </div>
    <div class='work-sec'>
        <div class='container'>
            <h2 class='sec-heading'>How We Works</h2>
            <div class='row'>
                <div class='col-md-4'>
                    <div class='work-single-box d-flex'>
                        <p class='number-cls'>1</p>
                        <div class='work-details'>
                            <h5>Sign up</h5>
                            <p>Click edit button to change this text to change this text</p>
                        </div>
                    </div>
                </div>

                <div class='col-md-4'>
                    <div class='work-single-box d-flex'>
                        <p class='number-cls'>2</p>
                        <div class='work-details'>
                            <h5>Add your services</h5>
                            <p>Click edit button to change this text to change this text</p>
                        </div>
                    </div>
                </div>

                <div class='col-md-4'>
                    <div class='work-single-box d-flex'>
                        <p class='number-cls'>3</p>
                        <div class='work-details'>
                            <h5>Get bookings</h5>
                            <p>Click edit button to change this text to change this text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('assets/footer.php')?>
</body>

</html>