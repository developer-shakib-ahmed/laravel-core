@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit User') }}</div>

                <div class="card-body">

                    <form action="/user/update/" method="POST">
                        @csrf

                        <input type="hidden" name="id" value="{{ $data['id'] }}">

                        <p>
                            <input 
                                type="text"
                                name="name"
                                class="form-control"
                                placeholder="Enter your name"
                                value="{{ $data['name'] }}"
                            >
                            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <input 
                                type="text"
                                name="email"
                                class="form-control"
                                placeholder="Enter your email"
                                value="{{ $data['email'] }}"
                            >
                            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                        </p>

                        <button class="btn btn-success">Save Changes</button>                           
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
