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
                            <div class="page-title-icon"><i class="fa fa-comment text-success"></i></div>
                            <div>

Auditoría mensajes de la máquina

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
    <div class="col-lg-9">
        <div class="row align-items-center">
            <div class="col-md-4 my-2 my-md-0">
                <div class="input-icon">
                    <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                    <span>
                        <i class="flaticon2-search-1 text-muted"></i>
                    </span>
                </div>
            </div>
            <div class="col-md-4 my-2 my-md-0">
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-5">
        <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
    </div>
</div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
{{-- <script src="assets/js/pages/features/charts/apexcharts.js?asdsad"></script> --}}

<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/pages/crud/ktdatatable/advanced/vertical.js') }}"
    type="text/javascript"></script>

@endsection
