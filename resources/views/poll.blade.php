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
  <h2 class="title">Poll</h2>
  </div>
        <h3 class="center">
            {{$poll->title}}
        </h3>

        <h6>
            {{$poll->EndDateFormat}}
        </h6>

        <form action="{{route('poll.vote',[$poll])}}" method="post" style="margin-bottom: 50px;">
            @csrf

            <table style="width: 100%; font-size: 1.7em;">
                <tr>
                  <th>Choices</th>
                  <th>Votes</th>
                  {{-- <th>Progress</th> --}}
                  <th>Percentage</th>
                </tr>
                @foreach($poll->options as $option)
                <tr>
                    <td>  <input name="option_id" type="radio" value="{{$option->id}}" @if ($selectedOption == $option->id) checked @endif /> {{$option->content}}</td>
                    <td>{{ $option->votes_count }}</td>
                    {{-- <td><progress value="{{ intval($option->votes_count  * 100/ $poll->options->sum('votes_count'))}}" max="100"> 32% </progress></td> --}}
                    <td>{{ intval($option->votes_count  * 100/ $poll->options->sum('votes_count'))}}%</td>
                  </tr>
                @endforeach
            </table> 
            <h3>Total Respondent : {{$poll->options->sum('votes_count')}}</h3>
            @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @elseif(Session::has('error'))
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif
          

            {{-- <p>
                <label>
                <input name="option_id" type="radio" value="{{$option->id}}" @if ($selectedOption == $option->id) checked @endif />
                <div style="display: flex; justify-content:space-between">
                    <span>{{$option->content}} </span> <span>{{$option->votes_count}}</span>

                </div>
                
                </label>
            </p> --}}
            

            <button class="button" type="submit">
              <i class='fas fa-vote-yea'></i>Vote
            </button>
        </form>
</div>
  @extends('Components.Molecule.footer')
  @section('footer')
  @endsection
</body>
</html>