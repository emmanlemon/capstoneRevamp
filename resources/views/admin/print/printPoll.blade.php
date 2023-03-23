<title>Poll Print</title>
<link rel="shortcut icon" type="image/x-icon" href="{{ url("../images/sepnas_logo.png") }}" />
<link rel="stylesheet" href="{{ url('css/admin/feedback.css') }}">
<div class="container-poll">
    <div class="header" style="display:flex; align-items:center; justify-content:center; margin-bottom: 20px;">
        <img src="{{ url("../images/sepnas_logo.png") }}" alt="" style="width: 80px; height: 80px; margin-right: 10px;">
        <div class="header-text" style="text-align:center;">
            <p>SPEAKER EUGENIO PEREZ NATIONAL AGRICULTURAL SCHOOL</p>
            <p>Roxas Blvd. San Carlos City, Pangasinan</p>
        </div>
    </div>
    <div class="header-poll">
        <h3 class="center">Title: {{$poll->title}}</h3>
        <h4>Status: {{$poll->status}}</h4>
        <h4>Time Uploaded: {{ date('F j, Y, g:i a', strtotime($poll->created_at)) }} , {{ \Carbon\Carbon::parse($poll->created_at)->diffForHumans() }}</h4>
    </div>
         <table style="width: 100%; font-size: 1.1em; text-align:center;">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
jQuery(document).ready(function($) {
           window.print();
});
  </script>