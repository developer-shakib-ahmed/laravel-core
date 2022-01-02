@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if ( session('delete') )
                        <div class="alert alert-danger" role="alert">
                            {{ session('delete') }} is deleted!
                        </div>
                    @endif

                    @if ( session('success') )
                        <div class="alert alert-success" role="alert">
                            Data update succesful.
                        </div>
                    @endif

                    @if ( session('add_success') )
                        <div class="alert alert-success" role="alert">
                            Data added succesful.
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}

                    <div class="row mb-3">
                        <div class="col">
                            <p>Totals: {{ count( $collection ) }}</p>
                        </div>

                        <div class="col text-end">
                            <a class="btn btn-sm btn-primary" href="/user/add">Add User <i class="fa fa-user"></i></a>
                        </div>
                    </div>

                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)

                                <tr>
                                    <td>{{ $item['id'] }}</td>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['email'] }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-info text-white me-2" href="/user/show/{{ $item['id'] }}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-primary me-2" href="/user/edit/{{ $item['id'] }}">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <a onclick="deleteConfirm()" class="btn btn-sm btn-danger" href="#">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                    </table>

                    {{-- {{ $collection->links() }} --}}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
