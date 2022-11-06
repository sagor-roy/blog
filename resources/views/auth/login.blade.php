@extends('layouts.frontend')

@section('content')
<main class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card card-body border-0">
                    <h2 class="text-center">LOGIN</h2>
                    <form action="{{route('access')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 mt-2">
                                <label class="f-12">Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email"
                                    required="">
                            </div>

                            <div class="col-lg-12 mt-2">
                                <label class="">Password</label>
                                <input name="password" type="password" class="form-control" placeholder="Password"
                                    required="">
                            </div>
                            <div class="col-lg-12 mt-4">
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection
