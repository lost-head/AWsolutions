<head>
	<title>Award Solutions</title>
  <!-- Compiled and minified CSS -->
  <link href="css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="main.css" rel="stylesheet">

  <style type="text/css">
  	.brand{
  		background: #cbb09c !important;
  	}
  	.brand-text{
  		color: #cbb09c !important;
  	}
  	form{
  		max-width: 460px;
  		margin: 20px auto;
  		padding: 20px;
  	} 	

  </style>
</head>
<body class="white lighten-4">
  <?php $activePage = basename($_SERVER['PHP_SELF']);

  $index="";
  $services="";
  $careers="";
  $contactus="";

  switch ($activePage) {
    case 'index.php':
    $index=' class="active"';
    break;
    case 'services.php':
    $services=' class="active"';
    break;
    case 'careers.php':
    $careers=' class="active"';
    break;
    case 'contactus.php':
    $contactus=' class="active"';
    break;
    default:

    break;
  }
  ?>
  <nav>
    <div class="nav-wrapper color=#009688 teal
    ">
    <a href="#!" class="brand-logo valign-wrapper logo">Award Solutions</a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <?php
      echo '<li'.$index.'><a href="collapsible.html"><a href="index.php">Home</a></li>';
      echo '<li'.$services.'><a href="services.php">Services</a></li>';
      echo '<li'.$careers.'><a href="careers.php">Careers</a></li>';
      echo '<li'.$contactus.'><a href="contactus.php">Contact Us</a></li>';
      echo '<li><a class="waves-effect waves-light btn color=#00bcd4 cyan">Log in</a></li>';
      ?>
    </ul>
  </div>
</nav>

<ul class="sidenav" id="mobile-demo">
  <li><a href="sass.html">Sass</a></li>
  <li><a href="badges.html">Components</a></li>
  <li><a href="collapsible.html">Javascript</a></li>
  <li><a href="mobile.html">Mobile</a></li>
</ul>
