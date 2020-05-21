<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avtomaster
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Car Repair</title>
<meta charset="utf-8">

<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->

	<?php wp_head(); ?>
</head>

<body id="page1">
<div class="main-bg">
  <div class="bg">
    <!--==============================header=================================-->
    <header>
      <div class="main">
        <div class="wrapper">
          <h1><a href="index.html">Car Repair</a></h1>
          <div class="fright">
            <div class="indent"> <span class="address">8901 Marmora Road, Glasgow, D04 89GR</span> <span class="phone">Tel: +1 959 552 5963</span> </div>
          </div>
        </div>
        <nav>
          <ul class="menu">
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="maintenance.html">Maintenance </a></li>
            <li><a href="repair.html">Repair</a></li>
            <li><a href="price.html">Price List</a></li>
            <li><a href="locations.html">Locations</a></li>
          </ul>
        </nav>
      </div>
    </header>
