@extends('layout')

@section('content')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>{{ $candidate->user->full_name }}</h1>
            <a href="{{ route('category', [$candidate->category->slug, $candidate->category->id]) }}">
                <h2>{{ $candidate->category->name }}</h2>
            </a>
            <h3>{{ $candidate->job_type_title }}</h3>
            <p>{{ $candidate->description }}</p>
            <p><a class="btn btn-primary btn-lg" href="{{ $candidate->website_url }}" role="button">Website &raquo;</a></p>
        </div>
    </div>

@stop