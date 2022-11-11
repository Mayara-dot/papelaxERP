@extends('components/layout')
@section('footer')
<div  class="d-flex">
    @for ($i = 0; $i < 10; $i++)
        <a id="footerButton" class="btn btn-primary btn-lg p-5" 
        href="#" role="button">
        <span><i class="fa fa-user"></i></span>
        </a>
    @endfor
</div>
@endsection