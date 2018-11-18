@extends('layout.admin.templates.sidebar-template')

@section('content')
<div class="container-fluid">
    <div class="page-header">
        <i class="material-icons">store_mall_directory</i> Items
        <ul class="page-header__crumbs">
            <li><a href="#">Products</a></li>
        </ul>
	</div>
	<div class="row">
		<div class="col-12 text-right">
			<a  href=" {{ route('admin.products.showForm') }} ">
				<button class="btn btn-primary" type="button">Add Item</button>
			</a>
		</div>
	</div>
    <div class="row mt-2" data-route=" {{ route('admin.products.showList') }} " id="item-list">
        {{-- <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
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
        </div> --}}
    </div>
    
</div>
    

@stop