@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('delete'))
                        <div class="alert alert-danger" role="alert">
                            Id {{ session('delete') }} is deleted!
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}

                    <p>Totals: {{ count( $collection ) }}</p>

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
                                        <a class="btn btn-sm btn-info text-white" href="/user/view/{{ $item['id'] }}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-primary" href="/user/edit/{{ $item['id'] }}">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-sm btn-danger" href="/user/delete/{{ $item['id'] }}">
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
