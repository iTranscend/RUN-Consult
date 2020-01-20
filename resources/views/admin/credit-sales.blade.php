@extends('layouts.admin')

  @section('content')
  <div class="block-header">
    <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-7">
            <h2>Admin Panel</h2>
            <ul class="breadcrumb">                        
              <li class="breadcrumb-item"><a href="index.html">Verify Credit Sales</a></li>
            </ul>
        </div>
    </div>
  </div>
  <div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Sales Made on Credit</h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body table-responsive">
                <table class="table table-hover table-striped table-condensed">
                    <thead>
                        <tr>
                          <th>Client</th>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Date</th>
                          <th>Referee (Employee/Driver)</th>
                          <th>Credit Paid Off?</th>
                        </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Client</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Referee (Employee/Driver)</th>
                        <th>Credit Paid Off?</th>
                      </tr>
                  </tfoot>
                    <tbody>
                        <tr>
                          <td>Mama rabiu</td>
                          <td>Big Loaf</td>
                          <td>50</td>
                          <td>323450</td>
                          <td>2011/04/25 12:23:08</td>
                          <td>Janeth</td>
                          <td><button type="button" class="btn btn-xs btn-raised bg-lime waves-effect" onclick="confirm('Are You sure this item has been paid for?');"> <i class="material-icons">done</i> </button></td>
                        </tr>
                        <tr>
                          <td>Mama rabiu</td>
                          <td>Big Loaf</td>
                          <td>50</td>
                          <td>323450</td>
                          <td>2011/04/25 12:23:08</td>
                          <td>Janeth</td>
                          <td><button type="button" class="btn btn-xs btn-raised bg-lime waves-effect" onclick="confirm('Are You sure this item has been paid for?');"> <i class="material-icons">done</i> </button></td>
                        </tr>
                        <tr>
                          <td>Mama rabiu</td>
                          <td>Big Loaf</td>
                          <td>50</td>
                          <td>323450</td>
                          <td>2011/04/25 12:23:08</td>
                          <td>Janeth</td>
                          <td><button type="button" class="btn btn-xs btn-raised bg-lime waves-effect" onclick="confirm('Are You sure this item has been paid for?');"><i class="material-icons">done</i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
  @endsection