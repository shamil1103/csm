
@extends("csrm.adminpanel.layouts.admin_master")
@section("page-title", "নোয়াখালী জেলা")

@section('page-style')

    <style>

    </style>

@endsection

@section('page-main-content')
 <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content text-center mx-auto mt-0 pt-0">
                  <div class="logo mt-0 pt-0">
                    <img alt="Dashboard Logo" class="img-fluid rounded-circle" src="{{ asset('assets/adminpanel/img/dashboard.jpg') }}">
                  </div>
                  <p class="text-white">নোয়াখালী জেলা পরিষদ</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="login-form" action="" method="post">
                    <div class="form-group">
                      <!-- <span class="input-group-text"><i class="lnr lnr-user"></i></span> -->
                      <input id="login-username" type="text" name="userName" required="" class="input-material">
                      <label for="login-username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <!-- <span class="input-group-text"><i class="lnr lnr-lock"></i></span> -->
                      <input id="login-password" type="password" name="loginPassword" required="" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <!-- <div class="form-group row"> -->
                        <!-- <div class="col-12" style="cursor: pointer;"> -->
                          <!-- <div class="custom-control custom-checkbox mr-sm-2"> -->
                            <!-- <input type="checkbox" class="custom-control-input" id="customControlAutosizing"> -->
                            <!-- <label class="custom-control-label text-muted pt-1" for="customControlAutosizing">Remember me</label> -->
                          <!-- </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
                    <input type="submit" class="btn btn-primary" value="Login" id="login" style="border-bottom: 4px solid #00d03b;">
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form>
                  <!-- <a href="#" class="forgot-pass">Forgot Password?</a> -->
                  <a href="#" class="text-muted"><i class="lnr lnr-lock m-r-5"></i> Forgot password?</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center my-3">
        <p>Design and Develop by <a href="#" class="external">BST</a></p>
        <!-- <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p> -->
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
@endsection

@section('page-script')
    <script>

    </script>
@endsection