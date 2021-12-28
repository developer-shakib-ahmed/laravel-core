@extends('layouts.app')

@section('content')

<section class="user-login mt-5">
    <div class="container">
        <div class="row">
            <div class="col"></div>

            <div class="col">
            
                <div class="form-wrap bg-white p-4 rounded shadow-sm">
                    <h3 class="text-center mb-4">User Login</h3>

                    <ul>
                        @if( $errors->any() )

                            @foreach( $errors->all() as $error )

                                <li>{{ $error }}</li>

                            @endforeach

                        @endif

                        
                    </ul>

                    <form action="myuser" method="POST">
                        @csrf
                        <p>
                            <input type="text" name="email" class="form-control" placeholder="Enter your email">
                            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <input type="password" name="password" class="form-control" placeholder="Enter your password">
                            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                        </p>

                        <button class="btn btn-success">Login</button>
                    </form>
                </div>

            </div>

            <div class="col"></div>
        </div>
    </div>
</section>

@endsection