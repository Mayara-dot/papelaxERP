@section('main')
<div id="status">
    <div class="d-flex" id="head">
        <div>CONSULTA DE MESAS</div>
        <div>
            <input type="checkbox" name="emptyBoards" id="emptyBoards">
            <label for="emptyBoards">Mesas sem consumo</label>
        </div>
        <div>
            <input type="checkbox" name="freeBoards" id="freeBoards">
            <label for="freeBoards">Ocultar mesas livres</label>
        </div>
    </div>
</div>
<div class="container text-center" id="allBoards">
    <div class="row">
        @for ($i = 1; $i < 101; $i++)
        <div class="col">
            <a href="/menu/board/{{ $i }}">
                <span>
                    <i id={{ $i }} class="fa fa-couch"></i>
                </span>
            </a>
        {{ $i }}</div>
        @endfor
    </div>
</div>
@endsection