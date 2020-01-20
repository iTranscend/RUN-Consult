@extends('layouts.admin')

@section('content')
<div class="block-header">
    <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-7">
            <h2>Admin Panel</h2>
            <ul class="breadcrumb">                        
              <li class="breadcrumb-item"><a href="">Manage Product Categories</a></li>
            </ul>
        </div>
    </div>
  </div>

  {{-- Delete price --}}
  <div class="header">
      <h4>Product Prices</h4>               
  </div>
  <div class="row clearfix">
    @if(count($data) > 0)
        @foreach ($data as $price)
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="member-card-2 ">                            
                            <div class="">
                                <h4 class="m-b-5">{{$price->productName}} for {{$price->customerType}}</h4>
                                <p class="text-muted"><span class="text-successs">{{$price->price}}</span></p>
                                <a href="/product-prices/{{$price->id}}/edit" class="btn-sm btn-raised btn-warning waves-effect" onclick="confirm('Are you sure you want to edit this Price')">Edit</a>  
                                <a href="/product-prices/{{$price->id}}/delete" class="btn-sm btn-raised btn-danger waves-effect" onclick="confirm('Are you sure you want to delete this Price')">Delete</a>  
                            </div>            
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No Price Created<p>
    @endif
  </div>

  {{-- Create Product Category --}}
  <div class="row clearfix">
      <div class="col-lg-12">
          <div class="card">
              <div class="header">
                  <h2>DEFINE PRODUCT PRICE</h2>              
              </div>
              <div class="body">
                <form action="/product-prices" method="POST">
                    @csrf
                  <div class="row clearfix">
                      <div class="col-md-3">
                          <label for="product" class="form-label">Product</label>
                          <select id="product" class="form-control show-tick" name="product">
                              @if (count($products) > 0)
                                  @foreach ($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                  @endforeach
                              @else
                              <p>No Product Created<p>
                              @endif
                          </select>
                        </div>
                      <div class="col-md-3">
                          <label for="customerType" class="form-label">Customer Type</label>
                          <select id="customerType" class="form-control show-tick" name="customerType">
                              @if (count($customerTypes) > 0)
                                  @foreach ($customerTypes as $customerType)
                                    <option value="{{$customerType->id}}">{{$customerType->name}}</option>
                                  @endforeach
                              @else
                              <p>No customerType Created<p>
                              @endif
                          </select>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <label for="price" class="form-label">Price</label>
                                  <input type="number" id="price" name="price" class="form-control">
                              </div>
                          </div>
                      </div>
                  </div>
                  
                  <input type="submit" class="btn btn-raised btn-primary m-t-15 waves-effect" value="DEFINE PRICE">
                </form>
              </div>
          </div>
      </div>
  </div>

  
@endsection