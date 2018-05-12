@extends('layouts.master')

@section('style')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <style>
        .parent-th
        {
            width:10px;
        }
        .disable_btn{
            pointer-events: none;
            cursor: default;
            opacity: 0.6;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Data Table Demo</div>

                    <div class="panel-body">
                        <form method="POST" id="search-form" class="form-inline" role="form">

                            <div class="form-group">
                                <label for="id" class="">status</label>
                           <select name="id" id="id" class="form-control" >
                               <option>Select Filter</option>
                               <option value="1">Verified</option>
                               <option value="0">Unverified</option>
                           </select>
                            </div>
                        </form>
                        <table id="dataTable" class="table table-hover table-bordered table-striped datatable" style="width:100%">
                            <thead>
                            <tr>
                                <th class="parent-th"><input type="checkbox" class="parent"></th>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Balance</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                        </table>
                        <br>
                        <div class="form-group ">
                            <div class="form-group">




                                <div class="col-md-4">
                                    <select id="action" class="form-control"   >
                                        <option value="">Actions</option>
                                        <option value="ban">Ban Selected Users</option>
                                        <option value="active">Activate Selected Users</option>
                                    </select>
                                </div>
                                <button id="status_btn" class="btn btn-sm btn-primary" onclick="updateOrDelete()">> </button>


                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@include('includes.scripts.dataTables')
    <script>
        route = '{{ route('getUsers') }}';
        columns = [
            {data: 'select', name: 'select',orderable: false, searchable: false,"width":"10px"},
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'banned', name: 'banned',orderable: false, searchable: false},
            {data: 'balance', name: 'balance',orderable: false, searchable: false},
            {data: 'action', name: 'action',orderable: false, searchable: false}
        ];
        var oTable = getDataTableData(route,columns);

        $(document).ready(function () {
            $('#id').on('change', function(e) {
                e.preventDefault();
                oTable.draw();

            });
        });
        function getId() {
            $('#id').on('change', function(e) {
                e.preventDefault();
                return $('select[id=id]').val();

            });
        }
        $('#status_btn').addClass('disable_btn');
    </script>
@endsection
