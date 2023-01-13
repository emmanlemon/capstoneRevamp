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
    <title>Sepnas Vission Mission</title>
</head>
@extends('Components.Molecule.header')
@section('header')
@endsection
<body>
    <img src="{{ url("../images/sepnas.jpg") }}" alt="" style="width: 100%; height: 350px; margin-top: 100px;">

    <div class="single_sidebar">
        <h2 class="title_vmgo">THE DEPED VISION</h2>
    
    <!----><span></span>
        
      <p>
          We dream of Filipinos
          who passionately love their country
          and whose values and competencies
          enable them to realize their full potential
          and contribute meaningfully to building the nation.
          
          As a learner-centered public institution,
          the Department of Education
          continuously improves itself
          to better serve its stakeholders.
      </p>
      <h2 class="title_vmgo">THE DEPED MISSION</h2>
    <!----><span></span>
        
      <p>To protect and promote the right of every Filipino to quality, equitable, culture-based, and complete basic education where:

          Students learn in a child-friendly, gender-sensitive, safe, and motivating environment.
          
          Teachers facilitate learning and constantly nurture every learner.
          
          Administrators and staff, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen.
          
          Family, community, and other stakeholders are actively engaged and share responsibility for developing life-long learners.
      
      </p>
       <h2 class="title_vmgo">OUR CORE VALUES</h2>
    <!----><span></span>
        
      <p>
          <li>Maka-Diyos</li>
          <li>Maka-tao</li>
          <li>Makakalikasan</li>
          <li>Makabansa</li>
      </p>
    <!----><span></span>
    <h2 class="title_vmgo">QUALITY POLICY</h2>
      <p>The Sepnas
is committed to provide
relevant programs and responsive
services pursuant to statutory and
regulatory requirements for the
satisfaction of its stakeholders  through continuous improvement
of its quality management system.
      </p>
</div>
    @extends('Components.Molecule.footer')
    @section('footer')
    @endsection
</body>
</html>