<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Louise Rendu </title>
         <link href="css/bootstrap.min.css" rel="stylesheet"/>
         <script src="js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
      <?php include('header.php'); ?>
    <body>
    <div style="background-image: url('https://web-cdn.wingly.io/image-albums/dBK9pIbdkMb9tvWMMhcCrUfRCHg1FNR3.jpg');">
        <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb_navbar">
            <div class="container">
            <a class="navbar-brand" href="homepage.php">Louise Rendu</a>
            <div class="collapse navbar-collapse">
            </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       <ul class="navbar-nav ml-auto">
                           <li class="nav-item active">
                                <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                           </li>
                           <li class="nav-item">
                                <a class="nav-link" href="posts/index.php">Articles</a>
                           </li>
                           <li class="nav-item">
                                <a class="nav-link" href="#">Contact<a>
                           </li>
                           <li class="nav-item my-2 my-lg-0">
                            <a class="nav-link mr-sm-2" href="#">Connexion<a>
                           </li>
                            <li class="nav-item my-2 my-lg-0">
                                <a class="nav-link mr-sm-2" href="#">Inscription<a>
                            </li>
                       </ul>
                  </div>
              </div>
        </nav>
        <?= $content ?>
        <footer class="bg-light text-center text-dark sticky-bottom">
            <div class="container p-4">
                <section class="mb-4">
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa-brands fa-linkedin"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa-brands fa-square-gitlab"></i></a>
                </section>
        </footer>