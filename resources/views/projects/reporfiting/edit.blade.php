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
                            <a style="float: right"; href="/commerical" class="btn btn-primary btn-sm">Back</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success mt-4 mb-4">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form action="/commerical-add" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <label for="">Select Type</label>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="form-check form-contro form-check-inline">
                                        <input {{ $proj->types == 'Desgin' ? ' checked' : '' }} class="form-check-input"
                                            type="radio" name="types" id="inlineRadio1" value="Desgin">
                                        <label class="form-check-label" for="inlineRadio1">Desgin</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="form-check form-contro form-check-inline">
                                        <input {{ $proj->types == 'Construction' ? ' checked' : '' }}
                                            class="form-check-input" type="radio" name="types" id="inlineRadio2"
                                            value="Construction">
                                        <label class="form-check-label" for="inlineRadio2">Construction</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="form-check form-contro form-check-inline">
                                        <input {{ $proj->types == 'Both' ? ' checked' : '' }} class="form-check-input"
                                            type="radio" name="types" id="inlineRadio3" value="Both">
                                        <label class="form-check-label" for="inlineRadio3">Both</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Name/Company</label>
                                        <input value="{{ $proj->name }}" type="text" required class="form-control"
                                            name="name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Location</label>
                                        <input value="{{ $proj->location }}" type="text" required class="form-control"
                                            name="location">
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <h4 class="mt-4 mb-4">Type of Construction</h4>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <div class="form-check form-contro form-check-inline">
                                            <input {{ $proj->typeof == 'Lum Sum' ? ' checked' : '' }}
                                                class="form-check-input" type="radio" name="typeof" id="inlineRadio1"
                                                value="Lum Sum">
                                            <label class="form-check-label" for="inlineRadio1">Lump Sum</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <div class="form-check form-contro form-check-inline">
                                            <input {{ $proj->typeof == 'Cost Plus' ? ' checked' : '' }}
                                                class="form-check-input" type="radio" name="typeof" id="inlineRadio2"
                                                value="Cost Plus">
                                            <label class="form-check-label" for="inlineRadio2">Cost Plus</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <div class="form-check form-contro form-check-inline">
                                            <input {{ $proj->typeof == 'Unit Price' ? ' checked' : '' }}
                                                class="form-check-input" type="radio" name="typeof" id="inlineRadio3"
                                                value="Unit Price">
                                            <label class="form-check-label" for="inlineRadio3">Unit Price</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <div class="form-check form-contro form-check-inline">
                                            <input {{ $proj->typeof == 'Time and Material' ? ' checked' : '' }}
                                                class="form-check-input" type="radio" name="typeof" id="inlineRadio3"
                                                value="Time and Material">
                                            <label class="form-check-label" for="inlineRadio3">Time & Mateial</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Budget</label>
                                        <input value="{{ $proj->budget }}" type="text" required class="form-control"
                                            name="budget">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">covered Area</label>
                                        <input value="{{ $proj->area }}" type="text" required class="form-control"
                                            name="area">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea class="form-control" name="des" required id="" cols="30" rows="10">{{ $proj->desc }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">No of Stories</label>
                                        <input type="text" value="{{ $id }}">
                                        <input type="text" hidden name="is_commerical" value="{{ $is_commerical }}">
                                        <input type="text" hidden name="is_residential"
                                            value="{{ $is_residential }}">
                                        <input type="text" hidden name="is_maintaning" value="{{ $is_maintaning }}">
                                        <input type="text" hidden
                                            name="is_retrofitting"value="{{ $is_retrofitting }}">
                                        <input type="text" required class="form-control" value="{{ $proj->stories }}"
                                            name="stories">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <h4 class="mt-4 mb-4">Construct Details</h4>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="tel" value="{{ $proj->phone }}" required class="form-control"
                                            name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" value="{{ $proj->email }}" required class="form-control"
                                            name="email">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <h4 class="mt-4 mb-4">Attach Design Details</h4>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Design</label>
                                        <input type="file" class="form-control" multiple name="design[]">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary card-link">Submit</button>
                                <a href="/commerical" class="btn btn-primary card-link">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
