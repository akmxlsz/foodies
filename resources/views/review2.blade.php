@extends('master.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>



    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">

            <p>Your Order<span> History</span></p>

        </div>


        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Review</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($review2 as $item)
                <tr>
                  <th scope="row">{{ $item->name }}</th>
                  <td>{{ $item->review }}</td>

                </tr>
                @endforeach
              {{--<tr>
                <th scope="row">Mohd Khairul Azmi</th>
                <td>mkazmi@iium.edu.my</td>
                <td>019-2839481</td>
                <td>Hassan</td>
              </tr>
              <tr>
                <th scope="row">Mohd Khairul Azmi</th>
                <td>mkazmi@iium.edu.my</td>
                <td>019-2839481</td>
                <td>Hassan</td>
              </tr>
              <tr>
                <th scope="row">Mohd Khairul Azmi</th>
                <td>mkazmi@iium.edu.my</td>
                <td>019-2839481</td>
                <td>Hassan</td>
              </tr>
              <tr>
                <th scope="row">Mohd Khairul Azmi</th>
                <td>mkazmi@iium.edu.my</td>
                <td>019-2839481</td>
                <td>Hassan</td>
              </tr>--}}

            </tbody>
          </table>



      </div>
    </section><!-- End Book A Table Section -->





  </main><!-- End #main -->

</body>

</html>
@endsection
