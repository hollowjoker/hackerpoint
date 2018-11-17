@extends('layout.admin.templates.sidebar-template')

@section('content')
    <section>
        <div class="container-fluid">
            <div class="page-header">
                <i class="material-icons">dashboard</i> Dashboard
                <ul class="page-header__crumbs">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Analytics</a></li>
                    <li><a href="#">Detailed</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="panel">
                        <header class="panel__head">
                            Panel Title
                        </header>
                        <main class="panel__body">
                            <canvas id="insights-top-products" width="800" height="450"></canvas>
                        </main>
                        <footer class="panel__footer">
                            Footer
                        </footer>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="panel">
                        <header class="panel__head">
                            Panel Title
                        </header>
                        <main class="panel__body">
                            <canvas id="insights-revenue" width="800" height="450"></canvas>
                        </main>
                        <footer class="panel__footer">
                            Footer
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('pageJs')
@stop