<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Demo</title>
  </head>
  <body>
   <div class="container">
   </br></br></br>
  <div class="row">
    <div class="col-sm-4"> 
    </div>
    <div class="col-sm-4">
     <div class="container">
      <form method="post" action="pay.php">
          <div class="form-group">
         <label>Customer Name</label>
         <input type="text" name="customer_name" class="form-control">
       </div>
       <div class="form-group">
         <label>Customer Email</label>
         <input type="text" name="customer_email" class="form-control">
       </div>
       <div class="form-group">
         <label>Customer Mobile</label>
         <input type="text" name="customer_mobile" class="form-control">
       </div>
       <div class="form-group">
         <label>Paymwent Amount</label>
         <input type="text" name="pay_amt" class="form-control">
       </div>
       <input type="submit" name="submit" class="btn btn-info">
      </form>
     </div>
    </div>
    <div class="col-sm-4">
      
    </div>
  </div>
</div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>