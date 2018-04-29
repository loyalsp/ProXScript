@extends('layouts.app')

@section('style')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet">
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
                        <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                            <thead>
                            <tr>
                                <th><input type="checkbox" class="parent"></th>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/datatables/jquery-1.12.4.js') }}"></script>
    <script src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">

            var oTable = $('.datatable').DataTable({
                processing: true,
                serverSide: true,
               // ajax: '{{ route('getUsers') }}',
                ajax: {
                    url: '{{ route('getUsers') }}',
                    data: function (d) {

                        d.id = $('select[id=id]').val();
                    }
                },
                columns: [
                    {data: 'select', name: 'select',orderable: false, searchable: false},
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'action', name: 'action',orderable: false, searchable: false},
                ]
            });
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

    </script>
@endsection