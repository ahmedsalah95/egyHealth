@extends('dashboard.master')
@section('content')

@if(auth()->check())
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
                                    <th class="text-center" style="width: 10px">place Name</th>
                                    <th class="text-center">Sponsor Name</th>
                                    <th class="text-center">actions</th>

                                </tr>
                                @foreach($sponsors as $sponsor)
                                    <tr>
                                        <td class="text-center">{{$sponsor[0]->place->name}}</td>
                                        <td class="text-center">{{$sponsor[0]->name}}</td>
                                        <td class="text-center">
                                            <a class="btn btn-danger" href="{{route('deleteSponsorPlace',$sponsor[0]->id)}}">
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
@endif
@stop