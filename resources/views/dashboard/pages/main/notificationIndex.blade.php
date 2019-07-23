@extends('dashboard.master')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success btn-block" href="{{url('/')}}/notificationShow">
                        <i class="fa fa-plus"></i> add Notification </a>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Notifications</h3>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <th class="text-center" style="width: 10px">notification name</th>
                                    <th class="text-center" style="width: 10px">notification description</th>
                                    <th class="text-center" style="width: 10px">delete</th>


                                </tr>
                                @foreach($notifications as $notification)
                                    <tr>
                                        <td class="text-center">{{$notification->notification_name}}</td>
                                        <td class="text-center">{{$notification->notification_desc}}</td>

                                        <td class="text-center">
                                            <a class="btn btn-danger"
                                               href="{{route('deleteNotification',$notification->id)}}">
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