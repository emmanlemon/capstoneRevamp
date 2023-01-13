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
    <title>Sepnas SHS program</title>
    @extends('Components.Molecule.header')
    @section('header')
    @endsection
</head>
<body>
  <img src="{{ url("../images/sepnas.jpg") }}" alt="" style="width: 100%; height: 350px; margin-top: 100px;">
  <div class="container_post">
    <div class="header">
  <h2 class="title">SENIOR HIGH SCHOOL PROGRAM</h2>
  </div>
 
   <h4>ACADEMIC TRACK</h4>
<ul class="list-group list-group-flush">
  <li class="list-group-item">Accountancy, Business, and Management (ABM)</li>
  <li class="list-group-item">Humanities and Social Sciences (HUMSS)</li>
  <li class="list-group-item">Science, Technology, Engineering, and Mathematics (STEM)</li>
</ul>
<h4>TECHNICAL-VOCATIONAL-LIVELIHOOD (TVL) TRACK</h4>
<ul class="list-group list-group-flush">
  
  
  <li class="list-group-item">Agri-Fishery Arts Strand
    <p><i class="fa fa-angle-double-right"></i> Crop Production NC II</p>
    <p><i class="fa fa-angle-double-right"></i> Animal Production NC II</p>
  </li>
  <li class="list-group-item">Industrial Arts Strand
    <p><i class="fa fa-angle-double-right"></i> Shielded Metal Arc Welding NC I  (without prior welding units)</p>
    <p><i class="fa fa-angle-double-right"></i> Shielded Metal Arc Welding NC II (completer of SMAW NC I)</p>
    <p><i class="fa fa-angle-double-right"></i> Gas Tungsten Arc Welding NC II</p>
  </li>
  <li class="list-group-item">Home Economics Strand
    <p><i class="fa fa-angle-double-right"></i> Cookery NC II</p>
    <p><i class="fa fa-angle-double-right"></i> Dressmaking NC II</p>
    <p><i class="fa fa-angle-double-right"></i> Food and Beverage Services NC II</p>
    <p><i class="fa fa-angle-double-right"></i> Bread and Pastry Production NC II</p>
    <p><i class="fa fa-angle-double-right"></i> Tailoring NC II</p>
  </li>
  <li class="list-group-item">Information and Communication Technology Strand
    <p><i class="fa fa-angle-double-right"></i> Animation NC II</p>
    <p><i class="fa fa-angle-double-right"></i> Computer Programming NC II</p>
    <p><i class="fa fa-angle-double-right"></i> Computer System Servicing NC II</p>
  </li>
</ul>
</div>
  @extends('Components.Molecule.footer')
  @section('footer')
  @endsection
</body>
</html>