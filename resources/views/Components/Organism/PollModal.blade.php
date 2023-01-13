{{-- <link rel="stylesheet" href="{{ url('css/js/modal.css') }}">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<div id="id01" class="modal">
    <div class="modal-content">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <h2 class="poll-title">Poll</h2>
        {{-- <div class="poll-box" style="display:flex; justify-content: space-between">
            <div class="left-box">
               {{ dd($responses) }}
                <h3>{{ $polls[0]->title }}</h3>
                <form action="{{ route('poll') }}" method="post">
                @csrf
                <div class="form-check" style="display: block;">
                    @foreach ($polls as $poll)
                    <h5>
                        <input class="form-check-input" type="radio" name="{{$poll->id}}" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            {{ $poll->content }}
                            </label>
                        </h5>
                    
                     @endforeach
                </div>   
                  <button type="submit" name="submit" id="submit" class="button">Vote</button>
                </form>
            </div>
        <div class="right-box">  
            <table>
                <h2>Result</h2>
                <tr>
                  <th>Name</th>
                  <th>Votes</th>
                  <th>Percentage</th>
                </tr>
                @foreach ($responses as $response)
                <tr>
                    @foreach ($polls as $poll)
                    <td> {{ $poll->content }}</td>
                    @endforeach
                    <td>{{ $response->vote}}</td>
                        <td>{{ intval($response->vote * 100/ $total_response[""])}}%</td>
                </tr>
                @endforeach
                <p>Total Respondent : {{ $total_response[""] }}</p>
            </table>              
            </div>
        </div> --}}
        <h4 class="center">
            {{$poll->title}}
        </h4>

        <h6>
           {{$poll->EndDateFormat}}
        </h6>

        <form action="{{route('poll.vote',[$poll])}}" method="post">
            @csrf

            @foreach($poll->options as $option)

               <p>
                <label>
                  <input name="option_id" type="radio" value="{{$option->id}}" @if ($selectedOption == $option->id) checked @endif />
                  <div style="display: flex; justify-content:space-between">
                    <span>{{$option->content}} </span> <span>{{$option->votes_count}}</span>
       
                  </div>
                </label>
            </p>
            @endforeach
            

            <button class="waves-effect waves-light btn info darken-2" type="submit">
                vote
            </button>
        </form>
    </div>
</div>
{{-- <script>
      $(document).ready(function() {
                $('#submit').click(function() {
                    $.ajax({
                        url: 'testUrl/{id}',
                        type: 'Post',
                        data: { id: 1 },
                        success: function(response)
                        {
                            $('#something').html(response);
                        }
                 });
            });   
        });
</script> --}}
@yield('poll') --}}