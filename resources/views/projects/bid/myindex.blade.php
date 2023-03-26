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
                            {{-- <a style="float: right"; href="/commerical-create" class="btn btn-primary btn-sm">Add new</a> --}}
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
                                            <th>User Name</th>
                                            <th>Project Name</th>
                                            <th>Project Price</th>
                                            <th>Bid Price</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($projects as $index => $item)
                                            @if ($item->user_id == Auth::user()->id || (Auth::user()->is_admin != '0'))
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $item->user->name }}</td>
                                                    <td>{{ $item->project->name }}</td>
                                                    <td>{{ $item->project->budget }}</td>
                                                    <td>{{ $item->price }}</td>
                                                    <td>{{ $item->desc }}</td>
                                                    <td>{{ $item->status }}</td>
                                                    <td>
                                                        <div class="d-flex m-1">
                                                            <a class="btn btn-primary btn-sm  m-1"
                                                                href="projectBidd/{{ $item->id }}">Bid Assign</a>
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
