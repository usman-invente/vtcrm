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
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Lead Detail</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Lead Detail</a>
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a
                                    class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div id="user-profile">
                    {{-- <div class="row">
                        <div class="col-12">
                            <div class="profile-header mb-2">
                                <div class="relative">
                                    <div class="cover-container">
                                        <img class="img-fluid bg-cover rounded-0 w-100"
                                            src="{{ asset('public/assets/app-assets/images/profile/user-uploads/cover.jpg') }}"
                                            alt="User Profile Image">
                                    </div>
                                    <div class="profile-img-container d-flex align-items-center justify-content-between">
                                        <img src="{{ asset('public/assets/app-assets/images/profile/user-uploads/user-13.jpg') }}"
                                            class="rounded-circle img-border box-shadow-1" alt="Card image">
                                        <div class="float-right">
                                            <button type="button"
                                                class="btn btn-icon btn-icon rounded-circle btn-primary mr-1">
                                                <i class="feather icon-edit-2"></i>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary">
                                                <i class="feather icon-settings"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end align-items-center profile-header-nav">
                                    <nav class="navbar navbar-expand-sm w-100 pr-0">
                                        <button class="navbar-toggler pr-0" type="button" data-toggle="collapse"
                                            data-target="navbarSupportedContent" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"><i
                                                    class="feather icon-align-justify"></i></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav justify-content-around w-75 ml-sm-auto">
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Timeline</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">About</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Photos</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Friends</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Videos</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Events</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <section id="profile-info">
                        <div class="row">
                            <div class="col-lg-3 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        {{-- <h4>About</h4> --}}
                                        {{-- <i class="feather icon-more-horizontal cursor-pointer"></i> --}}
                                    </div>
                                    <div class="card-body">
                                        <center>
                                            <img src="{{ asset('public/assets/app-assets/images/profile/user-uploads/user-13.jpg') }}"
                                                class="rounded-circle img-border box-shadow-1 user-img" alt="Card image">
                                        </center>

                                        <div class="mt-1">
                                            <h6 class="mb-0">Name:</h6>
                                            <p>{{ $lead->name }}</p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Bussiness Name:</h6>
                                            <p>{{ $lead->bussiness_name }}</p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Email:</h6>
                                            <p>{{ $lead->email }}</p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Phone:</h6>
                                            <p>{{ $lead->phone }}</p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Address:</h6>
                                            <p>{{ $lead->address }}</p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Industry:</h6>
                                            <p>{{ $lead->industry }}</p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Country:</h6>
                                            <p>{{ $lead->country }}</p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Status:</h6>

                                            @if ($lead->user->status == 0)
                                                <div id="lead">
                                                    <p class="badge badge badge-primary badge-pill mr-2">Lead</p>
                                                </div>

                                            @else
                                                <p class="badge badge badge-success badge-pill  mr-2">Client</p>
                                            @endif
                                        </div>

                                        {{-- <div class="mt-1">
                                            <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i
                                                    class="feather icon-facebook"></i></button>
                                            <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i
                                                    class="feather icon-twitter"></i></button>
                                            <button type="button" class="btn btn-sm btn-icon btn-primary p-25"><i
                                                    class="feather icon-instagram"></i></button>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Suggested Pages</h4>
                                    </div>
                                    <div class="card-body suggested-block">
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('public/assets/app-assets/images/profile/pages/page-09.jpg') }}"
                                                    alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>Rockose</p>
                                                <span class="font-small-2">Company</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('public/assets/app-assets/images/profile/pages/page-08.jpg') }}"
                                                    alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>The Devil's</p>
                                                <span class="font-small-2">Clothing Store</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-1">
                                                <img src="{{ asset('public/assets/app-assets/images/profile/pages/page-03.jpg') }}"
                                                    alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>The Magician</p>
                                                <span class="font-small-2">Public Figure</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('public/assets/app-assets/images/profile/pages/page-02.jpg') }}"
                                                    alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>AC/DC</p>
                                                <span class="font-small-2">Music</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('public/assets/app-assets/images/profile/pages/page-07.jpg') }}"
                                                    alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>Eat Hard</p>
                                                <span class="font-small-2">Restaurant / Bar</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('public/assets/app-assets/images/profile/pages/page-04.jpg') }}"
                                                    alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>B4B</p>
                                                <span class="font-small-2">Beauty Store</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('public/assets/app-assets/images/profile/pages/page-05.jpg') }}"
                                                    alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>Kylie Jenner</p>
                                                <span class="font-small-2">Public Figure</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('public/assets/app-assets/images/profile/pages/page-01.jpg') }}"
                                                    alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>RDJ</p>
                                                <span class="font-small-2">Actor</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('public/assets/app-assets/images/profile/pages/page-06.jpg') }}"
                                                    alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>Taylor Swift</p>
                                                <span class="font-small-2">Music</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Twitter Feeds</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="twitter-feed">
                                            <div class="d-flex justify-content-start align-items-center mb-1">
                                                <div class="avatar mr-50">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-12.png"
                                                        alt="avtar img holder" height="35" width="35">
                                                </div>
                                                <div class="user-page-info">
                                                    <p class="text-bold-600 mb-0">Tiana Vercetti</p>
                                                    <small>@tiana59</small>
                                                    <div class="badge badge-primary badge-pill badge-sm p-0">
                                                        <i class="feather icon-check font-small-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-0">I love cookie chupa chups sweet tart apple pie chocolate bar.
                                                Jelly-o oat cake chupa chups.</p>
                                            <p class="text-primary">#js #vuejs</p>
                                            <small>12 Dec 2018</small>
                                        </div>
                                        <div class="twitter-feed mt-2">
                                            <div class="d-flex justify-content-start align-items-center mb-1">
                                                <div class="avatar mr-50">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-12.png"
                                                        alt="avtar img holder" height="35" width="35">
                                                </div>
                                                <div class="user-page-info">
                                                    <p class="text-bold-600 mb-0">Tiana Vercetti</p>
                                                    <small>@tiana59</small>
                                                    <div class="badge badge-primary badge-pill badge-sm p-0">
                                                        <i class="feather icon-check font-small-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-0">Carrot cake cake gummies I love I love tiramisu. Biscuit
                                                marzipan cookie lemon drops.</p>
                                            <p class="text-primary">#python</p>
                                            <small>11 Dec 2018</small>
                                        </div>
                                        <div class="twitter-feed mt-2">
                                            <div class="d-flex justify-content-start align-items-center mb-1">
                                                <div class="avatar mr-50">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-12.png"
                                                        alt="avtar img holder" height="35" width="35">
                                                </div>
                                                <div class="user-page-info">
                                                    <p class="text-bold-600 mb-0">Tiana Vercetti</p>
                                                    <small>@tiana59</small>
                                                    <div class="badge badge-primary badge-pill badge-sm p-0">
                                                        <i class="feather icon-check font-small-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-0">I love cookie chupa chups sweet tart apple pie chocolate bar.
                                                Jelly-o oat cake chupa chups.</p>
                                            <small>10 Dec 2018</small>
                                        </div>
                                        <div class="twitter-feed mt-2">
                                            <div class="d-flex justify-content-start align-items-center mb-1">
                                                <div class="avatar mr-50">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-12.png"
                                                        alt="avtar img holder" height="35" width="35">
                                                </div>
                                                <div class="user-page-info">
                                                    <p class="text-bold-600 mb-0">Tiana Vercetti</p>
                                                    <small>@tiana59</small>
                                                    <div class="badge badge-primary badge-pill badge-sm p-0">
                                                        <i class="feather icon-check font-small-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-0">Muffin candy caramels. I love caramels tiramisu jelly. Pie I
                                                love wafer. Chocolate cake lollipop tootsie roll cake.</p>
                                            <p class="text-primary">#django #vuejs</p>
                                            <small>9 Dec 018</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-1">
                                                <img src="../../../app-assets/images/profile/user-uploads/user-01.jpg"
                                                    alt="avtar img holder" height="45" width="45">
                                            </div>
                                            <div class="user-page-info">
                                                <p class="mb-0">Leeanna Alvord</p>
                                                <span class="font-small-2">12 Dec 2018 at 1:16 AM</span>
                                            </div>
                                            <div class="ml-auto user-like text-danger"><i class="fa fa-heart"></i></div>
                                        </div>
                                        <p>I love jujubes wafer pie ice cream tiramisu. Chocolate I love pastry pastry
                                            sesame snaps wafer. Pastry topping biscuit lollipop topping I love lemon drops
                                            sweet roll bonbon. Brownie donut icing.</p>
                                        <img class="img-fluid card-img-top rounded-sm mb-2"
                                            src="../../../app-assets/images/profile/post-media/2.jpg"
                                            alt="avtar img holder">
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="d-flex align-items-center">
                                                <i class="feather icon-heart font-medium-2 mr-50"></i>
                                                <span>145</span>
                                            </div>
                                            <div class="ml-2">
                                                <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-placement="bottom" data-original-title="Trina Lynes"
                                                        class="avatar pull-up">
                                                        <img class="media-object rounded-circle"
                                                            src="../../../app-assets/images/portrait/small/avatar-s-1.png"
                                                            alt="Avatar" height="30" width="30">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-placement="bottom" data-original-title="Lilian Nenez"
                                                        class="avatar pull-up">
                                                        <img class="media-object rounded-circle"
                                                            src="../../../app-assets/images/portrait/small/avatar-s-2.png"
                                                            alt="Avatar" height="30" width="30">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-placement="bottom" data-original-title="Alberto Glotzbach"
                                                        class="avatar pull-up">
                                                        <img class="media-object rounded-circle"
                                                            src="../../../app-assets/images/portrait/small/avatar-s-3.png"
                                                            alt="Avatar" height="30" width="30">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-placement="bottom" data-original-title="George Nordic"
                                                        class="avatar pull-up">
                                                        <img class="media-object rounded-circle"
                                                            src="../../../app-assets/images/portrait/small/avatar-s-5.png"
                                                            alt="Avatar" height="30" width="30">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-placement="bottom" data-original-title="Vinnie Mostowy"
                                                        class="avatar pull-up">
                                                        <img class="media-object rounded-circle"
                                                            src="../../../app-assets/images/portrait/small/avatar-s-4.png"
                                                            alt="Avatar" height="30" width="30">
                                                    </li>
                                                    <li class="d-inline-block pl-50">
                                                        <span>+140 more</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="ml-auto d-flex align-items-center">
                                                <i class="feather icon-message-square font-medium-2 mr-50"></i>77
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="../../../app-assets/images/portrait/small/avatar-s-6.png"
                                                    alt="Avatar" height="30" width="30">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0">Kitty Allanson</h6>
                                                <span class="font-small-2">orthoplumbate morningtide naphthaline
                                                    exarteritis</span>
                                            </div>
                                            <div class="ml-auto cursor-pointer">
                                                <i class="feather icon-heart mr-50"></i>
                                                <i class="feather icon-message-square"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-2">
                                            <div class="avatar mr-50">
                                                <img src="../../../app-assets/images/portrait/small/avatar-s-8.png"
                                                    alt="Avatar" height="30" width="30">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0">Jeanie Bulgrin</h6>
                                                <span class="font-small-2">blockiness pandemy metaxylene speckle
                                                    coppy</span>
                                            </div>
                                            <div class="ml-auto cursor-pointer">
                                                <i class="feather icon-heart mr-50"></i>
                                                <i class="feather icon-message-square"></i>
                                            </div>
                                        </div>
                                        <fieldset class="form-label-group mb-50">
                                            <textarea class="form-control" id="label-textarea" rows="3"
                                                placeholder="Add Comment"></textarea>
                                            <label for="label-textarea">Add Comment</label>
                                        </fieldset>
                                        <button type="button" class="btn btn-sm btn-primary">Post Comment</button>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-1">
                                                <img src="../../../app-assets/images/profile/user-uploads/user-01.jpg"
                                                    alt="avtar img holder" height="45" width="45">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0">Leeanna Alvord</h6>
                                                <span class="font-small-2">11 Dec 2018 at 1:35 AM</span>
                                            </div>
                                            <div class="ml-auto user-like"><i class="feather icon-heart"></i></div>
                                        </div>
                                        <p>Candy jelly beans powder brownie biscuit. Jelly marzipan oat cake cake. Cupcake I
                                            love wafer cake. Halvah I love powder jelly I love cheesecake cotton candy
                                            tiramisu brownie.</p>
                                        <img class="img-fluid rounded-sm mb-2"
                                            src="../../../app-assets/images/profile/post-media/25.jpg"
                                            alt="avtar img holder">
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="d-flex align-items-center">
                                                <i class="feather icon-heart font-medium-2 mr-50"></i>
                                                <span>276</span>
                                            </div>
                                            <div class="ml-2">
                                                <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-placement="bottom" data-original-title="Lai Lewandowski"
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
                                                        data-placement="bottom" data-original-title="Julee Rossignol"
                                                        class="avatar pull-up">
                                                        <img class="media-object rounded-circle"
                                                            src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-10.png') }}"
                                                            alt="Avatar" height="30" width="30">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-placement="bottom" data-original-title="Jeffrey Gerondale"
                                                        class="avatar pull-up">
                                                        <img class="media-object rounded-circle"
                                                            src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-9.png') }}"
                                                            alt="Avatar" height="30" width="30">
                                                    </li>
                                                    <li class="d-inline-block pl-50">
                                                        <span>+271 more</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="ml-auto d-flex align-items-center">
                                                <i class="feather icon-message-square font-medium-2 mr-50"></i>105
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-8.png') }}"
                                                    alt="Avatar" height="30" width="30">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0">Darcey Nooner</h6>
                                                <span class="font-small-2">I love cupcake danish jujubes sweet.</span>
                                            </div>
                                            <div class="ml-auto cursor-pointer">
                                                <i class="feather icon-heart mr-50"></i>
                                                <i class="feather icon-message-square"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-2">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-6.png') }}"
                                                    alt="Avatar" height="30" width="30">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0">Lai Lewandowski</h6>
                                                <span class="font-small-2">Wafer I love brownie jelly bonbon tart apple
                                                    pie</span>
                                            </div>
                                            <div class="ml-auto cursor-pointer">
                                                <i class="feather icon-heart mr-50"></i>
                                                <i class="feather icon-message-square"></i>
                                            </div>
                                        </div>
                                        <fieldset class="form-label-group mb-50">
                                            <textarea class="form-control" id="label-textarea2" rows="3"
                                                placeholder="Add Comment"></textarea>
                                            <label for="label-textarea2">Add Comment</label>
                                        </fieldset>
                                        <button type="button" class="btn btn-sm btn-primary">Post Comment</button>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-1">
                                                <img src="{{ asset('public/assets/app-assets/images/profile/user-uploads/user-01.jpg') }}"
                                                    alt="avtar img holder" height="45" width="45">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0">Leeanna Alvord</h6>
                                                <span class="font-small-2">10 Dec 2018 at 5:35 AM</span>
                                            </div>
                                            <div class="ml-auto user-like"><i class="feather icon-heart"></i></div>
                                        </div>
                                        <p>Wafer I love brownie jelly bonbon tart. Candy jelly beans powder brownie biscuit.
                                            Jelly marzipan oat cake cake.</p>
                                        <iframe src="https://www.youtube.com/embed/WALZwXyxpHQ"
                                            class="w-100 height-250"></iframe>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="d-flex  cursor-pointeralign-items-center">
                                                <i class="feather icon-heart font-medium-2 mr-50"></i>
                                                <span>269</span>
                                            </div>
                                            <div class="ml-2">
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
                                                        data-placement="bottom" data-original-title="Julee Rossignol"
                                                        class="avatar pull-up">
                                                        <img class="media-object rounded-circle"
                                                            src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-10.png') }}"
                                                            alt="Avatar" height="30" width="30">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-placement="bottom" data-original-title="Darcey Nooner"
                                                        class="avatar pull-up">
                                                        <img class="media-object rounded-circle"
                                                            src="{{ asset('public/assets/pp-assets/images/portrait/small/avatar-s-8.png') }}"
                                                            alt="Avatar" height="30" width="30">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-placement="bottom" data-original-title="Elicia Rieske"
                                                        class="avatar pull-up">
                                                        <img class="media-object rounded-circle"
                                                            src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-7.png') }}"
                                                            alt="Avatar" height="30" width="30">
                                                    </li>
                                                    <li class="d-inline-block pl-50">
                                                        <span>+264 more</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="ml-auto d-flex align-items-center">
                                                <i class="feather icon-message-square font-medium-2 mr-50"></i>98
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-8.png') }}"
                                                    alt="Avatar" height="30" width="30">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0">Darcey Nooner</h6>
                                                <span class="font-small-2">I love cupcake danish jujubes sweet.</span>
                                            </div>
                                            <div class="ml-auto cursor-pointer">
                                                <i class="feather icon-heart mr-50"></i>
                                                <i class="feather icon-message-square"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-2">
                                            <div class="avatar mr-50">
                                                <img src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-6.png') }}"
                                                    alt="Avatar" height="30" width="30">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0">Lai Lewandowski</h6>
                                                <span class="font-small-2">Wafer I love brownie jelly bonbon tart apple
                                                    pie</span>
                                            </div>
                                            <div class="ml-auto cursor-pointer">
                                                <i class="feather icon-heart mr-50"></i>
                                                <i class="feather icon-message-square"></i>
                                            </div>
                                        </div>
                                        <fieldset class="form-label-group mb-50">
                                            <textarea class="form-control" id="label-textarea3" rows="3"
                                                placeholder="Add Comment"></textarea>
                                            <label for="label-textarea3">Add Comment</label>
                                        </fieldset>
                                        <button type="button" class="btn btn-sm btn-primary">Post Comment</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-12">
                                @if ($lead->user->status == 0)
                                    <div class="card" id="markasclient">
                                        <div class="card-header">
                                            <h4>Mark As Client</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 col-12">
                                                    <button data-id="{{ $lead->user_id }}" type="button"
                                                        class="btn bg-gradient-primary mr-1 mb-1 waves-effect waves-light client">Mark
                                                        As Client</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <h4>Tasks</h4>
                                        <i style="font-size: 26px;cursor:pointer" class="feather  icon-file-plus"
                                            id="add-task"></i>
                                    </div>
                                    <div class="card-body tasks">

                                        @foreach ($tasks as $task)
                                      
                                            <div   id="task{{ $task->id }}"
                                                class="d-flex justify-content-start align-items-center mb-1">
                                                <div class="avatar mr-50">
                                                    <img src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-5.png') }}"
                                                        alt="avtar img holder" height="35" width="35">
                                                </div>
                                                <div class="user-page-info">
                                                    <h6 class="mb-0">{{ Str::limit($task->task_title, 10) }}</h6>
                                                    <span class="font-small-2"><i data-id="{{ $task->id }}"
                                                            style="font-size: 16px;color: red;cursor: pointer;"
                                                            class="feather icon-delete delete-task"></i></span>
                                                </div>
                                                <button data-id="{{ $task->id }}" type="button"
                                                    class="btn btn-primary btn-icon ml-auto task-detail"> <i
                                                        class="feather icon-eye"></i></button>
                                            </div>
                                        
                                        @endforeach
                                        <div class="task-div">
                                        </div> 

                                        <button  onclick="loadMore()" type="button" class="btn btn-primary w-100 mt-1 load"><i
                                                class="feather icon-plus mr-25 "></i>Load More</button>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Polls</h4>
                                    </div>
                                    <div class="card-body">
                                        <h6>Who is the best actor in Marvel Cinematic Universe?</h6>
                                        <div class="polls-info mt-1">
                                            <div class="d-flex justify-content-between">
                                                <div class="vs-radio-con vs-radio-primary">
                                                    <input type="radio" name="vueradio" value="false">
                                                    <span class="vs-radio">
                                                        <span class="vs-radio--border"></span>
                                                        <span class="vs-radio--circle"></span>
                                                    </span>
                                                    <span class="">RDJ</span>
                                                </div>
                                                <div class="text-right">58%</div>
                                            </div>
                                            <div class="progress progress-bar-primary my-50">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="58"
                                                    aria-valuemin="58" aria-valuemax="100" style="width:58%"></div>
                                            </div>
                                            <ul class="list-unstyled users-list d-flex">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-placement="bottom" data-original-title="Tonia Seabold"
                                                    class="avatar pull-up ml-0">
                                                    <img class="media-object rounded-circle"
                                                        src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-12.png') }}"
                                                        alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-placement="bottom" data-original-title="Carissa Dolle"
                                                    class="avatar pull-up">
                                                    <img class="media-object rounded-circle"
                                                        src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-5.png') }}"
                                                        alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-placement="bottom" data-original-title="Kelle Herrick"
                                                    class="avatar pull-up">
                                                    <img class="media-object rounded-circle"
                                                        src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-9.png') }}"
                                                        alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-placement="bottom" data-original-title="Len Bregantini"
                                                    class="avatar pull-up">
                                                    <img class="media-object rounded-circle"
                                                        src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-10.png') }}"
                                                        alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-placement="bottom" data-original-title="John Doe"
                                                    class="avatar pull-up">
                                                    <img class="media-object rounded-circle"
                                                        src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-11.png') }}"
                                                        alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-placement="bottom" data-original-title="Tonia Seabold"
                                                    class="avatar pull-up">
                                                    <img class="media-object rounded-circle"
                                                        src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-12.png') }}"
                                                        alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-placement="bottom" data-original-title="Dirk Fornili"
                                                    class="avatar pull-up">
                                                    <img class="media-object rounded-circle"
                                                        src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-2.png') }}"
                                                        alt="Avatar" height="30" width="30">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="polls-info mt-1">
                                            <div class="d-flex justify-content-between">
                                                <div class="vs-radio-con vs-radio-primary">
                                                    <input type="radio" name="vueradio" value="false">
                                                    <span class="vs-radio">
                                                        <span class="vs-radio--border"></span>
                                                        <span class="vs-radio--circle"></span>
                                                    </span>
                                                    <span class="">Chris Hemswort</span>
                                                </div>
                                                <div class="text-right">16%</div>
                                            </div>
                                            <div class="progress progress-bar-primary my-50">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="16"
                                                    aria-valuemin="16" aria-valuemax="100" style="width:16%"></div>
                                            </div>
                                            <ul class="list-unstyled users-list d-flex">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-placement="bottom" data-original-title="Liliana Pecor"
                                                    class="avatar pull-up ml-0">
                                                    <img class="media-object rounded-circle"
                                                        src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-6.png') }}"
                                                        alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-placement="bottom" data-original-title="Kasandra NaleVanko"
                                                    class="avatar pull-up">
                                                    <img class="media-object rounded-circle"
                                                        src="{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-1.png') }}"
                                                        alt="Avatar" height="30" width="30">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="polls-info mt-1">
                                            <div class="d-flex justify-content-between">
                                                <div class="vs-radio-con vs-radio-primary">
                                                    <input type="radio" name="vueradio" value="false">
                                                    <span class="vs-radio">
                                                        <span class="vs-radio--border"></span>
                                                        <span class="vs-radio--circle"></span>
                                                    </span>
                                                    <span class="">Mark Ruffalo</span>
                                                </div>
                                                <div class="text-right">8%</div>
                                            </div>
                                            <div class="progress progress-bar-primary my-50">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="8"
                                                    aria-valuemin="8" aria-valuemax="100" style="width:8%"></div>
                                            </div>
                                            <ul class="list-unstyled users-list d-flex">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-placement="bottom" data-original-title="Lorelei Lacsamana"
                                                    class="avatar pull-up ml-0">
                                                    <img class="media-object rounded-circle"
                                                        src="../../../app-assets/images/portrait/small/avatar-s-4.png"
                                                        alt="Avatar" height="30" width="30">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="polls-info mt-1">
                                            <div class="d-flex justify-content-between">
                                                <div class="vs-radio-con vs-radio-primary">
                                                    <input type="radio" name="vueradio" value="false">
                                                    <span class="vs-radio">
                                                        <span class="vs-radio--border"></span>
                                                        <span class="vs-radio--circle"></span>
                                                    </span>
                                                    <span class="">Chris Evans</span>
                                                </div>
                                                <div class="text-right">16%</div>
                                            </div>
                                            <div class="progress progress-bar-primary my-50">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="16"
                                                    aria-valuemin="16" aria-valuemax="100" style="width:16%"></div>
                                            </div>
                                            <ul class="list-unstyled users-list d-flex">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-placement="bottom" data-original-title="JeanieBulgrin"
                                                    class="avatar pull-up ml-0">
                                                    <img class="media-object rounded-circle"
                                                        src="../../../app-assets/images/portrait/small/avatar-s-8.png"
                                                        alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-placement="bottom" data-original-title="Graig Muckey"
                                                    class="avatar pull-up">
                                                    <img class="media-object rounded-circle"
                                                        src="../../../app-assets/images/portrait/small/avatar-s-3.png"
                                                        alt="Avatar" height="30" width="30">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-primary block-element mb-1">Load More</button>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
        <!-- add task Modal -->
        <div class="modal fade text-left" id="addtask" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">ADD TASK</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="addtaskform">
                        @csrf
                        <div class="modal-body">
                            <label>Task Title: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Task Title" name="task_title" class="form-control">
                            </div>

                            <label>Task Description: </label>
                            <div class="form-group">
                                <textarea name="task_description" class="form-control"></textarea>
                            </div>
                            <!-- user id --->
                            <input type="hidden" value="{{ $lead->user->id }}" name="task_created_for">
                            <!--lead id -->
                            <input type="hidden" value="{{ $lead->id }}" name="lead_id">
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="add-taskbtn" class="btn btn-primary" data-dismiss="modal">Add
                                Task</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end task modal -->
        <!-- task detail modal-->
        <!-- Modal -->
        <div class="modal fade text-left" id="task-detailModal" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel160" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary white">
                        <h5 class="modal-title" id="task-title">Primary Modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="task-description"></p>
                    </div>

                </div>
            </div>
        </div>
        <!-- end task detail modal-->


    </div>



    <!-- END: Content-->
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
                                    '<p class="badge badge badge-success badge-pill mr-2">Client</p>'
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

        //add task
        $("#add-task").click(function(e) {
            e.preventDefault();
            $("#addtask").modal('show')

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
            $.ajax({
                type: "get",
                url: "{{ route('admin.gettasks') }}",
                success: function(data) {
                    
                    if (data.status) {
                        var html = "";
                            html += "<div   id='task"+data.task.id+"' class='d-flex justify-content-start align-items-center mb-1'>";
                            html += "<div class='avatar mr-50'>";
                            html += "<img src='{{ asset('public/assets/app-assets/images/portrait/small/avatar-s-5.png') }}'alt='avtar img holder' height='35' width='35'>";
                            html += "</div>";
                            html += "<div class='user-page-info'>";
                            html += "<h6 class='mb-0'>"+data.task.task_title+"</h6>";
                            html += "<span class='font-small-2'><i data-id='"+data.task.id+"'  style='font-size:16px;color: red;cursor:pointer;' class='feather icon-delete delete-task'></i></span>";
                            html += "</div>";
                            html += "<button data-id='"+data.task.id+"' type='button' class='btn btn-primary btn-icon ml-auto task-detail'> <i class='feather icon-eye'></i></button>";
                            html += "</div>";
                       
                            $(".tasks").prepend(html);
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
        

    </script>
@endsection
