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
          @extends('Components.Organism.FormEventsModal')
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
        <img src="{{ URL::asset('images/Admin/Bulletin/Achievement/'.$achievement->thumbnailImage) }}" alt="">
          <div class="data_container">
            <p>Title: {{ $achievement->title }}</p>
            <p>Description: {{ $achievement->shortDescription }}</p> 
            <p>Time Uploaded: {{ $achievement->created_at }} </p>
          </div>
          
        <div class="deleteButton">
          <form action="{{ url('bulletin/achievements', ['id' => $achievement->id]) }}" method="post">
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
<script>
  $(document).ready(function() {
    
    $('#save').on('click', function() {
      var title = $("input[name=title]").val();
      var shortDescription = $("input[name=shortDescription]").val();
      var fullDescription = $("input[name=fullDescription]").val();
      var header = $("input[name=header]").val();
      var thumbnailImage = $("input[type=file][name=thumbnailImage]").val();
      var fullImage = $("input[type=file][name=fullImage]").val();
      var url = '{{ url('bulletin/achievements') }}';
          $.ajax({
              url: "/bulletin/achievements",
              type: "POST",
              headers: {
                'X-CSRF-TOKEN' : $('input[name="_token"]').val()
            },
    data:{
        _token: $("#csrf").val(),
        title:title, 
        shortDescription:shortDescription,
        fullDescription:fullDescription,
        header:header,
        thumbnailImage:thumbnailImage,
        fullImage:fullImage
        },
              cache: false,
              success: function(dataResult){
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){
                    alert("Form Sent Successfully");	
                  }
                  else if(dataResult.statusCode==201){
                      alert("Error occured !");
                  }     
              }
          });
  })
});
</script>
</body>
</html>
