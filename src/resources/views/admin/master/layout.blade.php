<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{url('/topbar-rtl/img/fav.png')}}"/>
    <title>Wafi Admin Template - Admin Dashboard</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{url('/topbar-rtl/css/bootstrap.min.css')}}">
    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{url('/topbar-rtl/fonts/style.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{url('/topbar-rtl/css/main.css')}}">
    <!-- DateRange css -->
    <link rel="stylesheet" href="{{url('/topbar-rtl/vendor/daterange/daterange.css')}}"/>
    <!-- Chartist css -->
    <link rel="stylesheet" href="{{url('/topbar-rtl/vendor/chartist/css/chartist.min.css')}}"/>
    <link rel="stylesheet" href="{{url('/topbar-rtl/vendor/chartist/css/chartist-custom.css')}}"/>
</head>
<body>
<!-- Loading starts -->
<div id="loading-wrapper">
    <div class="spinner-border" role="status">
        <span class="sr-only">در حال بارگزاری</span>
    </div>
</div>
<!-- Loading ends -->
<!-- *************
    ************ Header section start *************
************* -->

<!-- Header start -->
<header class="header">
    <div class="logo-wrapper">
        <a href="index.html" class="logo">
            <img src="{{url('/topbar-rtl/img/logo.png')}}" alt="Wafi Admin Dashboard"/>
        </a>
        <a href="#" class="quick-links-btn" data-toggle="tooltip" data-placement="right" title=""
           data-original-title="Quick Links">
            <i class="icon-menu1"></i>
        </a>
    </div>
    <div class="header-items">
        <!-- Custom search start -->
        <div class="custom-search">
            <input type="text" class="search-query" placeholder="Search here ...">
            <i class="icon-search1"></i>
        </div>
        <!-- Custom search end -->

        <!-- Header actions start -->
        <ul class="header-actions">
            <li class="dropdown">
                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                    <i class="icon-box"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                    <div class="dropdown-menu-header">
                        Tasks (05)
                    </div>
                    <ul class="header-tasks">
                        <li>
                            <p>#48 - Dashboard UI<span>90%</span></p>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                    <span class="sr-only">90% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <p>#95 - Alignment Fix<span>60%</span></p>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <p>#7 - Broken Button<span>40%</span></p>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="40"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                    <i class="icon-bell"></i>
                    <span class="count-label">8</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                    <div class="dropdown-menu-header">
                        Notifications (40)
                    </div>
                    <ul class="header-notifications">
                        <li>
                            <a href="#">
                                <div class="user-img away">
                                    <img src="{{url('/topbar-rtl/img/user21.png')}}" alt="User"/>
                                </div>
                                <div class="details">
                                    <div class="user-title">Abbott</div>
                                    <div class="noti-details">Membership has been ended.</div>
                                    <div class="noti-date">Oct 20, 07:30 pm</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-img busy">
                                    <img src="{{url('/topbar-rtl/img/user10.png')}}" alt="User"/>
                                </div>
                                <div class="details">
                                    <div class="user-title">Braxten</div>
                                    <div class="noti-details">Approved new design.</div>
                                    <div class="noti-date">Oct 10, 12:00 am</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-img online">
                                    <img src="{{url('/topbar-rtl/img/user6.png')}}" alt="User"/>
                                </div>
                                <div class="details">
                                    <div class="user-title">Larkyn</div>
                                    <div class="noti-details">Check out every table in detail.</div>
                                    <div class="noti-date">Oct 15, 04:00 pm</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                    <span class="user-name">Zyan Ferris</span>
                    <span class="avatar">ZF<span class="status busy"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                    <div class="header-profile-actions">
                        <div class="header-user-profile">
                            <div class="header-user">
                                <img src="{{url('/topbar-rtl/img/user.png')}}" alt="Admin Template"/>
                            </div>
                            <h5>Zyan Ferris</h5>
                            <p>Admin</p>
                        </div>
                        <a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
                        <a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
                        <a href="login.html"><i class="icon-log-out1"></i> Sign Out</a>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="quick-settings-btn" data-toggle="tooltip" data-placement="left" title=""
                   data-original-title="Quick Settings">
                    <i class="icon-list"></i>
                </a>
            </li>
        </ul>
        <!-- Header actions end -->
    </div>
</header>
<!-- Header end -->

<!-- Screen overlay start -->
<div class="screen-overlay"></div>
<!-- Screen overlay end -->

<!-- Quicklinks box start -->
<div class="quick-links-box">
    <div class="quick-links-header">
        Quick Links
        <a href="#" class="quick-links-box-close">
            <i class="icon-circle-with-cross"></i>
        </a>
    </div>

    <div class="quick-links-wrapper">
        <div class="fullHeight">
            <div class="quick-links-body">
                <div class="container-fluid p-0">
                    <div class="row less-gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <a href="documents.html" class="quick-tile blue">
                                <i class="icon-file-text"></i>
                                Documents
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="crm-dashboard.html" class="quick-tile secondary">
                                <i class="icon-pie-chart1"></i>
                                CRM
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="ecommerce-dashboard.html" class="quick-tile blue">
                                <i class="icon-shopping-cart1"></i>
                                Ecommerce
                            </a>
                        </div>
                    </div>
                    <div class="row less-gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <a href="gallery2.html" class="quick-tile photos lg">
                                Photos
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="tasks.html" class="quick-tile">
                                <i class="icon-check-circle"></i>
                                Tasks
                            </a>
                            <a href="calendar-external-draggable.html" class="quick-tile blue">
                                <i class="icon-calendar1"></i>
                                Events
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="chat.html" class="quick-tile blue">
                                <i class="icon-message-circle"></i>
                                Chat
                            </a>
                            <a href="default-layout.html" class="quick-tile">
                                <i class="icon-grid"></i>
                                Layout
                            </a>
                        </div>
                    </div>
                    <div class="row less-gutters">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="custom-alerts.html" class="quick-tile secondary">
                                <i class="icon-alert-triangle"></i>
                                Alerts
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="google-maps.html" class="quick-tile blue">
                                <i class="icon-map-pin"></i>
                                Maps
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="https://www.gmail.com/" target="_blank" class="quick-tile white">
                                <i class="icon-drafts"></i>
                                Gmail
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="https://www.youtube.com/" target="_blank" class="quick-tile secondary">
                                <i class="icon-youtube"></i>
                                Youtube
                            </a>
                        </div>
                    </div>
                    <div class="row less-gutters">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="user-profile.html" class="quick-tile">
                                <i class="icon-account_circle"></i>
                                Profile
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="contacts.html" class="quick-tile">
                                <i class="icon-phone"></i>
                                Contacts
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="account-settings.html" class="quick-tile">
                                <i class="icon-settings1"></i>
                                Settings
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="login.html" class="quick-tile">
                                <i class="icon-lock2"></i>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quicklinks box end -->

<!-- Quick settings start -->
<div class="quick-settings-box">
    <div class="quick-settings-header">
        <div class="date-container">Today <span class="date" id="today-date"></span></div>
        <a href="#" class="quick-settings-box-close">
            <i class="icon-circle-with-cross"></i>
        </a>
    </div>
    <div class="quick-settings-body">
        <div class="fullHeight">
            <div class="quick-setting-list">
                <h6 class="title">Events</h6>
                <ul class="list-items">
                    <li>
                        <div class="list-title">Product Launch</div>
                        <div class="list-location">10:00 AM</div>
                    </li>
                    <li>
                        <div class="list-title">Team Meeting</div>
                        <div class="list-location">01:30 PM</div>
                    </li>
                    <li>
                        <div class="list-title">Q&A Session</div>
                        <div class="list-location">02:30 PM</div>
                    </li>
                </ul>
            </div>
            <div class="quick-setting-list">
                <h6 class="title">Notes</h6>
                <ul class="list-items">
                    <li>
                        <div class="list-title">Refreshing the list</div>
                        <div class="list-location">03:15 PM</div>
                    </li>
                    <li>
                        <div class="list-title">Not able to click on button</div>
                        <div class="list-location">03:18 PM</div>
                    </li>
                </ul>
            </div>
            <div class="quick-setting-list">
                <h6 class="title">Quick Settings</h6>
                <ul class="set-priority-list">
                    <li>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" checked id="systemUpdates">
                            <label class="custom-control-label" for="systemUpdates">System Updates</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="noti">
                            <label class="custom-control-label" for="noti">Notifications</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Quick settings end -->

<!-- Container fluid start -->
<div class="container-fluid">

@yield('content')

    <footer class="main-footer">© mato 2022</footer>
    <!-- Footer end -->
</div>
<!-- Container fluid end -->

<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="{{'/topbar-rtl/js/jquery.min.js'}}"></script>
<script src="{{'/topbar-rtl/js/bootstrap.bundle.min.js'}}"></script>
<script src="{{'/topbar-rtl/js/moment.js'}}"></script>
<!-- Slimscroll JS -->
<script src="{{'/topbar-rtl/vendor/slimscroll/slimscroll.min.js'}}"></script>
<script src="{{'/topbar-rtl/vendor/slimscroll/custom-scrollbar.js'}}"></script>

<!-- Daterange -->
<script src="{{'/topbar-rtl/vendor/daterange/daterange.js'}}"></script>
<script src="{{'/topbar-rtl/vendor/daterange/custom-daterange.js'}}"></script>

<!-- Chartist JS -->
<script src="{{'/topbar-rtl/vendor/chartist/js/chartist.min.js'}}"></script>
<script src="{{'/topbar-rtl/vendor/chartist/js/chartist-tooltip.js'}}"></script>
<script src="{{'/topbar-rtl/vendor/chartist/js/custom/threshold/threshold.js'}}"></script>
<script src="{{'/topbar-rtl/vendor/chartist/js/custom/bar/bar-chart-orders.js'}}"></script>

<!-- jVector Maps -->
<script src="{{'/topbar-rtl/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js'}}"></script>
<script src="{{'/topbar-rtl/vendor/jvectormap/world-mill-en.js'}}"></script>
<script src="{{'/topbar-rtl/vendor/jvectormap/gdp-data.js'}}"></script>
<script src="{{'/topbar-rtl/vendor/jvectormap/custom/world-map-markers2.js'}}"></script>

<!-- Rating JS -->
<script src="{{'/topbar-rtl/vendor/rating/raty.js'}}"></script>
<script src="{{'/topbar-rtl/vendor/rating/raty-custom.js'}}"></script>

<!-- Main Js Required -->
<script src="{{'/topbar-rtl/js/main.js'}}"></script>
@yield('js')
</body>
</html>
