@extends('components/layouts/main_layout')
@section('header')
<nav class="navbar navbar-expand-lg">
    <x-logo.logo></x-logo.logo>
    <div id="cloudStatus">
    <img  width="10px" src={{asset("/images/green_light.ico")}} alt="statusLigth" />
    CLOUD</div>
    <ul class="d-flex align-items-end flex-column fixed-top p-1">
        <li>
        <strong>Turno</strong>
        <li>
        {{session()->get('shift')}}
        </li>
        </li>
        <li>
        <strong>OPERADOR</strong>
        <li>
        {{session()->get('user')}}
        </li>
        </li>
    </ul>
</nav>
@endsection