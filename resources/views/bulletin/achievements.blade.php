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
    <title>Sepnas Achievements</title>
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
    <div class="card" id="initiated">
      @if(@empty($bulletinId))
      @foreach ($bulletinData as $achievement)
      <img src="{{ URL::asset('images/Admin/Bulletin/Achievements/'.$achievement->thumbnailImage) }}" alt="">
      <h2>{{ $achievement->title }}</h2>
      <p>Description: {{ $achievement->shortDescription }}</p> 
      <p>Time Uploaded: {{ date('F j, Y, g:i a', strtotime($achievement->created_at)) }} , {{ \Carbon\Carbon::parse($achievement->created_at)->diffForHumans() }}</p>
      <a href="/bulletin/achievements/{{ $achievement->id }}">See More >></a>
      @endforeach
    <div style="float:right; padding-right: 10px">
      {{ $bulletinData->links('pagination::bootstrap-4') }}
    </div>  
    @else
    <img src="{{ URL::asset('images/Admin/Bulletin/Achievements/'.$bulletinId->thumbnailImage) }}" alt="">
    <h2>{{ $bulletinId->title }}</h2>
    <p>Description: {{ $bulletinId->shortDescription }}</p> 
    <p>Full Description: {{ $bulletinId->fullDescription }}</p> 
    <p>Time Uploaded: {{ $bulletinId->created_at }} </p>
    @if(empty($bulletinId->link))
    @else
    <p>Link -> <a href="{{ $bulletinId->link }}" target="_blank">{{ $bulletinId->link }}</a></p>
    @endif
      <!-- Comment -->
      <div class="flex-grow-1 flex-shrink-1">
        <h3> New Comment</h3>
        <form action="" method="post" enctype="multipart/form-data">
          @csrf
          @if(Session::has('success'))
          <div class="alert alert-success">{{ Session::get('success') }}</div>
          @elseif(Session::has('error'))
          <div class="alert alert-danger">{{ Session::get('error') }}</div>
          @endif
          <input type="hidden" name="created_at" value="{{ date("Y/m/d H:i:s");  }}">
          <input type="hidden" name="updated_at" value="{{ date("Y/m/d H:i:s");  }}">
          <textarea name="comment" required id="" cols="" rows="5" style="width: 100%;" placeholder="Write something ..."></textarea>
          <div style="float: right;">
            <button class="button">Submit</button>
            <button type="reset" class="button">Reset</button>
          </div>
        </form>   
        <h3> {{ $comments->total()}} Comments</h3><hr>
        @foreach ($comments as $comment)
          <div class="media">
            @if(!empty($comment->profile_photo_path))
            <a class="pull-left" href="#"><img class="media-object" src="{{ URL::asset('storage/'.$comment->profile_photo_path) }}" alt="" style="height:100px; width:100px; border-radius: 50%;"></a>
            @else
            <a class="pull-left" href="#"><img class="media-object" src="{{ URL::asset('storage/profile-photos/default_profileImage.png') }}" alt="" style="height:100px; width:100px; border-radius: 50%;"></a>
            @endif
            <div class="media-body">
              <h4 class="media-heading"> {{ $comment->name }} <span class="small">- {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</span></h4>
              <p> {{ $comment->comment }}
                {{-- @if(empty($user))
                @elseif ($user->id == $comment->user_id)
                  <i>EDIT</i>
                @endif --}}
              </p>
          </div>
      </div>
        @endforeach
        <div style="float:right; margin-bottom: 10px">
          {{ $comments->links() }}
        </div>
      </div>
      <!--End Comment -->
    @endif
  </div>
</div>
  

  <div class="rightcolumn">
    <div class="card">
      @foreach ($latestEvent as $Event)
      <h2>Upcoming Event</h2>
      <img src="{{ URL::asset('images/Admin/Bulletin/Upcoming_events/'.$Event->thumbnailImage) }}" alt="">
      <p>{{ $Event->title }}</p>
              <p>What: {{ $Event->shortDescription }}</p>
              <p>When: {{ date('F j, Y', strtotime($Event->date)) }}</p>
              <p>Time Uploaded: {{ date('F j, Y, g:i a', strtotime($Event->created_at)) }} </p>
              @endforeach
    </div>
    <div class="card">
      <h2>Campus Map</h2>
      <img src="{{ url("../images/sepnas_map.png") }}" alt="" onclick="document.getElementById('id02').style.display='block'">
      <div id="id02" class="modal">
          <div class="modal-content" style="height: 70%; width: 70%; display: flex; justify-content: space-between;">
            <div class="legacy" style="width: 40%">
              <h2>Legacy Map</h2>
              <ol>
                <li title="Mini Gym">1.Mini Gym</li>
                <li title="Science Park">2.Science Park</li>
                <li title="sample">1.sample</li>
                <li title="sample">1.sample</li>
                <li title="sample">1.sample</li>
              </ol>
            </div>
            <div>
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="{{ url("../images/sepnas_map.png") }}" alt="" style="width: 100%; height: 100%;">
            </div>

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
                        <p>Time Uploaded: {{ date('F j, Y, g:i a', strtotime($latestNews->created_at)) }} </p>
                       @endforeach    
                 </div>
               
            </div>
          </div>
        </div>
    </div>
    @extends('Components.Molecule.footer')
    @section('footer')
    @endsection
    <script src={{ url('js/ajaxPagination.js') }}></script>
    <script>
      $(document).ready(function() {
            
            $('#save').on('click', function() {
              alert('hello');
            //   var name = $("input[name=name]").val();
            //   var subject = $("input[name=subject]").val();
            //   var message = $("textarea[name=message]").val();
            //   var email = $("input[name=email]").val();
            //   var recipient = $("select[name=recipient]").val();
            //   var url = '{{ url('contactus/store') }}';;
            //       $.ajax({
            //           url: "/admin/contact",
            //           type: "POST",
            // data:{
            //     _token: $("#csrf").val(),
            //     name:name, 
            //     subject:subject,
            //     message:message,
            //     email:email,
            //     recipient:recipient
            //     },
            //           cache: false,
            //           success: function(dataResult){
            //               var dataResponse = JSON.stringify(dataResult);
            //               if(dataResult.success == true){
            //                 $('#successMsg').show();	
            //               }
            //               else if(dataResult.statusCode==201){
            //                   alert("Error occured !");
            //               }     
            //           }
            //       });
          })
        });
    </script>
</body>
</html>