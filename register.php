<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <?php include './include/headlink.php'?>
</head>
<body>
    <!-- Header section start -->
    <?php include './include/header.php'?>
    <!-- Header section end -->
       
    <!-- Breadcrumb section start -->

    <div class="inner-banner">
        <div class="bannertext pt-5">
         <h1 class="fw-bold text-center mt-5">REGISTER</h1>
         <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-2">
            <li class="breadcrumb-item ms-auto">
              <a href="index.php">Home</a></li>
            <li class="breadcrumb-item me-auto active" aria-current="page">
            REGISTER
            </li>
          </ol>
         </nav> 
        </div>
      </div>

    <!-- Breadcrumb section end -->

        <!-- form section start -->
        <div class="container">
          <div class="row">
            <div class="col-md-12 mx-auto my-4">
              <div class="form border rounded p-4" style="box-shadow: 0px 0px 10px 2px rgb(225, 222, 222);">
              <h4 class="1h-1">Online Registration</h4>
                <hr>
                <h6 class="1h-1">School:</h6>
                <p>Saibaba School</p>
                <h6 class="1h-1">Personal Detail</h6>
                <hr>
                <div class="row">
                 <div class="col-md-4">
                 <form action="">
                  <label for="" class="pb-1 text-danger">*</label>
                  <label for="" class="pb-1">Student Name:</label>
                  <input type="text" placeholder="Enter Student Name" name="studentname" class="form-control">
                 </form>
                 </div>
                 <div class="col-md-4">
                 <form action="">
                  <label for="" class="pb-1 text-danger">*</label>
                  <label for="" class="pb-1">Gender:</label>
                  <select name="" id="" class="form-control" name="gen">
                    <option value="">Select Gender</option>
                    <option value="">Male</option>
                    <option value="">Female</option>
                    <option value="">Other</option>
                  </select>
                 </form>
                 </div>
                 <div class="col-md-4">
                 <form action="">
                  <label for="" class="pb-1">Date of Birth:</label>
                  <input type="date" name="dob" class="form-control">
                 </form>
                 </div>
                </div>
                <div class="row">
                 <div class="col-md-4 py-2">
                 <form action="">
                  <label for="" class="pb-1 text-danger">*</label>
                  <label for="" class="pb-1">Religion:</label>
                  <input type="text" placeholder="Enter Religion" name="religion" class="form-control">
                 </form>
                 </div>
                 <div class="col-md-4 py-2">
                 <form action="">
                  <label for="" class="pb-1 text-danger">*</label>
                  <label for="" class="pb-1">Caste:</label>
                  <input type="text" placeholder="Enter Caste" name="caste" class="form-control">
                 </form>
                 </div>
                 <div class="col-md-4 py-2">
                 <form action="">
                  <label for="" class="pb-1">Blood Group:</label>
                  <input type="text" name="blood" class="form-control" placeholder="Blood Group">
                 </form>
                 </div>
                </div>
                <div class="row">
                 <div class="col-md-4 py-2">
                 <form action="">
                  <label for="" class="pb-1">Address:</label><br>
                  <textarea name="" id="" cols="30" rows="4" class="px-1">Address</textarea>
                 </form>
                 </div>
                 <div class="col-md-4 py-2">
                 <form action="">
                  <label for="" class="pb-1">Phone:</label>
                  <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone Number">
                 </form>
                 </div>
                 <div class="col-md-4 py-2">
                 <form action="">
                  <label for="" class="pb-1">Email:</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                 </form>
                 </div>
                </div> 
                <button type="submit" class="btn btn-info rounded-0 text-light fw-bold">Submit</button>
              </div>
            </div>
          </div>
        </div>

    <!-- form section end -->

     <!-- footer section start -->
     <?php include './include/footer.php'?>
     <!-- footer section end -->

   
  

     <?php include './include/footlink.php'?>
</body>
</html>