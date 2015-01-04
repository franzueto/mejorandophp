@extends('layout')

@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-12">
            <h2>Heading</h2>
            @foreach($last_candidates as $category)
                <h2>{{ $category->name }}</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo de Trabajo</th>
                        <th>Descripción</th>
                        <th>Ver</th>
                    </tr>
                    </thead>
                @foreach($category->candidates as $candidate)
                <tr>
                    <td>{{ $candidate->user->full_name }}</td>
                    <td>{{ $candidate->job_type_title }}</td>
                    <td>{{ $candidate->description }}</td>
                    <td>
                        <a href="{{ route('candidate', [$candidate->slug, $candidate->id ]) }}" class="btn btn-info">
                            Ver
                        </a>
                    </td>
                </tr>
                @endforeach
                </table>
                <p>
                    <a href="{{ route('category', [$category->slug, $category->id ]) }}" class="btn btn-info">
                        Ver todos {{ $category->name }}
                    </a>
                </p>
            @endforeach
        </div>
    </div>

</div>

@stop