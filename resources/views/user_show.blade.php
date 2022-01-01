@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show User') }}</div>

                <div class="card-body">
                    
                    <p>ID: {{ $data['id'] }}</p>
                    
                    <p>Name: {{ $data['name'] }}</p>
                    
                    <p>Email: {{ $data['email'] }}</p>

                    <p>
                        <a class="btn btn-sm btn-primary" href="/user/edit/{{ $data['id'] }}">
                            Edit <i class="fa fa-pencil-alt"></i>
                        </a>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
