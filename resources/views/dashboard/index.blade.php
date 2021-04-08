@extends('layouts.dashboard.index')

@section('title')
Dashboard
@endsection

@section('content')
<!-- Container fluid scss in scaffolding.scss -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- info box -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col l9">
            <div class="card">
                <div class="card-content">
                    <div class="flex-wrap d-flex">
                        <div>
                            <h4 class="card-title">Analytics Overview</h4>
                            <h6 class="card-subtitle">Overview of Monthly analytics</h6>
                        </div>
                        <div class="ml-auto align-self-center">
                            <ul class="list-inline font-12 dl m-r-10">
                                <li class="green-text"><i class="fa fa-circle"></i> Site A</li>
                                <li class="blue-text text-accent-4"><i class="fa fa-circle"></i> Site B</li>
                            </ul>
                        </div>
                    </div>
                    <div class="overview ct-charts" style="height:290px!important;"></div>
                </div>
            </div>
        </div>
        <div class="col l3">
            <div class="card primary-gradient">
                <div class="card-content">
                    <h4 class="card-title white-text">Total Visit</h4>
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="font-light m-b-0 white-text"><i class="ti-angle-up white-text"></i> 12456</h6>
                        </div>
                        <div class="ml-auto">
                            <div id="spark8"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card success-gradient">
                <div class="card-content">
                    <h4 class="card-title">Bounce rate</h4>
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="font-light m-b-0"><i class="ti-angle-down "></i> 456</h6>
                        </div>
                        <div class="ml-auto">
                            <div id="spark9"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card warning-gradient">
                <div class="card-content">
                    <h4 class="card-title white-text">Page Views</h4>
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="font-light m-b-0 white-text"><i class="ti-angle-up white-text"></i> 2456</h6>
                        </div>
                        <div class="ml-auto">
                            <div id="spark10"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.ui-user-contacts')

    <!-- ============================================================== -->
    <!-- Active user - project- visitors -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col l4 m12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Visit Source</h4>
                    <div class="center-align">
                        <div id="visitor" style="height:270px; width:100%;" class="m-t-20"></div>
                        <ul class="list-inline font-12 dl m-t-10">
                            <li class="cyan-text"><i class="fa fa-circle"></i> mobile</li>
                            <li class="blue-text text-accent-4"><i class="fa fa-circle"></i> tablet</li>
                            <li class="orange-text"><i class="fa fa-circle"></i> desktop</li>
                            <li class="blue-text"><i class="fa fa-circle"></i> other</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l4 m12">
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h4 class="card-title">Sales Prediction</h4>
                            <div class="flex-row d-flex align-items-center m-t-20">
                                <div>
                                    <span class="display-7">$3528</span>
                                    <h6>(150-165 Sales)</h6>
                                </div>
                                <div class="ml-auto">
                                    <div class="gaugejs-box">
                                        <canvas id="foo" class="gaugejs" height="90" width="130">gauge</canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h4 class="card-title">Sales Difference</h4>
                            <div class="flex-row d-flex align-items-center m-t-20">
                                <div>
                                    <span class="display-7">$4316</span>
                                    <h6>(150-165 Sales)</h6>
                                </div>
                                <div class="ml-auto">
                                    <div class="gaugejs-box">
                                        <canvas id="foo2" class="gaugejs" height="90" width="130">gauge</canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l4 m12">
            <div class="card">
                <div class="card-content center-align ">
                    <div class="profile-pic m-b-20">
                        <img src="../../assets/images/users/1.jpg" width="150" class="circle" alt="user" />
                        <h5 class="font-medium m-t-15 m-b-0">Daniel Kristeen</h5>
                        <a href="mailto:danielkristeen@gmail.com">danielkristeen@gmail.com</a>
                    </div>
                    <div class="chip">Dashboard</div>
                    <div class="chip">UI</div>
                    <div class="chip">UX</div>
                    <div class="chip blue accent-4 white-text tooltipped" data-position="top" data-delay="50" data-tooltip="3 more">+3</div>
                </div>
                <div class="p-25 b-t">
                    <div class="row center-align">
                        <div class="col s12 l6 b-r">
                            <a href="#" class="font-medium link d-flex align-items-center justify-content-center"><i class="material-icons font-20 m-r-5">chat</i>Message</a>
                        </div>
                        <div class="col s12 l6">
                            <a href="#" class="font-medium link d-flex align-items-center justify-content-center"><i class="material-icons font-20 m-r-5">developer_board</i>Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Personal profile and timeline-->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col l4 s12">
            <div class="card m-b-30">
                <div class="card-content">
                    <div class="d-flex no-block">
                        <h4 class="card-title">Weather Report</h4>
                    </div>
                    <div class="flex-row d-flex align-items-center m-t-30 m-b-15">
                        <div class="display-5 light-blue-text"><i class="wi wi-day-showers"></i> <span>73<sup>°</sup></span></div>
                        <div class="ml-auto">
                            <h4 class="m-b-0">Saturday</h4><small>Ahmedabad, India</small>
                        </div>
                    </div>
                    <table class="table no-border">
                        <tr>
                            <td>Wind</td>
                            <td class="font-medium">ESE 17 mph</td>
                        </tr>
                        <tr>
                            <td>Humidity</td>
                            <td class="font-medium">83%</td>
                        </tr>
                        <tr>
                            <td>Pressure</td>
                            <td class="font-medium">28.56 in</td>
                        </tr>
                        <tr>
                            <td>Cloud Cover</td>
                            <td class="font-medium">78%</td>
                        </tr>
                        <tr>
                            <td>Ceiling</td>
                            <td class="font-medium">25760 ft</td>
                        </tr>
                    </table>
                    <hr />
                    <ul class="row center-align city-weather-days">
                        <li class="col s3"><i class="wi wi-day-sunny light-blue-text"></i><span class="m-t-10">09:30</span>
                            <h5 class="m-t-10">70<sup>°</sup></h5>
                        </li>
                        <li class="col s3"><i class="wi wi-day-cloudy light-blue-text"></i><span class="m-t-10">11:30</span>
                            <h5 class="m-t-10">72<sup>°</sup></h5>
                        </li>
                        <li class="col s3"><i class="wi wi-day-hail light-blue-text"></i><span class="m-t-10">13:30</span>
                            <h5 class="m-t-10">75<sup>°</sup></h5>
                        </li>
                        <li class="col s3"><i class="wi wi-day-sprinkle light-blue-text"></i><span class="m-t-10">15:30</span>
                            <h5 class="m-t-10">76<sup>°</sup></h5>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="../../assets/images/cards/sample-1.jpg">
                    <span class="card-title">Card Title</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>

        <!-- Column -->
        <div class="col l8 s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">Recent Activities</h5>
                    <div class="profiletimeline m-t-30">
                        <div class="sl-item">
                            <div class="sl-left"> <img src="../../assets/images/users/d1.jpg" alt="user" class="circle"> </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Daniel Kristeen</a>
                                    <span class="sl-date">5 minutes ago</span>
                                    <p>added photos to the album <a href="javascript:void(0)">My Snaps</a> on 14 March, 2018</p>
                                    <div class="row m-t-20">
                                        <div class="col l3 m6 m-b-20"><img src="../../assets/images/big/img1.jpg" class="responsive-img radius"></div>
                                        <div class="col l3 m6 m-b-20"><img src="../../assets/images/big/img2.jpg" class="responsive-img radius"></div>
                                        <div class="col l3 m6 m-b-20"><img src="../../assets/images/big/img3.jpg" class="responsive-img radius"></div>
                                        <div class="col l3 m6 m-b-20"><img src="../../assets/images/big/img4.jpg" class="responsive-img radius"></div>
                                    </div>
                                    <div class="like-comm"> <a href="javascript:void(0)" class="m-r-10">2 comment</a> <a href="javascript:void(0)" class="m-r-10 link"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="sl-item">
                            <div class="sl-left"> <img src="../../assets/images/users/d3.jpg" alt="user" class="circle"> </div>
                            <div class="sl-right">
                                <div><a href="javascript:void(0)" class="">Ami Kusnadi</a> <span class="sl-date">5 minutes ago</span>
                                    <p>posted a <a href="javascript:void(0)">message</a> on 13 March, 2018</p>
                                    <p class="p-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper.</p>
                                </div>
                                <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="m-r-10">2 comment</a> <a href="javascript:void(0)" class="m-r-10 link"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                            </div>
                        </div>
                        <hr>
                        <div class="sl-item">
                            <div class="sl-left"> <img src="../../assets/images/users/d4.jpg" alt="user" class="circle"> </div>
                            <div class="sl-right">
                                <div><a href="javascript:void(0)" class="">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                    <p>shared a post on 13 March, 2018</p>
                                    <div class="card horizontal b-all">
                                        <div class="card-image">
                                            <img src="../../assets/images/cards/h-card.jpg">
                                        </div>
                                        <div class="card-stacked">
                                            <div class="card-content">
                                                <h5 class="card-title">Anne Frank Quote:</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                                                <a href="javascript: void(0)">www.wrappixel.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
