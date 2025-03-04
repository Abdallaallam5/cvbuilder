@extends('backend.dashbord')
@section('main')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">

          <div class="row">

            <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-header">
                  <strong class="card-title">Baisc Information</strong>
                </div>
                <div class="card-body">
                  <form class="needs-validation" method="POSt" action="{{route('save.info')}}" novalidate>
                    @csrf

                    <div class="form-group mb-3">
                      <label for="address-wpalaceholder">Name</label>
                      <input type="text" name="name" id="address-wpalaceholder" class="form-control"
                        placeholder="Enter your Name">
                        @error('name')
    <span class="invalid-feedback">{{ $message }}</span>
@enderror

                    </div>

                    <div class="form-row">
                      <div class="col-md-8 mb-3">
                        <label for="exampleInputEmail2">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail2"
                          aria-describedby="emailHelp1" required>

                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="custom-phone">Phone Number</label>
                        <input class="form-control input-phoneus" name="phone" id="custom-phone" maxlength="14" required>

                      </div>
                    </div> <!-- /.form-row -->
                    <div class="form-group mb-3">
                      <label for="address-wpalaceholder">Address</label>
                      <input type="text" name="address" id="address-wpalaceholder" class="form-control"
                        placeholder="Enter your address">

                    </div>
                    <div class="form-group mb-3">
                      <label for="address-wpalaceholder">city</label>
                      <input type="text" name="city" id="address-wpalaceholder" class="form-control"
                        placeholder="Enter your city">

                    </div>

                   





                    <button class="btn btn-primary" type="submit">Save</button>
                  </form>
                </div> <!-- /.card-body -->
              </div> <!-- /.card -->
            </div> <!-- /.col -->
          </div> <!-- end section -->
        </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->

  </main> <!-- main -->
@endsection