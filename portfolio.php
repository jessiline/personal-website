<!doctype html>
<html lang="en">
  <head>
    <title>My Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="keywords" content="html, css, javascript, jquery">
    <meta name="author" content="">
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body class="mainPorto" style="font-family: 'ElgocThin'" data-spy="scroll" data-target=".site-nav-target" data-offset="200">
    <?php require('navbar.php'); ?>
      <div class="unslate_co--section" id="portfolio-section">
        <div class="container">
          <div class="portfolio-wrapper">
            <div class="d-flex align-items-center mb-4 gsap-reveal gsap-reveal-filter">
              <h2 class="mr-auto heading-h2"><span class="gsap-reveal">PROJECTS</span></h2>
            </div>
            <div id="posts" class="row gutter-isotope-item">
              <div class="item branding packaging illustration col-sm-6 col-md-6 col-lg-4 isotope-mb-2 ">
                <a href="portfolio2.php" class="portfolio-item item-portrait isotope-item gsap-reveal-img" data-id="3">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Cinema 551</h3>
                        <p>Console Application</p>
                      </div>
                    </div>
                    <img src="images/cinema/home.png" class="lazyload  img-fluid" alt="Images2" />
                  </a>
              </div>
              
              <div class="item illustration packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="portfolio1.php" class="portfolio-item isotope-item gsap-reveal-img" >
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="portfolio-item-content">
                        <h3>Tic-Tac-Toe</h3>
                        <p>multiplayer Tic-Tac-Toe console game</p>
                      </div>
                    </div>
                    <img src="images/TTT/game2.png" class="lazyload  img-fluid" alt="Images2" />
                  </a>
              </div>

              <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="portfolio3.php" class="portfolio-item item-portrait isotope-item gsap-reveal-img" data-id="2">
                  <div class="overlay">
                    <span class="wrap-icon icon-link2"></span>
                    <div class="portfolio-item-content">
                      <h3>Petani Mayor</h3>
                      <p>website</p>
                    </div>
                  </div>
                  <img src="images/petanimayor/home.png" class="lazyload  img-fluid" alt="Images2" />
                 </a>
              </div>
            </div>
          </div>
        </div>
        <?php require('footer.php'); ?>
      </div>
    <!-- Loader -->
    <div id="unslate_co--overlayer"></div>
    <div class="site-loader-wrap">
      <div class="site-loader"></div>
    </div>

    <script src="scripts-dist.js"></script>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    
    <script src="script.js"></script>

  </body>
</html>