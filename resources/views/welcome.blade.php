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
        <div class="flex-center position-ref" style="height: 60px;">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                 
            @endif
            <a href="{{ url('/about') }}">About us</a>
            <a href="{{ url('/contact') }}">Contact us</a>
                </div>
        </div>

               
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="10000">
                <img src="https://surplus.psu.edu/sites/surplus/files/styles/image_cropper/public/lost-found.jpg?itok=Aqwm8G1Y&fbclid=IwAR0TFQ79GVSUueJMsNjqmASD2Q700_lk8NuarAl2Uv1zMMHKuy_PC2sobLQ" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="https://scontent.ftun4-1.fna.fbcdn.net/v/t1.0-9/98207594_2860100020710991_4223767686103957504_n.jpg?_nc_cat=101&_nc_sid=ca434c&_nc_eui2=AeFlkb9tFfMznV1Wno7ilGtTPUr45FKao-I9SvjkUpqj4oM8zPkrXduWJUZWVBdU82FaT--wAfhDkNPwYHR6lem-&_nc_ohc=HzjxwhgNv30AX_0MJ-E&_nc_ht=scontent.ftun4-1.fna&oh=d91dbb55eb330b377fcefeffaf3fb7e3&oe=5EED8333" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://surplus.psu.edu/sites/surplus/files/styles/image_cropper/public/lost-found.jpg?itok=Aqwm8G1Y&fbclid=IwAR0TFQ79GVSUueJMsNjqmASD2Q700_lk8NuarAl2Uv1zMMHKuy_PC2sobLQ" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                  <div class="split left">
                    <div class="centered">
                      <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar woman">
                      <h2>Finder</h2>
                      <p>Some text.</p>
                    </div>
                  </div>
                </div>
                <div class="flip-box-back">
                 <h2>Finder</h2>                   
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit <br>
                 <a href="{{ route('login') }}"><button class="btn btn-danger">Login as finder</button></a>
                  </div>
                </div>
              </div> 
                
              <div class="flip2-box">
                <div class="flip2-box-inner">
                  <div class="flip2-box-front">
                  <div class="split right">
                    <div class="centered">
                      <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar man">
                      <h2>Owner</h2>
                      <p>Some text here too.</p>
                    </div>
                  </div>
                </div>
                <div class="flip2-box-back">
                <h2>Owner</h2>                   
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit <br>
                 <a href="{{ route('login') }}"><button class="btn btn-danger">Login as owner</button></a>
                     </div>
                   </div>
                 </div> 

                

                 
               </body> 
               <!-- Footer -->
               <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Your Website</small>
    </div>
  </footer>
<!-- Footer -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
</html>
