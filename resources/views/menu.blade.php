@extends('master.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>



    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">

          <p>Select Your <span>Desired Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Foods</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Drinks</h4>
            </a><!-- End tab nav item -->



        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Foods</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Fried Taufu</h4>
                <p class="price">
                  RM5.95
                </p>
                <a type="submit" class="buttonreview" href="/review">Read Review</a>
                <a type="submit" class="buttonreview" href="/add-review">Write Review</a>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Mendi Shawarma</h4>
                <p class="price">
                  RM14.95
                </p>
                <a type="submit" class="buttonreview" href="/review2">Read Review</a>
                <a type="submit" class="buttonreview" href="/add-review2">Write Review</a>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Cabbage Pasta</h4>

                <p class="price">
                  RM8.95
                </p>
                <a type="submit" class="buttonreview" href="/review3">Read Review</a>
                <a type="submit" class="buttonreview" href="/add-review3">Write Review</a>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Chicken Chop</h4>

                <p class="price">
                  RM12.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Fingers Chocolate</h4>

                <p class="price">
                  RM12.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Brazilian Vegetables</h4>

                <p class="price">
                  RM9.95
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Drinks</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/IMG_4194.PNG" class="glightbox"><img src="assets/img/menu/IMG_4194.PNG" class="menu-img img-fluid" alt=""></a>
                <h4>Magnam Tiste</h4>

                <p class="price">
                  RM5.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/IMG_4193.PNG" class="glightbox"><img src="assets/img/menu/IMG_4193.PNG" class="menu-img img-fluid" alt=""></a>
                <h4>Iced Americano</h4>

                <p class="price">
                  RM14.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/IMG_4198.PNG" class="glightbox"><img src="assets/img/menu/IMG_4198.PNG" class="menu-img img-fluid" alt=""></a>
                <h4>Americano Coffee</h4>

                <p class="price">
                  RM8.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/IMG_4196.PNG" class="glightbox"><img src="assets/img/menu/IMG_4196.PNG" class="menu-img img-fluid" alt=""></a>
                <h4>Italian Cappucino</h4>

                <p class="price">
                  RM12.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/IMG_4195.PNG" class="glightbox"><img src="assets/img/menu/IMG_4195.PNG" class="menu-img img-fluid" alt=""></a>
                <h4>Ice Blended Strawberry</h4>

                <p class="price">
                  RM12.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/IMG_4197.PNG" class="glightbox"><img src="assets/img/menu/IMG_4197.PNG" class="menu-img img-fluid" alt=""></a>
                <h4>Iced Blended Mango</h4>

                <p class="price">
                  RM9.95
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->





  </main><!-- End #main -->

</body>

</html>
@endsection
