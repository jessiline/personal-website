<?php
include 'connection.php';
  if(isset($_POST['email'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];
  
    $sql = "INSERT INTO info(email,name,message) VALUES ('$email','$name','$message')";
    if ($conn->query($sql) === TRUE) {
      echo '<div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
              <div>
              <i class="bi bi-check-circle"></i> Data Sent
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            </div>';
    } else {
      echo '<div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
              <div>
              <i class="bi bi-x-circle"></i> Error: ' . $sql . '<br>' . $conn->error . '
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            </div>';
    }
  }
  if(isset($_POST['komentar'])){
    $komentar = $_POST['komentar']; 
    $name = $_POST['name']; 
    $komentar = htmlspecialchars($komentar, ENT_QUOTES);
    if(empty($name)){
      $name = 'Anonymous';
    }
    $name = htmlspecialchars($name, ENT_QUOTES);
    $sql = "INSERT INTO comments(detail,name) VALUES ('$komentar','$name')";
    if ($conn->query($sql) === TRUE) {
      echo '<div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
              <div>
              <i class="bi bi-check-circle"></i> Comment Added!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            </div>';
    } else {
      echo '<div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
              <div>
              <i class="bi bi-x-circle"></i> Error: ' . $sql . '<br>' . $conn->error . '
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            </div>';
    }
  }
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body class="contact" style="font-family: --apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif;"> 
    <?php require('navbar.php'); ?>
    <div class="unslate_co--site-wrap">
      <div class="unslate_co--site-inner">
        <div class="unslate_co--section" id="contact-section">
            <div class="container">
              <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Get In Touch</span></h2>
                <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
              </div>
              <div class="row justify-content-between">
                
                <div class="col-md-6">
                  <!-- form -->
                  <form method="post" class="form-outline-style-v1" id="contactForm">
                    <div class="form-group row mb-0">
                      <div class="col-lg-6 form-group gsap-reveal">
                        <label for="name">Name</label><br>
                        <input name="name" type="text" class="form-control" id="name" required>
                      </div>
                      <div class="col-lg-6 form-group gsap-reveal">
                        <label for="email">Email</label><br>
                        <input name="email" type="email" class="form-control" id="email" required>
                      </div>
                      <div class="col-lg-12 form-group gsap-reveal">
                        <label for="message">Message</label><br>
                        <textarea placeholder="Write your message..." name="message" id="message" cols="30" rows="7" class="form-control" required></textarea>
                      </div>
                    </div>
                    <div class="form-group row gsap-reveal">
                        <div class="col-md-12 d-flex align-items-center">
                          <input type="submit" class="btn btn-outline-pill btn-custom-light" value="Send Message">
                        </div>
                      </div>
                  </form>

                  <!-- form komen -->
                  <h4 class="judulcomm">LEAVE A COMMENT :D</h4>
                  <form class="comm" method="POST" >
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input name="name" type="text" class="form-control" id="name">
                    </div><br>
                    <div class="mb-3">
                      <textarea name="komentar" placeholder="Write a comment..." class="form-control mb-5" id="komentar" rows="3" maxlength="150" required></textarea>
                    </div>
                    <div class="form-group row gsap-reveal">
                      <div class="d-flex align-items-center">
                        <input type="submit" class="btn btn-outline-pill btn-custom-light" value="Send Comment">
                      </div>
                    </div>
                  </form><br><br>
                </div>

                <div class="col-md-4">
                  <div class="contact-info-v1">
                    <div class="gsap-reveal d-block">
                      <span class="d-block contact-info-label">Location</span>
                      <address class="contact-info-val"><i class="bi bi-geo-alt-fill"></i> Indonesia</address>
                    </div>
                    <div class="gsap-reveal d-block">
                      <span class="d-block contact-info-label">Email</span>
                      <a href="mailto:jessiline.imanuela@gmail.com" class="contact-info-val">Jessiline.imanuela@gmail.com</a>
                    </div>
                    <div class="gsap-reveal d-block">
                      <span class="d-block contact-info-label">WhatsApp</span>
                      <a href="https://wa.me/6281217641707/" target="_blank" class="contact-info-val">+62 812 1764 1707</a>
                    </div>
                    <div class="gsap-reveal d-block">
                      <span class="d-block contact-info-label">LinkedIn</span>
                      <a href="https://www.linkedin.com/in/jessiline-imanuela/" target="_blank" class="contact-info-val">https://www.linkedin.com/in/jessiline-imanuela</a>
                    </div>
                    <div class="gsap-reveal d-block">
                      <span class="d-block contact-info-label">Instagram</span>
                      <a href="https://www.instagram.com/jessiline_i/" target="_blank" class="contact-info-val">https://www.instagram.com/jessiline_i</a>
                    </div>
                    <div class="gsap-reveal d-block">
                      <span class="d-block contact-info-label">GitHub</span>
                      <a href="https://github.com/jessiline" target="_blank" class="contact-info-val">https://github.com/jessiline</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>

    <!-- comment display section -->
    <div class="bungkus">
    <h4 class="comment-category">COMMENTS</h4>
    <section class="comment"> 
      <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
      <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
      <div class="comment-container">      
          <?php 
          $sql="SELECT detail, name from comments";
          $result=$conn->query($sql);
        
          if($result->num_rows > 0){
            $response=array();
            while ($row=$result->fetch_assoc()){
              $dt['detail']= $row["detail"];
              $dt['name']= $row["name"];
              array_push($response,$dt);
            }
            
            $hasil_json=json_encode($response);
            $data = json_decode($hasil_json,true);
            for($i = 0; $i < count($data); $i++) { ?>
            <div class="comment-card">
                <div class="comment-info">
                    <p class="comment-short-description">"<?php echo $data[$i]["detail"]; ?>"<br>- <?php echo $data[$i]["name"];?> -</p>
                </div>
            </div>
          <?php } ?>
         <?php }?>
          <?php $conn->close(); ?>
          
      </div>
    </section>
    </div>
              <!-- Loader -->
    <div id="unslate_co--overlayer"></div>
    <div class="site-loader-wrap">
      <div class="site-loader"></div>
    </div>


    <?php require('footer.php'); ?>
    <script src="scripts-dist.js"></script>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="script.js"></script>
    <script>
      const commentContainers = [...document.querySelectorAll('.comment-container')];
      const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
      const preBtn = [...document.querySelectorAll('.pre-btn')];

      commentContainers.forEach((item, i) => {
          let containerDimensions = item.getBoundingClientRect();
          let containerWidth = containerDimensions.width;

          nxtBtn[i].addEventListener('click', () => {
              item.scrollLeft += containerWidth;
          })

          preBtn[i].addEventListener('click', () => {
              item.scrollLeft -= containerWidth;
          })
      })
    </script>
</body>
</html>