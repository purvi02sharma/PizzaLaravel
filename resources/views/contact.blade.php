@extends('layout.main')
@section('title','Contact')
@section('content')
<div id="contact" class="w3-container w3-blue-grey w3-grayscale-min w3-xlarge w3-padding-top-32">
<h1 class="w3-center w3-jumbo">Contact</h1>

<p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggest criteria of them all, both look and taste.</p>
<p class="w3-xxlarge"><b>Reserve</b> a table, ask for today's special or just send us a message:</p>
<form action="{{route('send-message')}}" method="post">
  @csrf
   @if(Session::get('message_sent'))
   <div class="alert alert-success" role="alert">
    {{Session::get('message_sent')}}
  </div>
  @endif


<p><input class="w3-input " type="text" placeholder="Name" required name="Name"></p>
<p><input class="w3-input " type="text" placeholder="Email" required name="email1"></p>
<p><input class="w3-input " type="number" placeholder="How many people" required name="People"></p>
<p><input class="w3-input " type="date" placeholder="Date and time" required name="date" value="2020-11-16"></p>
<p><input class="w3-input " type="text" placeholder="Message \ Special requirements" required name="Message"></p>
<p><button type="submit" class="w3-button w3-light-grey w3-block" name="submit1">SEND MESSAGE</button></p>
</form>

</div>
@endsection