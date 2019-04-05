@extends('layouts.admin')

@section('css')
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <style>
        td{
            vertical-align:middle !important;
        }
        .cover{
            background-size: cover !important;
        }
        .td-small{
            max-width: 50px !important;
        }
  </style>
@endsection

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Users</h1>
    <div class="container bg-white bckgd">
        <br>
        <div class="table-responsive small">
            <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center td-small"></th>
                        <th>Name</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Role</th>
                        <th class="text-center">Date Created</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $value)
                    <tr>
                        <td class="text-center"><img class="img-profile rounded-circle cover" width="40" height="40" src="{{ $value->user_avatar($value->id) }}"></td>
                        <td>{{ $value->user_name($value->id) }} <br> {{ $value->email }} </td>
                        <td class="text-success">{{ 'Approved' }}</td>
                        <td class="text-center">{{ ucfirst($value->user_details->role) }}</td>
                        <td class="text-center">{{ $value->created_at != null? $value->created_at : '---' }}</td>
                        <td class="text-center">
                            <a href="" class="btn btn-primary btn-circle btn-sm" data-toggle="tooltip" title="Edit User"><i class="fa fa-fw fa-edit"></i></a>
                            <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" title="Delete User"><i class="fa fa-fw fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <br>
    </div>
</div>
@endsection

@section('js')
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
@endsection
