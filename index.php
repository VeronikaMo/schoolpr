<!DOCTYPE html>
<html lang="sk">
<head>
    <title>School</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }

    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    </style>
</head>
<body>

    <div class="jumbotron">
        <div class="container text-center">
            <img src="skola.gif" style="width:100%" />
            <h1>Hura do skoly!</h1>
        </div>
    </div>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">O skole</a>
                    </li>
                    <li>
                        <a href="#">Historia</a>
                    </li>
                    <li>
                        <a href="#">Stores</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-user"></span>Prihlasenie
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary" align="center">
                    <div class="panel-heading">
                        <a href="#">Rozvrh hodin</a>
                    </div>
                    <div class="panel-body">
                        <img src="rozvrh.jpg" class="img-responsive" style="width:100%" alt="Image" />
                    </div>
                    <div class="panel-footer">Kedy, co a s kym?</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-danger" align="center">
                    <div class="panel-heading">
                        <a href="#">Znamky</a>
                    </div>
                    <div class="panel-body">
                        <img src="znamky.jpg" class="img-responsive" style="width:100%" alt="Image" />
                    </div>
                    <div class="panel-footer">Ako sa mi dari?</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-success" align="center">
                    <div class="panel-heading">
                        <a href="#">Domace ulohy</a>
                    </div>
                    <div class="panel-body">
                        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image" />
                    </div>
                    <div class="panel-footer">Co mam urobit, aby som bol(a) o krok vpred?</div>
                </div>
            </div>
        </div>
    </div>
    <br />

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary" align="center">
                    <div class="panel-heading">
                        <a href="#">Sportove sutaze</a>
                    </div>
                    <div class="panel-body">
                        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image" />
                    </div>
                    <div class="panel-footer">A co tak si zmerat sily?</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary" align="center">
                    <div class="panel-heading">
                        <a href="#">Vedomostne sutaze</a>
                    </div>
                    <div class="panel-body">
                        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image" />
                    </div>
                    <div class="panel-footer">Ci skor prevetrat mozgove zavity?</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary" align="center">
                    <div class="panel-heading">
                        <a href="#">Zaujimavosti</a>
                    </div>
                    <div class="panel-body">
                        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image" />
                    </div>
                    <div class="panel-footer">Co nove sa deje?</div>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />

    <footer class="container-fluid text-center">
        <p>Online Store Copyright</p>
        <form class="form-inline">
            Get deals:
            <input type="email" class="form-control" size="50" placeholder="Email Address" />
            <button type="button" class="btn btn-danger">Sign Up</button>
        </form>
    </footer>

</body>
</html>
