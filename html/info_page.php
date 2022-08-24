<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Info about conference</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

<!--body block -->
<div class="vh-100">

    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-dark bg-dark text-white " style="height: 8%;">
        <div class="container-fluid">

            <div class="d-flex">

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="container">
                    <ul class="nav nav-bar ml-2">
                        <li active="#">
                            <form method="LINK" action="all_conf.php">
                                <input type="submit" class="btn btn-dark" value="All conference">
                            </form>
                        </li>
                    </ul>
                </div>

            </div>

            <a class="navbar-brand " href="#">QUEST</a>

            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                 aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Qiuck search</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- label -->
    <div class="bg-primary d-flex justify-content-center text-white fs-2" style="height: 7%;">
        Info about conference:
    </div>


    <!-- main div -->
    <div class="bg-ligth m-0 row" style="height: 85%;">

        <!-- img conference -->
        <div class="col-6 h-100 ">
            <img class="mt-5 ms-5" style="width: 90%; height: 70%; border-radius: 5px; "
                 src="../foto/img2.akspic.ru-atmosfera-rastenie-oblako-poslesvechenie-prirodnyj_landshaft-4200x2800.jpg"
                 alt="">
        </div>

        <!-- info about conf -->
        <div class="col-4 h-100" id="id-form">
            <form style="height: 90%;" action="#">
                <div class="mt-3">
                    <label class="form-label">Name conference:</label><br>
                    <label class="name-conf" id="name-for-conf">Name conf</label>
                </div>
                <div class="mt-3">
                    <label class="form-label">Сonference date:</label><br>
                    <label class="date-conf" id="date-info">dd/mm/yyyy</label>

                </div>
                <div class="mt-3">
                    <label class="formlabel">Country:</label><br>
                    <label class="conf-country" id="country-info">Country</label>

                </div>
                <div class="mt-3">
                    <label class="form-label">Address:</label><br>
                    <div class="form-group field-middle_name row me-1">
                        <div class="col-sm-6 col-md-6 col-xs-6 no-padding">
                            <span>lat: </span><label id="info-lat" class="form-label"></label>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-6 no-padding">
                            <span>lng: </span><label id="info-lng" class="form-label"></label>
                        </div>

                    </div>

                </div>

                <!-- div for vidget for google map -->
                <div class="mt-3 bg-dark" id="map-info" style="height: 30%; border-radius: 5px;">

                </div>


            </form>
        </div>

        <!-- menu for conf -->
        <div class="col-2 bg-dark " style="border-radius: 5px;">
            <button type="button" class="btn btn-dark mt-2" data-bs-toggle="modal" data-bs-target="#staticCreateInfo"
                    style="height: 10%; width: 100%;">
                Create new
            </button>
            <button type="button" class="btn btn-dark mt-2" data-bs-toggle="modal" data-bs-target="#staticUpdate"
                    style="height: 10%; width: 100%;">
                Update
            </button>
            <button type="button" class="btn btn-dark mt-2" data-bs-toggle="modal" data-bs-target="#staticDeleteInfo"
                    style="height: 10%; width: 100%;">
                Delete
            </button>

            <!-- Modal create -->
            <div class="modal fade text-dark" id="staticCreateInfo" data-bs-backdrop="static" data-bs-keyboard="false"
                 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabelCreateInfo">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to go to this page?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form method="post" action="create_page.php">
                                <input type="submit" class="btn btn-primary" value="Yes">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal update -->
            <div class="modal fade text-dark" id="staticUpdate" data-bs-backdrop="static" data-bs-keyboard="false"
                 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabelUpdateInfo">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to go to this page?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form method="post" action="update_page.php">
                                <input type="hidden" name="hidden" id="info-id-update" value="">
                                <input type="submit" class="btn btn-primary" value="Yes">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal delete -->
            <div class="modal fade text-dark" id="staticDeleteInfo" data-bs-backdrop="static"
                 data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabelDeleteInfo">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this conference?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form method="post" action="../php/service/DeleteCard.php">
                                <input type="hidden" name="hidden" id="info-id" value="">
                                <input type="submit" class="btn btn-primary" value="Yes">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Modal all conf -->
    <div class="modal fade text-dark" id="staticBackAllConf" data-bs-backdrop="static" data-bs-keyboard="false"
         tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to go to this page? Data will not be saved.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form method="LINK" action="all_conf.php">
                        <input type="submit" class="btn btn-primary" value="Yes">
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVNUDdeNOAItAbkA6cME0MrYyDK_yuyQk&callback=initMap&v=weekly"
        defer
></script>
<?php
require_once "../php/service/ReadById.php";

?>
<script src="../js/tools/maps/map_for_info.js"></script>
</body>
</html>