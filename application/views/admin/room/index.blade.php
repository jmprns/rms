@extends('admin.layouts.app')

@section('css-top')
 <!-- DataTables -->
 <link href="{{asset_url()}}plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
 <link href="{{asset_url()}}plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
 <link href="{{asset_url()}}plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
 <link href="{{asset_url()}}plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
 <link href="{{asset_url()}}plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
 <link href="{{asset_url()}}plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
@endsection

@section('css-bot')
@endsection

@section('page-title')
Room Lists
@endsection

@section('page-bread')

@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Room Name</th>
                        <th>Image</th>
                        <th>Size</th>
                        <th>Persons</th>
                        <th>Bedrooms</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('js-top')

<script src="{{asset_url()}}plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset_url()}}plugins/datatables/dataTables.bootstrap.js"></script>

<script src="{{asset_url()}}plugins/datatables/dataTables.buttons.min.js"></script>
<script src="{{asset_url()}}plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="{{asset_url()}}plugins/datatables/dataTables.responsive.min.js"></script>
<script src="{{asset_url()}}plugins/datatables/responsive.bootstrap.min.js"></script>
@endsection

@section('js-bot')
<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').DataTable();
        
       
    });
    TableManageButtons.init();

</script>
@endsection