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
    <link rel="stylesheet" href="{{ url('css/postLayout.css') }}">
    <title>Sepnas Calendar</title>
</head>
@extends('Components.Molecule.header')
@section('header')
@endsection
<body>
    <img src="{{ url("../images/sepnas.jpg") }}" alt="" style="width: 100%; height: 350px; margin-top: 100px;">
    <div class="container_post">
        <div class="header">
      <h2 class="title">ACADEMIC CALENDAR<p></h2>
    </div>
   <p>

<p>1st Semester: August 12 - December 21, 2023</p>
<p>Semester Break: January 2 - 12, 2024</p>
<p>2nd Semester: January 13, 2024 - May 23, 2024</p>
<p>Summer Classes: June 8, 2024 - July 18, 2024</p>
<p>Christmas Break: December 22-24, 26-29 2023</p>

<h4>2023</h4>
<p>August 21 - Ninoy Aquino Day</p>
<p>August 26 - National Heroes Day</p>
<p>November 1 - All Saint’s Day</p>
<p>November 2 - All Soul’s Day</p>
<p>November 13 - Speaker Eugenio Perez Day</p>
<p>November 30 - Bonifacio Day</p>
<p>December 8 - Immaculate Concepcion Feast Day</p>
<p>December 24 - Christmas Eve</p>
<p>December 25 - Christmas Day</p>
<p>December 30 - Rizal Day</p>
<p>December 31 - New Year’s Eve</p>

<h4>2024</h4>
<p>January 1 - New Year’s Day</p>
<p>January 25 - Chinese New Year’s Day</p>
<p>April 9 - Maunday Thursday</p>
<p>April 10 - Good Friday</p>
<p>April 11 - Black Saturday</p>
<p>April 12 - Easter Sunday</p>
<p>May 1 - Labor Day</p>
<p>June 12 - Independence Day</p>

{{-- 1st Semester
<p>Prelims - September 10 - 14, 2023</p>
<p>Midterm Exam - October 14 - 19, 2023</p>
<p>Semi Final Exam - November 19 - 23, 2023</p>
<p>Final Exam: Graduating - December 12 - 18, 2023</p>
<p>Non Graduating - December 16 - 21, 2023</p>

2nd Semester
<p>Prelims - February 18 - 22, 2024</p>
<p>Midterm Exam - March 16 - 21, 2024</p>
<p>Semi Final Exam - April 14 - 18, 2024</p>
<p>Final Exam: Graduating - May 14 -20, 2024</p>
<p>Non Graduating - May 18 - 23, 2024</p>

Summer Exam
Midterm - June 22 - 27, 2024
Final Exam - July 13 - 18, 2024 --}}
   </p>
        </div>

    @extends('Components.Molecule.footer')
    @section('footer')
    @endsection
</body>
</html>