@extends("csrm.adminpanel.layouts.admin_master")
@section("page-title", "নোয়াখালী জেলা")

@section('page-style')

    <style>

    </style>

@endsection
@section("page-header-title", "মামলার দ্বিতীয় দপায় তথ্য")
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">হোম</a></li>
    <li class="breadcrumb-item active">মামলার দ্বিতীয় দপা তথ্য</li>
@endsection


                <!-- Page Header-->
               <!--  <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">মামলার দ্বিতীয় দপায় তথ্য</h2>
                    </div>
                </header>
                <ul class="breadcrumb">
                    <div class="container-fluid">
                        <li class="breadcrumb-item"><a href="index.html">হোম</a></li>
                        <li class="breadcrumb-item active">মামলার দ্বিতীয় দপা তথ্য</li>
                    </div>
                </ul> -->
@section('page-main-content')
                <!-- Forms Section-->
                <section class="forms">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- patient payment Form-->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4 float-left">মামলা সংক্রান্ত দ্বিতীয় দপায় তথ্যাবলি </h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <form class="form-horizontal mx-auto" action="{{ route('create.secondSuitInfo') }}" method="post">

                                                {{ csrf_field() }}

                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">মামলার নম্বর <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input id="inputHorizontalWarning" type="text" placeholder="মামলার নম্বর দিয়ে খোঁজা" class="form-control form-control-warning">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">সি, এস, নং <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input id="inputHorizontalWarning" type="date" name="date" placeholder="" class="form-control form-control-warning" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">তারিখ <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input id="inputHorizontalWarning" type="text" placeholder=" " class="form-control form-control-warning" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">আদালতের নাম <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input id="inputHorizontalWarning" type="text" placeholder="" class="form-control form-control-warning" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">বাদির নাম <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input id="inputHorizontalWarning" type="text" placeholder="" class="form-control form-control-warning" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">বিবাদির নাম <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input id="inputHorizontalWarning" type="text" placeholder="" class="form-control form-control-warning" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">বিবাদির ঠিকানা</label>
                                                        <div class="col-sm-8">
                                                            <textarea class="form-control form-control-warning" type="text" placeholder="" id="inputHorizontalWarning" rows="3" disabled></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">উপজেলা নাম </label>
                                                        <div class="col-sm-8">
                                                            <input id="inputHorizontalWarning" type="text" placeholder="" class="form-control form-control-warning" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">ইউনিয়ন ভূমি অফিসের নাম </label>
                                                        <div class="col-sm-8">
                                                            <input id="inputHorizontalWarning" type="text" placeholder="" class="form-control form-control-warning" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">জি,পি নাম </label>
                                                        <div class="col-sm-8">
                                                            <input id="inputHorizontalWarning" type="text" placeholder="" class="form-control form-control-warning" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">এ,জি,পি নাম </label>
                                                        <div class="col-sm-8">
                                                            <input id="inputHorizontalWarning" type="text" placeholder="" class="form-control form-control-warning" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">মামলার তফসিল/ভুমি/জমির পরিমাণ </label>
                                                        <div class="col-sm-8">
                                                            <textarea class="form-control form-control-warning" type="text" placeholder="" id="inputHorizontalWarning" rows="3" disabled=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">মৌজার নাম/জে, এল নং <span class="text-danger">*</span> </label>
                                                        <div class="col-sm-8">
                                                            <input id="inputHorizontalWarning" type="text" placeholder="" class="form-control form-control-warning" disabled>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <form class="form-horizontal mx-auto" action="{{ route('create.secondSuitInfo') }}" method="post">

                                                {{ csrf_field() }}
        
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">তায়াদাদ <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input id="inputHorizontalWarning" type="text" placeholder="" class="form-control form-control-warning" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">পরবর্তী তারিখ <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input id="inputHorizontalWarning" type="date" name="date" placeholder="" class="form-control form-control-warning" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">তথ্য বিবরণী (এস, এফ) <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <textarea class="form-control form-control-warning" type="text" placeholder="তথ্য বিবরণী" id="inputHorizontalWarning" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">দফাওয়ারি জবাব</label>
                                                        <div class="col-sm-8">
                                                            <textarea class="form-control form-control-warning" type="text" placeholder="দফাওয়ারি জবাব" id="inputHorizontalWarning" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">রায়ের পর গৃহীত ব্যবস্থা
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <textarea class="form-control form-control-warning" type="text" placeholder="রায়ের পর গৃহীত ব্যবস্থা" id="inputHorizontalWarning" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">ফলাফল <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control custom-select" id="formCustomSelect">
                                                                <option selected>... পছন্দ ...</option>
                                                                <option value="1">সরকারের পক্ষে</option>
                                                                <option value="2">সরকারের বিপক্ষে</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">পরবর্তী কার্যক্রম <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <textarea class="form-control form-control-warning" type="text" placeholder="পরবর্তী কার্যক্রম" id="inputHorizontalWarning" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">মন্তব্য</label>
                                                        <div class="col-sm-8">
                                                            <textarea class="form-control form-control-warning" type="text" placeholder="মন্তব্য" id="inputHorizontalWarning" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="form-group row mx-auto">
                                            <div class="col-sm-9 offset-sm-3 m-4">
                                                <input type="submit" value="Save Information" class="btn btn-primary">
                                            </div>
                                        </div>
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