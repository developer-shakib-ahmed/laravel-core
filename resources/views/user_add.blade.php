@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add User') }}</div>

                <div class="card-body p-4">

                    

                    <form action="/user/store/" method="POST">
                        @csrf

                        <p>
                            <input 
                                type="text"
                                name="name"
                                class="form-control"
                                placeholder="Enter your name"
                                value="@if( session('name') && !session('add_success') ) {{ session('name') }} @endif"
                            >
                            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <input 
                                type="text"
                                name="email"
                                class="form-control"
                                placeholder="Enter your email"
                                value="@if( session('email') && !session('add_success') ) {{ session('email') }} @endif"
                            >
                            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <input 
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Enter your password"
                                value=""
                            >
                            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <input 
                                type="password"
                                name="confirm_password"
                                class="form-control"
                                placeholder="Confirm your password"
                                value=""
                            >
                            <span class="text-danger">@error('confirm_password') {{ $message }} @enderror</span>
                        </p>

                        <button class="btn btn-success">Save Changes</button>                           
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
