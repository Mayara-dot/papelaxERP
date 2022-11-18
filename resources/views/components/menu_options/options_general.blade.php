@section('options_general')
<h1>GERAIS</h1>
@for ($i = 0; $i < 4; $i++)
<div class="d-flex flex-row">
    <input id="btnIndex" class="p-2" type="button" value="OPTION">
    <input id="btnIndex" class="p-2" type="button" value="OPTION">
    <input id="btnIndex" class="p-2" type="button" value="OPTION">
    <input id="btnIndex" class="p-2" type="button" value="OPTION">
</div>
@endfor
@endsection