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
            <table id="dtDashboard" class="table table-hover table-striped" data-location="{{ route('dashboard.get.analytics') }}">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date of Birth</th>
                        <th>Action</th>
                    </tr>
                </thead>
                {{-- <tbody>
                    <tr>
                        <td>Isabelo Nicolas II</td>
                        <td>October 26, 1995</td>
                        <td>
                            <button class="btn btn-default btn-sm"><i class="material-icons">edit</i>Edit</button>
                            <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i>Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Isabelo Nicolas II</td>
                        <td>October 26, 1995</td>
                        <td>
                            <button class="btn btn-default btn-sm"><i class="material-icons">edit</i>Edit</button>
                            <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i>Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Isabelo Nicolas II</td>
                        <td>October 26, 1995</td>
                        <td>
                            <button class="btn btn-default btn-sm"><i class="material-icons">edit</i>Edit</button>
                            <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i>Delete</button>
                        </td>
                    </tr>
                </tbody>--}}
            </table>
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