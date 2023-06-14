@extends('master.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>



    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">

          <p>Write Your Review On <span>Fried Taufu</p>
        </div>

        <div class="row g-0">



            <form action="addreview" method="post" role="form" enctype="multipart/form-data">
                @csrf
                <div class="row">

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control" name="review" id="review" placeholder="Your Review" required>
                    </div>
                  </div>

                  <div class="col-md-12 text-center">
                    {{-- <button type="submit" class="button button-a button-big button-rouded">Save</button> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>

          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section><!-- End Book A Table Section -->





  </main><!-- End #main -->

</body>

</html>
@endsection
