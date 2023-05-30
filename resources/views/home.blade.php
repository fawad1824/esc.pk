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
                                            @if ($item->user_id == Auth::user()->id || Auth::user()->is_admin != '0')
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    @if (asset($item->user->name))
                                                        <td>{{ $item->user->name }}</td>
                                                    @endif
                                                    @if (asset($item->project->name))
                                                        <td>{{ $item->project->name }}</td>
                                                    @endif
                                                    @if (asset($item->project->budget))
                                                        <td>{{ $item->project->budget }}</td>
                                                    @endif
                                                    @if (asset($item->price))
                                                        <td>{{ $item->price }}</td>
                                                    @endif
                                                    <td>{{ $item->desc }}</td>
                                                    @if ($item->stats == '1')
                                                        <td>Pending</td>
                                                    @else
                                                        <td>Complete</td>
                                                    @endif
                                                    <td>
                                                        <div class="d-flex m-1">
                                                            @if ($item->status == '1')
                                                                <a class="btn btn-primary btn-sm  m-1"
                                                                    href="projectBiddAdd/{{ $item->id }}/2">Bid
                                                                    Assign</a>
                                                                <a class="btn btn-primary btn-sm  m-1"
                                                                    href="projectBiddAdd/{{ $item->id }}/3">Reject
                                                                    Bid</a>
                                                            @elseif($item->status == '2')
                                                                You Already Assign
                                                            @elseif($item->status == '3')
                                                                You Reject
                                                            @endif
                                                            <a class="btn btn-danger btn-sm  m-1"
                                                                href="deletebiding/{{ $item->id }}"><i
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
