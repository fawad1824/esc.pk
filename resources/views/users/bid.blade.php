@extends('layouts.index')
@section('websitepages')
    @include('users.inc.pagestitle')


    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }
    </style>
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
                                <input type="text" hidden class="form-control" value="{{ $project->id }}">
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

                    @if (session()->has('message'))
                        <div class="alert alert-success mt-4 mb-4">
                            {{ session()->get('message') }}
                        </div>
                    @endif

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
                        @if (Auth::check())
                            @php
                                $projectbii = DB::table('projectbidding')
                                    ->where('project_id', $project->id)
                                    ->where('user_id', Auth::user()->id)
                                    ->first();

                            @endphp
                            @if ($projectbii)
                                <h5 class="mt-4 mb-5 ml-3">Your Already Bid for this project</h5>
                                @php
                                    $phoneNumber = $project->phone; // Replace with your desired phone number
                                    $message = 'Project ' . $project->name . ' ' . ' Project Location ' . $project->location . ' Type ' . $project->typeof; // Replace with your desired custom message

                                    $encodedMessage = urlencode($message);
                                    $whatsappLink = 'https://api.whatsapp.com/send?phone=' . $phoneNumber . '&text=' . $encodedMessage;
                                @endphp


                                <link rel="stylesheet"
                                    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

                                <a href="{{ $whatsappLink }}" class="float" target="_blank"><i
                                        class="fa fa-whatsapp my-float"></i></a>

                                </a>
                            @else
                                <div class="col-lg-12">

                                    <h5>Your Biding Detail</h5>

                                    <form action="/addBidding" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Price</label>
                                            <input type="number" required name="price" class="form-control">
                                            <input type="text" hidden name="project_id" value="{{ $project->id }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea name="desc" required id="" class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            @endif
                        @else
                            <div class="col-lg-12">
                                <h5 class="mt-4 mb-1 ml-3">Please Login First</h5>
                            </div>
                            <div class="col-lg-12 ml-3">
                                <a href="/login" class="btn btn-primary">Login</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- Team End -->
@endsection
