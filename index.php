<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include './include/headlink.php' ?>
</head>

<body>

  <!-- Header section start -->
   <?php include './include/header.php' ?>
  <!-- Header section end -->

  <!-- Slider section start -->

  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="./assest/img/banner1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="./assest/img/banner2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="./assest/img/banner4.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Slider section end -->

  <!-- Mission section start -->

  <div class="container">
    <div class="row py-5">
      <div class="col-md-7">
        <div class="ourmission me-md-5 py-4">
          <h1 class="text-center fw-bold">Our Mission</h1>
          <p class="fs-5 fw-semibold" style="text-align: justify;">
            R.P.E School's vision is to build a strong, vibrant community of individuals relentless in their pursuit of
            excellence. Its mission is to nurture enquiring minds with integrity and strength of character, capable of
            setting new benchmarks and reaching unprecedented heights. Imbued with creativity, passion, courage, and
            perseverance, each student under our school will learn to value and respect diversity while upholding his or
            her own identity. Our efforts will always be directed towards identifying their potential and empowering
            them to be dynamic, successful and responsible citizens.
          </p>
        </div>
      </div>
      <div class="col-md-5">
        <div class="enqform rounded p-4" style="box-shadow: 0px 0px 10px 2px rgb(225,222,222);">
          <form class="row">
            <div class="col-12 mb-3">
              <label for="inputText" class="form-label">Your Name</label>
              <input type="text" class="form-control" id="inputText">
            </div>
            <div class="col-12">
              <label for="inputEmail4" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="inputEmail4">
              <div id="emailHelp" class="form-text mb-3">
                We'll never share your email with anyone else.
              </div>
              <div class="col-12 mb-3">
                <label for="inputText" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="inputText">
              </div>
              <div class="col-12 mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Your message (optional)</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Mission section end -->

  <!-- Footer Section Start -->
  <?php include './include/footer.php' ?>
  <!-- Footer Section End -->




  <?php include './include/footlink.php' ?>
</body>

</html>