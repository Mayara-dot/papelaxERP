@section('aside')
<table id="asideTable">
    <tr>
        <th>QTD</th>
        <th colspan="4">CÓDIGO</th>
    </tr>
    <tr>
        <td><input type="text" name="" id="qtd"></td>
        <td colspan="4"><input type="text" name="" id="codigo"></td>
    </tr>
    <tr>
        <td><input type="button" value="7"></td>
        <td colspan="3"><input type="button" value="8"></td>
        <td colspan="3"><input type="button" value="9"></td>
    </tr>
    <tr>
        <td><input type="button" value="4"></td>
        <td colspan="3"><input type="button" value="5"></td>
        <td colspan="3"><input type="button" value="6"></td>
    </tr>
    <tr>
        <td><input type="button" value="1"></td>
        <td colspan="3"><input type="button" value="2"></td>
        <td colspan="3"><input type="button" value="3"></td>
    </tr>
    <tr>
        <td><input type="button" value="LIMPAR"></td>
        <td colspan="3"><input type="button" value="0"></td>
        <td colspan="3"><input type="button" value=","></td>
    </tr>
    <tr>
        <td>
        <button id="btnBoardAside">
        <a id="voltarBoard" href="/">VOLTAR</a>
        </button>
        </td>
        <td colspan="4"><input type="button" value="ENTER"></td>
    </tr>
    <tr>
        <td colspan="6">
            MESAS FECHADAS 2
        </td>
    </tr>
</table>

<div class="container" id="btn-group">
    <div class="row row-cols-2">
        <button>Transferir item</button>
        <button>Cancelar item</button>
        <button>Detalhe item</button>
        <button>Ajustar quantidade</button>
        <button>Transferir mesa</button>
        <button>Pré fechamento</button>
        <button>Separar quantidade</button>
        <button>Adiantamento</button>
    </div>
</div>

<div class="container" id="statusIcons">
    <div>
        <span>
            <i id="freeIcon" class="fa fa-couch"></i>
        </span>
        MESAS LIVRES 97
    </div>
    <div>
        <span>
            <i id="busyIcon" class="fa fa-couch"></i>
        </span>
        MESAS EM USO 97
    </div>
    <div>
        <span>
            <i id="closingIcon" class="fa fa-couch"></i>
        </span>
        MESAS EM FECHAMENTO 97
    </div>
</div>
@endsection