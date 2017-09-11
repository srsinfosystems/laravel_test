@extends('layouts.test')

@section('title', 'Test page')


@section('content')
<button type="button" class="btnModal btn btn-info btn-lg" data-toggle="modal" data-target="#editor">Add New</button>

<?php //print_r($data) ?>
<?php if(isset($data) && !empty ($data)){
    echo '<div class="list-group">';
foreach($data as $sd){
  echo '<a href="javascript:void(0)" id="'.$sd->id.'" class="btnEdit list-group-item"><p class="title'.$sd->id.'">'.
  $sd->title.'</p><br><p class="description'.$sd->id.'">'.$sd->description.'</p></a>';
}
echo '</div>';
    } ?>

  <!-- Modal -->
  <div class="modal fade" id="editor" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
            <form method="POST" action="{{ url('/test') }}">
            {!! csrf_field() !!}
        <div class="modal-body">
      
  <div class="form-group">
    <label for="email">Title:</label>
    <input type="text" class="form-control txtTitle"  name="title">
  </div>
  <div class="form-group">
    <label for="pwd">Description:</label>
    <textarea class="form-control txtDescription" name="description"></textarea>
  </div>
        </div>
        <div class="modal-footer">
        <input type="hidden" name="id" id="id">
        <button type="submit" value="delete" name="submit" class="btnDelete btn btn-danger">Delete</button>
        <button type="submit" class="btn btn-success">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form> 
      </div>
      
    </div>
  </div>
<script>

    $(".btnEdit").click(function(){
        var id = $(this).attr("id");
        var title = $(".title"+id).html();
        var description = $(".description"+id).html();
        $(".txtTitle").val(title);
        $(".txtDescription").val(description);
        $("#id").val(id);
        $(".btnModal").trigger('click');
        $(".btnDelete").show();
    })
    $(".btnModal").click(function(){
        $(".btnDelete").hide();
    })
</script>
@endsection