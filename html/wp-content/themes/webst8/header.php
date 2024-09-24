<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <title>ウェブストエイト</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mystyle.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>
  </head>
  <body>
    <header class="bg-secondary-subtle">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">WEBST8</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">BLOG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div id="top-vg" class="container-fluid">
      <img src="images/top.jpeg" alt="トップページ画像" />
    </div>