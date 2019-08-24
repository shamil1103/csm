@extends("csrm.adminpanel.layouts.admin_master")
@section("page-title", "নোয়াখালী জেলা")

@section('page-style')

    <style>

    </style>

@endsection

@section("page-header-title", "Dashboard")
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">হোম</a></li>
@endsection


@section('page-main-content')
    
<!-- page dashboard information -->
<section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
        <div class="row bg-white has-shadow">
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-violet">
                        <i class="fa fa-user-o"></i>
                    </div>
                    <div class="title">
                                        <span>আজকের<br>
                                            <small>মামলা</small></span>
                        <div class="progress">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="" class="progress-bar bg-violet" role="progressbar" style="width: auto; height: 4px;"></div>
                        </div>
                    </div>
                    <div class="number">
                        <strong>0</strong>
                    </div>
                </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-blue">
                        <i class="fa fa-user-circle-o"></i>
                    </div>
                    <div class="title">
                                        <span>মোট<br>
                                            <small>মামলা</small></span>
                        <div class="progress">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="" class="progress-bar bg-blue" role="progressbar" style="width: auto; height: 4px;"></div>
                        </div>
                    </div>
                    <div class="number">
                        <strong>0</strong>
                    </div>
                </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-yellow">
                        <i class="fa fa-money"></i>
                    </div>
                    <div class="title">
                                        <span>নিস্পত্তিকৃত<br>
                                            <small>মামলা</small></span>
                        <div class="progress">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="" class="progress-bar bg-yellow" role="progressbar" style="width: auto; height: 4px;"></div>
                        </div>
                    </div>
                    <div class="number">
                        <strong>0</strong>
                    </div>
                </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-orange">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <div class="title">
                                        <span>চলমান<br>
                                            <small>মামলা</small></span>
                        <div class="progress">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="" class="progress-bar bg-orange" role="progressbar" style="width: auto; height: 4px;"></div>
                        </div>
                    </div>
                    <div class="number">
                        <strong>0</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Dashboard Header Section    -->
<section class="dashboard-header">
    <div class="container-fluid">
        <div class="row">
            <div class="chart col-lg-12 col-12">
                <!-- Bar Chart   -->
                <div class="bar-chart has-shadow bg-white">
                    <div class="p-3">
                        <div class="title">
                            <strong class="text-violet">মাসিক মামলা</strong><br>
                            <small>মাসিক মামলার রিপোর্ট</small>
                        </div>
                        <canvas id="barChartHome"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Section-->
<section class="client no-padding-top">
    <div class="container-fluid">
        <div class="row">
            <!-- owner Profile -->
            <div class="col-lg-12">
                <div class="client card">
                    <div class="card-close">
                        <div class="dropdown">
                            <button aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" id="closeCard" type="button"><i class="fa fa-ellipsis-v"></i></button>
                            <div aria-labelledby="closeCard" class="dropdown-menu has-shadow">
                                <a class="dropdown-item remove" href="#"><i class="fa fa-times"></i>Close</a>
                                <!-- <a class="dropdown-item edit" href="#"><i class="fa fa-gear"></i>Edit</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <div class="client-avatar">
                            <img alt="Distric Administrator" class="img-fluid rounded-circle" src="{{ asset('assets/adminpanel/img/dashboard.jpg') }}" style="height: 120px; width: 120px">
                            <div class="status bg-green"></div>
                        </div>
                        <div class="client-title m-5">
                            <h3>জেলা প্রশাসক</h3><span>নোয়াখালী জেলা</span>
                            <span>নোয়াখালী জেলা প্রশাসক</span>
                            <span>স্থাপিত- ১৯৬৮</span>
                            <span>যোগাযোগ- ০০০০০০০০০</span>
                            <!-- <a href="#">Active</a> -->
                        </div>
                        <div class="client-social d-flex justify-content-between m-5">
                            <a href="#" target="_blank" data-toggle="tooltip" data-placement="bottom" title="facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" target="_blank" data-toggle="tooltip" data-placement="bottom" title="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" target="_blank" data-toggle="tooltip" data-placement="bottom" title="youtube"><i class="fab fa-youtube"></i></a>
                            <a href="#" target="_blank" data-toggle="tooltip" data-placement="bottom" title="google-plus"><i class="fab fa-google-plus"></i></a>
                            <a href="#" target="_blank" data-toggle="tooltip" data-placement="bottom" title="instagram"><i class="fab fa-instagram"></i></a>
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