@extends('master.layout')

@section('content')

<!-- ======= Student Section ======= -->
<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      List of Students
                    </h5>
                  </div>

                  <button onclick="document.location='/add-student'" type="button" class="btn btn-primary">Add New Records</button>

                  <table class="table table-dark table-striped">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone No</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                         <tr>
                            <td>{{ $student->matric_id }}</td>
                            <td>{{ $student->first_name }}</td>
                            <td>{{ $student->last_name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone_no }}</td>
                         </tr>
                        @endforeach
                      {{--<tr>
                        <<th scope="row">1</th>
                        <td>Husna</td>
                        <td>Nadhirah</td>
                        <td>husnanadhirah@gmail.com</td>
                        <td>0123456789</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Naddy</td>
                        <td>Haikal</td>
                        <td>nadeeys@gmail.com</td>
                        <td>0198765432</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Dee</td>
                        <td>Sushi</td>
                        <td>deesushi@gmail.com</td>
                        <td>0113498756</td>
                      </tr>--}}

                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->

@endsection
