@extends('dashboard.master')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Users</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <th class="text-center" style="width: 10px">username</th>
                                    <th class="text-center">email</th>
                                    <th class="text-center">specialization</th>
                                    <th class="text-center">phone number</th>
                                    <th class="text-center">address</th>
                                    <th class="text-center">actions</th>

                                </tr>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="text-center">{{$user->name}}</td>
                                        <td class="text-center">{{$user->email}}</td>
                                        <td class="text-center">{{$user->specialization}}</td>
                                        <td class="text-center">{{$user->phone}}</td>
                                        <td class="text-center">{{$user->address}}</td>
                                        <td class="text-center">
                                            <a class="btn btn-danger" href="{{route('deleteUser',$user->id)}}">
                                                <i class="fa fa-trash"></i></a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop