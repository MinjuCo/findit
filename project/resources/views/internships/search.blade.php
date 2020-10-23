@extends('layouts/app')
@extends('layouts/homeLayout')


@section('content')
<div class="search-containter">
    <h1>zoek resultaten</h1>
    <p> resultaten voor '{{request()->input('query')}}'</p>
    @foreach($internships as $internship)
    <h3><a href="/internships/{{ $internship->id }}">{{ $internship->title }}</a></h3>
    @endforeach
</div>
@endsection