<link rel="stylesheet" href="{{ url('css/js/modal.css') }}">

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  <span class="close" id=>&times;</span>
  <div class="create_announcement">
    <form action="" enctype="multipart/form-data" method="POST">
          <div class="alert alert-danger print-error-msg" style="display:none">
          </div>
      
          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf">
          <div class="form-group">
            <label>Title:</label>
            <input type="text" name="title" class="form-control" placeholder="Enter Title" required>
          </div>
    
          <div class="form-group">
            <label>Short Description:</label>
            <input type="text" name="shortDescription" class="form-control" placeholder="Enter Short Description" required>
          </div>
          
          <div class="form-group">
            <label>Full Description:</label>
            <input type="text" name="fullDescription" class="form-control" placeholder="Enter Full Description" required>
          </div>
    
          <div class="form-group">
            <label>Header:</label>
            <input type="text" name="header" class="form-control" placeholder="Enter Header">
          </div>
          <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" name="date" required placeholder="Enter Description">
        </div>
      
          <div class="form-group">
            <label>Thumbnail Image:</label>
            <input type="file" accept="image/*" name="thumbnailImage" class="form-control">
          </div>
          
          <div class="form-group">
            <label>Full Image:</label>
            <input type="file" accept="image/*" name="fullImage" class="form-control">
          </div>
      
          <div class="form-group">
            <button class="btn btn-success upload-image" id="save" type="submit">Save</button>
            <button class="btn btn-success upload-image" type="submit">Reset</button>
          </div>
      </div>
    </form>
  </div>
</div>
<script src={{ url('js/modal.js') }}>
</script>
@yield('FormModal')