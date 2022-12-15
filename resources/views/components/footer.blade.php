@extends('components/layouts/main_layout')
@section('footer')
<div  class="d-flex">
    <a id="btnOptionsMenu" href="/menu/options" class="btn btn-primary" 
    role="button">
    <span><i class="fa fa-plus">
    </i>
    MAIS OPÇÕES </span>
    </a>
    <a id="btnBoardMenu" href="/menu/board" class="btn btn-primary" 
    role="button">
    <span><i class="fa fa-couch">
    </i>
    CONSULTA MESA </span>
    </a>
    <button type="button"  id="closeTableModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#closeTableModal">
        <span><i class="fa fa-check">
        </i> FECHAR MESA
        </span>
    </button>
    <button type="button"  id="closeShiftModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#closeShiftModal">
        <span><i class="fa fa-folder-plus">
        </i> FECHAR TURNO
        </span>
    </button>
    <button type="button"  class="btn btn-primary">
        <span><i class="fa fa-paperclip">
        </i> OBS. ITEM
        </span>
    </button>
    <button type="button"  class="btn btn-primary">
        <span><i class="fa fa-trash">
        </i> REMOVER ITEM
        </span>
    </button>
    <button type="button"  class="btn btn-primary">
        <span><i class="fa fa-close">
        </i> CANCELAR CUPOM
        </span>
    </button>
    <button type="button"  class="btn btn-primary">
        <span><i class="fa fa-magnifying-glass">
        </i> PROCURAR
        </span>
    </button>
    <button type="button"  class="btn btn-primary">
        <span><i class="fa fa-print">
        </i> MENU FISCAL
        </span>
    </button>
</div>
@endsection