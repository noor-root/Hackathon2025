@extends('layouts.app')

@php
use Illuminate\Support\Facades\Auth;
@endphp

@section('content')
<div class="container">

    <div class="banner">
        <h1> Bonjour {{ Auth::user()->name }}, heureux de vous revoir !</h1>
        <p> Vous êtes connecté en tant qu'administrateur. </p>
    </div>
</div>
@endsection