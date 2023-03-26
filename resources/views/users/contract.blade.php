@extends('layouts.index')
@section('websitepages')
    @include('users.inc.pagestitle')


    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Latest Projects</p>
                <h2>Latest From Projects</h2>
            </div>
            <div class="row">

                @foreach ($userproject as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <div class="blog-title">
                                <h3>{{ $item->name }}</h3>
                            </div>
                            <div class="blog-meta">
                                <p>By<a href="">{{ $item->userName }}</a></p>
                                <p>In<a href="">Construction</a></p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    {{ $item->desc }}
                                </p>
                            </div>
                            <div class="blog-text">
                                <a href="/single/{{ $item->id }}" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {{ $userproject->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
