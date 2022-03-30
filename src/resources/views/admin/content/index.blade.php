@extends('admin.master.navigation')
@section('after-nav')
    <div class="main-container">

        <!-- Page header start -->
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Admin Dashboard</li>
            </ol>

            <ul class="app-actions">
                <li>
                    <a href="#" id="reportrange">
                        <span class="range-text"></span>
                        <i class="icon-chevron-down"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
                        <i class="icon-print"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download CSV">
                        <i class="icon-cloud_download"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Page header end -->

        <!-- Content wrapper start -->
        <div class="content-wrapper">

            <!-- Row starts -->
            <div class="row gutters">
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="info-tiles">
                                <div class="info-icon">
                                    <i class="icon-account_circle"></i>
                                </div>
                                <div class="stats-detail">
                                    <h3>185k</h3>
                                    <p>Active Users</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="info-tiles">
                                <div class="info-icon">
                                    <i class="icon-watch_later"></i>
                                </div>
                                <div class="stats-detail">
                                    <h3>450</h3>
                                    <p>Active Agents</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="info-tiles">
                                <div class="info-icon">
                                    <i class="icon-visibility"></i>
                                </div>
                                <div class="stats-detail">
                                    <h3>7500</h3>
                                    <p>Visitors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="info-tiles">
                                <div class="info-icon">
                                    <i class="icon-shopping_basket"></i>
                                </div>
                                <div class="stats-detail">
                                    <h3>$300k</h3>
                                    <p>Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="info-tiles">
                                <div class="info-icon secondary">
                                    <i class="icon-check_circle"></i>
                                </div>
                                <div class="stats-detail">
                                    <h3>250</h3>
                                    <p>Signups</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="info-tiles">
                                <div class="info-icon secondary">
                                    <i class="icon-archive"></i>
                                </div>
                                <div class="stats-detail">
                                    <h3>2500</h3>
                                    <p>Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row ends -->
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="card h-280">
                        <div class="card-header">
                            <div class="card-title">Orders</div>
                        </div>
                        <div class="card-body">
                            <div class="chartist bar-scheme-one">
                                <div class="barChartOrders"></div>
                            </div>
                            <div class="row gutters justify-content-center">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="info-stats m-0">
                                        <span class="info-label"></span>
                                        <p class="info-title">Online Orders</p>
                                        <h3 class="info-total">950k</h3>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="info-stats m-0">
                                        <span class="info-label secondary"></span>
                                        <p class="info-title">Direct Orders</p>
                                        <h3 class="info-total">300k</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="card h-280 agenda-bg">
                        <div class="card-body">
                            <div class="agenda">
                                <div class="todays-date">
                                    <h5>Agenda - <span class="date" id="todays-date"></span></h5>
                                </div>
                                <ul class="agenda-list">
                                    <li>
                                        <span class="bullet">&nbsp;</span>
                                        <div class="details">
                                            <p>Call with Willams</p>
                                            <small>09:00</small>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="bullet">&nbsp;</span>
                                        <div class="details">
                                            <p>Book a Hotel for James</p>
                                            <small>09:30</small>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="bullet">&nbsp;</span>
                                        <div class="details">
                                            <p>Book a Flight to California</p>
                                            <small>10:00</small>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="bullet secondary">&nbsp;</span>
                                        <div class="details">
                                            <p>Call with Willams</p>
                                            <small>09:00</small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row end -->

            <!-- Row starts -->
            <div class="row gutters">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="card h-420">
                        <div class="card-header">
                            <div class="card-title">Visitors</div>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-xl-10">
                                    <div id="world-map-markers2" class="chart-height-md1"></div>
                                </div>
                            </div>
                            <div class="row gutters justify-content-center">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="info-stats">
                                        <span class="info-label"></span>
                                        <p class="info-title">Visitors</p>
                                        <h3 class="info-total">9000</h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="info-stats">
                                        <span class="info-label"></span>
                                        <p class="info-title">Bookings</p>
                                        <h3 class="info-total">8000</h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="info-stats">
                                        <span class="info-label secondary"></span>
                                        <p class="info-title">Cancellations</p>
                                        <h3 class="info-total">75</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="card h-420">
                        <div class="card-header">
                            <div class="card-title">Reports</div>
                        </div>
                        <div class="card-body">
                            <div class="chartist threshold-scheme">
                                <div class="thresholdChart"></div>
                            </div>
                            <!-- Row starts -->
                            <div class="row gutters">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="overall-earnings">
                                        <div class="earnings-icon">
                                            <i class="icon-local_airport"></i>
                                        </div>
                                        <div class="earnings-stats">
                                            <p>Flights</p>
                                            <h3>$75,000</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="overall-earnings">
                                        <div class="earnings-icon dark">
                                            <i class="icon-star"></i>
                                        </div>
                                        <div class="earnings-stats">
                                            <p>Hotels</p>
                                            <h3>$95,000</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div class="overall-earnings">
                                        <div class="earnings-icon secondary">
                                            <i class="icon-local_taxi"></i>
                                        </div>
                                        <div class="earnings-stats">
                                            <p>Taxi</p>
                                            <h3>$32,000</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Row ends -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row ends -->

            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="card h-320">
                        <div class="card-header">
                            <div class="card-title">Messages</div>
                        </div>
                        <div class="card-body">
                            <div class="customScroll5">
                                <ul class="user-messages">
                                    <li class="clearfix">
                                        <div class="customer">AM</div>
                                        <div class="delivery-details">
                                            <span class="badge badge-primary">Ordered</span>
                                            <h5>Aaleyah Malik</h5>
                                            <p>We are pleased to inform that the following ticket no. <b>WAFI510</b> have been booked.</p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="customer">AS</div>
                                        <div class="delivery-details">
                                            <span class="badge badge-primary">Delivered</span>
                                            <h5>Ali Sayed</h5>
                                            <p>The carrier successfully delivered the message to the end user.</p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="customer">ZR</div>
                                        <div class="delivery-details">
                                            <span class="badge badge-primary">Cancelled</span>
                                            <h5>Zaira Raheem</h5>
                                            <p>The following describe the status codes and messages states for delivery receipts.</p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="customer secondary">LJ</div>
                                        <div class="delivery-details">
                                            <span class="badge badge-secondary">Returned</span>
                                            <h5>Lily Jordan</h5>
                                            <p>Status codes and descriptions are returned in the following OpenMarket-specific TLVs When a delivery receipt is received.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card h-320">
                        <div class="card-header">
                            <div class="card-title">Top Five Agents</div>
                        </div>
                        <div class="card-body">
                            <div class="customScroll5">
                                <div class="top-agents-container">
                                    <div class="top-agent">
                                        <img src="img/user.png" class="avatar" alt="Agent" />
                                        <div class="agent-details">
                                            <h6>Zuairia Zaman</h6>
                                            <div class="agent-score">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="points">
                                                    <div class="left">Rank #1</div>
                                                    <div class="right">9,800 Ratings</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-agent">
                                        <img src="img/user22.png" class="avatar" alt="Agent" />
                                        <div class="agent-details">
                                            <h6>Lily Jordan</h6>
                                            <div class="agent-score">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 76%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="points">
                                                    <div class="left">Rank #2</div>
                                                    <div class="right">7,500 Ratings</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-agent">
                                        <img src="img/user6.png" class="avatar" alt="Agent" />
                                        <div class="agent-details">
                                            <h6>Ali Sayed</h6>
                                            <div class="agent-score">
                                                <div class="progress">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="points">
                                                    <div class="left">Rank #3</div>
                                                    <div class="right">4,200 Ratings</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-agent">
                                        <img src="img/user20.png" class="avatar" alt="Agent" />
                                        <div class="agent-details">
                                            <h6>Aaleyah Malik</h6>
                                            <div class="agent-score">
                                                <div class="progress">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="points">
                                                    <div class="left">Rank #4</div>
                                                    <div class="right">3,800 Ratings</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-agent">
                                        <img src="img/user13.png" class="avatar" alt="Agent" />
                                        <div class="agent-details">
                                            <h6>Aabid Raheem</h6>
                                            <div class="agent-score">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="points">
                                                    <div class="left">Rank #5</div>
                                                    <div class="right">1,200 Ratings</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card h-320">
                        <div class="card-header">
                            <div class="card-title">Overall Ratings</div>
                        </div>
                        <div class="card-body">
                            <div class="user-ratings">
                                <div class="total-ratings">
                                    <h2>4.5</h2>
                                    <div class="rating-stars">
                                        <div id="rate1"></div>
                                    </div>
                                </div>
                                <div class="ratings-list-container">
                                    <div class="ratings-list">
                                        <div class="rating-level">5.0</div>
                                        <div class="rating-stars">
                                            <div class="rateA"></div>
                                        </div>
                                        <div class="total">
                                            8,500 <span class="percentage">65%</span>
                                        </div>
                                    </div>
                                    <div class="ratings-list">
                                        <div class="rating-level">4.0</div>
                                        <div class="rating-stars">
                                            <div class="rateB"></div>
                                        </div>
                                        <div class="total">
                                            3,500 <span class="percentage">20%</span>
                                        </div>
                                    </div>
                                    <div class="ratings-list">
                                        <div class="rating-level">3.0</div>
                                        <div class="rating-stars">
                                            <div class="rateC"></div>
                                        </div>
                                        <div class="total">
                                            1,400 <span class="percentage">15%</span>
                                        </div>
                                    </div>
                                    <div class="ratings-list">
                                        <div class="rating-level">2.0</div>
                                        <div class="rating-stars">
                                            <div class="rateD"></div>
                                        </div>
                                        <div class="total">
                                            300 <span class="percentage">05%</span>
                                        </div>
                                    </div>
                                    <div class="ratings-list">
                                        <div class="rating-level">1.0</div>
                                        <div class="rating-stars">
                                            <div class="rateE"></div>
                                        </div>
                                        <div class="total">
                                            75 <span class="percentage">03%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row ends -->

        </div>
        <!-- Content wrapper end -->

    </div>
@endsection
@section('js')

@endsection
