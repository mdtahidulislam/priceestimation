<footer class="footer-area text-center">
  <img src="assets/img/zpc-logo.png" alt="Zeropoint" class="footer-logo">
</footer><!-- end footer area -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
</body>
</html>