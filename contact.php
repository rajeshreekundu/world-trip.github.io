<?php 
include('assets/function.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href='style.css' rel='stylesheet' type='text/css' />

</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>

    <?php include('assets/navbar.php') ?>

    <div class='banner-sec'>
        <h3 class='baner-headng'>Contact Us</h3>
    </div>
    <div class='contctpage-sec'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-5'>
                    <h2 class='sec-heading text-md-left mb-4'>Have a Comment? Drop us a message</h2>
                    <p class='contct-lefttxt'>We always welcome or feedback from our friends and customers.</p>
                </div>
                <div class='col-md-7 pl-5'>
                    <form>
                        <div class='form-group'>
                            <label for="">Name *</label>
                            <input type="text" class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for="">Email *</label>
                            <input type="email" class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for="">Description *</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn contct-page-butn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include('assets/footer.php') ?>
</body>

</html>