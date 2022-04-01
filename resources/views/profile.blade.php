@extends('layout.main')
@section('title','Profile')
@section('content')
<style>
    body {
    background-color: #000
}

.card {
    width: 350px;
    background-color: #efefef;
    border: none;
    cursor: pointer;
    transition: all 0.5s
}

.image img {
    transition: all 0.5s
}

.card:hover .image img {
    transform: scale(1.5)
}

.btn {
    height: 140px;
    width: 140px;
    border-radius: 50%
}

.name {
    font-size: 22px;
    font-weight: bold
}

.idd {
    font-size: 14px;
    font-weight: 600
}

.idd1 {
    font-size: 12px
}

.number {
    font-size: 22px;
    font-weight: bold
}

.follow {
    font-size: 12px;
    font-weight: 500;
    color: #444444
}

.btn1 {
    height: 40px;
    width: 150px;
    border: none;
    background-color: #000;
    color: #aeaeae;
    font-size: 15px
}

.text span {
    font-size: 13px;
    color: #545454;
    font-weight: 500
}

.icons i {
    font-size: 19px
}

hr .new1 {
    border: 1px solid
}

.join {
    font-size: 14px;
    color: #a0a0a0;
    font-weight: bold
}

.date {
    background-color: #ccc
}
    </style>
<div style="background-color: bisque;width: 100%;
    min-height: 100vh;    background-size: cover;">
<div class="container mt-4 mb-4 p-3 d-flex justify-content-center"  id="profile" style="font-family: Arial; font-size: 5px;">
    <div class="card p-4" style="background-image: url(/images/bubble.jpg);">
        <div class="image d-flex flex-column justify-content-center align-items-center"> <button class="btn"> <img src="/images/user2.png" height="100" width="100" /></button> <span class="name mt-3" style="color:royalblue;">{{$data->name}}</span><span class="idd">@ {{$data->name}}</span>
          
            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number"><span class="follow">ID- {{$data->id}}</span></span> </div>
        
            <div class="text mt-3 "> <span style="color:royalblue;">{{$data->email}} </span> </div>
            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
            <div class=" px-2 rounded mt-4 date "> <span class="join" style="color: royalblue;">Joined {{$data->created_at}}</span> </div>
        </div>
    </div>
</div>
</div>
@endsection