<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!-- bootstrap-links -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
  </head>
  <body>
  <!-- navbar -->
  <?php include("./lib/nav.php") ?>
  
  <!-- contact -->
    <div class="container">
      <h1>Contact</h1>
      <div class="row">
        <div class="col-md-7">
          <h4>Get in Touch</h4>
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name</label>
            <input
              type="text"
              class="form-control"
              id="formGroupExampleInput"
              placeholder="Enter your name"
            />
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Email</label>
            <input
              type="text"
              class="form-control"
              id="formGroupExampleInput2"
              placeholder="Enter your email"
            />
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label"
              >Contact Number</label
            >
            <input
              type="text"
              class="form-control"
              id="formGroupExampleInput2"
              placeholder="Enter your number"
            />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"
              >Message</label
            >
            <textarea
              class="form-control"
              id="exampleFormControlTextarea1"
              rows="3"
            ></textarea>
          </div>
          <button class="btn btn-primary" id="button">Send</button>
        </div>
        <div class="col-md-5">
          <h4>Our Contact</h4>
          <hr />
          <div class="mt-4">
            <div class="d-flex">
              <i class="bi bi-geo-alt-fill"></i>
              <p>Address: 198 West 21th Street, Suite 721 New York NY 10016</p>
            </div>
            <hr />
            <div class="d-flex">
              <i class="bi bi-telephone-fill"></i>
              <p>Contact :- 8888888888</p>
            </div>
            <hr />
            <div class="d-flex">
              <i class="bi bi-envelope-fill"></i>
              <p>Email:- florombridel@gmail.com</p>
            </div>
            <hr />
            <div class="d-flex">
              <i class="bi bi-browser-chrome"></i>
              <p>Website: www.florom.com</p>
            </div>
            <hr />
          </div>
        </div>
      </div>
    </div>
  </body>
</html>