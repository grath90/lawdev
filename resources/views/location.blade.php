@extends("templates.template")
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <h4>Location</h4>
                    <p>Lassiter and Cassinelli is located in the heart of downtown Little Rock.
                     We are near all of the major courts.</p>

                    <!--<input type="text" id="address" placeholder="Address" style="width: 100%;"/>-->

                       <!-- Lat: <input type="hidden" id="lat" value="3.1234"/>
                        Lng: <input type="hidden" id="lng" value="101.1234"/>-->

                        <style>
                            #map {
                                width: 100%;
                                height: 400px;
                            }
                        </style>

                        <div id="map"></div>

                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiC9ND9vNlR3fuswRmvFqg3GJyZiYk81E"></script>
                        <script src="js/google_maps.js"></script>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 address">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <address>
                            <strong>Address</strong><br>
                            813 West Third St.<br>
                            Little Rock, AR<br>
                            Tel: (501) 370-9300<br>
                            Fax: (501) 370-9306<br>
                            Email: <a href="mailto:info@lcarklaw.com">info@lcarklaw.com</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop