<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Document</title>
</head>

<body>
  <?php include'menu.php';  ?>

  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/a1.jpg" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="image/a2.jpg" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="image/a3.jpg" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="image/a4.jpg" width="1100" height="500">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center"> About Us</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="image/HTML.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h4 class="display-4">HTML 5</H4>
          <P class="py-3">Hypertext Markup Language revision 5 (HTML5) is markup language for
            the structure and presentation of World Wide Web contents.
            HTML5 supports the traditional HTML and XHTML-style syntax
            and other new features in its markup, New APIs, XHTML and error handling.
          </P>
          <a href="about.php" class="btn btn-dark">Check more....</a>

        </div>
      </div>
    </div>
  </section>
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center"> Our Services</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class=" col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="image/css1.jpg" alt="Card image" width="700" height="200">
            <div class="card-body">
              <h4 class="card-title">CSS</h4>
              <p class="card-text">CSS is the language we use to style an HTML document.
                CSS describes how HTML elements should be displayed.
              </p>
              <a href="#" class="btn btn-primary">Know more..</a>
            </div>
          </div>
        </div>
        <div class=" col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="image/php.jpg" alt="Card image" width="700" height="200">
            <div class="card-body">
              <h4 class="card-title">PHP</h4>
              <p class="card-text">PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
              PHP is a widely-used.
              </p>
              <a href="#" class="btn btn-primary">Know more..</a>
            </div>
          </div>
        </div>
        <div class=" col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="image/javascript.jpg" alt="Card image" width="700" height="200">
            <div class="card-body">
              <h4 class="card-title">JAVA SCRIPT</h4>
              <p class="card-text">JavaScript is the world's most popular programming language.
                JavaScript is the programming language of the Web.

              </p>
              <a href="#" class="btn btn-primary">Know more..</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>

  </section>
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center"> Gallery</h2>
    </div>
    <div class="container-fluid">
  <div class="row">
  <div class="col-lg-3 col-md-3 col-12">
  <a target="_blank" href="image/a1.jpg">
    <img src="image/a1.jpg"  class=" pb-4" width="300" height="200">
  </a>
 
</div>

<div class="col-lg-3 col-md-3 col-12y">
  <a target="_blank" href="image/a2.jpg">
    <img src="image/a2.jpg" class=" pb-4" width="300" height="200">
  </a>
  
</div>

<div class="col-lg-3 col-md-3 col-12">
  <a target="_blank" href="image/a3.jpg">
    <img src="image/a3.jpg" class=" pb-4" width="300" height="200">
  </a>
  
</div>

<div class="col-lg-3 col-md-3 col-12">
  <a target="_blank" href="image/a4.jpg">
    <img src="image/a4.jpg" class=" pb-4" width="300" height="200">
  </a>
 
</div>
</div>
</div>
</section>
<section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Login Form</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="Post">
        
      <div class="form-group">
          <label><b>Username</b></label>
<input type="text" name="user" autocomplete="off" class="form-control">
</div>
<div class="form-group">
          <label><b>Email</b></label>
<input type="text" name="email" autocomplete="off" class="form-control">
</div>
<div class="form-group">
          <label><b>Phone</b></label>
<input type="text" name="phone" autocomplete="off" class="form-control">
</div>
<div class="form-group">
          <label><b>Comment</b></label>
<textarea class="form-control" name="comment"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</section>
<?php include'footer.php';  ?>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>