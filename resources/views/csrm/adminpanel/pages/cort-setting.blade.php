@extends("csrm.adminpanel.layouts.admin_master")
@section("page-title", "নোয়াখালী জেলা")

@section('page-style')

    <style>

    </style>

@endsection
@section("page-header-title", "আদালত সেটিং")
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">হোম</a></li>
    <li class="breadcrumb-item active">আদালত সেটিং</li>
@endsection

                <!-- Page Header-->
                <!-- <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">আদালত সেটিং</h2>
                    </div>
                </header>
                <ul class="breadcrumb">
                    <div class="container-fluid">
                        <li class="breadcrumb-item"><a href="index.html">হোম</a></li>
                        <li class="breadcrumb-item active">আদালত তৈরি</li>
                    </div>
                </ul>
 -->

@section('page-main-content')
                <!-- cort setting Forms Section-->
                <section class="forms">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- create panel Form-->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">আদালত তৈরি</h3>
                                    </div>
                                    <div class="card-body d-flex align-items-center">
                                        <form class="form-horizontal mx-auto" action="{{ route('create.cort') }}" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <label class="col-sm-4 form-control-label pt-2">আদালতের নাম<span class="text-danger">*</span></label>
                                                <div class="col-sm-8">
                                                    <input name="cortName" id="inputHorizontalWarning" type="text" placeholder="আদালতের নাম" class="form-control form-control-warning" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 form-control-label pt-2">আদালতের ঠিকানা</label>
                                                <div class="col-sm-8">
                                                    <textarea name="cortAddress" class="form-control form-control-warning" type="text" placeholder="আদালতের ঠিকানা" id="inputHorizontalWarning" rows="3"></textarea>
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
                                        <h3 class="h4">আদালতের তথ্য দেখা</h3>
                                    </div>
                                    <div class="card-body">
                                        <table id="responsive-datatable" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead class="thead-light text-dark font-weight-bold">
                                                <tr>
                                                    <th>SL</th>
                                                    <th>আদালতের নাম</th>
                                                    <th>ঠিকানা</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    if(count($cortData)){
                                                        $i = 0;
                                                        foreach($cortData as $cort) {
                                                            $i++;

                                                            echo '<tr>
                                                                <th scope="row">'.$i.'</th>
                                                                <td>'.$cort->cortName.'</td>
                                                                <td>'.$cort->cortAddress.'</td>
                                                                <td>
                                                                    <a data-toggle="modal" data-target="#exampleModalE" href="#" title="Edit"><i class="fa fa-edit"></i></a> |
                                                                    <a data-toggle="modal" data-target="#exampleModalD" href="#" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>';

                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="exampleModalE" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title mx-auto" id="exampleModalLabel">Edit Row</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label pt-2">আদালতের নাম </label>
                                    <div class="col-sm-8">
                                        <input name="cortName" id="inputHorizontalWarning" type="text" class="form-control form-control-warning" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label pt-2">আদালতের ঠিকানা</label>
                                    <div class="col-sm-8">
                                        <textarea name="cortAddress" class="form-control form-control-warning" type="text" id="inputHorizontalWarning" rows="3" value=""></textarea>
                                    </div>
                                </div>                
                            </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" value="Save" class="btn btn-primary">
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Delete Modal -->
                    <div class="modal fade" id="exampleModalD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title mx-auto" id="exampleModalLabel">Delete Row</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p class="text-center">Are you want to delete this row?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" value="Save" class="btn btn-danger">
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