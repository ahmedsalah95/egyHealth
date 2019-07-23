@extends('dashboard.master')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success btn-block" href="{{url('/')}}/addSponsor">
                        <i class="fa fa-plus"></i> add sponsor </a>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Sponsors</h3>
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
                                    <th class="text-center" style="width: 10px">sponsor name</th>
                                    <th class="text-center" style="width: 10px">sponsor logo</th>
                                    <th class="text-center" style="width: 10px">Actions</th>


                                </tr>
                                @foreach($sponsors as $sponsor)
                                    <tr>
                                        <td class="text-center">{{$sponsor->name}}</td>
                                        <td class="text-center">
                                            <img src="{{url('/')}}/img/alt_images/{{$sponsor->logo}}"
                                                 alt="logo"
                                                 width="20%"
                                                 height="20%"
                                            >
                                        </td>

                                        <td class="text-center">
                                            <a class="btn btn-danger" href="{{route('deleteSponsor',$sponsor->id)}}">
                                                <i class="fa fa-trash"></i></a>
                                            <a class="btn btn-warning" href="{{route('editSponsor',$sponsor->id)}}">
                                                <i class="fa fa-pencil-square"></i></a>
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