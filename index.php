<?php
require_once 'init.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>My portfolio</title>
	
  </head>
  <body>
  <section>
    <div class="home-bg">
      <img src="images/MACBOOKMOCKUP.jpg">
      <div class="home-content w-100">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark px-5">
          <a class="navbar-brand font-weight-bold text-warning">JDW</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#home">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#skills">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </nav>

        <div class="container text-white">
          <div class="row">
            <div class="col-md-5 d-none d-md-block">
              <div class="decorRoad">
                <div class="p-4 decorRoad-content">
                  <h2>I'm Mathias HOUNYE</h2>
                  <h5>Senior PHP Web Developper</h5>
                </div>

                <div class="pt-4 pb-2 getMeTouch" id="getMeTouch">
                  <p class="px-2 font-weight-bold">Touch me</p>
                  <span><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></span>
                </div>
              </div>
            </div>

            <div class="col-md-7 home-content-hero">
              <div class="row title">
                <h1 class="mx-auto">Web developper 2.0</h1>
              </div>
              <div class="row">
                <h2 class="mx-auto">Font-end & Back-end</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid about-section">
      <div class="row bg-light" style="padding-top: 70px; padding-bottom: 70px;">
          <h1 class="mx-auto">HEY!</h1>
      </div>
      <div  class="row">
        <div class="col-sm-4">
          <div class="row">
            <img src="images/IMG55.jpg" class="img-fluid" style="max-height: 400px;">
          </div>
        </div>

        <div class="col-sm-8">
          <div class="row" style="padding: 50px 100px 40px 50px;" id="index">
            <h2 id="about">ABOUT ME</h2>
              <p>
                  I am the front-end and back-end developer, I am passionate about science and technology
                  and I have a capacity to adapt and understand new things.
              </p>
              <p>
                  I am a communicator with a very good relationship, I like working in a team and I am available immediately.
              </p>
          </div>

          <div class="row mt-5">
            <h5 class="pl-5 mr-2">FOLLOW ME</h5>
            <div class="">
              <a href="#" class="btn bg-light"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#" class="btn bg-light"><i class="fa fa-google" aria-hidden="true"></i></a>
              <a href="#" class="btn bg-light"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="container-fluid bg-info" style="padding-right: 100px; padding-left: 100px;">
      <div class="row" style="padding-top: 70px; padding-bottom: 70px;">
        <div class="card-deck w-100">
          <div class="card text-center py-4">
            <i class="fa fa-laptop fa-4x mb-4" aria-hidden="true"></i>
            <h5>WEB DEVELOPPEMENT</h5>
          </div>

          <div class="card text-center py-4">
            <i class="fa fa-server fa-4x mb-4" aria-hidden="true"></i>
            <h5>WEB SECURITY</h5>
          </div>

          <div class="card text-center py-4">
            <i class="fa fa-mobile fa-4x mb-4" aria-hidden="true"></i>
            <h5>MOBILE-APP</h5>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row" style="padding-top: 70px; padding-bottom: 70px;">
        <h2 class="col-12 mb-4 pl-5" id="skills">MY SKILLS</h2>
        <div class="col-md-6">
          <div class="row px-5">
            <p>I followed my online training on openClassroom and I have a maximum knowledge to work in each of
                these programming languages. I also know some notions about git
            </p>
              <p>I have contributed to various projects with friends and some are realized.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row px-4">
            <h6>LARAVEL</h6>
            <div class="progress w-100" style="height: 22px;">
              <div class="progress-bar bg-info" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
            </div>
            <h6>PHP</h6>
            <div class="progress w-100" style="height: 22px;">
              <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
            </div>
            <h6>JQUERY/AJAX</h6>
            <div class="progress w-100" style="height: 22px;">
              <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
            </div>
            <h6>JAVA</h6>
            <div class="progress w-100" style="height: 22px;">
              <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
            <h6>CSS3</h6>
            <div class="progress w-100" style="height: 22px;">
              <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
            </div>
            <h6>HTML5</h6>
            <div class="progress w-100" style="height: 22px;">
              <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-5 bg-light">
      <div class="row">
        <h1 class="mx-auto">RESUME</h1>
      </div>
      <div class="row">
        <p class="col-sm-6 offset-sm-3 text-center">I am ready and willing to put my skills to the test <br/>and to learn from others to improve myself.</p>
      </div>
      <div class="row">

      </div>
    </div>
  </section>

  <section style="padding-top: 70px; padding-bottom: 70px;">
    <div class="container">
      <div class="row">
        <h2 class="mx-auto pb-5" id="portfolio">MY PORTFOLIO</h2>
      </div>
      <div class="card-deck">
        <div class="card">
          <a href=""><img class="card-img-top" src="images/portfolio1.jpg" style="height: 150px;"></a>
        </div>

        <div class="card"><a href="">
          <img class="card-img-top" src="images/portfolio3.jpg" style="height: 150px;"></a>
        </div>
        <div class="card">
          <a href="">
          <img class="card-img-top" src="images/short.png" style="height: 150px;"></a>
        </div>
          <div class="card">
              <a href=""><img class="card-img-top" src="images/babor.png" style="height: 150px;"></a>
          </div>
          <div class="card">
              <a href="">
                  <img class="card-img-top" src="images/facture.png" style="height: 150px;"></a>
          </div>
      </div>
	  <br>
    </div>
  </section>

  <section class="text-white contact-content" style="padding-top: 70px; padding-bottom: 70px;">
    <div class="container">
      <div class="row">
        <h2 class="mx-auto pb-5" id="contact">CONTACT ME</h2>
      </div> 

      <div class="row">
        <div class="col-md-6 col-12">
          <div class="p-4 bg">
            <h5>LEAVE ME A MESSAGE</h5>

              <div class="alert-danger" id="error" style="display: none"></div>
              <div class="alert-success" id="success" style="display: none"></div>
              <br/>

            <form class="col-12" action="" method="post" id="submit">
              <div class="form-group row">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                  <span class="error" style="color:red; font-style: italic; font-weight: bold"></span>
              </div>
              <div class="form-group row">
                <input type="email" class="form-control" id="email"  name="email" placeholder="Email*">
                  <span class="error" style="color:red; font-style: italic; font-weight: bold"></span>
              </div>
              <div class="form-group row">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*">
                  <span class="error" style="color:red; font-style: italic; font-weight: bold"></span>
              </div>
              <div class="form-group row">
                <textarea class="form-control" rows="4" name="message" id="message" placeholder="Leave a message*"></textarea>

              </div>
              <button type="submit" id="send" class="btn btn-primary w-50">SEND</button>
            </form>

          </div>
        </div>

        <div class="col-md-1 d-none d-md-block"></div>

        <div class="col-md-5 col-12 mt-4 mt-md-0">
          <div class="bg px-4 pb-2">
              <h5 class="pt-4">ADDRESS</h5>
              <p style="color: orange">Street Slobazhansky 106, Dnipr, Ukraine</p>
          </div>
          <div class="my-3 bg px-4 pb-2">
              <h5 class="pt-4">PHONE</h5>
              <p style="color: orange">+380 663149613</p>
              <p style="color: orange">+380 633474129</p>
          </div>
          <div class="bg px-4 pb-2">
              <h5 class="pt-4">WEB</h5>
              <p>Mail : <a href="mailto:jacknouatin@yahoo.fr" style="color: orange">jacknouatin@yahoo.fr</a></p>
              <p>Website : <a href="http://myprojets.site" style="color: orange">myprojets.site</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="container-fluid py-3" style="background: #111;">
    <p class="text-center text-white">© <?= date('Y')?> - All Rights Reserved.</p>
  </footer>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <script src="js/script.js"></script>
  </body>
</html>