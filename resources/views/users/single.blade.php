@extends('layouts.index')
@section('websitepages')
    @include('users.inc.pagestitle')


    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Details</p>
                <h2>{{ $title }}</h2>
            </div>

            <div class="card">
                <div class="card-header">

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Project Name</label>
                                <input type="text" readonly class="form-control" value="{{ $project->name }}">
                            </div>
                        </div>
                        <div class="col-lg-4">

                            <div class="form-group">
                                <label for="">Contractor Name</label>
                                <input type="text" readonly class="form-control" value="{{ $project->userName }}">
                            </div>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Project Type</label>
                                <input type="text" readonly class="form-control" value="{{ $project->types }}">

                            </div>
                        </div>
                        <div class="col-lg-4">

                            <div class="form-group">
                                <label for="">Project Location</label>
                                <input type="text" readonly class="form-control" value=" {{ $project->location }}">

                            </div>
                        </div>
                        <div class="col-lg-4">

                            <div class="form-group">
                                <label for="">Type</label>
                                <input type="text" readonly class="form-control" value=" {{ $project->typeof }}">

                            </div>

                        </div>
                        <div class="col-lg-4">

                            <div class="form-group">

                                <label for="">Budget</label>
                                <input type="text" readonly class="form-control" value="{{ $project->budget }}">
                            </div>


                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <a class="btn btn-primary ml-4" href="/bid/{{ $project->id }}">Bid Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Team End -->
@endsection
