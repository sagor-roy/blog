@extends('layouts.backend')

@section('content')
    <div class="main_content">
        <!-- content area -->
        <div class="container-fluid">
            <!-- breadcame start -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link"><span
                                                class="p-1 text-sm text-light bg-success rounded-circle"><i
                                                    class="fas fa-home"></i></span> Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">HR Dashboard Template
                                    </li>
                                    <a href="#" class="btn btn-primary ml-auto">New Task</a>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- dashboard body content -->
            <div class="dashboard my-4">
                <div class="content_section">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>cate</td>
                                <td>cate</td>
                                <td><span class="badge bg-success text-white">publish</span></td>
                                <td>
                                    <a href="" class="btn btn-primary">edit</a>
                                    <a href="" class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end -->
        </div>
    </div>
@endsection
