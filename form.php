

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<link rel="stylesheet" href="form.css">


</head>
<body>
  <div class="container">
     <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">

        <h1>LOGIN FORM</h1>

          <form action="form1.php"  method="post">
            <!-- Email input -->
            <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Username</label>
              <input type="text" name="username" id="form2Example1" class="form-control" />
              
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example2">Password</label>
              <input type="password" name="password" id="form2Example2" class="form-control"  >

              <input type="checkbox" onclick="myFunction()">Show Password
              <script>
              function myFunction() {
                var x = document.getElementById("form2Example2");
                if (x.type === "password") {
                  x.type = "text";
                } else {
                  x.type = "password";
                }
              }
              </script>
             
            </div>

            
            <input type="submit" name="submit" value="Register">

            

          </form>
        </div>
    </div>

         

   
    
</body>
</html>
<?php

