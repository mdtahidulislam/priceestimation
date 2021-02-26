<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Estimation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="header-area">
    <!-- menu area -->
    <nav class="menu-area">
        <div class="container">
            <div class="menu-area-container">
                <a href="index.php" class="logo">
                  <img src="assets/img/zpc-logo.png" alt="ZeroPointComputing">
                </a>                    
                <ul class="main-menu">     
                  <li>
                      <a href="/"> Home </a>
                  </li>  
                  <li>
                      <a href=""> Girl </a>
                  </li> 
                  <li>
                      <a href=""> Sale </a>
                  </li> 
                  <li>
                      <a href=""> Blog </a>
                  </li> 
                  <li>
                      <a href=""> Pages </a>
                  </li>
                  <li>
                      <a href=""> Contact </a>
                  </li>   
                        
                    
                </ul>
                <div class="menu-bar d-md-none d-sm-block">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>
</header>

<section class="form pt-3 pb-3">
  <div class="container">
      <div class="row">
          <div class="col-md-8 offset-md-2">
              <form name="add_name" id="add_name" action="formdata.php" method="post">
                <fieldset>
                  <legend>Product Type</legend>
                  <div id="dynamic_field">
                    <div class="form-row">
                      <div class="form-group col-md-11 col-10">
                        <label>Product Type</label>
                        <input type="text" name="product_type[]" required placeholder="Enter Product Type" class="form-control"/>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="button" name="add" id="add" class="btn btn-primary mr-3" value="Add More Type">
                      <!-- <button type="button" name="add" id="add" class="btn btn-primary">Add More Type</button> -->
                      <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit">
                  </div>
                </fieldset>
              </form>
          </div>
      </div>
  </div>
</section>


<footer class="footer-area text-center">
    <img src="assets/img/zpc-logo.png" alt="Zeropoint" class="footer-logo">
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    var i = 1;

    $("#add").click(function(){
      i++;
      $('#dynamic_field').append(
        '<div class="form-row" id="row'+i+'"><div class="form-group col-md-11 col-10"><input type="text" name="product_type[]" required placeholder="Enter Product Type" class="form-control"/></div><div class="form-group col-md-1 col-2"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div></div>'
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




