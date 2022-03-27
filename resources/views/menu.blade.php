<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>Pizza</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="/css/style1.css">
<script src="/js/menu.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<link rel="icon" href="/images/imagepizza.jpg" type="image/icon type">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
</style>
<body>
<!-- Start Content -->
<div >

<!-- Navbar (Sits on top) -->
<div class="w3-top w3-bar w3-xlarge w3-black w3-opacity-min">
<a href="#home" class="w3-bar-item w3-button">HOME</a>
<a href="#menu" class="w3-bar-item w3-button">MENU</a>
<a href="#about" class="w3-bar-item w3-button">ABOUT</a>
<a href="#contact" class="w3-bar-item w3-button">CONTACT</a>
<a href="logout" class="w3-bar-item w3-button">Logout</a>
<a href="#home" class="w3-bar-item w3-button">Welcome {{$data->name}}</a>
</div>
  
<!-- Header image -->
<div id="home" style="height:800px;background-image:url('/images/imagepizza.jpg');background-size:cover;"
class="w3-display-container w3-grayscale-min">
<div class="w3-display-bottomleft">
  <span class="w3-tag w3-xlarge">Open from 10am to 12pm</span>
</div>
<div class="w3-display-middle w3-center">
  <span class="w3-text-white" style="font-size:100px">thin<br>CRUST PIZZA</span>
  <p><a href="#menu" class="w3-button w3-xxlarge w3-black">Let me see the menu</a></p>
</div>
</div>

<!-- Menu -->
<div id="menu" class="w3-container w3-black w3-xxlarge w3-padding-64">
<h1 class="w3-center w3-jumbo w3-padding-32">THE MENU</h1>
<div class="w3-row w3-center w3-border w3-border-dark-grey">
<a href="#pizza"><div class="w3-third w3-padding-large w3-red">Pizza</div></a>
<a href="#pasta"><div class="w3-third w3-padding-large w3-hover-red">Pasta</div></a>
<a href="#starters"><div class="w3-third w3-padding-large w3-hover-red">Starters</div></a>
</div>
<div id="pizza" class="w3-container w3-white w3-padding-32">
<h1><b>Margherita</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rs.160</span></h1>
<p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p>
<hr>
<h1><b>Formaggio</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rs. 250</span></h1>
<p class="w3-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p>
<hr>
<h1><b>Meat Town</b> <span class="w3-tag w3-red w3-round">Hot!</span>
<span class="w3-right w3-tag w3-dark-grey w3-round">Rs. 200</span></h1>
<p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p>
</div>
<h1 id="pasta" class="w3-center w3-jumbo w3-padding-32">PASTA</h1>
<div class="w3-container w3-white w3-padding-32">
<h1><b>White Sauce Pasta</b> <span class="w3-tag w3-grey w3-round">Popular</span>
<span class="w3-right w3-tag w3-dark-grey w3-round">Rs. 160</span></h1>
<p class="w3-text-grey">Special sauce, Macroni, Oregano</p>
<hr>
<h1><b>Red Sauce Pasta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rs.145</span></h1>
<p class="w3-text-grey">Tomato Sauce, Pasta filled with cheese</p>
<hr>
<h1><b>Spaghetti Classica</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rs.110</span></h1>
<p class="w3-text-grey">Fresh tomatoes, onions, noodles</p>
</div>
<h1 id="starters" class="w3-center w3-jumbo w3-padding-32">STARTERS</h1>
<div class="w3-container w3-white w3-padding-32">
<h1><b>Today's Soup</b> <span class="w3-tag w3-grey w3-round">Seasonal</span>
<span class="w3-right w3-tag w3-dark-grey w3-round">Rs. 50</span></h1>
<p class="w3-text-grey">Ask the waiter</p>
<hr>
<h1><b>Choco Lava</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rs.85</span></h1>
<p class="w3-text-grey">Chocolate brownie</p>
<hr>
<h1><b>Garlic bread</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rs.95</span></h1>
<p class="w3-text-grey">Grilled ciabatta, garlic butter, onions</p>
</div>
</div>

<!-- About -->
<div id="about" class="w3-container w3-red w3-grayscale w3-xlarge w3-padding-64">
<h1 class="w3-center w3-jumbo">About</h1>
<p>The Pizza Restaurant was founded in Pune by Mr. Patel.<br>Bringing a dining table to life with great food, great music and great company. Lifting glasses and spirits. Getting smiles on faces and sauce on t-shirts. That's what we're all about.</p>
<p><strong>The Chef?</strong> Mr. Patel himself<img src="/images/chef.jpg" style="width:150px" class="w3-circle w3-right" alt="Chef"></p>
<p>We are proud of our interiors.</p>
<p class="w3-padding-16 w3-stretch">
<img src="/images/img_restaurant.jpg" style="width:100%" alt="Restaurant">
</p>
<h1><b>Opening Hours</b></h1>
<div class="w3-row">
<div class="w3-half">
  <p>Mon & Tue CLOSED</p>
  <p>Wednesday 10.00 - 24.00</p>
  <p>Thursday 10:00 - 24:00</p>
</div>
<div class="w3-half">
  <p>Friday 10:00 - 12:00</p>
  <p>Saturday 10:00 - 23:00</p>
  <p>Sunday Closed</p>
</div>
</div>    
</div>

<!-- Contact -->
<img src="/images/map.jpg" class="w3-image w3-greyscale" alt="Map" style="width:100%">
@extends('contact')

<!-- End Content -->
</div>
</body>
</html>
