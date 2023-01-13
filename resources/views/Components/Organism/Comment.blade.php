 <!-- Comment -->
 <div class="flex-grow-1 flex-shrink-1">
  <h3> New Comment</h3>
  <form action="" method="post" enctype="multipart/form-data">
    @csrf
    @if(Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <input type="hidden" name="created_at" value="{{ date("Y/m/d H:i:s");  }}">
    <input type="hidden" name="updated_at" value="{{ date("Y/m/d H:i:s");  }}">
    <textarea name="comment" id="" cols="" rows="5" style="width: 100%;" placeholder="Write something ..."></textarea>
    <div style="float: right;">
      <button class="button">Submit</button>
      <button class="button">Reset</button>
    </div>
  </form>   
  <h3> {{ $comments->total()}} Comments</h3><hr>
  @foreach ($comments as $comment)
    <div class="media">
    <a class="pull-left" href="#"><img class="media-object" src="https://wallpaperaccess.com/full/2866246.jpg" alt="" style="height:100px; width:100px; border-radius: 50%;"></a>
    <div class="media-body">
        <h4 class="media-heading"> {{ $comment->name }} <span class="small">- {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</span></h4>
        <p> {{ $comment->comment }}
          {{-- @if(!empty($user->id == $comment->user_id))
            <i>Edit</i>
          @endif</p> --}}
    </div>
</div>
  @endforeach
  <div style="float:right; margin-bottom: 10px">
    {{ $comments->links() }}
  </div>
</div>
<!--End Comment -->
@yield('comment')