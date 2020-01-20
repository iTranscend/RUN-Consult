@extends('layouts.admin')

@section('content')
<div class="block-header">
    <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-7">
            <h2>Admin Panel</h2>
            <ul class="breadcrumb">                        
              <li class="breadcrumb-item"><a href="">Manage Customer Types</a></li>
            </ul>
        </div>
    </div>
  </div>

  {{-- Delete type --}}
  <div class="header">
      <h4>Customer Types</h4>                  
  </div>
  <div class="row clearfix">
    @if(count($customer_types) > 0)
        @foreach ($customer_types as $type)
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="member-card-2 ">                            
                            {{-- <div class=" member-thumb">
                                <img src="/storage/profile_photos/{{$type->profile_photo}}" class="img-thumbnail" alt="profile-image">                          
                            </div> --}}
                            <div class="">
                                <h4 class="m-b-5">{{$type->name}}</h4>
                                <p class="text-muted">{{$type->name}}</p>
                                <a href="/customer-type/{{$type->id}}/delete" class="btn-sm btn-raised btn-danger waves-effect" onclick="confirm('Are you sure you want to delete this type of Products')">Delete</a>  
                            </div>            
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No Type Created<p>
    @endif
  </div>

  {{-- Create Product type --}}
  <div class="row clearfix">
      <div class="col-lg-12">
          <div class="card">
              <div class="header">
                  <h2>CREATE CUSTOMER TYPE</h2>                  
              </div>
              <div class="body">
                <form action="/customer-type" method="POST">
                    @csrf
                  <div class="row clearfix">
                      <div class="col-md-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label for="name" class="form-label">Type Name</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-raised btn-primary m-t-15 waves-effect" value="CREATE type">
                      </div>
                  </div>
                  
                </form>
              </div>
          </div>
      </div>
  </div>

  
@endsection