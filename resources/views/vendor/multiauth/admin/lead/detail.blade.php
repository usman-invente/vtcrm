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
                <h2>Client Detail</h2>
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h1 class="card-title">{{ $lead->name }}</h1><br><br>
                               
                                  
  
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        @if ($lead->user->status == 0)
                                        <button style="margin-top: 18px;" data-id="{{ $lead->user_id }}" type="button"
                                            class="btn bg-gradient-primary mr-1 mb-1 waves-effect waves-light client">Mark
                                            As Client</button>
                                        @endif
                                        <button style="margin-top: 18px;" data-id="{{ $lead->user_id }}" type="button"
                                            class="btn bg-gradient-primary mr-1 mb-1 waves-effect waves-light  add-appi"><i style="font-size:16px"  class="feather icon-plus"></i> ADD TASK</button>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom:40px">
                                    @if ($lead->user->status == 0)
                                                <div id="lead">
                                                    <span style="margin-left: 32px;" class="badge badge badge-primary badge-pill mr-2">Lead</span>
                                                </div>

                                            @else
                                                <span style="margin-left: 32px;" class="badge badge badge-success badge-pill mr-2">Client</span>
                                            @endif
                                    
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-warning p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-package text-warning font-medium-5"></i>
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
                                    <h2 class="text-bold-700 mt-1 mb-25">{{$active_services}}</h2>
                                    <p  style="margin-bottom:25px!important" class="mb-0">Active Services</p>
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
                                    <h2 class="text-bold-700 mt-1 mb-25">92.6k</h2>
                                    <p  style="margin-bottom:25px!important" class="mb-0">Subscribers Gained</p>
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
                                    <p style="margin-bottom:25px!important"  class="mb-0">Orders Received</p>
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
                                                <table class="table table-hover-animation mb-0" id="tasktable">
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
                                                            <td>
                                                                <div class="task-com{{$task->id}}">
                                                                    <i class="fa fa-circle font-small-3 text-danger mr-50"></i>Pending
                                                                </div>
                                                                
                                                                </td>
                                                           
                                                            @endif
                                                            <td>
                                                                <i style="color:blue;font-size:26px;cursor:pointer" data-id="{{ $task->id }}" class="feather icon-eye task-detail"></i>
                                                                <i style="color:blue;font-size:26px;cursor:pointer" data-id="{{ $task->id }}" class="feather icon-check-square marktask"></i>
                                                               
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
          <!-- task detail modal-->
        <!-- Modal -->
        <div class="modal fade text-left" id="task-detailModal" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel160" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary white">
                        <h5 class="modal-title" id="task-title"></h5>
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> --}}
                    </div>
                    <div class="modal-body">
                        <p id="task-description"></p>
                    </div>
                    {{-- <div class="modal-footer">
                        <button  type="button"  data-dismiss="modal" aria-label="Close" class="btn bg-gradient-info mr-1 mb-1 waves-effect waves-light">Cancel</button>
                        <button data-item="" type="button" class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light marktask"><i class="feather icon-check"></i> Mark As Complete</button>
                    </div> --}}

                </div>
            </div>
        </div>
        <!-- end task detail modal-->

            <!-- add-appointments -->
    <div class="add-appointments">
        <div class="modal-header">
            <h3 class="modal-title">Add Task</h3>
            <i  style="font-size:26px;cursor:pointer;" class="feather icon-x-circle"></i>
            </a>
        </div>
        <div class="add-body">
            <form class="form form-vertical" id="addtaskform" >
            @csrf
                <div class="form-group">
                    <label for="first-name-vertical">Task Name</label>
                        <input type="text"  value="{{old('task_title')}}" class="form-control" name="task_title"
                            id="inputEmail4" placeholder="Taskt Title">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="email-id-vertical">Task Description</label>
                            <textarea  rows="5" cols="20" class="form-control" name="task_description"></textarea>
                    </div>
              
                </div>
               <!--  client-->
              <input type="hidden" value="{{$lead->user->id}}" name="created_for">
              <input type="hidden" value="{{$lead->id}}" name="lead_id">
         
        </div>

        <div style="float:right">
            <button type="button" class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light hide-appi" data-dismiss="modal" aria-label="Close">Close</button>
            <button id="add-taskbtn" type="button" class="btn bg-gradient-primary mr-1 mb-1 waves-effect waves-light">ADD</button>
            

        </div>

       
         </form>

    </div>
    <!-- add-appointments -->
    </div>
@endsection
@section('script')
  
    <script>
        $(document).on('click', '.client', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            Swal.fire({
                title: "Mark As Potential Client?",
                text: "",
                icon: 'warning',
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                cancelButtonText: "No, cancel please!",
                closeOnConfirm: false,
                closeOnCancel: false
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('mark.potential-client') }}",
                        data: {
                            '_token': "{{ csrf_token() }}",
                            id: id
                        },
                        success: function(data) {
                            if (data.status) {
                                Swal.fire(data.message, '', 'success')
                                $("#lead").html(
                                    '<p style="margin-left: 32px;" class="badge badge badge-success badge-pill mr-2">Client</p>'
                                )
                                $('#markasclient').hide();
                            }
                            if (data.status == false) {
                                alert(data.message)
                            }


                        }
                    }); // submitting the form when user press yes

                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            })

        });

  
        $(document).on("click", ".task-detail" , function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                type: "GET",
                url: "{{ route('admin.gettask_detail') }}",
                data: {
                    id: id
                },
                success: function(data) {
                    if (data.status) {
                        $("#task-title").text(data.task.task_title)
                        $("#task-description").text(data.task.task_description)
                        $("#task-detailModal").modal('show')
                    } else {

                    }
                }
            });
        });

     

        //submit task
        $("#add-taskbtn").click(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{ route('admin.addtask') }}",
                data: $('#addtaskform').serialize(),
                success: function(data) {
                    if (data.status) {
                        $("#addtaskform")[0].reset();
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                        })

                        Toast.fire({
                            icon: 'success',
                            title: data.message
                        })

                        $(".add-appointments").removeClass("show-appointments");
                        allTasks();
                        
                        

                    } else {

                    }

                }
            });

        })

        $(document).on("click", ".delete-task" , function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var parent = $(this).parent().parent();
            Swal.fire({
                title: "Want To Delete This Task?",
                text: "",
                icon: 'warning',
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                cancelButtonText: "No, cancel please!",
                closeOnConfirm: false,
                closeOnCancel: false
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        type: "Delete",
                        url: "{{ route('admin.deletetask') }}",
                        data: {
                            '_token': "{{ csrf_token() }}",
                            id: id
                        },
                        success: function(data) {
                            if (data.status) {
                                parent.fadeOut('slow', function() {
                                    $("#task" + id).remove();
                                });
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                })

                                Toast.fire({
                                    icon: 'success',
                                    title: data.message
                                })

                            }
                            if (data.status == false) {
                                alert(data.message)
                            }


                        }
                    }); // submitting the form when user press yes

                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            })
        });

       

        //get all tasks
        function allTasks(){
            var id  = "{{$lead->id}}";
            $.ajax({
                type: "get",
                url: "{{ route('admin.gettasks') }}",
                data:{id:id},
                success: function(data) {
                    
                    if (data.status) {
                        var html = "";
                            html += "<tr>";
                            html += "<td>"+data.task.task_title+"</td>"; 
                            html += "<td> <div class='task-com"+data.task.id+"'><i class='fa fa-circle font-small-3 text-danger mr-50'></i>Pending</div></td>";
                            html += "<td><i style='color:blue;font-size:26px;cursor:pointer;' data-id='"+data.task.id+"' class='feather icon-eye task-detail'></i><i style='color:blue;font-size:26px;cursor:pointer' data-id='"+data.task.id+"' class='feather icon-check-square marktask'></i></td>";           
                            $('#tasktable > tbody:last-child').append(html);
                    }
                    if (data.status == false) {
                        alert(data.message)
                    }
                }
            });
            
        }
        //load More
        let page = 2;

        function loadMore() {
           
            $.ajax({
                type: "get",
                url: "{{ route('admin.load_moreTasks') }}",
                data: {
                    page: page,
                    clientid:"{{$lead->id}}"
                },
                success: function(data) {
                    
                    if (data.status) {
                        data.task.data.forEach((data) => {
                            // console.log(data.task_title)
                            var html = "";
                            html += "<div   id='task"+data.id+"' class='d-flex justify-content-start align-items-center mb-1'>";
                            html += "<div class='avatar mr-50'>";
                            html += "<img src='{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-5.png') }}'alt='avtar img holder' height='35' width='35'>";
                            html += "</div>";
                            html += "<div class='user-page-info'>";
                            html += "<h6 class='mb-0'>"+data.task_title+"</h6>";
                            html += "<span class='font-small-2'><i data-id='"+data.id+"'  style='font-size:16px;color: red;cursor:pointer;' class='feather icon-delete delete-task'></i></span>";
                            html += "</div>";
                            html += "<button data-id='"+data.id+"' type='button' class='btn btn-primary btn-icon ml-auto task-detail'> <i class='feather icon-eye'></i></button>";
                            html += "</div>";
                       
                            $(".task-div").append(html);
                        });
                        if (data.task.current_page < data.task.last_page) {
                           $('.load').show();
                            page = page + 1
                        } else {
                            $('.load').hide();
                        }    
                    }
                    if (data.status == false) {
                        alert(data.message)
                    }
                }
            });
        }

        //mark task complete
            $(document).on("click", ".marktask" , function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                type: "GET",
                url: "{{ route('admin.marktask') }}",
                data: {id:id},
                success: function(data) {
                    if (data.status) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                        })

                        Toast.fire({
                            icon: 'success',
                            title: data.message
                        })   
                        $("#task-detailModal").modal('hide')
                        $(".task-com"+id).html('<i class="fa fa-circle font-small-3 text-success mr-50"></i>Completed');

                    } else {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                        })

                        Toast.fire({
                            icon: 'success',
                            title: data.message
                        })   
 
                    }

                }
            });

        })
    
  
    $(".add-appi").click(function() {
        
        $(".add-appointments").addClass("show-appointments");
        return false;
    });

    $(".hide-appi").click(function() {
        $(".add-appointments").removeClass("show-appointments");
        return false;
    });

    </script>
@endsection
