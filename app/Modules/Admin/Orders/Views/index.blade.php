@extends('layout.admin.templates.sidebar-template')

@section('content')
    <section>
        <div class="container-fluid">
            <div class="page-header">
                <i class="material-icons">list</i> Orders
                <ul class="page-header__crumbs"></ul>
            </div>
            <table id="dtOrders" class="table table-striped table-hover" data-url="">
                <thead>
                    <tr>
                        <th>Ordered By</th>
                        <th>QR Code</th>
                        <th>Transaction Code</th>
                        <th>Date Ordered</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sam Esquejo</td>
                        <td>
                            [ ][ ][ ][ ][ ][ ]<br/>
                            [ ][ ][ ][ ][ ][ ]<br/>
                            [ ][ ][ ][ ][ ][ ]
                        </td>
                        <td>ET201210152</td>
                        <td>{{ date('F j, Y') }}</td>
                        <td>Processing</td>
                        <td>
                            <button class="btn btn-default btn-sm"><i class="material-icons">edit</i>Edit</button>
                            <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i>Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Sam Esquejo</td>
                        <td>
                            [ ][ ][ ][ ][ ][ ]<br/>
                            [ ][ ][ ][ ][ ][ ]<br/>
                            [ ][ ][ ][ ][ ][ ]
                        </td>
                        <td>ET201210152</td>
                        <td>{{ date('F j, Y') }}</td>
                        <td>Processing</td>
                        <td>
                            <button class="btn btn-default btn-sm"><i class="material-icons">edit</i>Edit</button>
                            <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i>Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@stop

@section('pageJs')
@stop