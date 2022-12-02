<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url("../images/sepnas_logo.png") }}" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Admin Achievements</title>
</head>
<body>
    @extends('admin.extension.navigator_side')
    @section('navigator_side')
    @endsection
    <div class="section">
      <div class="header">
        <p>Home > Achievements</p>
        <button class="button" id="myBtn">Add Achievements</button>
          @extends('Components.Organism.FormModal')
          @section('formModal')
          @endsection
      </div>
      @if(Session::has('success'))
      <div class="alert alert-success">{{ Session::get('success') }}</div>
      @elseif(Session::has('delete'))
      <div class="alert alert-danger">{{ Session::get('delete') }}</div>
      @endif
      @foreach ($bulletinNav as $achievement)
      <div class="data_feedback"> 
        <img src="{{ URL::asset('images/Admin/Bulletin/Achievements/'.$achievement->thumbnailImage) }}" alt="">
          <div class="data_container">
            <p>Title: {{ $achievement->title }}</p>
            <p>Description: {{ $achievement->shortDescription }}</p> 
            <p>Time Uploaded: {{ $achievement->created_at }} </p>
          </div>
          
        <div class="deleteButton">
          <form action='{{ route('delete' , "achievements/$achievement->id") }}' method="post">
            <input class="btn btn-default" type="submit" value="Delete" />
            @method('delete')
            @csrf
          </form>
        </div>
    </div>      
          @endforeach
          <div style="float:right; padding-right: 10px">
            {{ $bulletinNav->links() }}
          </div>  
    </div>    
</body>
</html>