<?php
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://newsapi.org/v2/top-headlines?country=id&apiKey=51044ed59d8144a882bb956a91545242");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);

    $data = json_decode($output, true);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <title>Top headlines from Indonesia</title>
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="aquamarine.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

  <!-- Mendaftarkan Web App Manifest -->
  <link rel="manifest" href="/manifest.json">
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="images/hello-icon-152.png">
  <meta name="theme-color" content="white" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Headlines News">
  <meta name="msapplication-TileImage" content="images/hello-icon-144.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">


  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>
</head>

<body class="text-center">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse justify-content-left" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-2">
            <a class="nav-link pop" href="#" title="Kelompok STUDIO" data-toggle="popover" data-placement="bottom" data-content="Pemrograman Web Mobile IF-2">Tentang Kami</a>
          </li>
          <li class="nav-item mx-2">
        </ul>
      </div>
    </div>
  </nav>
  <!-- Cover -->
  <div class="d-flex align-items-center py-5 cover" style="background-image: url(&quot;assets/news.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-white mt-5">
          <h1 class="display-2 d-none d-md-block" style="font-weight:bold;">Top Headlines From Indonesia</h1>
          <h1 class="display-4 d-block d-md-none" style="font-weight:bold;">Top Headlines From Indonesia</h1>
          <p class="">Baca Berita Terupdate Dari Kami</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Parallax section -->
  <!-- Speakers -->
  <!-- Schedule -->
  <!-- Sponsor logos -->
  <div class="py-5 text-center bg-light">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          <span class="subheading">Berita Terupdate dari Berbagai Berita Online</span>
          <h2 class="mb-2">TOP HEADLINES BERITA ONLINE</h2>
        </div>
      </div>
      <div class="row">
        <!--API -->
        <?php foreach($data['articles'] as $d){ 
          ?>
            <div class="card-deck col-md-4 mb-4">
            <br>
                <div class="card bg-white shadow-sm roundend">
                    <img src="<?php echo $d['urlToImage']; ?>" height="200px" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h6 class="card-title font-weight-bold"><?php echo $d['title']; ?></h6>
                        <p class="card-text"><?php echo $d['description']; ?></p>
                        <a href="<?php echo $d['url']; ?>" class="btn btn-primary">Lihat Detail</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo $d['publishedAt']; ?></small>
                    </div>
                </div>
            </div>
          <?php } ?>
          
      </div>
    </div>
  </div>
  <!-- Call to action -->
  <!-- Footer -->
  <footer class="text-md-left text-center p-4 bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="text-muted">Kelompok STUDIO © Copyright 2020 - All rights reserved. </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="js/smooth-scroll.js"></script>
  <script>
  $('.pop').popover().click(function () {
    setTimeout(function () {
      $('.pop').popover('hide');
      }, 1000);
      });
 
</script>
</body>

</html>