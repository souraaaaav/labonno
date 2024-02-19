<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ministore</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="women.css">
    <link rel="stylesheet" type="text/css" href="apply.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap"
        rel="stylesheet">
    <!-- script
        ================================================== -->
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

    <script src="js/modernizr.js"></script>
</head>

<body>
    <?php
    include 'header.php';
    ?>


    <section id="billboard" class="position-relative overflow-hidden bg-light-blue">
        <div class="swiper main-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-6">
                                <div class="banner-content">
                                    <h1 class="display-2 text-uppercase text-dark pb-5">BUY WOMEN dress</h1>
                                    <a href="index.php"
                                        class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Product</a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="image-holder" id="girl_image">
                                    <img src="images/shopping_girl.png" alt="banner" style="width: auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row d-flex flex-wrap align-items-center">
                            <div class="col-md-6">
                                <div class="banner-content">
                                    <h1 class="display-2 text-uppercase text-dark pb-5">BUY WOMEN Dress</h1>
                                    <a href="index.php"
                                        class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Product</a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="image-holder" id="girl_image">
                                    <img src="images/shopping_girl.png" alt="banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-icon swiper-arrow swiper-arrow-prev">
            <svg class="chevron-left">
                <use xlink:href="#chevron-left" />
            </svg>
        </div>
        <div class="swiper-icon swiper-arrow swiper-arrow-next">
            <svg class="chevron-right">
                <use xlink:href="#chevron-right" />
            </svg>
        </div>
    </section>


    <div style="margin-bottom: 48px;">
        <div class="box-root flex-flex flex-direction--column" style="flex-grow: 1;">

            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
                <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                    <h1><a href="apply.php" rel="dofollow">Apply for Job</a></h1>
                </div>
                <div class="container" style="    border-radius: 4px;
    box-shadow: rgba(60, 66, 87, 0.12) 0px 7px 14px 0px, rgba(0, 0, 0, 0.12) 0px 3px 6px 0px;">

                    <div class="formbg-inner padding-horizontal--48">
                        <span class="padding-bottom--15">Enter your Information</span>
                        <form id="stripe-login" action="save_application.php" method="POST">
                            <div class="field padding-bottom--24">
                                <label for="name">Name</label>
                                <input type="text" name="name" required>
                            </div>

                            <div class="field padding-bottom--24">
                                <label for="age">Age</label>
                                <input type="number" name="age" required>
                            </div>

                            <div class="field padding-bottom--24">
                                <label for="qualification">Qualification</label>
                                <input type="text" name="qualification" required>
                            </div>

                            <div class="field padding-bottom--24">
                                <label for="phone">Phone Number</label>
                                <input type="tel" name="phone" pattern="\d{6}" title="Please enter exactly 6 digits"
                                    required>
                            </div>


                            <div class="field padding-bottom--24">
                                <label for="id_number">ID Number</label>
                                <input type="text" name="id_number" required>
                            </div>

                            <div class="field padding-bottom--24">
                                <input type="submit" name="submit" value="Submit">
                            </div>

                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>