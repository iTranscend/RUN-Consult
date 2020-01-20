@extends('layouts.admin')

@section('content')
<div class="block-header">
    <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-7">
            <h2>Admin Panel</h2>
            <ul class="breadcrumb">                        
              <li class="breadcrumb-item"><a href="index.html">MANAGE USERS</a></li>
            </ul>
        </div>
    </div>
  </div>

  {{-- Create User --}}
  <div class="row clearfix">
      <div class="col-lg-12">
          <div class="card">
              <div class="header">
                  <h2> CREATE USER </h2>                  
              </div>
              <div class="body">
                <form action="/users" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="row clearfix">
                      <div class="col-md-4">
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <label for="firstname" class="form-label">First Name</label>
                                  <input type="text" id="firstname" name="firstname" class="form-control">
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <label for="lastname" class="form-label">Last Name</label>
                                  <input type="text" id="lastname" name="lastname" class="form-control">
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <label for="email" class="form-label">Email</label>
                                  <input type="text" id="email" name="email" class="form-control">
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row clearfix">
                      <div class="col-md-4">
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <label for="phone" class="form-label">Phone Number</label>
                                  <input type="text" id="phone" name="phone" class="form-control">
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <label for="unit" class="form-label">Unit</label>
                          <select id="unit" class="form-control show-tick" name="unit">
                              <option value="1">Bakery</option>
                              <option value="2">Water Factory</option>
                              <option value="3">Laundry</option>
                          </select>
                      </div>
                      <div class="col-md-4">
                          <label for="role" class="form-label">Role</label>
                          <select id="role" class="form-control show-tick" name="role">
                              <option value="2">Operator</option>
                              <option value="3">Driver</option>
                          </select>
                      </div>
                  </div>
                  <div class="row clearfix">
                      <div class="col-md-4">
                          <div class="form-float">
                              <div class="">
                                  <label for="profile-photo" >User Photo</label>
                                  <input type="file" id="profile-photo" class="form-control" name="profile_photo">
                              </div>
                          </div>
                      </div>
                      <div class="col-md-8">
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <label for="address" class="form-label">Address</label>
                                  <input type="text" id="address" class="form-control" name="address">
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row clearfix">
                      <div class="col-md-4">
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <label for="password" class="form-label">Password</label>
                                  <input type="password" id="password" class="form-control" name="password">
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <label for="password-confirm" class="form-label">Password Confirmation: Please Re-type Password</label>
                                  <input type="password" id="password-confirm" class="form-control" name="password-confirm">
                              </div>
                          </div>
                      </div>
                  </div>
                  <input type="submit" class="btn btn-raised btn-primary m-t-15 waves-effect" value="CREATE USER">
                </form>
              </div>
          </div>
      </div>
  </div>

  {{-- Edit or Delete User --}}
  <div class="row clearfix">
        @if(count($users) > 0)
            @foreach ($users as $user)
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="body">
                            <div class="member-card-2 ">                            
                                <div class=" member-thumb">
                                    <img src="/storage/profile_photos/{{$user->profile_photo}}" class="img-thumbnail" alt="profile-image">                          
                                </div>
                                <div class="">
                                    <h4 class="m-b-5">{{$user->firstname}} {{$user->lastname}}</h4>
                                    <p class="text-muted">{{$user->role_id}}....<span class="text-successs">{{$user->unit_id}}</span></p>
                                </div>
                                <p class="text-muted">{{$user->phone}}</p>                           
                                <p class="text-muted">{{$user->email}}</p>                     
                                <a href="/users/{{$user->id}}" class="btn btn-raised btn-primary waves-effect">View Profile</a>                      
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No Users Created<p>
        @endif
    </div>
@endsection