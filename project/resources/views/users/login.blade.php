@extends('layouts/app')

@section('title', 'Inloggen')

@section('nav')
    <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/students">Studenten</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/internships">Stages</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/companies">Bedrijven</a>
    </li>
@endsection

@section('content')
    @if( $flash = session('error'))
        @component('components/alert')
          @slot('type', 'danger')
            {{ $flash }}
        @endcomponent
    @endif
    <form method="post" action="">
        {{csrf_field()}}
        <h2>Log in</h2>
        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Log in</button>
    </form>
    <hr>
    <a href="/login/linkedin" class="btn btn-linkedin"><i class="fa fa-linkedin"></i> Log in met Linkedin</a>
@endsection