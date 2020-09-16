{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<link href="{{ asset('css/pages/dashboard/dashboard.css') }}" rel="stylesheet">

<div class="row">
    <div class="col-lg-12 page-title-section">
        <div class="app-page-title">

            <div class="page-title-wrapper">
                <div class="row">
                    <div class="col-md-6">

                        <div class="page-title-heading">
                            <div class="page-title-icon"><i class="fa fa-cogs text-success"></i></div>
                            <div>

                                Configuración de tiempos de ciclo límite

                                {{--  <div class="page-title-subheading">
Auditoría mensajes de máquina
</div>  --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="page-title-actions">
                            <select class="form-control selectpicker" title="Opciones" data-style="btn-primary">
                                <option>Opción 1</option>
                                <option>Opción 2</option>
                                <option>Opción 3</option>
                                <option>Opción 4</option>
                                <option>Opción 5</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


</div>

<div class="row">
<div class="col-md-12">
<div class="card card-custom gutter-b example example-compact">
  <div class="card-header">
    <h3 class="card-title">Tiempo de ciclo máximo (segundos)</h3>
  </div>
  <!--begin::Form-->
  <form>
    <div class="card-body">
      <div class="form-group mb-8">
        <div class="alert alert-custom alert-default" role="alert">
          <div class="alert-icon">
            <i class="fa fa-info text-red-imp"></i>
          </div>
          <div class="alert-text">
            Reprehenderit eu aliquip eu dolore ipsum cupidatat eu dolor anim duis ipsum eu.
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
        <div class="form-group">
        <label>Tiempo de ciclo máximo (segundos) <span class="text-danger">*</span></label>
        <input type="number" class="form-control" placeholder="38.45" />
        <span class="form-text text-muted"
          >Commodo sunt irure dolore proident sint sunt dolore.</span
        >
      </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label>Tiempo de ciclo mínimo (segundos) <span class="text-danger">*</span></label>
        <input type="number" class="form-control" placeholder="38.45" />
        <span class="form-text text-muted"
          >Commodo sunt irure dolore proident sint sunt dolore.</span
        >
      </div>
        </div>
      </div>

    </div>
    <div class="card-footer fl-r">
      <button type="reset" class="btn btn-secondary">Cancelar</button>
      <button type="reset" class="btn btn-primary mr-2">Actualizar</button>
    </div>
  </form>
  <!--end::Form-->
</div>

</div>
<div class="col-md-6"></div>
</div>
@endsection

{{-- Scripts Section --}}
@section('scripts')
{{-- <script src="assets/js/pages/features/charts/apexcharts.js?asdsad"></script> --}}

<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/pages/crud/ktdatatable/advanced/vertical.js') }}"
    type="text/javascript"></script>

@endsection
