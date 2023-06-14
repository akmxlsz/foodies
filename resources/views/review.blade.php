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
                <th scope="col">Matric ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone No</th>
              </tr>
            </thead>
            <tbody>
                {{--@foreach ($order as $item)
                <tr>
                  <th scope="row">{{ $item->created_at }}</th>
                  <td>{{ $item->order }}</td>

                </tr>
                @endforeach--}}
              --<tr>
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
              </tr>

            </tbody>
          </table>



      </div>
    </section><!-- End Book A Table Section -->





  </main><!-- End #main -->

</body>

</html>
@endsection
