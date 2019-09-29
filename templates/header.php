<?php
session_start();

  if($_SERVER['QUERY_STRING'] == 'noname') {
    unset($_SESSION['name']);
    session_unset();
  }

  $name = $_SESSION['name'] ?? 'Guest';

?>

<head>
	<title>Award Solutions</title>
	 <!-- Compiled and minified CSS -->
  <link href="css/main.css" rel="stylesheet">
  <link href="css/normalize.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
  <link href="main.css" rel="stylesheet">


  <style type="text/css">


  	.brand {
  		background: #cbb09c !important;
  	}
  	.brand-text{
  		color: #cbb09c !important;
  	}
  	form {
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
<?php
		if(isset($_SESSION['userid'])){
			echo 'Yor are logged in';

		} else {
			//echo 'You are logged out';

		}
?>
  <nav>
    <div class="nav-wrapper blue-grey darken-3">
      <a href="#!" class="brand-logo valign-wrapper logo">Award Solutions</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <?php
		echo '<li'.$index.'><a href="collapsible.html"><a href="index.php">Home</a></li>';
        echo '<li'.$services.'><a href="services.php">Services</a></li>';
        echo '<li'.$careers.'><a href="careers.php">Careers</a></li>';
        echo '<li'.$contactus.'><a href="contactus.php">Contact Us</a></li>';
		?>
        <li><a href="login.php" class="waves-effect waves-light btn teal accent-4">Login</a></li>
		
      </ul>
    </div>
  </nav>

  <div class="shadow"></div>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>

  <nav class="white z-depth-0">
    <div class="container">
      
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li class="grey-text">Hello <?php echo htmlspecialchars($email); ?></li>
        <li class="grey-text">(<?php echo htmlspecialchars($gender); ?>)</li>
          
      </ul> 
    </div>
  </nav>
