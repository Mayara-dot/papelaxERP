@extends('components/layouts/main_layout')
@section('modal')
<!-- Modal Close table -->
<div class="modal" id="closeTableModal" tabindex="-1" aria-labelledby="closeTableModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="closeTableModal">Fechar mesa</h1>
        <span>
          <x-logo.logo></x-logo.logo>
        </span>
      </div>
      <div class="modal-body">
        <label for="tableNumber">Informe o número da mesa</label>
        <input type="number" id="tableNumber" name="tableNumber" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Voltar</button>
        <button type="button" class="btn btn-success">confirmar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Close shift-->
<div class="modal" id="closeShiftModal" tabindex="-1" aria-labelledby="closeShiftModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="closeShiftModal">Fechar turno</h1>
        <span>
          <x-logo.logo></x-logo.logo>
        </span>
      </div>
      <div class="modal-body">
        <p>
          Deseja mesmo fechar o turno {{session()->get('shift')}}
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