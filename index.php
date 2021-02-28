<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Estimation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
<!-- site header -->
<header class="header-area">
    <!-- menu area -->
    <nav class="menu-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
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
          </div>
        </div>
    </nav>
</header> <!-- end site header -->

<!-- sidebar menu -->
<aside class="mobile-menu-area">
    <div class="close-mobile-menu">
        <a href="javascript:void(0);">
          <i class="fas fa-times"></i>
        </a>
    </div>
    <!-- side-mobile-menu start -->
    <nav class="mobile-menu">
        <ul id="mobile-menu-active">
          <li>
              <a href="/">Home</a>
          </li>
          <li>
              <a href="/collections/girl">Girl</a>
          </li>
          <li>
              <a href="/collections/sale">Sale</a>
          </li>
          <li>
              <a href="/blogs/news">Blog</a>
          </li>
          <li>
              <a href="/pages/pages">Pages</a>
          </li>
          <li>
              <a href="/pages/contact">Contact</a>
          </li>
        </ul>
    </nav>
    <!-- side-mobile-menu end -->
</aside> <!-- end sidebar menu -->

<!-- add item btn -->
<section class="add-item">
  <div class="container">
    <div class="row">
      <div class="col-md-12 titile_bar text-center">
        <button class="btn btn-info btn-md mt-4 mb-3 trigger" title="New Item">
          <span class="glyphicon glyphicon-tag">&nbsp;</span>New Item
        </button>
      </div>
    </div>
  </div>
</section>
<!-- end add item btn -->

<!-- product type form area -->
<section class="form pt-3 pb-3 modal">
  <div class="modal-content">
    <span class="close-button">X</span>
      <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form name="add_name" id="add_name" action="action.php" method="post">
                  <fieldset>
                    <legend>Product Type</legend>
                    <div id="dynamic_field">
                      <div class="form-row">
                        <div class="form-group col-12">
                          <input type="text" name="producttype[]" required placeholder="Enter Product Type" class="form-control"/>
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
  </div>
</section><!-- end form area -->

<!-- product type output form area -->
<section class="table_holder product-type-out pb-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Product Type</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
              <!-- form output -->
              <?php
                // db connection
                include_once('config.php');
                // get data from DB & show
                $sql = "SELECT id, product_type FROM product_type";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)) {
              ?>
              <tr>
                <th scope="row"><?php echo $row["id"]; ?></th>
                <td><?php echo $row["product_type"]; ?></td>
                <td><i class="fas fa-edit"></i></td>
              </tr>
              <?php      
                  }
                  mysqli_close($conn);
                } else {
                  echo "0 results found";
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end product type output form area -->


<!-- footer area -->
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




