@extends('layout.admin.templates.sidebar-template')

@section('content')

    <section>
        <div class="container-fluid">
            <div class="page-header">
                <i class="material-icons">show_chart</i> Insights
                <ul class="page-header__crumbs">
                    <li><a href="#">Insights</a></li>
                    <li><a href="#">Analytics</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="panel">
                        <div class="panel__head">
                            Top 5 Buyer Picks
                        </div>
                        <div class="panel__body">
                            <canvas id="insights-top-products"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="panel">
                        <div class="panel__head">
                            Revenue Stats
                        </div>
                        <div class="panel__body">
                            <canvas id="insights-revenue"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop