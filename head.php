<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/colour-slider.css" />
  <link rel="stylesheet" id="switcher-id" href="">
    <link rel="stylesheet" href="css/css.css">
  <link rel="stylesheet" href="css/pokedex_api.css">
	 <link rel="stylesheet" href="css/contact.css">
  <script src="js/form.js"></script>
  <title>GamerWearhouse</title>
</head>
<body>
    <section class="header sticky-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#"><span class="logo">The</span> Gamer's warehouse </a>
          <button class="navbar-toggler menu-toggle" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            
            <span></span>
            <span></span>
            <span></span>
          </button>
          <div class="theme">
        <input type="range" value="268.8" min="0" max="360" step="0.1" />
      </div>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="Home.php">Home </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="About.php">About</a>
              </li> 
             
              <li class="nav-item">
                <a class="nav-link " href="guide.php">Guides</a>
              </li> 
              
              <li class="nav-item">
                <a class="nav-link " href="games.php">Upcoming</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link " href="item.php">Items</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li> 
  
              <li class="nav-item">
                <a class="nav-link" href="profile.php.">profile</a>
              </li> 
              <li class="search_bar ipad-d-none toggle-overlay">
                 <span class="d-none d-lg-block">
                    <a href="#"><i class="fas fa-search"></i></a>
                 </span>
                 
                 <span class="d-lg-none">
                   <a href="pokedex.php" onclick="document.location='pokedex.php'">Search</a>
                 </span>
              </li> 
            </ul>
          </div>
        </nav>
      </div> 
    </section>
  
    <div class="search-overlay">
      <div class="outer-close toggle-overlay">
        <a class="close"><span></span></a>
      </div>
      <form method="get" class="fullscreen-searchform" action="#">
        <input class="search-box" name="s" placeholder="Search..." autocomplete="off">
        <i class="fa fa-search fullscreen-search-icon" onclick="document.location='pokedex.php'"></i>
      </form>
    </div>