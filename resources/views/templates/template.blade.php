<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lassiter</title>
    <!--<link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../vendor/components/jquery/jquery.min.js"></script>-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('index') }}">Lassiter & Cassinelli</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Attorneys <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('lassiter') }}">Jack Lassiter</a></li>
                            <li><a href="{{ route('cassinelli') }}">Erin Cassinelli</a></li>
                            <li><a href="{{ route('collins') }}">Lauren Collins</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('awards') }}">Awards</a> </li>
                    <li><a href="{{ route('location') }}">Location</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</head>
<body>
    <div class="content">
        @yield("content")
    </div>
</body>
<footer class="footer">
    <p>Copyright <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> 2015 Lassiter & Cassinelli</p>
</footer>
</html>