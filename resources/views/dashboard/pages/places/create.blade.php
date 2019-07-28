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

                <div class="container">
                    <img  style="width:100%" src="{{ url('/') }}/img/alt_images/67358622_2403987406553731_3132144869573656576_n.jpg" alt="">
                </div>
                
               
                <form action="{{url('/')}}/storePlace" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="sponsor">Sponsor</label>
                        <select name="sponsor" id="sponsor" class="form-control">
                            @foreach($sponsors as $sponsor )
                                <option value="{{ $sponsor[0]->id }}">
                                    {{ $sponsor[0]->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="place">Places</label>
                        <select name="place" id="place" class="form-control">
                            @foreach($places as $place )
                                <option value="{{ $place->id }}" >
                                    {{ $place->name }}
                                </option>
                            @endforeach
                        </select>
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



