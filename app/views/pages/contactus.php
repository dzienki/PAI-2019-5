<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title><?php echo SITENAME ?></title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fa98ee078d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="<?php echo URLROOT; ?>/css/navbar.css" type="text/css" rel="StyleSheet">
    <link href="<?php echo URLROOT; ?>/css/contactus.css" type="text/css" rel="StyleSheet">

</head>

<body>
    <?php include(APPROOT . '/views/inc/navbar.php'); ?>
    <div class="container">




        <!--Section: Contact v.2-->
        <section class="section">

            <!--Section heading-->
            <h2 class="section-heading h1 pt-4">Contact us</h2>
            <!--Section description-->
            <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                numquam iure provident voluptate
                esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia,
                minima?</p>

            <div class="row">
                <div class="col">
                    <form id="contact-form" name="contact-form" action="<?php echo URLROOT; ?>/pages/contactus" method="POST" onsubmit="return validateForm()">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="">Your name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email" class="">Your email</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <input type="text" id="country" name="country" class="form-control">
                                    <label for="country" class="">Country</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea type="text" id="subject" name="subject" class="md-textarea"></textarea>
                                    <label for="subject">Your message</label>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="center-on-small-only">
                        <a class="btn btn-primary" onclick="validateForm()">Send</a>
                    </div>
                    <div class="status" id="status"></div>
                </div>
                <div class="col-4">
                    <ul class="contact-icons">
                        <li><i class="fa fa-map-marker fa-2x"></i>
                            <p>Kraków 32-333 ul. Dobrego Pasterza 1111</p>
                        </li>

                        <li><i class="fa fa-phone fa-2x"></i>
                            <p>+48 997 998 999</p>
                        </li>

                        <li><i class="fa fa-envelope fa-2x"></i>
                            <p>help@dzienkiinsurance.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo URLROOT; ?>/js/main.js"></script>
</body>

</html>