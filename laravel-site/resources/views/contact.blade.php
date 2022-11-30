@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/contact.css" type="text/css">
@endsection

@section('content')
<div class="header">
    <h1>Contact Us</h3>
    <h4 id="desc">Have any further questions? feel free to contact us!</h4>
</div>
    
<div class="container">
    <div class="email">
        <a href="https://outlook.live.com/owa/" style="text-decoration: none; color: #000;">
            <img class="img" id="img1" src="/images/outlook-favicon.png">
        </a>
        <p>200070104@aston.ac.uk</p>
    </div>
    <div class="github">
        <a href="https://github.com/Sully001/E-Commerce-Website" style="text-decoration: none; color: #000;">
            <img class="img" id="img2" src="/images/github-favicon.png">
        </a>
        <p>Github</p>
    </div>
    <div class="address">
        <a href="https://www.aston.ac.uk/" style="text-decoration: none; color: #000;">
            <img class="img" id="img3" src="/images/location-image.png">
        </a>
        <p>Aston St, Birmingham B4 7ET</p>
    </div>
</div>
@endsection