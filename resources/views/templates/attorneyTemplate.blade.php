@extends("templates.template")
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="bio_pic">
                @yield("bio_pic")
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                @yield("bio")
            </div>
        </div>
    </div>
@stop