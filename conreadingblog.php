<?php

require_once("db.php");
$id=$_GET['id'];
$sql = "SELECT * FROM blogs WHERE blogs.id='$id'";
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
        <a class="btn btn-sm btn-outline-secondary" href="categories.php">Categories</a>
      </div>
       <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="bloghomepage.php">Blogs</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <h5 class="text text-secondary"><?php echo date("d/m/Y") ?></h5>

      </div>
    </div>
  </header>
    </nav>
</div>

<main class="container">
  <div class="row g-5">
    <div class="col-md-8">


      <article class="blog-post">
        <?php
        $post = mysqli_fetch_assoc($resultQuery);
        ?>
            <h2 class="blog-post-title mb-1"><?php echo $post['title']?></h2>
            <p><?php echo $post['body']?></p>
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

  </body>
</html>