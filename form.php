<?php
  include "conn.php";
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pwd=$_POST['r-pwd'];
    // echo "<script>alert('hello $name');</script>" ;
    $sql="INSERT INTO students(stdName, stdEmail, stdPwd) VALUES('$name','$email','$pwd')";
    if(!mysqli_query($conn,$sql)){
      die(mysqli_error());
    }else{
      echo "<script>alert('data inserted');</script>" ;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
      
                      <form class="mx-1 mx-md-4" method="post">
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div data-mdb-input-init class="form-outline flex-fill mb-0">
                            <input type="text" id="form3Example1c" name="name" class="form-control" />
                            <label class="form-label" for="form3Example1c">Your Name</label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div data-mdb-input-init class="form-outline flex-fill mb-0">
                            <input type="email" id="form3Example3c" name="email" class="form-control" />
                            <label class="form-label" for="form3Example3c">Your Email</label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div data-mdb-input-init class="form-outline flex-fill mb-0">
                            <input type="password" id="form3Example4c" name="pwd" class="form-control" />
                            <label class="form-label" for="form3Example4c">Password</label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div data-mdb-input-init class="form-outline flex-fill mb-0">
                            <input type="password" id="form3Example4cd" name="r-pwd" class="form-control" />
                            <label class="form-label" for="form3Example4cd">Repeat your password</label>
                          </div>
                        </div>
      
                        <div class="form-check d-flex justify-content-center mb-5">
                          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                          <label class="form-check-label" for="form2Example3">
                            I agree all statements in <a href="#!">Terms of service</a>
                          </label>
                        </div>
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button  type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Register</button>
                        </div>
      
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="data:image/png;base64,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"
                        class="img-fluid" alt="Sample image">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>