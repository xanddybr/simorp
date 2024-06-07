



<script src="./js/jquery.min.js" type="text/javascript"></script>
<script src="./js/bootstrap.min.js" type="text/javascript"></script>
<link href="./css/bootstrap.min.css" rel="stylesheet">


<br><br><br>
<!-- Button trigger modal -->
<button type="button" id='chamar'>
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModalCenter" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" id="sl" class="btn btn-primary">Save changes</button>
        <button type="button" id="cl" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>

  $(document).ready(function(){
      $("#chamar").click(function(){
        $('#exampleModalCenter').modal('show',true);
    })
  })
      
   $('#exampleModalCenter').on('shown.bs.modal', function () {
        $('#cl').focus();
   }) 
 
  


    
</script>