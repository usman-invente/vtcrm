@extends('layouts.app')

@section('content')

    @include('layouts.navbar')

    @include('layouts.menu')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <h2>Admin Dashboard</h2>
                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1 mb-25">{{$active_tasks}}</h2>
                                    <p  style="margin-bottom:25px!important" class="mb-0">Active Tasks</p>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1 mb-25">{{$completed_task_today}}</h2>
                                    <p  style="margin-bottom:25px!important" class="mb-0">Today Completed Tasks</p>
                                </div>
                             
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-warning p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-package text-warning font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1 mb-25">97.5K</h2>
                                    <p  style="margin-bottom:25px!important" class="mb-0">Orders Received</p>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-warning p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-package text-warning font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1 mb-25">97.5K</h2>
                                    <p  style="margin-bottom:25px!important" class="mb-0">Orders Received</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                            
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row" style="height:382px">
                                            <h4  style="margin: 0px auto;" class="card-title">Tasks</h4>
                                            <div class="table-responsive mt-1">
                                                <table class="table table-hover-animation mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Task Title</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($tasks as $task)
                                      
                                                        <tr>
                                                            <td>{{$task->task_title}}</td>
                                                            @if($task->status == 1)
                                                            <td><i class="fa fa-circle font-small-3 text-success mr-50"></i>Completed</td>
                                                            @else
                                                            <td> <i class="fa fa-circle font-small-3 text-danger mr-50"></i>Pending</td>
                                                           
                                                            @endif
                                                            <td>
                                                                <i style="color:blue;font-size:26px;cursor:pointer" data-id="{{ $task->id }}" class="feather icon-eye task-detail"></i>
                                                               
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title">Support Tracker</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button"
                                            id="dropdownItem4" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Last 7 Days
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem4">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                                                <h1 class="font-large-2 text-bold-700 mt-2 mb-0">163</h1>
                                                <small>Tickets</small>
                                            </div>
                                            <div class="col-sm-10 col-12 d-flex justify-content-center">
                                                <div id="support-tracker-chart"></div>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between">
                                            <div class="text-center">
                                                <p class="mb-50">New Tickets</p>
                                                <span class="font-large-1">29</span>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-50">Open Tickets</p>
                                                <span class="font-large-1">63</span>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-50">Response Time</p>
                                                <span class="font-large-1">1d</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4>Product Orders</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button"
                                            id="dropdownItem2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Last 7 Days
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem2">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="product-order-chart" class="mb-3"></div>
                                        <div class="chart-info d-flex justify-content-between mb-1">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle-o text-bold-700 text-primary"></i>
                                                <span class="text-bold-600 ml-50">Finished</span>
                                            </div>
                                            <div class="product-result">
                                                <span>23043</span>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-1">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle-o text-bold-700 text-warning"></i>
                                                <span class="text-bold-600 ml-50">Pending</span>
                                            </div>
                                            <div class="product-result">
                                                <span>14658</span>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-75">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle-o text-bold-700 text-danger"></i>
                                                <span class="text-bold-600 ml-50">Rejected</span>
                                            </div>
                                            <div class="product-result">
                                                <span>4758</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-start">
                                    <div>
                                        <h4 class="card-title">Sales Stats</h4>
                                        <p class="text-muted mt-25 mb-0">Last 6 months</p>
                                    </div>
                                    <p class="mb-0"><i
                                            class="feather icon-more-vertical font-medium-3 text-muted cursor-pointer"></i>
                                    </p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body px-0">
                                        <div id="sales-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Activity Timeline</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="activity-timeline timeline-left list-unstyled">
                                            <li>
                                                <div class="timeline-icon bg-primary">
                                                    <i class="feather icon-plus font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Client Meeting</p>
                                                    <span class="font-small-3">Bonbon macaroon jelly beans gummi bears jelly
                                                        lollipop apple</span>
                                                </div>
                                                <small class="text-muted">25 mins ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-warning">
                                                    <i class="feather icon-alert-circle font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Email Newsletter</p>
                                                    <span class="font-small-3">Cupcake gummi bears soufflé caramels
                                                        candy</span>
                                                </div>
                                                <small class="text-muted">15 days ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-danger">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Plan Webinar</p>
                                                    <span class="font-small-3">Candy ice cream cake. Halvah gummi
                                                        bears</span>
                                                </div>
                                                <small class="text-muted">20 days ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-success">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Launch Website</p>
                                                    <span class="font-small-3">Candy ice cream cake. </span>
                                                </div>
                                                <small class="text-muted">25 days ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-primary">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Marketing</p>
                                                    <span class="font-small-3">Candy ice cream. Halvah bears Cupcake gummi
                                                        bears.</span>
                                                </div>
                                                <small class="text-muted">28 days ago</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Dispatched Orders</h4>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive mt-1">
                                        <table class="table table-hover-animation mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ORDER</th>
                                                    <th>STATUS</th>
                                                    <th>OPERATORS</th>
                                                    <th>LOCATION</th>
                                                    <th>DISTANCE</th>
                                                    <th>START DATE</th>
                                                    <th>EST DEL. DT</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#879985</td>
                                                    <td><i class="fa fa-circle font-small-3 text-success mr-50"></i>Moving
                                                    </td>
                                                    <td class="p-1">
                                                        <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom" data-original-title="Vinnie Mostowy"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-5.png') }}"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom" data-original-title="Elicia Rieske"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-7.png') }}"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Julee Rossignol"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-10.png') }}"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom" data-original-title="Darcey Nooner"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="{{ asset('public/app-assets/images/portrait/small/avatar-s-8.png') }}"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>Anniston, Alabama</td>
                                                    <td>
                                                        <span>130 km</span>
                                                        <div class="progress progress-bar-success mt-1 mb-0">
                                                            <div class="progress-bar" role="progressbar" style="width: 80%"
                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>14:58 26/07/2018</td>
                                                    <td>28/07/2018</td>
                                                </tr>
                                                <tr>
                                                    <td>#156897</td>
                                                    <td><i class="fa fa-circle font-small-3 text-warning mr-50"></i>Pending
                                                    </td>
                                                    <td class="p-1">
                                                        <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom" data-original-title="Trina Lynes"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-1.png') }}"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom" data-original-title="Lilian Nenez"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-2.png') }}"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Alberto Glotzbach"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-3.png') }}"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>Cordova, Alaska</td>
                                                    <td>
                                                        <span>234 km</span>
                                                        <div class="progress progress-bar-warning mt-1 mb-0">
                                                            <div class="progress-bar" role="progressbar" style="width: 60%"
                                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>14:58 26/07/2018</td>
                                                    <td>28/07/2018</td>
                                                </tr>
                                                <tr>
                                                    <td>#568975</td>
                                                    <td><i class="fa fa-circle font-small-3 text-success mr-50"></i>Moving
                                                    </td>
                                                    <td class="p-1">
                                                        <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Lai Lewandowski"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-6.png') }}"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom" data-original-title="Elicia Rieske"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-7.png') }}"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom" data-original-title="Darcey Nooner"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-8.png') }}"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Julee Rossignol"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-10.png') }}"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Jeffrey Gerondale"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-9.png') }}"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>Florence, Alabama</td>
                                                    <td>
                                                        <span>168 km</span>
                                                        <div class="progress progress-bar-success mt-1 mb-0">
                                                            <div class="progress-bar" role="progressbar" style="width: 70%"
                                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>14:58 26/07/2018</td>
                                                    <td>28/07/2018</td>
                                                </tr>
                                                <tr>
                                                    <td>#245689</td>
                                                    <td><i class="fa fa-circle font-small-3 text-danger mr-50"></i>Canceled
                                                    </td>
                                                    <td class="p-1">
                                                        <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom" data-original-title="Vinnie Mostowy"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-5.png') }}"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom" data-original-title="Elicia Rieske"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-7.png') }}"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>Clifton, Arizona</td>
                                                    <td>
                                                        <span>125 km</span>
                                                        <div class="progress progress-bar-danger mt-1 mb-0">
                                                            <div class="progress-bar" role="progressbar" style="width: 95%"
                                                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>14:58 26/07/2018</td>
                                                    <td>28/07/2018</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
@endsection
