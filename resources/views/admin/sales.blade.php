@extends('layouts.admin')

@section('content')
<div class="block-header">
  <div class="row">
      <div class="col-lg-12 col-md-6 col-sm-7">
          <h2>Admin Panel</h2>
          <ul class="breadcrumb">                        
            <li class="breadcrumb-item"><a href="index.html">Sales</a></li>
          </ul>
      </div>
  </div>
</div>
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="card">
          <div class="header">
              <h2> SALES TABLE </h2>
              <ul class="header-dropdown">
                  <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                      <ul class="dropdown-menu pull-right">
                          <li><a href="javascript:void(0);">Action</a></li>
                          <li><a href="javascript:void(0);">Another action</a></li>
                          <li><a href="javascript:void(0);">Something else here</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
          <div class="body">
              <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                  <thead>
                      <tr>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Customer</th>
                          <th>Made by</th>
                          <th>Date/Time</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Customer</th>
                          <th>Made by</th>
                          <th>Date/Time</th>
                      </tr>
                  </tfoot>
                  <tbody>
                      <tr>
                          <td>Big Loaf</td>
                          <td>50</td>
                          <td>323450</td>
                          <td>Mama rabiu</td>
                          <td>Janeth</td>
                          <td>2011/04/25 12:23:08</td>
                      </tr>
                      <tr>
                          <td>Big Loaf</td>
                          <td>50</td>
                          <td>323450</td>
                          <td>Mama rabiu</td>
                          <td>Janeth</td>
                          <td>2011/04/25 12:23:08</td>
                      </tr>
                      <tr>
                          <td>Big Loaf</td>
                          <td>50</td>
                          <td>323450</td>
                          <td>Mama rabiu</td>
                          <td>Janeth</td>
                          <td>2011/04/25 12:23:08</td>
                      </tr>
                      <tr>
                          <td>Big Loaf</td>
                          <td>50</td>
                          <td>323450</td>
                          <td>Mama rabiu</td>
                          <td>Janeth</td>
                          <td>2011/04/25 12:23:08</td>
                      </tr>
                      <tr>
                          <td>Big Loaf</td>
                          <td>50</td>
                          <td>323450</td>
                          <td>Mama rabiu</td>
                          <td>Janeth</td>
                          <td>2011/04/25 12:23:08</td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
@endsection