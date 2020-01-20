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

  {{-- Delete Category --}}
  <div class="header">
      <h4>Product Category</h4>                  
  </div>
  <div class="row clearfix">
    @if(count($product_categories) > 0)
        @foreach ($product_categories as $category)
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="member-card-2 ">                            
                            {{-- <div class=" member-thumb">
                                <img src="/storage/profile_photos/{{$category->profile_photo}}" class="img-thumbnail" alt="profile-image">                          
                            </div> --}}
                            <div class="">
                                <h4 class="m-b-5">{{$category->name}}</h4>
                                <p class="text-muted"><span class="text-successs">
                                  {{-- {{$category->unit_id}}  --}}
                                  @switch($category->unit_id)
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
                                <a href="/product-categories/{{$category->id}}/delete" class="btn-sm btn-raised btn-danger waves-effect" onclick="confirm('Are you sure you want to delete this Category of Products')">Delete</a>  
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

  {{-- Create Product Category --}}
  <div class="row clearfix">
      <div class="col-lg-12">
          <div class="card">
              <div class="header">
                  <h2>CREATE PRODUCT CATEGORY</h2>                  
              </div>
              <div class="body">
                <form action="/product-categories" method="POST">
                    @csrf
                  <div class="row clearfix">
                      <div class="col-md-6">
                          <label for="unit" class="form-label">Unit</label>
                          <select id="unit" class="form-control show-tick" name="unit">
                              @if (count($units) > 0)
                                  @foreach ($units as $unit)
                                    <option value="{{$unit->id}}">{{$unit->name}}</option>
                                  @endforeach
                              @else
                              <p>No Unit Created<p>
                              @endif
                          </select>
                        </div>
                      <div class="col-md-6">
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <label for="name" class="form-label">Category Name</label>
                                  <input type="text" id="name" name="name" class="form-control">
                              </div>
                          </div>
                      </div>
                  </div>
                  
                  <input type="submit" class="btn btn-raised btn-primary m-t-15 waves-effect" value="CREATE CATEGORY">
                </form>
              </div>
          </div>
      </div>
  </div>

  
@endsection