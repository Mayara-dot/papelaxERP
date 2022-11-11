@php
    $shift = rand(0001, 999);
    $user = 'MAYARA';
@endphp
@extends('components/layout')
@section('header')
<nav class="navbar navbar-expand-lg">
    <div class="navbar-brand">
    <img width="70px" src={{asset("/images/favicon.ico")}} alt="LOGO" class="logo"/>
    </div>
    <div id="cloud">
    <img  width="10px" src={{asset("/images/green_light.ico")}} alt="statusLigth" />
    CLOUD</div>
    <ul class="d-flex align-items-end flex-column fixed-top">
        <li>
        <strong>Turno</strong>
        <li>
        {{$shift}}
        </li>
        </li>
        <li>
        <strong>OPERADOR</strong>
        <li>
        {{$user}}
        </li>
        </li>
    </ul>
</nav>
@endsection