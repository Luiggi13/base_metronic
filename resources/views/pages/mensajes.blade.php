{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<link href="{{ asset('css/pages/dashboard/dashboard.css') }}" rel="stylesheet">


<div class="row">

    <div class="col-lg-12 mb-10">
        <h1>Auditoría mensajes de máquina</h1>
    </div>
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
<style>
    .page-title-section {
        width: 100%;
        padding: 1.5rem;
        text-align: left;
        border-bottom: #e9ecef solid 1px;
        background-image: linear-gradient(to right, #434343 0%, black 100%) !important;
        border-radius: .3rem;
        color: #fff;
        margin-bottom: 1.5rem !important;
    }

    .app-page-title {
        font-size: 1.25rem;
        font-weight: 400;
        display: flex;
        align-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
    }

    .app-page-title .page-title-icon {
        font-size: 2rem;
        display: flex;
        align-items: center;
        align-content: center;
        text-align: center;
        padding: .83333rem;
        margin: 0 30px 0 0;
        background: #fff;
        box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
        border-radius: 50px;
        width: 60px;
        height: 60px;
    }

    .fa-comment-alt,
    .fas.fa-server {
        display: inline-block;
        margin: 0 auto;
        speak: none;
        font-size: 25px;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .app-page-title .page-title-subheading {
        padding: 3px 0 0;
        font-size: .88rem;
        opacity: .6;
    }

    .app-page-title .page-title-heading {
        font-size: 1.25rem;
        font-weight: 400;
        display: flex;
        align-content: center;
        align-items: center;
    }

    .app-page-title .page-title-actions {
        margin-left: auto;
        float: right;
        width: 20%;
    }

    .filter-option-inner {
        text-align: center;
    }

    .page-title-wrapper {
        width: 100%;
    }

    .card-title {
        text-align: right;
        width: 100%;
        margin-top: 20px !important;
    }

    div.card.card-custom>.card-header .card-title .card-label {
        margin: 0;
        width: 100%;
    }

    .card-header {
        padding: 2rem 1.25rem;
    }

    .card-toolbar {
        width: 100%;
    }

    p.unidades-fabricadas {
        width: 100%;
        text-align: right;
        color: #fff;
        font-size: 30px;
    }

    p.alarmas-maquina {
        width: 100%;
        text-align: right;
        color: #fff;
        font-size: 20px;
        padding-top: 15px;
    }

    .card i {
        font-size: 30px;
        position: absolute;
        top: 25px;

        left: 15px;
        color: rgba(255, 255, 255, .5) !important;
    }

    .card i.fa-exclamation-triangle {}

    .text-green {
        color: #1BC5BD !important
    }

    .text-black {
        color: #000 !important
    }

    hr {
        height: 0px;
        background-color: rgba(255, 255, 255, .7);
        width: 100%;
    }

    ul.mensajes {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    ul.mensajes li {
        position: relative;
        padding: 10px 0;
    }

    ul.mensajes li span {
        font-weight: bold
    }

    ul.mensajes li i {
        left: initial !important;
        right: 0;
        top: 12px;
        position: absolute;
        font-size: 15px;

        color: rgba(255, 255, 255, 1) !important;
    }

    #kt_wrapper {
        padding-top: 30 !important;
    }

</style>

@endsection

{{-- Scripts Section --}}
@section('scripts')
{{-- <script src="assets/js/pages/features/charts/apexcharts.js?asdsad"></script> --}}

<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/pages/crud/ktdatatable/advanced/vertical.js') }}"
    type="text/javascript"></script>

@endsection
