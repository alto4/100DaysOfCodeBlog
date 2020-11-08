<?php
$title = "Welcome to My 100 Days of Code Blog";


include './includes/constants.php';
include './includes/db.php';
include './includes/functions.php';
include './config/config.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Scott Alton | Coding Blog</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <link href="./css/custom.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-8 pt-1">
          <a class="text-muted blog-header-logo text-dark" href="#">&lt;S/A&gt; Development</a>
        </div>
      </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
      <nav class="nav w-50 mx-auto d-flex justify-content-between">
        <a class="p-2 text-muted" href="./index.php">Home</a>
        <a class="p-2 text-muted" href="./posts.php">100-Days of Code Blog</a>
        <a class="p-2 text-muted" href="./posts.php">Contact</a>


      </nav>
    </div>

    <div class="jumbotron py-5 px-4 p-md-5 text-white rounded bg-dark">
      <div class="col-md-7 col-lg-8 px-0">
        <h1><a class="text-light" href="./post.php"><?php echo $title; ?></a></h1>
        <p class="lead my-3">My experience setting up a blog to prepare for the 100 Days of Code Challenge in an effort to organize my learning as a new developer.</p>
      </div>
    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">