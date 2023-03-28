@extends('layouts.master')
@section('title', $title)
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-8">
                            {{ $title }}
                        </div>
                        <div class="col-lg-4">
                            <a style="float: right"; href="/commerical-create" class="btn btn-primary btn-sm">Add new</a>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success mt-4 mb-4">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Location</th>
                                            <th>Budget</th>
                                            <th>Area</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($projects as $index => $item)
                                        @if ($item->userID == Auth::user()->id || Auth::user()->role == '1')

                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->types }}</td>
                                                <td>{{ $item->location }}</td>
                                                <td>{{ $item->budget }}</td>
                                                <td>{{ $item->area }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>
                                                    <div class="d-flex m-1">
                                                        <a class="btn btn-primary btn-sm  m-1"
                                                            href="projectedit/{{ $item->id }}/{{ $item->is_commerical }}/{{ $item->is_residential }}/{{ $item->is_maintaning }}/{{ $item->is_retrofitting }}"><i
                                                                class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <a class="btn btn-danger btn-sm  m-1"
                                                            href="deleteprojects/{{ $item->id }}"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
