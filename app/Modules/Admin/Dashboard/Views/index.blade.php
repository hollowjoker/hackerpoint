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
            <table id="tae" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date of Birth</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>
        </div>
    </section>
@stop

@section('pageJs')
@stop