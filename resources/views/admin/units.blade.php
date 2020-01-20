@extends('layouts.admin')

@section('content')
    <div class="block-header">
      <div class="row">
          <div class="col-lg-12 col-md-6 col-sm-7">
              <h2>Admin Panel</h2>
              <ul class="breadcrumb">                        
                <li class="breadcrumb-item"><a href="index.html">MANAGE UNITS</a></li>
              </ul>
          </div>
      </div>
    </div>
    <!-- Create Unit form -->
    <div class="row clearfix">
      <div class="col-lg-12">
          <div class="card">
              <div class="header">
                  <h2 >Create Unit</h2>
                  <ul class="header-dropdown m-r--5">
                      <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                          <ul class="dropdown-menu pull-right">
                              <li><a href="javascript:void(0);">Action</a></li>
                          </ul>
                      </li>
                  </ul>
              </div>
              <div class="body" >
                  <form method="POST" action="">
                      <label for="unit-name"><b>Unit Name</b></label>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" id="unit-name" name="unit-name" class="form-control" placeholder="Enter the unit's name">
                          </div>
                      </div>
                      <label for="unit-description"><b>Unit Description</b></label>
                      <div class="form-group">
                          <div class="form-line">
                            <textarea rows="4" id="unit-description" name="unit-description" class="form-control no-resize" placeholder="Enter a description..."></textarea>
                          </div>
                      </div>                    
                      
                      <button type="submit" class="btn btn-raised btn-primary m-t-15 waves-effect" onclick="return confirm('Are you sure you want to create a new Unit?');">CREATE</button>
                  </form>
              </div>
          </div>
      </div>
    </div>

    {{-- View and Edit Units --}}
    <div class="row clearfix">
      <h3>Edit Or Deactivate Units</h3>
      <div class="col-md-12">
          <div class="card-group text-center">
              <div class="card">
                  <img class="img-fluid" src="assets/images/puppy-4.jpg" alt="Card image cap">
                  <div class="body">
                      <h4 class="title">Bakery</h4>
                      <p class="text">The Home of Dough</p>
                      <a href="" class="btn btn-sm bg-teal waves-effect" style="color: white;">Edit</a>
                      <a href="" class="btn btn-sm btn-danger waves-effect" style="color: white;" onclick="confirm('Are you sure you want to deactivate this Unit?')">Deactivate</a>
                  </div>
              </div>
              <div class="card">
                  <img class="img-fluid" src="assets/images/puppy-3.jpg" alt="Card image cap">
                  <div class="body">
                      <h4 class="title">Water Factory</h4>
                      <p class="text">Quenchers. This card has supporting text below as a natural lead-in to additional content.</p>
                      <a href="" class="btn btn-sm bg-teal waves-effect" style="color: white;">Edit</a>
                      <a href="" class="btn btn-sm btn-danger waves-effect" style="color: white;">Deactivate</a>
                  </div>
              </div>
              <div class="card">
                  <img class="img-fluid" src="assets/images/puppy-2.jpg" alt="Card image cap">
                  <div class="body">
                      <h4 class="title">Laundry</h4>
                      <p class="text">Entourage of Compliments. This is a wider card with supporting text below as a natural lead-in to additional content. This card has
                      even longer content than the first to show that equal height action.</p>
                      <a href="" class="btn btn-sm bg-teal waves-effect" style="color: white;">Edit</a>
                      <a href="" class="btn btn-sm btn-danger waves-effect" style="color: white;">Deactivate</a>
                      
                  </div>
              </div>
          </div>
      </div>
    </div>
@endsection