@extends('layouts.admin')

    @section('content')
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Admin Panel</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-cyan">
                                <i class="zmdi zmdi-shopping-basket zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Total Sales</span>
                                <span class="value">1,305</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 13%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-green">
                                <i class="zmdi zmdi-money zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Total Revenue</span>
                                <span class="value">&#8358;63.23M</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 21%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-amber">
                                <i class="zmdi zmdi-account-o zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Credit Sales</span>
                                <span class="value">21</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 18%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-blue">
                                <i class="zmdi zmdi-label zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Current Credit Amount</span>
                                <span class="value">&#8358;40,480</span>
                            </div>
                        </div>
                        <p class="media-footer text-danger"><i class="zmdi zmdi-trending-down"></i> 12%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>     
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-cyan">
                                <i class="zmdi zmdi-shopping-basket zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Total Bakery Sales</span>
                                <span class="value">1,305</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 13%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-green">
                                <i class="zmdi zmdi-money zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Total Bakery  Revenue</span>
                                <span class="value">&#8358;63.23M</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 21%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-amber">
                                <i class="zmdi zmdi-account-o zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Bakery Credit Sales</span>
                                <span class="value">21</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 18%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-blue">
                                <i class="zmdi zmdi-label zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Bakery Credit Amount</span>
                                <span class="value">&#8358;40,480</span>
                            </div>
                        </div>
                        <p class="media-footer text-danger"><i class="zmdi zmdi-trending-down"></i> 12%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
        </div> 
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-cyan">
                                <i class="zmdi zmdi-shopping-basket zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Total Water Factory Sales</span>
                                <span class="value">1,305</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 13%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-green">
                                <i class="zmdi zmdi-money zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Total Water Factory Revenue</span>
                                <span class="value">&#8358;63.23M</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 21%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-amber">
                                <i class="zmdi zmdi-account-o zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Water Factory Credit Sales</span>
                                <span class="value">21</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 18%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-blue">
                                <i class="zmdi zmdi-label zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Water Factory Credit Amount</span>
                                <span class="value">&#8358;40,480</span>
                            </div>
                        </div>
                        <p class="media-footer text-danger"><i class="zmdi zmdi-trending-down"></i> 12%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
        </div> 
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-cyan">
                                <i class="zmdi zmdi-shopping-basket zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Total Laundry Sales</span>
                                <span class="value">1,305</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 13%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-green">
                                <i class="zmdi zmdi-money zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Total Laundry Revenue</span>
                                <span class="value">&#8358;63.23M</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 21%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-amber">
                                <i class="zmdi zmdi-account-o zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Laundry Credit Sales</span>
                                <span class="value">21</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 18%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-blue">
                                <i class="zmdi zmdi-label zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Laundry Credit Amount</span>
                                <span class="value">&#8358;40,480</span>
                            </div>
                        </div>
                        <p class="media-footer text-danger"><i class="zmdi zmdi-trending-down"></i> 12%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
        </div> 
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card top-report">
                    <div class="body">
                        <h3 class="m-t-0">&#8358;70,250</h3>
                        <p class="text-muted">Water Factory sales this Month</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <small>4% higher than last month</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card top-report">
                    <div class="body">
                        <h3 class="m-t-0">&#8358;100,250</h3>
                        <p class="text-muted">Bakery Sales this month</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width:32%;"></div>
                        </div>
                        <small>4% higher than last month</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card top-report">
                    <div class="body">
                        <h3 class="m-t-0">&#8358;40,250</h3>
                        <p class="text-muted">Laundry Sales this Month</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <small>15% higher than last month</small>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-6">
                <div class="card top-report">
                    <div class="body">
                        <h3 class="m-t-0">&#8358;70,250</h3>
                        <p class="text-muted">Total Leakages this Month</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <small>10% higher than last month</small>
                    </div>
                </div>
            </div> --}}
        </div>        
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12">
                <div class="card" >
                    <div class="header">
                        <h2>Latest Sales</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">View all Sales</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-striped table-borderless m-b-5">
                            <thead>
                                <tr>
                                    <th style="width:40%;">Product</th>
                                    <th class="number">Quantity</th>
                                    <th class="number">Price</th>
                                    <th style="width:20%;">Date</th>
                                    <th style="width:20%;">onCredit</th>
                                </tr>
                            </thead>
                            <tbody class="no-border-x">
                                <tr>
                                    <td>Sony Xperia M4</td>
                                    <td class="number">14</td>
                                    <td class="number">&#8358;149</td>
                                    <td>Aug 23, 2016</td>
                                    
                                    <td class="text-danger">Yes</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
        @endsection