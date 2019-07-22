@extends('dashboard.master')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{url('/')}}/updateSponsor/{{$sponsor->id}}"
                      method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12">

                        <div class="form-group">
                            <label for="image">logo</label>
                            <input type="file" class="form-control" id="image" name="image"
                                    value="{{$sponsor->logo}}"
                                    >
                            <br>
                            <img src="{{url('/')}}/img/alt_images/{{$sponsor->logo}}" alt="" width="50%"
                            height="50%">
                            <br>
                        </div>


                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="name"
                                   value="{{$sponsor->name}}">
                        </div>


                        <div class="form-group">
                            <label for="description">description</label>
                            <textarea name="description" class="form-control">
                               {!! $sponsor->description !!}
                            </textarea>
                        </div>


                        <div class="form-group">
                            <label for="website">website link</label>
                            <input type="text" class="form-control" id="website" name="website"
                                   placeholder="website link..."
                                   value="{{ $sponsor->website }}">
                        </div>


                        <div class="form-group">
                            <label for="android">android link</label>
                            <input type="text" class="form-control" id="android" name="android"
                                   placeholder="android link..."
                                   value="{{ $sponsor->android }}">
                        </div>


                        <div class="form-group">
                            <label for="ios">ios link</label>
                            <input type="text" class="form-control" id="ios" name="ios"
                                   placeholder="ios link..."
                                   value="{{ $sponsor->ios }}">
                        </div>


                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="type" id="optionsRadios1"
                                           value="sponsor"
                                            {{$sponsor->type == "sponsor" ? 'checked' : ''}}>
                                    normal sponsor
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="type" id="optionsRadios2"
                                           {{$sponsor->type == "dental" ? 'checked' : ''}}
                                           value="dental">
                                    dental sponsor
                                </label>
                            </div>

                        </div>


                        <input type="submit" name="submit" class="btn btn-success btn-block">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop



