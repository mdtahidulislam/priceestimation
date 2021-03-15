<footer class="footer-area text-center">
  <img src="assets/img/zpc-logo.png" alt="Zeropoint" class="footer-logo">
</footer><!-- end footer area -->

<!-- registration modal -->
<?php include('register_modal.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/multiselect.js"></script>

<script>
$(document).ready(function(){
 $('#manufacture-name').multiselect({
  columns: 1,
  search: true
 });
 $('#prod-type').multiselect({
  columns: 1,
  search: true
 });
 $('#prod-name').multiselect({
  columns: 1,
  search: true
 });
});
</script>
<script src="assets/js/datatable.js"></script>
</script>
<script src="assets/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    var i = 1;

    $("#add").click(function(){
      i++;
      $('#dynamic_field').append(
        '<div class="form-row" id="row'+i+'"><div class="form-group col-md-11 col-10"><input type="text" name="producttype[]" required placeholder="Enter Product Type" class="form-control"/></div><div class="form-group col-md-1 col-2"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div></div>'
        );  
    });

    $(document).on('click', '.btn_remove', function(){  
      var button_id = $(this).attr("id");   
      $('#row'+button_id+'').remove();  
    });
  });
</script>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<!-- for indexpage jax selection -->
<script>
$(document).ready(function(){
  // type selection based on manufacture
  $('#manufactureName').on('change', function(){
    var manufID = $(this).val();
    $('#prodType').html('');
    if(manufID){
      $.ajax({
        type: 'POST',
        url: 'ajaxdata.php',
        data: {manu_id: manufID},
        success: function(data){
          $('#prodType').html(data);
          $('#prodName').html('<option value="">Select Type First</option>');
        }
      });
    } else {
      $('#prodType').html('<option value="">Select Manufacture First</option>');
      $('#prodName').html('<option value="">Select Type First</option>');
    }
  });
  // product selection based on type
  $('#prodType').on('change', function(){
    var typeId = $(this).val();
    alert(typeId);
    if (typeId) {
      $.ajax({
        type: 'POST',
        url: 'ajaxdata.php',
        data: {type_id: typeId},
        success: function(data){
          $('#prodName').html(data);
        }
      });
    } else {
      $('#prodName').html('<option value="">Select Type First</option>');
    }
  });
});
</script>
</body>
</html>