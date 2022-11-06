@extends('layouts.frontend')

@section('content')
    <main class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card card-body border-0">
                        <h2 class="text-center">REGISTER</h2>
                        <form action="{{route('register.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 mt-2">
                                    <label class="f-12">Name</label>
                                    <input type="text" class="form-control" placeholder="Name" name="name"
                                        required="">
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <label class="f-12">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email"
                                        required="">
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <label class="f-12">Designation</label>
                                    <input type="text" class="form-control" placeholder="Designation" name="designation"
                                        required="">
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <label class="f-12">Image</label>
                                    <input type="file" class="form-control" name="img"
                                        required="">
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <label class="">Password</label>
                                    <input name="password" type="password" class="form-control" placeholder="Password"
                                        required="">
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <label class="">Confirm Password</label>
                                    <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password"
                                        required="">
                                </div>
                                <div class="col-lg-12 mt-4">
                                    <button type="submit" class="btn btn-primary w-100">Register</button>
                                </div>

                                .
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
