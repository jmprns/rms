@extends('admin.layouts.app')

@section('css-top')
 <!-- Jquery filer css -->
 <link href="{{asset_url()}}plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
 <link href="{{asset_url()}}plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />
@endsection

@section('css-bot')
@endsection

@section('page-title')
Header Title
@endsection

@section('page-bread')
<ol class="breadcrumb hide-phone p-0 m-0">
    <li>
        <a href="#">Zircos</a>
    </li>
    <li>
        <a href="#">Pages</a>
    </li>
    <li class="active">
        Starter Page
    </li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="header-title m-t-0">Fill in the Form</h4>

            <form role="form" method="POST" action="{{current_url()}}" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="p-20">
                            <div class="form-group m-b-20">
                                <label for="propertyname">Property Name</label>
                                <input type="text" name="name" class="form-control" id="propertyname" placeholder="Enter title">
                            </div>
                            <div class="form-group m-b-20">
                                <label for="property-desc">Description</label>
                                <textarea class="form-control" id="property-desc" rows="5"></textarea>
                            </div>
                          
                            <div class="form-group m-b-20">
                                <label for="property-price">Price / Rent</label>
                                <input type="text" class="form-control" id="property-price" placeholder="Enter number">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4 m-b-10">
                                        <label for="bedrooms">Bedrooms</label>
                                        <input type="text" class="form-control" id="bedrooms">
                                    </div>
                                    <div class="col-sm-4 m-b-10">
                                        <label for="Square-ft">Square ft </label>
                                        <input type="text" class="form-control" id="Square-ft">
                                    </div>
                                    <div class="col-sm-4 m-b-10">
                                        <label for="car-parking">Car Parking</label>
                                        <input type="text" class="form-control" id="car-parking">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end class p-20 -->

                    </div> <!-- end col -->

                    <div class="col-md-6">
                        <div class="p-20">
                            <div class="form-group m-b-20">
                                <label>General Amenities</label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="checkbox checkbox-primary m-b-15">
                                            <input id="checkbox1" type="checkbox" checked>
                                            <label for="checkbox1">
                                                Swimming pool
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary m-b-15">
                                            <input id="checkbox2" type="checkbox" >
                                            <label for="checkbox2">
                                                Terrace
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary m-b-15">
                                            <input id="checkbox3" type="checkbox" >
                                            <label for="checkbox3">
                                                Air conditioning
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary m-b-15">
                                            <input id="checkbox4" type="checkbox" checked>
                                            <label for="checkbox4">
                                                Internet
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary m-b-15">
                                            <input id="checkbox5" type="checkbox" >
                                            <label for="checkbox5">
                                                Balcony
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary m-b-15">
                                            <input id="checkbox6" type="checkbox" checked>
                                            <label for="checkbox6">
                                                Cable TV
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary m-b-15">
                                            <input id="checkbox7" type="checkbox" checked>
                                            <label for="checkbox7">
                                                Computer
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary m-b-15">
                                            <input id="checkbox8" type="checkbox" >
                                            <label for="checkbox8">
                                                Grill
                                            </label>
                                        </div>
                                    </div> <!-- end col -->

                                    <div class="col-xs-6">
                                        <div class="checkbox checkbox-primary m-b-15">
                                            <input id="checkbox9" type="checkbox" >
                                            <label for="checkbox9">
                                                Dishwasher
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary m-b-15">
                                            <input id="checkbox10" type="checkbox" >
                                            <label for="checkbox10">
                                                Near Green Zone
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary m-b-15">
                                            <input id="checkbox11" type="checkbox" checked>
                                            <label for="checkbox11">
                                                 Near Church
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary m-b-15">
                                            <input id="checkbox12" type="checkbox" >
                                            <label for="checkbox12">
                                                Near Hospital
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary m-b-15">
                                            <input id="checkbox13" type="checkbox" checked>
                                            <label for="checkbox13">
                                                Near School
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary m-b-15">
                                            <input id="checkbox14" type="checkbox" checked>
                                            <label for="checkbox14">
                                                Near Shop
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary m-b-15">
                                            <input id="checkbox15" type="checkbox" checked>
                                            <label for="checkbox15">
                                                Oven
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary m-b-15">
                                            <input id="checkbox16" type="checkbox" >
                                            <label for="checkbox16">
                                                Cofee pot
                                            </label>
                                        </div>
                                    </div> <!-- end col -->

                                </div> <!-- end row -->
                            </div>
                            <div class="form-group m-b-20">
                                <label>File Uploads</label>
                                <input type="file" name="files[]" id="filer_input1"
                                               multiple="multiple">
                            </div>
                        </div>
                        <!-- end class p-20 -->
                    </div> <!-- end col -->

                </div> <!-- end row -->

                <div class="text-center">
                    <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light">Delete</button>
                </div>
            </form>
            <!-- end form -->

        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection

@section('js-top')
<!-- Jquery filer js -->
<script src="{{asset_url()}}plugins/jquery.filer/js/jquery.filer.min.js"></script>
@endsection

@section('js-bot')
<script src="{{asset_url()}}js/roomUpload.js"></script>
@endsection