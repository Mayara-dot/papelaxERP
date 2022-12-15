@section('modal')
<!-- Modal Transfer item-->
<div class="modal" id="transferItemModal" tabindex="-1" aria-labelledby="transferItemModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
            <span><i class="fa fa-info-circle"></i></span>
            <h1 class="modal-title fs-5" id="detailItemModal">INFORMAÇÃO
            </h1>
        </div>
        <div class="modal-body">
          <p>
            Transferir item
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success">
            <span><i class="fa fa-check">
            </i> Sim
            </span>
            </button>
          <button type="button" class="btn btn-outline-danger"
          data-bs-dismiss="modal">
            <span><i class="fa fa-close">
            </i> Não
            </span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Detail item-->
<div class="modal" id="detailItemModal" tabindex="-1" aria-labelledby="detailItemModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <span><i class="fa fa-info-circle"></i></span>
          <h1 class="modal-title fs-5" id="detailItemModal">INFORMAÇÃO
          </h1>
        </div>
        <div class="modal-body">
          <p>
            BATATA <br>
            Operador: Mayara <br>
            {{date("Y/m/d")}} {{date("h:i:s")}}
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success"
          data-bs-dismiss="modal">
            <span><i class="fa fa-check">
            </i> OK
            </span>
            </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Tranfer board-->
<div class="modal" id="transferBoardModal" tabindex="-1" aria-labelledby="transferBoardModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="transferBoardModal">Transferir mesa</h1>
          <span>
            <x-logo.logo></x-logo.logo>
          </span>
        </div>
        <div class="modal-body">
          <p>
            ...
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success">
            <span><i class="fa fa-check">
            </i> Sim
            </span>
            </button>
          <button type="button" class="btn btn-outline-danger"
          data-bs-dismiss="modal">
            <span><i class="fa fa-close">
            </i> Não
            </span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Split qtd-->
<div class="modal" id="splitQtdModal" tabindex="-1" aria-labelledby="splitQtdModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="splitQtdModal">Separa quantidade</h1>
          <span>
            <x-logo.logo></x-logo.logo>
          </span>
        </div>
        <div class="modal-body">
          <p>
            ...
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success">
            <span><i class="fa fa-check">
            </i> Sim
            </span>
            </button>
          <button type="button" class="btn btn-outline-danger"
          data-bs-dismiss="modal">
            <span><i class="fa fa-close">
            </i> Não
            </span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Delete item-->
<div class="modal" id="deleteItemModal" tabindex="-1" aria-labelledby="deleteItemModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteItemModal">Cancelar item</h1>
          <span>
            <x-logo.logo></x-logo.logo>
          </span>
        </div>
        <div class="modal-body">
          <p>
            ...
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success">
            <span><i class="fa fa-check">
            </i> Sim
            </span>
            </button>
          <button type="button" class="btn btn-outline-danger"
          data-bs-dismiss="modal">
            <span><i class="fa fa-close">
            </i> Não
            </span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Adjust QTD-->
<div class="modal" id="adjustQtdModal" tabindex="-1" aria-labelledby="adjustQtdModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="adjustQtdModal">Ajustar quantidade</h1>
          <span>
            <x-logo.logo></x-logo.logo>
          </span>
        </div>
        <div class="modal-body">
          <p>
            ...
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success">
            <span><i class="fa fa-check">
            </i> Sim
            </span>
            </button>
          <button type="button" class="btn btn-outline-danger"
          data-bs-dismiss="modal">
            <span><i class="fa fa-close">
            </i> Não
            </span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal pre-close board -->
<div class="modal" id="preCloseModal" tabindex="-1" aria-labelledby="preCloseModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="preCloseModal">Pre-fechamento</h1>
          <span>
            <x-logo.logo></x-logo.logo>
          </span>
        </div>
        <div class="modal-body">
          <p>
            ...
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success">
            <span><i class="fa fa-check">
            </i> Sim
            </span>
            </button>
          <button type="button" class="btn btn-outline-danger"
          data-bs-dismiss="modal">
            <span><i class="fa fa-close">
            </i> Não
            </span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Adiantamento-->
<div class="modal" id="adiantamentoModal" tabindex="-1" aria-labelledby="adiantamentoModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="adiantamentoModal">Adiatamento</h1>
          <span>
            <x-logo.logo></x-logo.logo>
          </span>
        </div>
        <div class="modal-body">
          <p>
            ...
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success">
            <span><i class="fa fa-check">
            </i> Sim
            </span>
            </button>
          <button type="button" class="btn btn-outline-danger"
          data-bs-dismiss="modal">
            <span><i class="fa fa-close">
            </i> Não
            </span>
          </button>
        </div>
      </div>
    </div>
  </div>
@endsection