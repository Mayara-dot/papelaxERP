@section('options_fiscais')
<h1>FISCAIS</h1>
@for ($i = 0; $i < 4; $i++)
<div class="d-flex flex-row">
    <input id="btnIndex" class="p-2 fw" type="button" value="PRODUCT">
    <input id="btnIndex" class="p-2" type="button" value="PRODUCT">
    <input id="btnIndex" class="p-2" type="button" value="PRODUCT">
    <input id="btnIndex" class="p-2" type="button" value="PRODUCT">
</div>
@endfor
@endsection