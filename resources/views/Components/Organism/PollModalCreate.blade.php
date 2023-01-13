<div id="id01" class="modal">
    <div class="modal-content">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <form action="{{ route('poll') }}" method="POST" enctype="multipart/form-data">
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
                             <button x-on:click="optionsNumber > 2 ? optionsNumber-- : alert('poll must has at least 2 options')" type="button">
                                 Remove
                             </button>
                         </div>
                     </template>
                     <button x-on:click="optionsNumber++" type="button"> Add Button </button>
                     <button type="submit" id="save"> Submit</button>
                     <button type="reset" name="reset"> Reset</button>
             </form>
          
     
        </div>
</div>
@yield('PollModal')