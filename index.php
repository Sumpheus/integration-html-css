
<?php

  include "header.php"; ?>


  <main class="container">
    <section class="jumbotron">
      <h1 class="display-4">Hello, world!</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <aside class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></aside>
    </section>
    <div class="row">
      <div class="col-sm d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
          <img src="img/img_html.png" class="card-img-top" alt="img_html">
          <div class="card-body">
            <h5 class="card-title">html</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="text-center"><a href="#" class="btn btn-primary">Go somewhere</a></div>
          </div>
        </div>
      </div>
      <div class="col-sm d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/img_terminal.jpg" class="d-block w-100 card-img-top" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/img_bootstrap.jpg" class="d-block w-100 card-img-top" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/img_html.png" class="d-block w-100 card-img-top" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">css</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="text-center"><a href="#" class="btn btn-primary">Go somewhere</a></div>
          </div>
        </div>
      </div>
      <div class="col-sm d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
          <img src="img/img_js.png" class="card-img-top" alt="img_js">
          <div class="card-body">
            <h5 class="card-title">javascript</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="text-center"><a href="#" class="btn btn-primary">Go somewhere</a></div>
          </div>
        </div>
      </div>
      <div class="col-sm d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
          <img src="img/img_terminal.jpg" class="card-img-top" alt="img_terminal">
          <div class="card-body">
            <h5 class="card-title">command line</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="text-center"><a href="#" class="btn btn-primary">Go somewhere</a></div>
          </div>
        </div>
      </div>
      <div class="col-sm d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
          <img src="img/img_git&github.jpeg" class="card-img-top" alt="img_git&github">
          <div class="card-body">
            <h5 class="card-title">git & github</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="text-center"><a href="#" class="btn btn-primary">Go somewhere</a></div>
          </div>
        </div>
      </div>
      <div class="col-sm d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
          <img src="img/img_bootstrap.jpg" class="card-img-top" alt="img_bootstrap">
          <div class="card-body">
            <h5 class="card-title">bootstrap</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="text-center"><a href="#" class="btn btn-primary">Go somewhere</a></div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include "footer.php";
