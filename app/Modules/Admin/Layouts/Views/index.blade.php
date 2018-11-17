@extends('layout.admin.templates.sidebar-template')

@section('content')

<?php 
    $data = [
        'items' => [
            [ 'id' => 1 ],
            [ 'id' => 2 ],
            [ 'id' => 3 ],
            [ 'id' => 4 ],
            [ 'id' => 5 ],
            [ 'id' => 6 ],
            [ 'id' => 7 ],
            [ 'id' => 8 ],
            [ 'id' => 9 ],
        ]
    ]
?>

<div class="container-fluid">
    <div class="page-header">
        <i class="material-icons">store_mall_directory</i> Items
        <ul class="page-header__crumbs">
            <li><a href="#">Products</a></li>
        </ul>
    </div>
    @if ( $data['items'] )
    <div class="row">
        @foreach ( $data['items'] as $key => $item )
        <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
            <div class="hm-media">
                <div class="hm-media__featured-image">
                    <img src="https://www.jollibee.com.ph/wp-content/uploads/JB_PRODUCT-BANNER-AD_CHICKENJOY-WITH-FRIES_FA.png" alt="">
                </div>
                <span class="hm-media__label-000">Featured</span>
                <div class="hm-media__meta">
                    <span class="hm-media__meta-label-100">Jolibee</span>
                    <span class="hm-media__meta-label-101">1pc. Chicken with Rich and Macaroni Soup</span>
                    <span class="hm-media__meta-label-102">Remaining: 5</span>
                    <span class="hm-media__meta-label-103">PHP 100.00</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
    
</div>
    

@stop