
@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lost and found</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            body {
  font-family: Arial;
  
}
.split {
    width: 674.5px;
  height: 317.5px;
  position: absolute;
  overflow-x: hidden;
  padding-top: 20px;
}
.left {
  left: 0;
  background-color: #a0c1b8;
}
.right {
  right: 0;
  background-color: #726a95;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.centered img {
  width: 150px;
  border-radius: 50%;
}
.flip-box {
  background-color: transparent;
  width: 674.5px;
  height: auto;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}
/* This container is needed to position the front and back side */
.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}
/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}
/* Position the front and back side */
.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}
/* Style the front side */
.flip-box-front {
  background-color: #bbb;
  color: black;
}
/* Style the back side */
.flip-box-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
}
.flip2-box {
    background-color: transparent;
    width: 674.5px;
    height: 317.5px;
    Margin-left : 50%;
    perspective: 1000px; /* Remove this if you don't want the 3D effect */
  }
  
  /* This container is needed to position the front and back side */
  .flip2-box-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
  }
  
  /* Do an horizontal flip2 when you move the mouse over the flip2 box container */
  .flip2-box:hover .flip2-box-inner {
    transform: rotateY(180deg);
  }
  
  /* Position the front and back side */
  .flip2-box-front, .flip2-box-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden; /* Safari */
    backface-visibility: hidden;
  }
  
  /* Style the front side */
  .flip2-box-front {
    background-color: #726a95;
    color: black;
  }
  
  /* Style the back side */
  .flip2-box-back {
    background-color: #709fb0;
    color: white;
    transform: rotateY(180deg);
  }
        </style>
        
    </head>
    <body>
        <div class="container">
        <div class="flex-center position-ref" style="height: 60px;">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                 
            @endif
            <a href="/about">About us</a>
            <a href="/contact">Contact us</a>
                </div>
        </div>
 
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}
.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}
.container {
  padding: 0 16px;
}
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
.title {
  color: grey;
}
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}
.button:hover {
  background-color: #555;
}
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>

@section('content')

<div class="about-section">
  <h1>About Us !</h1>
  <p>We are four IT students trying to reach the development world with our abilities in order to improve our skills ... </p>
  <p>Lost and Found property management Website </p>
</div>
<br>
<h2 style="text-align:center">Meet Our Team</h2>
<br>
<br>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://www.w3schools.com/w3images/team1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Mouhamed Chrif </h2>
        <p class="title">DSI 21</p>
        <p>i'm a young dreaming IT Student studying in the Institute of Technological Studies of Bizerte i'm  currently building my career as a web apps builder</p>
        <p>mchrif000@yandex.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://www.w3schools.com/w3images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Goutali Alaa</h2>
        <p class="title">DSI 21 </p>
        <p>i'm a young dreaming IT Student studying in the Institute of Technological Studies of Bizerte i'm  currently building my career as a web apps builder</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://www.w3schools.com/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Belhaj Aziz</h2>
        <p class="title">DSI 21</p>
        <p>i'm a young dreaming IT Student studying in the Institute of Technological Studies of Bizerte i'm  currently building my career as a web apps builder</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="https://www.w3schools.com/w3images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Takwa Al-Mekni</h2>
        <p class="title">DSI 21 </p>
        <p>i'm a young dreaming IT Student studying in the Institute of Technological Studies of Bizerte i'm  currently building my career as a web apps builder</p>
        <p>takwa.mekni11@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

                   
                      <a href= "/" class="btn btn-outline-secondary" >
                          <i class="zmdi zmdi-mail-reply-all"></i> Go back</a>
  
                 
@endsection