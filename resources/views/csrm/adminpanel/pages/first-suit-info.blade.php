@extends("csrm.adminpanel.layouts.admin_master")
@section("page-title", "নোয়াখালী জেলা")

@section('page-style')

    <style>

    </style>

@endsection
@section("page-header-title", "মামলার প্রথম দপা তথ্য")
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">হোম</a></li>
    <li class="breadcrumb-item active">মামলার প্রথম দপা তথ্য</li>
@endsection

                <!-- Page Header-->
                <!-- <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">মামলার প্রথম দপা তথ্য</h2>
                    </div>
                </header>
                <ul class="breadcrumb">
                    <div class="container-fluid">
                        <li class="breadcrumb-item"><a href="index.html">হোম</a></li>
                        <li class="breadcrumb-item active">মামলার প্রথম দপা তথ্য</li>
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
                                        <h3 class="h4 float-left">মামলা সংক্রান্ত প্রথম দপায় তথ্যাবলি </h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <form class="form-horizontal mx-auto" action="{{ route('create.firstSuitInfo') }}" method="post">

                                                {{ csrf_field() }}

                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">মামলার আই, ডি </label> 
                                                        <div class="col-sm-8">
                                                            <input name="" id="inputHorizontalWarning" type="text" placeholder="" class="form-control form-control-warning" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">সি, এস, নং ও তারিখ <span class="text-danger">*</span></label>
                                                        <div class="col-sm-4">
                                                            <input name="csNo" id="inputHorizontalWarning" type="text" placeholder="সি, এস, নং " class="form-control form-control-warning" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input name="" id="inputHorizontalWarning" type="date" name="date" placeholder="" class="form-control form-control-warning">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">মামলার নম্বর <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input name="suitNo" id="inputHorizontalWarning" type="text" placeholder="মামলার নম্বর" class="form-control form-control-warning" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">আদালতের নাম <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control custom-select" id="formCustomSelect">
                                                                <option selected>... পছন্দ ...</option>
                                                                <option value="1">হাই কোর্ট</option>
                                                                <option value="2">সুপ্রিম কোর্ট</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">বাদির নাম <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input name="badirName" id="inputHorizontalWarning" type="text" placeholder="" class="form-control form-control-warning" value="নোয়াখালী জেলা প্রশাসক">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">বাদির ঠিকানা</label>
                                                        <div class="col-sm-8">
                                                            <textarea name="badirAddress" class="form-control form-control-warning" type="text" placeholder="বাদির ঠিকানা" id="inputHorizontalWarning" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">বিবাদির নাম <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input name="bibadirName" id="inputHorizontalWarning" type="text" placeholder="বিবাদির নাম" class="form-control form-control-warning" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">বিবাদির ঠিকানা</label>
                                                        <div class="col-sm-8">
                                                            <textarea class="form-control form-control-warning" type="text" placeholder="বিবাদির ঠিকানা" id="inputHorizontalWarning" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">উপজেলা নাম</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control custom-select" id="formCustomSelect">
                                                                <option selected>... পছন্দ ...</option>
                                                                <option value="1">বেগুমগঞ্জ</option>
                                                                <option value="2">সদর</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">ইউনিয়ন ভূমি অফিসের নাম</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control custom-select" id="formCustomSelect">
                                                                <option selected>... পছন্দ ...</option>
                                                                <option value="1">একলাশপুর</option>
                                                                <option value="2">মিরওয়ারিশপুর</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <form class="form-horizontal mx-auto" action="{{ route('create.firstSuitInfo') }}" method="post">

                                                {{ csrf_field() }}

                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">মৌজার নাম/জে, এল নং <span class="text-danger">*</span> </label>
                                                        <div class="col-sm-8">
                                                            <input name="jlNo" id="inputHorizontalWarning" type="text" placeholder="মৌজার নাম/জে, এল নং" class="form-control form-control-warning" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">জি,পি নাম </label>
                                                        <div class="col-sm-8">
                                                            <input name="gpName" id="inputHorizontalWarning" type="text" placeholder="জি,পি নাম" class="form-control form-control-warning">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">জি,পি মোবাইল নং </label>
                                                        <div class="col-sm-8">
                                                            <input name="gpMoNo" id="inputHorizontalWarning" type="text" placeholder="জি,পি মোবাইল নং" class="form-control form-control-warning">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">এ,জি,পি নাম </label>
                                                        <div class="col-sm-8">
                                                            <input name="agpName" id="inputHorizontalWarning" type="text" placeholder="এ,জি,পি নাম" class="form-control form-control-warning">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">এ,জি,পি মোবাইল নং </label>
                                                        <div class="col-sm-8">
                                                            <input name="agpMoNo" id="inputHorizontalWarning" type="text" placeholder="এ,জি,পি মোবাইল নং" class="form-control form-control-warning">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">মামলার তফসিল/ভুমি/জমির পরিমাণ </label>
                                                        <div class="col-sm-8">
                                                            <textarea class="form-control form-control-warning" type="text" placeholder="মামলার তফসিল/ভুমি/জমির পরিমাণ" id="inputHorizontalWarning" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">এইচ, সি, এস </label>
                                                        <div class="col-sm-8">
                                                            <input name="hcs" id="inputHorizontalWarning" type="text" placeholder="এইচ, সি, এস" class="form-control form-control-warning">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">তায়াদাদ <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input name="tayadat" id="inputHorizontalWarning" type="text" placeholder="তায়াদাদ" class="form-control form-control-warning" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">পরবর্তী তারিখ <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input name="" id="inputHorizontalWarning" type="date" name="date" placeholder="" class="form-control form-control-warning" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">আর, জি পাওয়ার তারিখ </label>
                                                        <div class="col-sm-8">
                                                            <input name="" id="inputHorizontalWarning" type="date" name="date" placeholder="" class="form-control form-control-warning">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 form-control-label pt-2">মন্তব্য</label>
                                                        <div class="col-sm-8">
                                                            <textarea name="comment" class="form-control form-control-warning" type="text" placeholder="মন্তব্য" id="inputHorizontalWarning" rows="3"></textarea>
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