
@extends('layouts.app')
@section('content')

<div class="container">
    <div id="calendar">
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">

                <form id="formEventos">
                    @csrf

                <div class="form-group d-none">
                    <label for="">ID</label>
                    <input type="text" name="id" class="form-control" id="" aria-describedby="helpId" placeholder="">
                  </div>

                <div class="form-group">
                  <label for="">Titulo</label>
                  <input type="text" class="form-control" name="title" id="" aria-describedby="helpId" placeholder="">
                </div>

                <div class="form-group">
                  <label for="">Descripcion</label>
                  <input type="text" name="descripcion" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>

                <div class="form-group ">
                  <label for="">start</label>
                  <input type="text" name="start" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="">end</label>
                    <input type="text" name="end" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>


                </form>

            </div>
            <div class="modal-footer">
                <button id="btnGuardar" type="button" class="btn btn-success">Guardar</button>
                <button id="btnModificar" type="button" class="btn btn-warning">Modificar</button>
                <button id="btnEliminar" type="button" class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@endsection
