@extends('layout.admin.templates.sidebar-template')

@section('content')

    <section>
        <div class="container-fluid">
            <div class="page-header">
                <i class="material-icons">show_chart</i> Analytics
                <ul class="page-header__crumbs"></ul>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="panel">
                        <div class="panel__head">
                            Top 5 Buyer Picks
                        </div>
                        <div class="panel__body">
                        <canvas id="insights-top-products" data-route=" {{ route('admin.insights.getTopPicks') }} "></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="panel">
                        <div class="panel__head">
                            Revenue Stats
                        </div>
                        <div class="panel__body">
                            <canvas id="insights-revenue" data-route=" {{ route('admin.insights.getRevenue') }} "></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop