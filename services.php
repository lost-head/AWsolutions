<?php include('templates/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Services</title>
	<link href="css/normalize.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<style type="text/css">

    .flat::before {
      width: 30 px;
      content: url(img/bg.jpg);
    }

    .van::before {
      width: 30 px;
      content: url(img/bg2.jpg);

      }.reef::before {
        width: 30 px;
        content: url(img/bg3.jpg);

      }

      .step::before {
        width: 30 px;
        content: url(img/bg4.jpg);
      }

      .reef {
        width: 80px;
        margin: 40px auto -60px;
        display: block;
        position: relative;
        top: -30px;
      }

    </style>

  </head>
  <body>
    <ul>
     <li>Full Truckload</li>
     <li>Volume Based Contract</li>
     <li>Per Shipment Contracts</li>
     <li>Less Then Truck Load</li>

   </ul>


   <h3>Our Equipment:</h3>
   <ul>
     
     <li>Flat Bed</li>
     <li>Step Deck</li>
     <li>Dry Van</li>
     <li>Reefer</li>

   </ul>

   <div class="row">

    <div class="col s6 center tomato angle"><span class="flow-text service-text flat ">Flat Bed</span></div>
    <div class="col s6 center tomato angle"><span class="flow-text service-text step">Step Deck</span></div>
  </div>
  <div class="row">
    <div class="col s6 center tomato angle"><span class="flow-text service-text van">Dry Van</span>
    </div>

    <div class="col s6 center tomato angle">
     <div>
       <img src="img/reef.svg" alt="pizza" class="reef">
       
       <span class="flow-text service-text align-right">Reefer</span></div>
     </div>
   </div>



   

   <?php include('templates/footer.php'); 	?>	
 </body>
 </html>