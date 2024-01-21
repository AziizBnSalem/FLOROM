<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!-- bootstrap-links -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!-- fontawsom link -->
    <script src="https://kit.fontawesome.com/1ed826f313.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <!--navbar start-->
  <?php include("./lib/nav.php") ?>
  <!--navbar end-->
    <!-- carousel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="image/pexels-kyle-roxas-2122361.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h1>First slide label</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="image/pexels-sergio-souza-1779491.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h1>Second slide label</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="image/pexels-pixabay-208215.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h1>Third slide label</h1>
          </div>
        </div>
      </div>
    </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleFade"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleFade"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

      <!-- wrapper -->
      <div class="quot">
        <h1>Love Brought You Here. Us Too.</h1>
        <p>
          Nothing matters more to us than connection. Allure Bridals strives to
          provide everyone — from the engaged to members of the wedding party —
          gorgeous wedding wear for every look and budget. We have something for
          everyone: iconic Mikado ballgowns, luxurious velvet tuxedos, sleek
          minimalist crepe and whispers of chiffon. Designed from the heart, to
          make your wedding utterly unforgettable
        </p>
      </div>

      <div class="wrapper">
        <div class="photobanner">
        <img class="first" src="image/pexels-asdrubal-luna-12030826.jpg" alt="" />
        <img src="image/pexels-kyle-roxas-2122350.jpg" alt="" />
        <img src="image/pexels-david-guerrero-10123118.jpg" alt="" />
        <img src="image/pexels-pixabay-157997.jpg" alt="" />
        <img src="image/pexels-ömer-çelik-17542176.jpg" alt="" />
        <img src="image/pexels-john-ray-ebora-3863802.jpg" alt="" />
        <img src="image/pexels-ali-salah-photographie-16903589.jpg" alt="" />
        <img src="image/pexels-transtudios-photography-&-video-3684519.jpg" alt="" />
        <img src="image/pexels-asdrubal-luna-12030866.jpg" alt="" />
        <img src="image/pexels-irina-iriser-876439.jpg" alt="" />
      </div>
      </div>


      <div class="bride">
        <div class="left">
             <h2>YOUR DREAM WEDDING DRESS FOR LESS, NO MATTER THE SIZE</h2>
                 <p>One of the best things about choosing an Avery Austin designer wedding gown or bridesmaid dress is the affordability of these gorgeous styles. Not only do you get to avoid the salon markup fees traditionally applied to bridal gowns, but you’re also paying the same price for your chosen style no matter your size. We believe that sizing should be inclusive for all women, so if you’re shopping for plus-size wedding dresses or plus-size bridesmaid dresses, you and your wedding party won’t be charged more.</p>
                    <a href="#" class="bn3">See More</a>
        </div>
        <div class="right">
           <img src="image/pexels-bach-hanzo-3546714.jpg" alt=""/>
        </div>
      </div>

      <div class="groom" id="groom">
        <div class="g-left">
          <img src="image/pexels-ömer-çelik-17542178.jpg">
        </div>
        <div class="g-right">
          <h2>Groom</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ut earum dolorum soluta placeat, nostrum modi aspernatur culpa ad voluptatibus quibusdam laboriosam sed saepe aperiam blanditiis dignissimos libero ducimus numquam.</p>
          <a href="#" class="bn3">See More</a>
        </div>
      </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
