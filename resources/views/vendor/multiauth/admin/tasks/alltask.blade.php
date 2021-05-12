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
                            <h2 class="content-header-title float-left mb-0">Tasks</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Tasks
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    {{-- <h4 class="card-title">Zero configuration</h4> --}}
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">

                                        <div class="table-responsive">
                                            <table class="table zero-configuration" id="leadsheet">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Task Title</th>
                                                        <th>Task Description</th>
                                                        <th>Created At</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#leadsheet').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                order: [
                    [0, "desc"]
                ],
                "ajax": {
                    "url": "{{ route('admin.alltasksbyajax') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": {
                        _token: "{{ csrf_token() }}"
                    }
                },
                "columns": [
                    {
                        "data": "id"
                    },
                    {
                        "data": "task_title"
                    },
                    {
                        "data": "task_description"
                    },
                    {
                        "data": "created_at"
                    },


                ]

            });
        });

    </script>

@endsection
