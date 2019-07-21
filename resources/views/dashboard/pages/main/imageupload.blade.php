@extends('dashboard.master')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form action="{{url('/')}}/imageUpload" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <div class="form-group">
                                <label for="image">image</label>
                                <input type="file" class="form-control" id="image" name="image" {{old('image')}}>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <div class="form-group">
                                <label for="title">title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="title"
                                       value="{{ old('title') }}">
                            </div>
                        </div>


                        <input type="submit" name="submit" class="btn btn-success btn-block">


                    </form>
                </div>

            </div>



            <hr>
            <hr>
            @if($main)
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <p class="text-center">logo</p>
                    <img src="{{url('/')}}/img/alt_images/{{$main->image}}" alt="main image" width="100%"
                         height="100%">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <p class="text-center">title</p>
                    <h2 class="text-center">{{$main->title}}</h2>
                </div>
            </div>
            @endif
            <!-- /.row -->
        </section>


        <!-- /.content -->
    </div>
@stop



