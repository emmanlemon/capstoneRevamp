<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url("../images/sepnas_logo.png") }}" />
    <title>Speaker Eugenio Perez National Agricultural School</title>
    @vite('resources/css/app.css')
</head>
@extends('Components.Molecule.header')
@section('footer')
@endsection
<body>
    <div class="container_carousel">
        <!-- CAROUSEL START -->
        <div id="myCarousel" class="carousel slide" data-interval="5000" data-ride="carousel">
           <!--Carousel indicators -->
           <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
               <li data-target="#myCarousel" data-slide-to="3"></li>
               <li data-target="#myCarousel" data-slide-to="4"></li>
           </ol>
           <!-- Carousel items -->
           <div class="carousel-inner">
               <div class="item active">
                   <img src="https://static.wixstatic.com/media/61cf76_0b32268249ac4dccbaa65611a6e3aef7~mv2.jpg/v1/fill/w_980,h_420,q_90/61cf76_0b32268249ac4dccbaa65611a6e3aef7~mv2.jpg" alt="First Slide">
                   <div class="carousel-caption">
                       <h3>SEPNAS is a home of every SEPNASIAN! Once a SEPNASIAN,  always a SEPNASIAN!</h3>
                   </div>
               </div>
               <div class="item">
                 <img src="https://media.istockphoto.com/photos/mountain-landscape-picture-id517188688?b=1&k=20&m=517188688&s=612x612&w=0&h=x8h70-SXuizg3dcqN4oVe9idppdt8FUVeBFemfaMU7w=" alt="First Slide">
                 <div class="carousel-caption">
                     <h3>Academic Excellence Awards for Grades 7 to 9 and Grade 11</h3>
                 </div>
             </div>
               <div class="item">
                   <img src="https://media.istockphoto.com/photos/mountain-landscape-picture-id517188688?b=1&k=20&m=517188688&s=612x612&w=0&h=x8h70-SXuizg3dcqN4oVe9idppdt8FUVeBFemfaMU7w=" alt="Second Slide">
                   <div class="carousel-caption">
                       <h3>DAY 1 of Brigada Eskwela :Parade</h3>
                       </div>
                   </div>
                   <div class="item">
                       <img src="https://media.istockphoto.com/photos/mountain-landscape-picture-id517188688?b=1&k=20&m=517188688&s=612x612&w=0&h=x8h70-SXuizg3dcqN4oVe9idppdt8FUVeBFemfaMU7w=" alt="Third Slide">
                       <div class="carousel-caption">
                           <h3>Soiree 2K20</h3>
                       </div>
                   </div>
                   <div class="item">
                     <img src="https://media.istockphoto.com/photos/mountain-landscape-picture-id517188688?b=1&k=20&m=517188688&s=612x612&w=0&h=x8h70-SXuizg3dcqN4oVe9idppdt8FUVeBFemfaMU7w=" alt="Third Slide">
                     <div class="carousel-caption">
                         <h3>SOSA 2019 - State of the School Address<</h3>
                     </div>
                 </div>
               </div>
               <!--Carousel nav -->
               <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                   <span class="glyphicon glyphicon-chevron-left"></span>
               </a>
               <a class="carousel-control right" href="#myCarousel" data-slide="next">
                   <span class="glyphicon glyphicon-chevron-right"></span>
               </a>
           </div>
           </div>
           <a href="{{ route("contactus") }}">hello</a>
</body>
</html>