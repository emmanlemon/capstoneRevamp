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
  <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
    <link rel="stylesheet" href="{{ url('css/postLayout.css') }}">
    <title>Speaker Eugenio Perez National Agricultural School</title>
    @extends('Components.Molecule.header')
    @section('header')
    @endsection
</head>
<body>
  <img src="{{ url("../images/sepnas.jpg") }}" alt="" style="width: 100%; height: 350px; margin-top: 100px;">
  <div class="container_post">
    <div class="header">
  <h2 class="title">Achievements</h2>
</div>
    <div class="row">
  <div class="leftcolumn">
    <div class="card">
      @foreach ($bulletinData as $achievement)
      <img src="{{ URL::asset('images/Admin/Bulletin/Achievement/'.$achievement->thumbnailImage) }}" alt="">
      <h2>{{ $achievement->title }}</h2>
      <p>Description: {{ $achievement->shortDescription }}</p> 
      <p>Time Uploaded: {{ $achievement->created_at }} </p>
      <a href="/admin/bulletin/{{ $achievement->id }}"c>See More >></a>
      @endforeach
    </div>
    <div style="float:right; padding-right: 10px">
      {{ $bulletinData->links('pagination::bootstrap-4') }}
    </div>  
  </div>


  <div class="rightcolumn">
    <div class="card">
      <h2>Upcoming Event</h2>
              <img src='admin/images/events/$thumbnailImageEvents'>
              <p>$headerEvents</p>
              <p>What: $shortDescriptionEvents</p>
              <p>When: $dateLayout</p>
    
    </div>
    <div class="card">
      <h2>Campus Map</h2>
      <img src="{{ url("../images/sepnas_map.png") }}" alt="" onclick="document.getElementById('id02').style.display='block'">
      <div id="id02" class="modal">
          <div class="modal-content" style="height: 70%; width: 70%;">
                  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="{{ url("../images/sepnas_map.png") }}" alt="" style="width: 100%; height: 100%;">
      </div>
    </div>
  </div>
            <div class="card">
              <h2>Latest News</h2>
                    <div class=\"data_feedback\"> 
                      @foreach ($latestNews as $latestNews)
                      <img src="{{ URL::asset('images/Admin/Bulletin/News/'.$latestNews->thumbnailImage) }}" alt="">
                          <p>Title: {{ $latestNews->shortDescription }}</p>
                         <p>Description: {{ $latestNews->shortDescription }}</p> 
                        <p>Time Uploaded: {{ $latestNews->created_at }} </p>
                       @endforeach    
                 </div>
               
            </div>
      
            <!-- <div class="card">
              <h3>Popular Post</h3>
              <div class="fakeimg">Image</div><br>
              <div class="fakeimg">Image</div><br>
              <div class="fakeimg">Image</div>
            </div>
            <div class="card">
              <h3>Follow Me</h3>
              <p>Some text..</p>
            </div> -->
          </div>
        </div>
    </div>
    @extends('Components.Molecule.footer')
    @section('footer')
    @endsection
</body>
</html>