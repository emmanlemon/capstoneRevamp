<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="{{ url("../images/sepnas_logo.png") }}" />
    <link rel="stylesheet" href="{{ url('css/postLayout.css') }}">
    <title>Sepnas Organizational Chart</title>
    @extends('Components.Molecule.header')
    @section('header')
    @endsection
</head>
<body>
  <img src="{{ url("../images/sepnas.jpg") }}" alt="" style="width: 100%; height: 350px; margin-top: 100px;">
  <div class="container_post" style="margin-bottom: 10px;">
    <div class="header">
  <h2 class="title">Sepnas Organizational Chart<p></h2>
  </div>
  <img src="{{ url("../images/organizationalChart.jpg") }}" alt="" >
</div>
  @extends('Components.Molecule.footer')
  @section('footer')
  @endsection
</body>
</html>