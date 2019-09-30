@extends('layouts.app')

@section('content')
<ul>
    @foreach ($items as $item)
    <li>{{ $item->name }}</li>
    @endforeach
</ul>
<div id="example">
    
</div>
@endsection
