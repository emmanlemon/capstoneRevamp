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
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Admin Poll</title>
</head>
<body>
  @extends('admin.extension.navigator_side')
    @section('navigator_side')
    @endsection
  <div class="section">
    <div class="container-poll" style="margin: 20px;">
      <h5>Home > Poll</h5>
      @if(Session::has('success'))
      <div class="alert alert-success">{{ Session::get('success') }}</div>
      @elseif(Session::has('delete'))
      <div class="alert alert-danger">{{ Session::get('delete') }}</div>
      @endif
      <form action="{{ url('/admin/poll/create') }}" method="POST">
        @csrf
         <div class="col s4">
             <label for="title"> Title </label>
             <input name="title" id="title" type="text" class="validated">
         </div>
         {{-- <input type="dateTime-local" name="start_at"> Start
         <input type="dateTime-local" name="end_at"> End --}}
         <div class="row col s12" x-data = "{optionsNumber:2}">
             <h4>Options</h4>
             <template x-for="i in optionsNumber">
                 <div class="col ">
                     <input type="text" name="options[][content]">
                     <button x-on:click="optionsNumber > 2 ? optionsNumber-- : alert('poll must has at least 2 options')" type="button" class="btn btn-info">
                         Remove
                     </button>
                 </div>
             </template>
             <button x-on:click="optionsNumber++" type="button" class="btn btn-info"> Add Button </button>
             <button type="submit" id="save" type="button" class="btn btn-info"> Submit</button>
             <button type="reset" name="reset" type="button" class="btn btn-danger"> Reset</button>
     </form>
        <table>
          <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Created_at</th>
            <th>Action</th>
          </tr>
          @foreach ($polls as $poll)
          <tr>
            <td>
              {{ $poll->title }}
            </td>
            <td>
              {{ $poll->status }}
            </td>
            <td>
              {{ date('F j, Y, g:i a', strtotime($poll->created_at)) }} , {{ \Carbon\Carbon::parse($poll->created_at)->diffForHumans() }}
            </td>
            <td style="display: flex; gap: .5em;">
              <a href="{{ url("admin/poll/show/$poll->id")}}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
              <form action='{{ url("admin/poll/delete/$poll->id")}}' method="post">
                <input class="btn btn-danger" type="submit" value="Delete" style="background-color: rgb(255, 58, 58);" />
                @method('delete')
                @csrf
              </form>
            </td>
            
          </tr>
          @endforeach
        </table>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      
      $('#save').on('click', function() {
    //     var name = $("input[name=name]").val();
    //     var subject = $("input[name=subject]").val();
    //     var message = $("textarea[name=message]").val();
    //     var email = $("input[name=email]").val();
    //     var recipient = $("select[name=recipient]").val();
    //     var url = '{{ url('contactus/store') }}';;
            // $.ajax({
            //     url: "/admin/contact",
            //     type: "POST",
    //   data:{
    //       _token: $("#csrf").val(),
    //       name:name, 
    //       subject:subject,
    //       message:message,
    //       email:email,
    //       recipient:recipient
    //       },
    //             cache: false,
    //             success: function(dataResult){
    //                 var dataResponse = JSON.stringify(dataResult);
    //                 if(dataResponse.success == true){
    //                   $('#successMsg').show();	
    //                 }
    //                 else if(dataResult.statusCode==201){
    //                     alert("Error occured !");
    //                 }     
    //             }
    //         });
    })
  });
</script>
</body>
</html>