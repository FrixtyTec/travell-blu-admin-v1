@extends('layouts.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Users List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>S. No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kumar</td>
                                        <td>Kumar@gmail.com
                                        </td>
                                        <td>Active</td>
                                        <td>
                                            <a href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Siva</td>
                                        <td>Siva@gmail.com
                                        </td>
                                        <td>De-Active</td>
                                        <td>
                                            <a href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>



                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
</section 
@endsection
