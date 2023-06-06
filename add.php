<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Inquiry || Saibaba Institute</title>
    <?php include './include/headlink.php'?>
</head>
<body>
  <!-- Header section start -->
   <?php include './include/header.php' ?>
  <!-- Header section end -->


    <!-- Breadcrumb section start -->

      <div class="inner-banner">
        <div class="bannertext pt-5">
         <h1 class="fw-bold text-center mt-5">ADMISSION INQUIRY</h1>
         <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-2">
            <li class="breadcrumb-item ms-auto">
              <a href="index.php">Home</a></li>
            <li class="breadcrumb-item me-auto active" aria-current="page">
              Admission Inquiry
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
                <h4 class="1h-1">Admission Inquiry</h4>
                <hr>
                <h6 class="1h-1">School:</h6>
                <p>Saibaba School</p>
                <label for="formGroupExample1" class="form-lable">
                  <span style="color: red;">*</span>
                  Class:
                </label>
                <select class="form-select mb-3" aria-label="Default select example" id="formGroupExample1">
                  <option selected>Select Class</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                <label for="formGroupExample1" class="form-lable">
                  <span style="color: red;">*</span>
                  Section:
                </label>
                <select class="form-select mb-3" aria-label="Default select example" id="formGroupExample1">
                  <option selected>Select Section</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Name">
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInpu2" class="form-label">Phone:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Phonenumber">
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput3" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Enter Your Email">
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput4" class="form-label">Reference:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput4" placeholder="Enter Reference">
                  </div>
                  <label for="floatingTextarea" class="mb-3">Message:</label>
                  <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px;"></textarea>
                  <label for="floatingTextarea2">Enter Message</label>
                </div>
                <hr>
                <button type="submit" class="btn btn-info rounded-0 text-light fw-bold">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </form>

    <!-- form section end -->


  <!-- Footer Section Start -->
  
     <?php include './include/footer.php'?>

  <!-- Footer Section End -->


  
    
  <?php include './include/headlink.php'?>
</body>
</html>