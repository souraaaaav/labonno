<!DOCTYPE html>
<html>

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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap"
    rel="stylesheet">
  <!-- script
    ================================================== -->
  <script src="js/modernizr.js"></script>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true"
  tabindex="0">
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
                  <h1 class="display-2 text-uppercase text-dark pb-5">BUY YOUR PRODUCTS</h1>
                  <a href="index.php" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Product</a>
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
        <div class="swiper-slide">
          <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
              <div class="col-md-6">
                <div class="banner-content">
                  <h1 class="display-2 text-uppercase text-dark pb-5">Find what you need</h1>
                  <a href="index.php" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Product</a>
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
  <section id="company-services" class="padding-large">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 pb-3">
          <div class="icon-box d-flex">
            <div class="icon-box-icon pe-3 pb-3">
              <svg class="cart-outline">
                <use xlink:href="#cart-outline" />
              </svg>
            </div>
            <div class="icon-box-content">
              <h3 class="card-title text-uppercase text-dark">Free delivery</h3>
              <p>Consectetur adipi elit lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 pb-3">
          <div class="icon-box d-flex">
            <div class="icon-box-icon pe-3 pb-3">
              <svg class="quality">
                <use xlink:href="#quality" />
              </svg>
            </div>
            <div class="icon-box-content">
              <h3 class="card-title text-uppercase text-dark">Quality guarantee</h3>
              <p>Dolor sit amet orem ipsu mcons ectetur adipi elit.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 pb-3">
          <div class="icon-box d-flex">
            <div class="icon-box-icon pe-3 pb-3">
              <svg class="price-tag">
                <use xlink:href="#price-tag" />
              </svg>
            </div>
            <div class="icon-box-content">
              <h3 class="card-title text-uppercase text-dark">Daily offers</h3>
              <p>Amet consectetur adipi elit loreme ipsum dolor sit.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 pb-3">
          <div class="icon-box d-flex">
            <div class="icon-box-icon pe-3 pb-3">
              <svg class="shield-plus">
                <use xlink:href="#shield-plus" />
              </svg>
            </div>
            <div class="icon-box-content">
              <h3 class="card-title text-uppercase text-dark">100% secure payment</h3>
              <p>Rem Lopsum dolor sit amet, consectetur adipi elit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="mobile-products" class="product-store position-relative padding-large no-padding-top">
    <div class="container">
      <div class="row">
        <div class="display-header d-flex justify-content-between pb-3">
          <h2 class="display-7 text-dark text-uppercase">Women Products</h2>

        </div>
        <div class="swiper product-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="product-card position-relative">
                <div class="image-holder">
                  <img src="images/girl_image1.jpg" alt="product-item" class="img-fluid">
                </div>
                <div class="cart-concern position-absolute">
                  <div class="cart-button d-flex">
                    <a href="dress.php" class="btn btn-medium btn-black">Buy Dress<svg class="cart-outline">
                        <use xlink:href="#cart-outline"></use>
                      </svg></a>
                  </div>
                </div>
                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                  <h3 class="card-title text-uppercase">
                    <a href="dress.php">Dress</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card position-relative">
                <div class="image-holder">
                  <img src="images/girl_image1.jpg" alt="product-item" class="img-fluid">
                </div>
                <div class="cart-concern position-absolute">
                  <div class="cart-button d-flex">
                    <a href="jewelry.php" class="btn btn-medium btn-black">Buy Jewelry<svg class="cart-outline">
                        <use xlink:href="#cart-outline"></use>
                      </svg></a>
                  </div>
                </div>
                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                  <h3 class="card-title text-uppercase">
                    <a href="jewelry.php">Jewelry</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card position-relative">
                <div class="image-holder">
                  <img src="images/girl_image1.jpg" alt="product-item" class="img-fluid">
                </div>
                <div class="cart-concern position-absolute">
                  <div class="cart-button d-flex">
                    <a href="accessories.php" class="btn btn-medium btn-black">Buy Accessories<svg class="cart-outline">
                        <use xlink:href="#cart-outline"></use>
                      </svg></a>
                  </div>
                </div>
                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                  <h3 class="card-title text-uppercase">
                    <a href="accessories.php">Accessories</a>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination position-absolute text-center"></div>
  </section>
  <section id="smart-watches" class="product-store padding-large position-relative">
    <div class="container">
      <div class="row">
        <div class="display-header d-flex justify-content-between pb-3">
          <h2 class="display-7 text-dark text-uppercase">Men's Products</h2>
          <div class="btn-right">
          </div>
        </div>
        <div class="swiper product-watch-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="product-card position-relative">
                <div class="image-holder">
                  <img src="images/men_image1.jpg" alt="product-item" class="img-fluid">
                </div>
                <div class="cart-concern position-absolute">
                  <div class="cart-button d-flex">
                    <a href="formal.php" class="btn btn-medium btn-black">Buy Formal<svg class="cart-outline">
                        <use xlink:href="#cart-outline"></use>
                      </svg></a>
                  </div>
                </div>
                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                  <h3 class="card-title text-uppercase">
                    <a href="formal.php">Formal</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card position-relative">
                <div class="image-holder">
                  <img src="images/men_image1.jpg" alt="product-item" class="img-fluid">
                </div>
                <div class="cart-concern position-absolute">
                  <div class="cart-button d-flex">
                    <a href="casual.php" class="btn btn-medium btn-black">Buy Casual<svg class="cart-outline">
                        <use xlink:href="#cart-outline"></use>
                      </svg></a>
                  </div>
                </div>
                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                  <h3 class="card-title text-uppercase">
                    <a href="casual.php">Casual</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card position-relative">
                <div class="image-holder">
                  <img src="images/men_image1.jpg" alt="product-item" class="img-fluid">
                </div>
                <div class="cart-concern position-absolute">
                  <div class="cart-button d-flex">
                    <a href="wallet.php" class="btn btn-medium btn-black">Buy Wallet<svg class="cart-outline">
                        <use xlink:href="#cart-outline"></use>
                      </svg></a>
                  </div>
                </div>
                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                  <h3 class="card-title text-uppercase">
                    <a href="wallet.php">Wallet</a>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination position-absolute text-center"></div>
  </section>
  <section id="yearly-sale" class="bg-light-blue overflow-hidden mt-5 padding-xlarge"
    style="background-image: url('images/woman_sale.png');background-position: right; background-repeat: no-repeat;">
    <div class="row d-flex flex-wrap align-items-center">
      <div class="col-md-6 col-sm-12">
        <div class="text-content offset-4 padding-medium">
          <h3>10% off</h3>
          <h2 class="display-2 pb-5 text-uppercase text-dark">New year sale</h2>
          <a href="index.php" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Sale</a>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">

      </div>
    </div>
  </section>

  <section id="testimonials" class="position-relative">
    <div class="container">
      <div class="row">
        <div class="review-content position-relative">
          <div class="swiper-icon swiper-arrow swiper-arrow-prev position-absolute d-flex align-items-center">
            <svg class="chevron-left">
              <use xlink:href="#chevron-left" />
            </svg>
          </div>
          <div class="swiper testimonial-swiper">
            <div class="quotation text-center">
              <svg class="quote">
                <use xlink:href="#quote" />
              </svg>
            </div>
            <div class="swiper-wrapper">
              <div class="swiper-slide text-center d-flex justify-content-center">
                <div class="review-item col-md-10">
                  <i class="icon icon-review"></i>
                  <blockquote style="text-align:justify;">"I absolutely love shopping on this clothing site! The variety of styles and sizes available is impressive, and the quality of the clothing is top-notch. I recently purchased a dress for an event, and it fit perfectly and looked even better in person. The website is easy to navigate, and the checkout process is smooth. Plus, the shipping was fast, and my order arrived right on time. I highly recommend this site to anyone looking for trendy and affordable clothing!"
                  </blockquote>
                  <div class="rating">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-half">
                      <use xlink:href="#star-half"></use>
                    </svg>
                    <svg class="star star-empty">
                      <use xlink:href="#star-empty"></use>
                    </svg>
                  </div>
                  <div class="author-detail">
                    <div class="name text-dark text-uppercase pt-2">Emma Chamberlin</div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide text-center d-flex justify-content-center">
                <div class="review-item col-md-10">
                  <i class="icon icon-review"></i>
                  <blockquote style="text-align:justify;">"Overall, I had a positive experience shopping on this clothing site. The selection of clothing is great, and I was able to find some unique pieces that I haven't seen elsewhere. The prices are reasonable, especially considering the quality of the clothing. However, I did encounter a slight issue with sizing. I found that some items ran a bit smaller than expected, so I would recommend checking the size chart carefully before making a purchase. Despite this minor inconvenience, I'm happy with my purchases and would shop here again."
                  </blockquote>
                  <div class="rating">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-half">
                      <use xlink:href="#star-half"></use>
                    </svg>
                    <svg class="star star-empty">
                      <use xlink:href="#star-empty"></use>
                    </svg>
                  </div>
                  <div class="author-detail">
                    <div class="name text-dark text-uppercase pt-2">Jennie Rose</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-icon swiper-arrow swiper-arrow-next position-absolute d-flex align-items-center">
            <svg class="chevron-right">
              <use xlink:href="#chevron-right" />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </section>
  <section id="subscribe" class="container-grid padding-large position-relative overflow-hidden">
    <div class="container">
      <div class="row">
        <div
          class="subscribe-content bg-dark d-flex flex-wrap justify-content-center align-items-center padding-medium">
          <div class="col-md-6 col-sm-12">
            <div class="display-header pe-3">
              <h2 class="display-7 text-uppercase text-light">Subscribe Us Now</h2>
              <p>Get latest news, updates and deals directly mailed to your inbox.</p>
            </div>
          </div>
          <div class="col-md-5 col-sm-12">
            <form class="subscription-form validate">
              <div class="input-group flex-wrap">
                <input class="form-control btn-rounded-none" type="email" name="EMAIL"
                  placeholder="Your email address here" required="">
                <button class="btn btn-medium btn-primary text-uppercase btn-rounded-none" type="submit"
                  name="subscribe">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

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