@php
    require_once("php/date.php");
    $system = SystemMode("T");
    $date = indexDate();
@endphp
@extends('components/layouts/main_layout')
<x-modal.main_modal></x-modal.main_modal>
<x-header></x-header>
@section('main')
<section id="title">
    <h3>PRODUTOS</h3>
    <h6>MODO: {{$system}}</h6>
    <h6>{{$date}}</h6>
</section>

@for ($i = 0; $i < 4; $i++)
<div class="d-flex flex-row">
    <input id="btnIndex" class="p-2" type="button" value="CATEGORY">
    <input id="btnIndex" class="p-2" type="button" value="CATEGORY">
    <input id="btnIndex" class="p-2" type="button" value="CATEGORY">
</div>
@endfor

@unless(count($menu) == 0)
@foreach(array_keys($menu) as $category)
<h4><a href="/menu/{{$category}}">{{$category . ": "}}</a></h4>
@endforeach

@else
<x-single></x-single>
@endunless
@endsection


<x-main_aside></x-main_aside>
<x-footer></x-footer>