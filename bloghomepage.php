<?php

include("auth_session.php");
require_once("db.php");
$sql = "SELECT blogs.id, blogs.title, blogs.body, blogs.cateid, blogs.brief ,categories.catename AS cateid 
    FROM blogs 
    INNER JOIN categories ON blogs.cateid=categories.id ORDER BY id DESC ;";
$resultQuery = mysqli_query($con, $sql);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Blogs</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/blog/">

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    

    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">

    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
  <header class="blog-header lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1">
        <a class="btn btn-sm btn-outline-success" href="categories.php">Categories</a>
      </div>
       <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="bloghomepage.php">Blogs</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
      <div class="dropdown">
      <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Hey, <?php echo $_SESSION['username']; ?>!
      </a>
      <ul class="dropdown-menu">
      <?php 
          
          $rowcat = mysqli_fetch_assoc($resultQuery)
          
          ?>
        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
      </ul>
    </div>
      </div>
    </div>
  </header>
</div>

<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
    <div class="col-md-6 px-0">
    <?php 
          
          $rowcat = mysqli_fetch_assoc($resultQuery)
          
          ?>
          <h1 class=" fst-italic">Newest Blogs</h1>
          <h1 class=" "><?php echo $rowcat['title']?></h1>
      <p class=" my-3"><?php echo $rowcat['brief']?></p>
      <p class=" mb-0"><a href="conreadingblog.php?id=<?= $rowcat['id'] ?>" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <?php 
          
          $rowcat = mysqli_fetch_assoc($resultQuery)
          
          ?>
          <strong class="d-inline-block mb-2 text-success"><?php echo $rowcat['cateid']?></strong>
            <h3 class="mb-0"><?php echo $rowcat['title']?></h3>
            <p class="mb-auto"><?php echo $rowcat['brief']?></p>
          <a href="conreadingblog.php?id=<?= $rowcat['id'] ?>" class="stretched-link">Continue reading</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <?php 
          
          $rowcat = mysqli_fetch_assoc($resultQuery)
          
          ?>
          <strong class="d-inline-block mb-2 text-danger"><?php echo $rowcat['cateid']?></strong>
            <h3 class="mb-0"><?php echo $rowcat['title']?></h3>
            <p class="mb-auto"><?php echo $rowcat['brief']?></p>
          <a href="conreadingblog.php?id=<?= $rowcat['id'] ?>" class="stretched-link">Continue reading</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        From the Firehose
      </h3>

      <article class="blog-post">
          <?php 
          
            for ($x=1; $x<=$rowcat = mysqli_fetch_assoc($resultQuery); $x++)
            {
            ?>
            <h2 class="blog-post-title mb-1"><?php echo $rowcat['title']?></h2>
            <p><?php echo $rowcat['brief']?></p>
            <p class="lead mb-0"><a href="conreadingblog.php?id=<?= $rowcat['id'] ?>" class="text-blue fw-bold">Continue reading...</a></p>
            <hr>
            <?php
            }
            ?>
    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">This is a Blog site that helps you get more knowlage about the world this days in every Category.</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="https://github.com/RemonAbdelmalak">GitHub</a></li>
            <li><a href="https://twitter.com/remonmarz">Twitter</a></li>
            <li><a href="https://www.facebook.com/ray.remon13">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>



</main>

<footer class="blog-footer">
    <p>&copy; <em type="date"></em>Remon Abdelmalak</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="./dashboard.js"></script> 
  </body>

</html>