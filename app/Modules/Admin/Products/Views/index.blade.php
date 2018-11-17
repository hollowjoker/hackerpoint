@extends('layout.admin.templates.sidebar-template')

@section('content')
    <section>
        <div class="container-fluid">
            <div class="page-header">
                <i class="material-icons">store_mall_directory</i> Add Item
                <ul class="page-header__crumbs">
                    <li><a href="#">Products</a></li>
                </ul>
            </div>
            <form action=" {{ route('products.create') }} " method="post" id="form-add-item" data-relocation=" {{ route('products.index') }} ">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Item Name</label>
                            <input type="text" name="item_name" id="name" class="form-control" />
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="category">Category</label>
                                    <select name="item_category_id" id="category" class="form-control">
                                        <option selected disabled>Select</option>
                                        <option value="1">Product</option>
                                        <option value="2">Service</option>
                                    </select>
                                </div>
                                <div class="col-md-6" id="form-control-service-period-wrapper" hidden>
                                    <label for="period">Period</label>
                                    <div class="input-group">
                                        <input type="number" name="qty" id="period" class="form-control" min="1" value="1" />
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">hour/s</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">PHP</span>
                                </div>
                                <input type="number" name="price" id="price" class="form-control" min="1" value="1" />
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="form-control-quantity-wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" name="qty" id="quantity" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="#" rows="5" class="form-control" style="resize: none;"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <div id="dZUpload" class="dropzone">
                                <div class="dz-default dz-message"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@stop

@section('pageJs')
    <script>
        /**
         * Category Functionality 
         */
        document.addEventListener("DOMContentLoaded", function() {
            var itemCategory = document.querySelectorAll('#form-add-item select[name="item_category_id"]');
            var itemServicePeriodWrapper = document.querySelectorAll('#form-control-service-period-wrapper');
            var itemQuantityWrapper = document.querySelectorAll('#form-control-quantity-wrapper');

            itemCategory[0].addEventListener('change',function(){
                if ( this.value == 1 ) {
                    itemServicePeriodWrapper[0].querySelectorAll('.form-control')[0].disabled = true;
                    itemQuantityWrapper[0].querySelectorAll('.form-control')[0].disabled = false;

                    itemServicePeriodWrapper[0].hidden = true;
                    itemQuantityWrapper[0].hidden = false;
                }
                else if ( this.value == 2 ) {
                    itemServicePeriodWrapper[0].querySelectorAll('.form-control')[0].disabled = false;
                    itemQuantityWrapper[0].querySelectorAll('.form-control')[0].disabled = true;

                    itemServicePeriodWrapper[0].hidden = false;
                    itemQuantityWrapper[0].hidden = true;
                }
                else {
                    
                }
            });
        });
    </script>
@stop