@extends('layout.main')
@section('title','Menu')
@section('content')

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

@endsection