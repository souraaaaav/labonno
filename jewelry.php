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
                                    <h1 class="display-2 text-uppercase text-dark pb-5">BUY women jewelry</h1>
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
                                    <h1 class="display-2 text-uppercase text-dark pb-5">BUY women jewelry</h1>
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


    <div class="products">
        <div class="container">
            <h1 class="lg-title">Special Dress With Offers</h1>
            <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quos sit
                consectetur, ipsa voluptatem vitae necessitatibus dicta veniam, optio, possimus assumenda laudantium.
                Temporibus, quis cum.</p>

            <div class="product-items">

                <?php
                // Include the database connection file
                include 'db.php';

                // Query to select all products
                $sql = "SELECT * FROM jewelry";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="product" style= "box-shadow: 6px 6px 5px -5px rgba(0,0,0,0.72)">';
                        echo '<div class="product-content">';
                        echo '<div class="product-img">';
                        echo '<img src="' . $row["image_path"] . '" alt="product image">';
                        echo '</div>';
                        
                        echo '</div>';
                        echo '<div class="product-info">';
                        echo '<div class="product-info-top">
                        <h2 class="sm-title">'.$row["material"] .'</h2>
                        <div class="rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                    </div>';
                        echo '<a href="#" class="product-name">' . $row["title"] . '</a>';
                        echo '
                        <p class="text-black">'.$row["description"] .'</p>
                        
                        ';
                        echo '<div style="display:flex; justify-content: space-between;">';
                        echo '<p class="product-price">$ ' . $row["price"] . '</p>';
                        echo '<div class="product-btn">';
                        echo '<button type="button" class="btn-cart"> add to cart <span><i class="fas fa-plus"></i></span></button>';
                        // echo '<button type="button" class="btn-buy"> buy now <span><i class="fas fa-shopping-cart"></i></span></button>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="off-info">
                        <h2 class="sm-title">25% off</h2>
                    </div>';
                        echo '</div>';
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>

            </div>
        </div>
    </div>

    <div class="product-collection">
        <div class="container">
            <div class="product-collection-wrapper">
                <!-- product col left -->
                <div class="product-col-left flex">
                    <div class="product-col-content">
                        <h2 class="sm-title">men's shoes </h2>
                        <h2 class="md-title">men's collection </h2>
                        <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae
                            consequatur facilis eligendi quibusdam voluptatibus exercitationem autem voluptatum, beatae
                            architecto odit, quisquam repellat. Deleniti, architecto ab.</p>
                        <!-- <button type="button" class="btn-dark">Shop now</button> -->
                    </div>
                </div>

                <!-- product col right -->
                <div class="product-col-right">
                    <div class="product-col-r-top flex">
                        <div class="product-col-content">
                            <h2 class="sm-title">women's dresses </h2>
                            <h2 class="md-title">women's collection </h2>
                            <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae
                                consequatur facilis eligendi quibusdam voluptatibus exercitationem autem voluptatum,
                                beatae architecto odit, quisquam repellat. Deleniti, architecto ab.</p>
                            <!-- <button type="button" class="btn-dark">Shop now</button> -->
                        </div>
                    </div>

                    <div class="product-col-r-bottom">
                        <!-- left -->
                        <div class="flex">
                            <div class="product-col-content">
                                <h2 class="sm-title">summer sale </h2>
                                <h2 class="md-title">Extra 50% Off </h2>
                                <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Molestiae consequatur facilis eligendi quibusdam voluptatibus exercitationem autem
                                    voluptatum, beatae architecto odit, quisquam repellat. Deleniti, architecto ab.</p>
                                <!-- <button type="button" class="btn-dark">Shop now</button> -->
                            </div>
                        </div>
                        <!-- right -->
                        <div class="flex">
                            <div class="product-col-content">
                                <h2 class="sm-title">shoes </h2>
                                <h2 class="md-title">best sellers </h2>
                                <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Molestiae consequatur facilis eligendi quibusdam voluptatibus exercitationem autem
                                    voluptatum, beatae architecto odit, quisquam repellat. Deleniti, architecto ab.</p>
                                <!-- <button type="button" class="btn-dark">Shop now</button> -->
                            </div>
                        </div>
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