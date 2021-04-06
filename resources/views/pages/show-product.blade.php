<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/product_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/product_responsive.css')}}">

@extends('layouts.app')
@section('content')
<div class="single_product">
    <div class="container">
        <div class="row">

            <!-- Images -->
            <div class="col-lg-2 order-lg-1 order-2">
                <ul class="image_list">
                    <li data-image="{{asset('uploads/product/'.$product->image_one)}}"><img src="{{asset('uploads/product/'.$product->image_one)}}" alt=""></li>
                    <li data-image="{{asset('uploads/product/'.$product->image_two)}}"><img src="{{asset('uploads/product/'.$product->image_two)}}" alt=""></li>
                    <li data-image="{{asset('uploads/product/'.$product->image_three)}}"><img src="{{asset('uploads/product/'.$product->image_three)}}" alt=""></li>
                </ul>
            </div>
<form action="{{ route('addtocart',[$product->id]) }}" method="POST">
    @csrf
            <!-- Selected Image -->
            <div class="col-lg-5 order-lg-2 order-1">
                <div class="image_selected"><img src="{{asset('uploads/product/'.$product->image_one)}}" alt=""></div>
            </div>

            <!-- Description -->
            <div class="col-lg-5 order-3">
                <div class="product_description">
                    <div class="product_category">{{$product->category->category_name}}</div>
                    <div class="product_name">{{$product->product_name}}</div>
                    <div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="product_text"><p>{{$product->product_details}}.</p></div>
                    <div class="order_info d-flex flex-row">

                        <div class="row">
                            <div class="col-lg-4">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Color</label>
                                <select class="form-control input-lg" id="exampleFormControlSelect1" name="color"> 
                                    @foreach($product_color as $color)
                                    <option value="{{ $color }}">{{ $color }}</option>
                                    
                               @endforeach
                                </select>          		
                            </div> 
                            </div> 
              
              
              @if($product->product_size == NULL)
              
              @else
              <div class="col-lg-4">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Size</label>
                                <select class="form-control input-lg" id="exampleFormControlSelect1" name="size"> 
                                     @foreach($product_size as $size)
                                    <option value="{{ $size }}">{{ $size }}</option>
                             
                                     @endforeach
              
                                </select>          		
                            </div> 
                            </div> 
              
                            @endif       
              
              
                            <div class="col-lg-4">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Quantity</label>
                                 <input class="form-control" type="number" value="1" pattern="[0-9]" name="qty">	
                            </div> 
                            </div>    
              
               
              
                        
                            <div class="product_price">${{$product->selling_price}}</div>
                            
                                 
                                <div class="button_container">
                                <button type="submit" class="button cart_button">Add to Cart</button>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                            </div>

                            
                            {{Cart::getContent()}}

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="{{asset('public/frontend/plugins/easing/easing.js')}}"></script>
<script src="{{asset('public/frontend/js/product_custom.js')}}"></script>

@endsection