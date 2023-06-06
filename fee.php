<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fee Submission | saibaba school</title>
       <?php include './include/headlink.php'?>
</head>
<body>
    <!-- Header section start -->
       <?php include './include/header.php' ?>
    <!-- Header section end -->
       
    <!-- Breadcrumb section start -->

    <div class="inner-banner">
        <div class="bannertext pt-5">
         <h1 class="fw-bold text-center mt-5">Fee Submission</h1>
         <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-2">
            <li class="breadcrumb-item ms-auto">
              <a href="index.php">Home</a></li>
            <li class="breadcrumb-item me-auto active" aria-current="page">
              Fee Submission
            </li>
          </ol>
         </nav> 
        </div>
      </div>

    <!-- Breadcrumb section end -->

        <!-- form section start -->

        <form action method>
        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto my-4">
              <div class="form border rounded p-4" style="box-shadow: 0px 0px 10px 2px rgb(225, 222, 222);">
                <h4 class="1h-1">Online Fee Submission</h4>
                <hr>
                <h6 class="1h-1">School:</h6>
                <p>Saibaba School</p>
                <label for="formGroupExample1" class="form-lable">
                  Session
                </label>
                <select class="form-select mb-3" aria-label="Default select example" id="formGroupExample1">
                  <option selected>2023-2024</option>
                  <option value="1">2024-2025</option>
                </select>
                <label for="formGroupExample1" class="form-lable">
                  Class:
                </label>
                <select class="form-select mb-3" aria-label="Default select example" id="formGroupExample1">
                  <option selected>Select Class</option>
                  <option value="1">11th</option>
                  <option value="1">12th</option>
                </select>
                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Name">
                  </div>
                  <h6 class="fw-bold">OR</h6>
                  <div class="mb-3">
                    <label for="formGroupExampleInpu2" class="form-label">Admission Number:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Admission Number">
                  </div>
                <button type="submit" class="btn btn-info rounded-0 text-light fw-bold">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </form>

    <!-- form section end -->

     <!-- footer section start -->
        <?php include './include/footer.php'?>
     <!-- footer section end -->

   
  

  <?php include './include/footlink.php'?>  
</body>
</html>