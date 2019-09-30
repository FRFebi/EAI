@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cari Cari Lagu</div>
                <div class="card-body">
                    <form method="get">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">Artist</span>
                            </div>
                            <input type="text" name="artist" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">Song</span>
                            </div>
                            <input type="text" name="title" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3 row justify-content-center">
                            <input type="submit" class="btn btn-outline-dark col-md-auto" id="basic-url" aria-describedby="basic-addon3" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if($json['message']['header']['status_code'] == 200)
<div class="container mt-3">
    <div class="card-columns">
        @foreach ($json['message']['body']['track_list'] as $element)
        <div class="card border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header"> Artist : {{ $element['track']['artist_name'] }}</div>
            <div class="card-body">
                <h5 class="card-title">
                    Song : {{ $element['track']['track_name'] }}
                </h5>
                <h5 class="card-title">
                    Album : {{ $element['track']['album_name'] }}
                </h5>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
@endsection
