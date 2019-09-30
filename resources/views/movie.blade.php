@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cari Judul Film</div>
                <div class="card-body">
                    <form method="get>
                        <div class="input-group mb-3">
                            <input name="title" type="text" class="form-control" placeholder="Ex : God Must Be Crazy" aria-label="Ex : God Must Be Crazy" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if($json['Response'] == "True")
<div class="container mt-3">
    <div class="card-columns">
        @foreach ($json['Search'] as $element)
        <div class="card">
            <img src="{{ $element['Poster'] }}" class="card-img-top embed-responsive-item" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $element['Title'] }}
                </h5>
                <p class="card-text">
                    {{ $element['Year'] }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
@endsection
