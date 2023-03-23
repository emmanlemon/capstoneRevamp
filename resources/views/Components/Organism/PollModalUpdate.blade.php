<div class="modal fade" id="pollModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Poll</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ url("/admin/poll/update/$poll->id") }}" method="post" enctype="multipart/form">
              @method('PUT')
              @csrf
                <div class="form-group">
                  <label>Title:</label>
                  <input type="text" name="title" value="{{ $poll->title }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Status:</label>
                    <select class="form-select" name="status" style="width: 100%;" class="form-control">
                        <option selected>{{ $poll->status }}</option>
                        @if($poll->status == 'PENDING')
                        <option value="STARTED">STARTED</option>
                        @else
                        <option value="PENDING">PENDING</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Choices:</label>
                    @foreach($poll->options as $key => $option)
                    <input name="pollId[]" type="hidden" value="{{ $option->id }}"> 
                    <input type="text" name="options[]" value="{{ $option->content }}" class="form-control" style="margin-top: 8px;">
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
              </form>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>
  </div>