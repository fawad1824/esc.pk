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
                            <a style="float: right"; href="/servicesscreate" class="btn btn-primary btn-sm">Add new</a>
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
                                            <th>image</th>
                                            <th>Name</th>
                                            <th>Desc</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($service as $index => $item)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td><img style="max-width: 77px;" src="/images/{{ $item->image }}"
                                                        alt=""></td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->desc }}</td>
                                                <td>
                                                    <div class="d-flex m-1">
                                                        <a class="btn btn-primary btn-sm  m-1"
                                                            href="servicessedit/{{ $item->id }}"><i
                                                                class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <a class="btn btn-danger btn-sm  m-1"
                                                            href="servicessdelete/{{ $item->id }}"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
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
