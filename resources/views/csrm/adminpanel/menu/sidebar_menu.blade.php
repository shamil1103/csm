
<!-- page navbar -->
<nav class="side-navbar" id="main-menu">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img alt="Dashboard Logo" class="img-fluid rounded-circle" src="{{ asset('assets/adminpanel/img/dashboard.jpg') }}"></div>
        <div class="title">
            <h1 class="h4">CSRM</h1>
            <!--<p>বেসামরিক মামলা ব্যবস্থাপনা পদ্ধতি</p>-->
        </div>
    </div>
    <ul class="list-unstyled">
        <li class="active">
            <a href="{{ route('admin.home') }}"><i class="icon-home icons"></i>ড্যাশবোর্ড</a>
        </li>
        <li>
            <a aria-expanded="false" data-toggle="collapse" href="#dashvariants1"><i class="icon-form icons"></i>মামলার প্রথম দপায় তথ্য</a>
            <ul class="collapse list-unstyled" id="dashvariants1">
                <li>
                    <a href="{{ route('create.firstSuitInfo') }}">মামলা সংক্রান্ত প্রথম দপায় তথ্য</a>
                </li>
                <li>
                    <a href="first-view-suit.html">প্রথম দপায় তথ্য দেখা</a>
                </li>
            </ul>
        </li>
        <li>
            <a aria-expanded="false" data-toggle="collapse" href="#dashvariants2"><i class="icon-form icons"></i>মামলার দ্বিতীয় দপায় তথ্য</a>
            <ul class="collapse list-unstyled" id="dashvariants2">
                <li>
                    <a href="{{ route('create.secondSuitInfo') }}">মামলা সংক্রান্ত দ্বিতীয় দপায় তথ্য</a>
                </li>
                <li>
                    <a href="second-view-suit.html">দ্বিতীয় দপায় তথ্য দেখা</a>
                </li>
            </ul>
        </li>
        <li>
            <a aria-expanded="false" data-toggle="collapse" href="#dashvariants3"><i class="icon-list icons"></i>রিপোর্টস</a>
            <ul class="collapse list-unstyled" id="dashvariants3">
                <li>
                    <a href="daily-suit-report.html">দৈনিক মামলা</a>
                </li>
                <li>
                    <a href="monthly-suit-report.html">মাসিক মামলা</a>
                </li>
                <li>
                    <a href="finishing-suit-report.html">নিস্পত্তিকৃত মামলা</a>
                </li>
                <li>
                    <a href="running-suit-report.html">চলমান মামলা</a>
                </li>
                <li>
                    <a href="upozela-wise-suit-report.html">উপজেলা ভিত্তিক মামলা</a>
                </li>
                <li>
                    <a href="union-wise-suit-report.html">ইউনিয়ন ভূমি অফিস ভিত্তিক মামলা</a>
                </li>
                <li>
                    <a href="cort-wise-suit-report.html">আদালত ভিত্তিক মামলা</a>
                </li>
                <li>
                    <a href="government-side-suit-report.html">সরকারের পক্ষে মামলা</a>
                </li>
                <li>
                    <a href="government-against-suit-report.html">সরকারের বিপক্ষে মামলা</a>
                </li>
            </ul>
        </li>
        <li>
            <a aria-expanded="false" data-toggle="collapse" href="#dashvariants4"><i class="fa fa-cog"></i></i>সেটিং </a>
            <ul class="collapse list-unstyled" id="dashvariants4">
                <li>
                    <a href="{{ route('create.cort') }}">আদালত তৈরি</a>
                </li>
                <li>
                    <a href="{{ route('create.zelathana') }}">জেলা ও থানা তৈরি</a>
                </li>
                <li>
                    <a href="{{ route('create.login') }}">লগইন প্যানেল তৈরি</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="upcoming-suit.html"><i class="fa fa-bell-o"></i>আগাম মামলার তথ্য</a>
        </li>
        <li>
            <a href="login-info.html"><i class="fa fa-sign-in-alt"></i>লগইনের তথ্য</a>
        </li>
        <li>
            <a href="editing-info.html"><i class="fa fa-edit"></i>এডিটিং এর তথ্য</a>
        </li>
    </ul>
</nav>