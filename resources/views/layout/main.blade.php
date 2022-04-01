<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="/css/style1.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<link rel="icon" href="/images/imagepizza.jpg" type="image/icon type">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC"}
* {
    margin: 0;
    padding: 0
}


</style>
<body>
<div >
	<div class="w3-top w3-bar w3-xlarge w3-black w3-opacity-min">
<a href="/menu" class="w3-bar-item w3-button">HOME</a>
<a href="/home" class="w3-bar-item w3-button">MENU</a>
<a href="/about" class="w3-bar-item w3-button">ABOUT</a>
<a href="/contact" class="w3-bar-item w3-button">CONTACT</a>
<a href="/logout" class="w3-bar-item w3-button">Logout</a>
<a href="/profile" class="w3-bar-item w3-button" >Welcome {{$data->name}}</a>
</div>


  
	@yield('content')
<p class="w3-center w3-xlarge w3-padding-32">Made By PURVI SHARMA</p>
</div>
</body>
</html>