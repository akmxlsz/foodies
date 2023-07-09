@extends('master.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>



    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">

            <p>This Is Your<span> Order History</span></p>

        </div>


        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">Order Date & Time</th>
                <th scope="col">Order</th>
              </tr>
            </thead>
            <tbody>
                {{--@foreach ($order as $item)
                <tr>
                  <th scope="row">{{ $item->created_at }}</th>
                  <td>{{ $item->order }}</td>

                </tr>
                @endforeach--}}
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
