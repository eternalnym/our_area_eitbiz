<?php
include("conn.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">

    <link rel="icon" href="favicon.png">

    <title>Our Area</title>
    <link rel="stylesheet" href="stylesheets/theme.css" type="text/css" />
    <link rel="stylesheet" href="stylesheets/style.css" type="text/css" />
    <script src="javascripts/jquery-1.11.3.min.js">
    </script>
    <script src="javascripts/slick.js"></script>
    <script src="javascripts/globle.js"></script>
    <script src="javascripts/user_function.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div id="Outer">
        <!-- Start Header -->
        <header class="header">
            <div class="header__topbar">
                <div class="container">
                    <div class="row">
                        <div class="box col-4 col-lg-6 text-start">
                            <ul>
                                <li><a href="mailto:RAcare@ourarea.net"><i class="fa fa-envelope" aria-hidden="true"></i> <span>RAcare@ourarea.net</span></a></li>
                                <li><a href="tel:1-18004324536"><i class="fa fa-phone" aria-hidden="true"></i> <span>1-1800-432-4536</span></a></li>
                            </ul>
                        </div>
                        <div class="box col-8 col-lg-6 text-end">
                            <ul>
                                <li class="title">Follow Us:</li>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__bottombar">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="header__logo col-5 col-md-7 text-start">
                            <a href="index.html">
                                <img src="images/logo.png" alt="site logo" />
                            </a>
                        </div>
                        <div class="header__register col-7 col-md-5 text-end">
                            <a href="#register" class="btn btn-primary"><span>Register Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <!-- Start Banner Section -->
        <section class="Banner text-center">
            <div class="container">
                <h1 class="Banner__Title">Apply Now</h1>
            </div>
        </section>
        <!-- Start Banner Section -->

        <main id="Content">
            <!-- <p id="error_msg"></p> -->
            <!-- Start Contact Section -->
            <section class="Contact">
                <div class="container">
                    <h2 class="Contact__Title">Residence Association Details Form</h2>

                    <form id="form-id" method="post" action="javascript:;" onsubmit="validateForm();">
                        <div class="row">
                            <div class="form-group col-12">
                                <label>Name of residence association</label>
                                <input type="text" placeholder="Residence Association Name" onkeydown="residenceField();" id="residence_name" class="form-control" />
                                <span class="msg" id="residence_msg"></span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Email</label>
                                <input type="text" placeholder="Your Email" onkeydown="mailField();" class="form-control" id="email" />
                                <span class="msg" id="mail_msg"></span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Contact No.</label>
                                <input type="text" placeholder="Your Contact" onkeydown="phoneField();" class="form-control" id="phone" />
                                <span class="msg" id="phone_msg"></span>
                            </div>
                            <div class=" form-group col-12">
                                <label class="checkbox">
                                    <input type="checkbox" id="residence_association_details_form" checked />
                                    <span>Please send us the Residence Association Details Form so we can receive a completed website for our association immediately.</span>
                                </label>
                            </div>
                            <div class="form-group col-12 text-end">
                                <button type="submit" onclick="" class="btn btn-secondary">
                                    <span>Submit</span>
                                </button>

                            </div>
                            <span id="success_msg"></span>
                        </div>
                    </form>
                </div>
            </section>
            <!-- Start Contact Section -->

        </main>


        <!-- Start Footer Section -->
        <?php include("footer.php"); ?>