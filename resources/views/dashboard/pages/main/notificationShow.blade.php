@extends('dashboard.master')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <section class="content">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form action="{{url('/')}}/notificationStore" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="notification_name">notification name</label>
                            <input type="text" class="form-control" id="notification_name" name="notification_name"
                                   placeholder="name"
                                   value="{{ old('notification_name') }}">
                        </div>

                        <div class="form-group">
                            <label for="notification_desc">notification Content</label>
                            <input type="text" class="form-control" id="notification_desc" name="notification_desc"
                                   placeholder="name"
                                   value="{{ old('notification_desc') }}">
                         {{--   <textarea
                                    class="form-control"
                                    id="notification_desc"
                                    name="notification_desc"
                            >{!! old('notification_desc') !!} </textarea>--}}
                        </div>


                        <input type="submit" name="submit" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

@stop





