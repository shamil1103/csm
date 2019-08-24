
@extends("csrm.adminpanel.layouts.admin_master")
@section("page-title", "নোয়াখালী জেলা")

@section('page-style')

    <style>

    </style>

@endsection
@section("page-header-title", "জেলা ও থানা সেটিং")
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">হোম</a></li>
    <li class="breadcrumb-item active">জেলা ও থানা এর নাম তৈরি</li> 
@endsection


                <!-- Page Header-->
                <!-- <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">জেলা, থানা ও ইউনিয়ন সেটিং</h2>
                    </div>
                </header>
                <ul class="breadcrumb">
                    <div class="container-fluid">
                        <li class="breadcrumb-item"><a href="index.html">হোম</a></li>
                        <li class="breadcrumb-item active">জেলা, থানা ও ইউনিয়ন এর নাম তৈরি</li>
                    </div>
                </ul> -->

 @section('page-main-content')
                <!-- Forms Section-->
                <section class="forms">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- test type Form-->
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">জেলা তৈরি</h3>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-horizontal mx-auto" action="{{ route('create.zelathana') }}" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <label class="col-sm-4 form-control-label pt-2">জেলার নাম</label>
                                                <div class="col-sm-8">
                                                    <input name="zelaName" id="inputHorizontalSuccess" type="text" placeholder="জেলার নাম" class="form-control form-control-success" required>
                                                </div>
                                            </div>
                                            <div class="form-group row m-5 pb-5">
                                                <div class="col-sm-9 offset-sm-3">
                                                    <input type="submit" value="Save" class="btn btn-primary">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">থানা তৈরি</h3>
                                    </div>
                                    <div class="card-body">
                                         <form class="form-horizontal mx-auto" action="{{ route('create.zelathana') }}" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <label class="col-sm-4 form-control-label pt-2">থানার নাম</label>
                                                <div class="col-sm-8">
                                                    <input name="thanaName" id="inputHorizontalSuccess" type="text" placeholder="থানার নাম" class="form-control form-control-success" required>
                                                </div>
                                            </div>
                                            <div class="form-group row m-5 pb-5">
                                                <div class="col-sm-9 offset-sm-3">
                                                    <input type="submit" value="Save" class="btn btn-primary">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- test name Form-->
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">উপজেলা ও ইউনিয়ন তৈরি</h3>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-horizontal mx-auto" action="{{ route('create.zelathana') }}" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <label class="col-sm-4 form-control-label pt-2">জেলার নাম</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control custom-select" id="formCustomSelect">
                                                        <option selected>... পছন্দ ...</option>
                                                    <?php
                                                        if(count($zelaData) > 0) {
                                                            foreach ($zelaData as $zelaObj) {
                                                                echo '<option value="'.$zelaObj->zelaId.'">'.$zelaObj->zelaName.'</option>';
                                                            }
                                                        }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 form-control-label pt-2">থানার নাম</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control custom-select" id="formCustomSelect">
                                                        <option selected>... পছন্দ ...</option>
                                                    <?php
                                                        if(count($thanaData) > 0) {
                                                            foreach ($thanaData as $thanaObj) {
                                                                echo '<option value="'.$thanaObj->thanaId.'">'.$thanaObj->thanaName.'</option>';
                                                            }
                                                        }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 form-control-label pt-2">উপজেলার নাম</label>
                                                <div class="col-sm-8">
                                                    <input name="upozelaName" id="inputHorizontalWarning" type="text" placeholder="উপজেলার নাম" class="form-control form-control-warning">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 form-control-label pt-2">ইউনিয়নের নাম</label>
                                                <div class="col-sm-8">
                                                    <input name="unionName" id="inputHorizontalWarning" type="text" placeholder="ইউনিয়নের নাম" class="form-control form-control-warning">
                                                </div>
                                            </div>
                                            <div class="form-group row mx-5 mb-0 pb-0">
                                                <div class="col-sm-9 offset-sm-3">
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
                                        <h3 class="h4">জেলা, থানা, উপজেলা ও ইউনিয়ন এর তথ্য দেখা</h3>
                                    </div>
                                    <div class="card-body">
                                        <table id="responsive-datatable" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead class="thead-light text-dark font-weight-bold">
                                                <tr>
                                                    <th>SL</th>
                                                    <th>জেলার নাম</th>
                                                    <th>থানার নাম</th>
                                                    <th>উপজেলার নাম</th> 
                                                    <th>ইউনিয়নের নাম</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>নোয়াখালী</td>
                                                    <td>বেগমগঞ্জ</td>
                                                    <td>বেগমগঞ্জ</td>
                                                    <td>একলাশপুর</td>
                                                    <td>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a> |
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Cancel"><i class="fa fa-remove"></i></a> |
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Save"><i class="fa fa-save"></i></a> |
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