
@extends("csrm.adminpanel.layouts.admin_master")
@section("page-title", "নোয়াখালী জেলা")

@section('page-style')

    <style>

    </style>

@endsection
@section("page-header-title", "লগইন সেটিং")
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="/">হোম/</a></li>
    <li class="breadcrumb-item active">লগইন প্যানেল তৈরি</li>
@endsection



                <!-- Page Header-->
                <!-- <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">লগইন সেটিং</h2>
                    </div>
                </header>
                <ul class="breadcrumb">
                    <div class="container-fluid">
                        <li class="breadcrumb-item"><a href="index.html">হোম</a></li>
                        <li class="breadcrumb-item active">লগইন প্যানেল তৈরি</li>
                    </div>
                </ul> -->
                
 @section('page-main-content')
                <!-- Forms Section-->
                <section class="forms">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- create panel Form-->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">এডমিন/ইউজার লগইন প্যানেল তৈরি</h3>
                                    </div>
                                    <div class="card-body d-flex align-items-center">
                                        <form class="form-horizontal mx-auto" action="{{ route('create.login') }}" method="post">
                                            {{ csrf_field() }}
                                            <!-- <div class="form-group row">
                                                <label class="col-sm-4 form-control-label pt-2">ইউজার ছবি</label>
                                                <div class="col-sm-8">
                                                    <input type="file" name="pic" accept="image/">
                                                </div>
                                            </div> -->
                                            <!-- <div class="form-group row">
                                                <label class="col-sm-4 form-control-label pt-2">প্যানেল টাইপ</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control custom-select" id="formCustomSelect">
                                                        <option selected>... choose ...</option>
                                                        <option value="1">Admin</option>
                                                        <option value="2">User</option>
                                                    </select>
                                                </div>
                                            </div> -->
                                            <div class="form-group row">
                                                <label class="col-sm-4 form-control-label pt-2">ইউজার নাম</label>
                                                <div class="col-sm-8">
                                                    <input name="userName" id="inputHorizontalWarning" type="text" placeholder="ইউজার নাম" class="form-control form-control-warning" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 form-control-label pt-2">পাসওয়ার্ড</label>
                                                <div class="col-sm-8">
                                                    <input name="password" id="inputHorizontalWarning" type="password" placeholder="পাসওয়ার্ড" class="form-control form-control-warning" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 form-control-label pt-2">নিশ্চিত পাসওয়ার্ড</label>
                                                <div class="col-sm-8">
                                                    <input name="conPassword" id="inputHorizontalWarning" type="password" placeholder="নিশ্চিত পাসওয়ার্ড" class="form-control form-control-warning" required>
                                                </div>
                                            </div>
                                            <div class="form-group row text-center m-5">
                                                <div class="col-sm-12">
                                                    <input type="submit" value="Save" class="btn btn-primary">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- test type and name table -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">এডমিন/ইউজার লগইন প্যানেল এর তথ্য দেখা</h3>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped table-bordered table-responsive-md table-md table-hover">
                                            <thead class="text-dark font-weight-bold">
                                                <tr>
                                                    <th>SL</th>
                                                    <th>ছবি</th>
                                                    <th>প্যানেল টাইপ</th>
                                                    <th>ইউজার নাম</th>
                                                    <th>পাসওয়ার্ড</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td></td>
                                                    <td>admin</td>
                                                    <td>কাবির খান</td>
                                                    <td>১১০৩</td>
                                                    <td>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
@endsection

@section('page-script')
    <script>

    </script>
@endsection