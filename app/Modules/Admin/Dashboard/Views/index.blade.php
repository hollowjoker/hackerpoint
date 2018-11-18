@extends('layout.admin.templates.sidebar-template')

@section('content')
    <section>
        <div class="container-fluid">
            <br/>
            <br/>
            <h1>Welcome John,</h1>
            <p>Take your next step.</p>
            <br/>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel__body">
                            <h4>Add your items</h4>
                            <p>Create and manage your items in one place.</p>
                            <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Add Item</a>
                            <a href="{{ route('admin.products.index') }}" class="btn">View Items</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel__body">
                            <h4>See your store insights</h4>
                            <p>Check/review your store's analytics in an easy and convenient way.</p>
                            <a href="{{ route('admin.insights.index') }}" class="btn btn-primary">View Insights</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('pageJs')
@stop