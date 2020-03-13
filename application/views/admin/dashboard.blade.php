@extends('admin.layouts.app')

@section('css-top')
@endsection

@section('css-bot')
@endsection

@section('page-title')
Dashboard
@endsection

@section('page-bread')

@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="card-box tilebox-two tilebox-success">
            <i class="mdi mdi-home pull-right text-dark"></i>
            <h6 class="text-success text-uppercase m-b-15 m-t-10">Total Properties</h6>
            <h2 class="m-b-10">50</h2>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card-box tilebox-two tilebox-primary">
            <i class="mdi mdi-home-variant pull-right text-dark"></i>
            <h6 class="text-primary text-uppercase m-b-15 m-t-10">Vacant Room</h6>
            <h2 class="m-b-10">10</h2>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card-box tilebox-two tilebox-pink">
            <i class="mdi mdi-account pull-right text-dark"></i>
            <h6 class="text-pink text-uppercase m-b-15 m-t-10">Tenants</h6>
            <h2 class="m-b-10" data-plugin="counterup">1,587</h2>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card-box tilebox-two tilebox-info">
            <i class="mdi mdi-cash pull-right text-dark"></i>
            <h6 class="text-info text-uppercase m-b-15 m-t-10">Payment Requests</h6>
            <h2 class="m-b-10">1</h2>
        </div>
    </div>

</div>
<!-- end row -->
<div class="row">
    <div class="col-md-6">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-20">Recent Tenants</h4>

            <table class="table table-centered m-b-0">
                <tbody>
                    <tr>
                        <td>
                            <a class="user" href="#">
                                <img src="{{upload_url()}}users/default.jpg" alt="" class="img-circle img-thumbnail thumb-md">
                            </a>
                        </td>
                        <td class="hide-phone">
                            <h3 class="m-0"><small>Clarence M. Ramos </small></h3>
                            <p class="font-13 m-b-0">Last login: 16/09/2016 10:45</p>
                        </td>
                        <td class="text-right">
                            <a href="#" class="btn btn-sm btn-bordered waves-effect waves-light btn-primary"> <i class="mdi mdi-eye"></i> View</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a class="user" href="#">
                                <img src="{{upload_url()}}users/default.jpg" alt="" class="img-circle img-thumbnail thumb-md">
                            </a>
                        </td>
                        <td class="hide-phone">
                            <h3 class="m-0"><small>Wayne J. Sloan</small></h3>
                            <p class="font-13 m-b-0">Last login: 16/09/2016 10:45</p>
                        </td>
                        <td class="text-right">
                            <a href="#" class="btn btn-sm btn-bordered waves-effect waves-light btn-primary"> <i class="mdi mdi-eye"></i> View</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="user" href="#">
                                <img src="{{upload_url()}}users/default.jpg" alt="" class="img-circle img-thumbnail thumb-md">
                            </a>
                        </td>
                        <td class="hide-phone">
                            <h3 class="m-0"><small>Jimmie J. Hertzog</small></h3>
                            <p class="font-13 m-b-0">Last login: 16/09/2016 10:45</p>
                        </td>
                        <td class="text-right">
                            <a href="#" class="btn btn-sm btn-bordered waves-effect waves-light btn-primary"> <i class="mdi mdi-eye"></i> View</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="user" href="#">
                                <img src="{{upload_url()}}users/default.jpg" alt="" class="img-circle img-thumbnail thumb-md">
                            </a>
                        </td>
                        <td class="hide-phone">
                            <h3 class="m-0"><small>Larry D. Guy</small></h3>
                            <p class="font-13 m-b-0">Last login: 16/09/2016 10:45</p>
                        </td>
                        <td class="text-right">
                            <a href="#" class="btn btn-sm btn-bordered waves-effect waves-light btn-primary"> <i class="mdi mdi-eye"></i> View</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a class="user" href="#">
                                <img src="{{upload_url()}}users/default.jpg" alt="" class="img-circle img-thumbnail thumb-md">
                            </a>
                        </td>
                        <td class="hide-phone">
                            <h3 class="m-0"><small>David D. Thomas</small></h3>
                            <p class="font-13 m-b-0">Last login: 16/09/2016 10:45</p>
                        </td>
                        <td class="text-right">
                            <a href="#" class="btn btn-sm btn-bordered waves-effect waves-light btn-primary"> <i class="mdi mdi-eye"></i> View</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> <!-- end col -->

    <div class="col-md-6">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-20">Recent Properties</h4>

            <div class="media latest-post-item">
                <div class="media-left">
                    <img class="media-object" alt="64x64" src="{{upload_url()}}properties/default.jpg" style="width: 100px; height: 66px;">
                </div>
                <div class="media-body">
                    <h5 class="media-heading"><a href="#">4BHK Alexander Court,New York</a> </h5>
                    <p class="font-13 text-muted">
                        Sep 03, 2016 | John Deo
                    </p>
                </div>
            </div>

            <div class="media latest-post-item">
                <div class="media-left">
                    <img class="media-object" alt="64x64" src="{{upload_url()}}properties/default.jpg" style="width: 100px; height: 66px;">
                </div>
                <div class="media-body">
                    <h5 class="media-heading"><a href="#">Exclusive: Get a First Look at the Fall Collection</a> </h5>
                    <p class="font-13 text-muted">
                        Sep 03, 2016 | John Deo
                    </p>
                </div>
            </div>

            <div class="media latest-post-item">
                <div class="media-left">
                    <img class="media-object" alt="64x64" src="{{upload_url()}}properties/default.jpg" style="width: 100px; height: 66px;">
                </div>
                <div class="media-body">
                    <h5 class="media-heading"><a href="#">365 Maywood Dr, San Francisco</a> </h5>
                    <p class="font-13 text-muted">
                        Sep 03, 2016 | John Deo
                    </p>
                </div>
            </div>

            <div class="media latest-post-item">
                <div class="media-left">
                    <img class="media-object" alt="64x64" src="{{upload_url()}}properties/default.jpg" style="width: 100px; height: 66px;">
                </div>
                <div class="media-body">
                    <h5 class="media-heading"><a href="#">1735 N Fuller Ave #124</a> </h5>
                    <p class="font-13 text-muted">
                        Sep 03, 2016 | John Deo
                    </p>
                </div>
            </div>

            <div class="text-center">
                <a href="" class="btn btn-sm btn-teal waves-effect waves-light">View All</a>
            </div>
        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection

@section('js-top')
@endsection

@section('js-bot')
@endsection