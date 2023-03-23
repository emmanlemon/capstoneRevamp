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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="{{ url('css/admin/feedback.css') }}">
    <title>Sepnas Poll</title>
</head>
<body>
    @extends('Components.Organism.PollModalUpdate')
    @extends('admin.extension.navigator_side')
    @section('navigator_side')
    @endsection
    <div class="section">
       <div class="container-poll" style="margin: 20px; border-radius: 10px;background-color: white; padding: 20px;">
        <h3>Home > Poll</h3>
        @if(Session::has('update'))
        <div class="alert alert-success">{{ Session::get('update') }}</div>
        @endif
        <h3 class="center">
           Title: {{$poll->title}}        
           <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#pollModal">Edit Poll</button>
            <a href="{{ url("/admin/poll/print/$poll->id") }}" target="blank" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i>                Print</a>
        </h3>
        <h4>Status: {{$poll->status}}</h4>
        <h4>Time Uploaded: {{ date('F j, Y, g:i a', strtotime($poll->created_at)) }} , {{ \Carbon\Carbon::parse($poll->created_at)->diffForHumans() }}</h4>

            <table style="width: 100%; font-size: 1.7em;">
                <tr>
                <th>Choices</th>
                <th>Votes</th>
                {{-- <th>Progress</th> --}}
                <th>Percentage</th>
                </tr>
                @foreach($poll->options as $option)
                <tr>
                    <td>{{$option->content}}</td>
                    <td>{{ $option->votes_count }}</td>
                    {{-- <td><progress value="{{ intval($option->votes_count  * 100/ $poll->options->sum('votes_count'))}}" max="100"> 32% </progress></td> --}}
                    @if ($option->votes_count == 0) 
                    <td>0%</td>
                    @else
                    <td>{{ intval($option->votes_count  * 100/ $poll->options->sum('votes_count'))}}%</td>
                    @endif
                    
                </tr>
                @endforeach
            </table>
       </div>
    </div>
</body>
</html>