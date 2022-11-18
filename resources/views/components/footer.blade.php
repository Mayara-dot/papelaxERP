@extends('components/layouts/main_layout')
@section('footer')
<div  class="d-flex">
    <a id="btnOptionsMenu" href="/menu/options" class="btn btn-primary" 
    role="button">
    <span><i class="fa fa-plus"></i>
    MAIS OPÇÕES</span>
    </a>
    @for ($i = 0; $i < 10; $i++)
        <a id="btnFooter" class="btn btn-primary btn-lg p-5" 
        href="#" role="button">
        <span><i class="fa fa-user"></i></span>
        </a>
    @endfor
</div>
@endsection