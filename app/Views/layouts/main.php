<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="/styles.css" rel="stylesheet">
  <title><?= (isset($meta_title) ? $meta_title : 'Aperture Science') ?></title>
  <style>
    .navbar-brand-orange { 
      color: lightsalmon !important; 
      /* Set text color to orange */
    }
    
    .nav-link-orange {
      color: lightsalmon !important;
      /* Set text color to orange */
    }

    /* These first two colors change the color of the text on the navbar.
    To add a text color, add another .nav-brand/link-(color) with that code and set the "color: ___". Then reference 
    the class in your line of text code with "nav-brand/link-(color) where your text is located below*/ 

   
    .orangeglow {
      filter: drop-shadow(2px 2px 4px #e16b0bb6);
    }


  </style>

</head>

<style>
  .navbar-logo {
    width: 200px; 
    /* Adjust the width as needed */
    height: auto;
    /* Automatically adjust height to maintain aspect ratio */
    margin-right: 10px;
    /* Optional margin for spacing */
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
    <a href="/science">
      <img src="/Aperturescience.png" alt="Logo" class="navbar-logo"></a>
    <div class="container">
      <a class="navbar-brand navbar-brand-orange orangeglow" href="/science">Aperture Laboratories</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/science"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-orange orangeglow" href="/science/glados">GLaDOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link nav-link-orange orangeglow" href="/science/cavejohnson">Cave Johnson</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link nav-link-orange orangeglow" href="/science/wheatley">Wheatley</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link nav-link nav-link-orange orangeglow" href="/science/new">Add Quote</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </div>
  <div id="content_container" style="height: 898px; width: 100%;">
  <div class="container">
    <?= $this->renderSection('content') ?>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>

<?php 

$currentUrl = current_url();

$imageMap = [

'/science/wheatley' => '/Wheatleylaboratories.png'

];

if (isset($imageMap[$currentUrl])) {
  // If the current page has a specific image, use that image
  $imageUrl = $imageMap[$currentUrl];
} else {
  // If not, use the default image
  $imageUrl = '/Science.png';
}

?>