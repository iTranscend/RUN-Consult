@extends('layouts.admin')

@section('content')
<div class="block-header">
    <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-7">
            <h2>Admin Panel</h2>
            <ul class="breadcrumb">                        
              <li class="breadcrumb-item"><a href="">Manage Products</a></li>
            </ul>
        </div>
    </div>
  </div>

  {{-- Delete Product --}}
  <div class="header">
      <h4>Products</h4>                  
  </div>
  <div class="row clearfix">
    @if(count($products) > 0)
        @foreach ($products as $product)
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="member-card-2 ">                            
                            {{-- <div class=" member-thumb">
                                <img src="/storage/products/{{$product->profile_photo}}" class="img-thumbnail" alt="profile-image">                          
                            </div> --}}
                            <div class="">
                                <h4 class="m-b-5">{{$product->name}}</h4>
                                <p class="text-muted"><span class="text-successs">
                                  @switch($product->unit_id)
                                      @case('1')
                                          Bakery
                                          @break
                                      @case('2')
                                          Water
                                          @break
                                      @case('3')
                                          Laundry
                                          @break
                                      @default
                                          RUN-Consult
                                  @endswitch
                                </span></p>
                                <a href="/products/{{$product->id}}/delete" class="btn-sm btn-raised btn-danger waves-effect" onclick="confirm('Are you sure you want to delete this Category of Products')">Delete</a>  
                            </div>            
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No Product Created<p>
    @endif
  </div>

  {{-- Create Product --}}
  <div class="row clearfix">
      <div class="col-lg-12">
          <div class="card">
              <div class="header">
                  <h2>CREATE PRODUCT</h2>                  
              </div>
              <div class="body">
                <form action="/products" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="row clearfix">
                      <div class="col-md-6">
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <label for="name" class="form-label">Category Name</label>
                                  <input type="text" id="name" name="name" class="form-control">
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                        <label for="category" class="form-label">Product Category</label>
                        <select id="category" class="form-control show-tick" name="product_category_id">
                          @if (count($categories) > 0)
                              @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach
                          @else
                          <p>No Product Category Created<p>
                          @endif
                        </select>
                      </div>
                      
                  </div>
                  <div class="row clearfix">
                      <div class="col-md-4">
                          <div class="form-float">
                              <div class="">
                                  <label for="product-photo" >Product Photo</label>
                                  <input type="file" id="product-photo" class="form-control" name="product_photo">
                              </div>
                          </div>
                      </div>
                      <div class="col-md-8">
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <label for="description" class="form-label">Product Description</label>
                                  <input type="text" id="description" class="form-control" name="description">
                              </div>
                          </div>
                      </div>
                  </div>
                  <input type="submit" class="btn btn-raised btn-primary m-t-15 waves-effect" value="CREATE PRODUCT">
                </form>
              </div>
          </div>
      </div>
  </div>

  
@endsection