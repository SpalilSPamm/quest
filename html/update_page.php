<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update conference</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../node_modules/air-datepicker/air-datepicker.css">
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
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                    data-bs-target="#staticBackAllConf">
                                All conference
                            </button>
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
        Update conference:
    </div>


    <!-- main div -->
    <div class="bg-ligth m-0 row" style="height: 85%;">

        <!-- img conference -->
        <div class="col-6 h-100 ">
            <img class="mt-5 ms-5" style="width: 90%; height: 70%; border-radius: 5px; "
                 src="../foto/img2.akspic.ru-atmosfera-rastenie-oblako-poslesvechenie-prirodnyj_landshaft-4200x2800.jpg"
                 alt="">
            <div class="mt-3 ms-5 " style="width: 80%;">
                <label for="formFile" class="form-label">Сhoose a picture for the conference</label>
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>

        <!-- info about conf -->
        <div class="col-4 h-100">
            <form style="height: 90%;" action="#">
                <div class="mt-3">
                    <label class="form-label">Name conference:</label>
                    <input class="form-control" type="text" id="name-update" placeholder="Input name conference"
                           value="">
                </div>
                <div class="mt-3">
                    <label class="form-label">Сonference date:</label>
                    <input class="form-control" type="text" id="update-date" placeholder="Input date conference"
                           value="">
                </div>
                <div class="mt-3">
                    <label class="formlabel">Country:</label>
                    <input class="form-control" list="datalistOptions" id="country-update" placeholder="Input country"
                           value="">
                    <datalist id="datalistOptions">
                        <option value="San Francisco">
                        <option value="New York">
                        <option value="Seattle">
                        <option value="Los Angeles">
                        <option value="Chicago">
                    </datalist>
                </div>
                <div class="mt-3">
                    <label class="form-label">Address:</label>
                    <div class="form-group field-middle_name row me-1">
                        <div class="col-sm-5 col-md-5 col-xs-5 no-padding">
                            <span>lat:</span><input type="text" id="update-lat" class="form-control" required="required"
                                                    value="">
                        </div>
                        <div class="col-sm-5 col-md-55 col-xs-5 no-padding">
                            <span>lng:</span><input type="text" id="update-lng" class="form-control" required="required"
                                                    value="">
                        </div>
                        <div class="col-sm-2 col-md-2 col-xs-2 p-0 d-flex align-items-end justify-content-start">
                            <button type="submit" class="btn btn-primary w-100 h-50" id="findButton-update">Find
                            </button>
                        </div>
                    </div>
                </div>

                <!-- div for vidget for google map -->
                <div class="mt-3 bg-dark" id="map-update" style="height: 30%; border-radius: 5px;">

                </div>

                <!-- button send -->
                <div class="mt-2 d-flex justify-content-end ">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mt-2" id="saveUpdate" data-bs-toggle="modal"
                            data-bs-target="#staticBackSend">
                        Save
                    </button>

                    <!-- Modal send -->
                    <div class="modal fade text-dark" id="staticBackSend" data-bs-backdrop="static"
                         data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabelSend">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to go to this page? Data will not be saved.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                    </button>
                                    <form action="#"></form>
                                    <form method="post" action="../php/service/UpdateConference.php">
                                        <input type="hidden" id="u-name" name="pname" value="">
                                        <input type="hidden" id="u-date" name="pdate" value="">
                                        <input type="hidden" id="u-country" name="pcountry" value="">
                                        <input type="hidden" id="u-lat" name="plat" value="">
                                        <input type="hidden" id="u-lng" name="plng" value="">
                                        <input type="hidden" id="u-id" name="pid" value="">
                                        <input type="submit" class="btn btn-primary" value="Yes">
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>

        <!-- menu for conf -->
        <div class="col-2 bg-dark " style="border-radius: 5px;">
            <button type="button" class="btn btn-dark mt-2" data-bs-toggle="modal" data-bs-target="#staticBackCreate"
                    style="height: 10%; width: 100%;">
                Create new
            </button>

            <!-- Modal -->
            <div class="modal fade text-dark" id="staticBackCreate" data-bs-backdrop="static" data-bs-keyboard="false"
                 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabelCreate">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to go to this page? Data will not be saved.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form method="LINK" action="create_page.php">
                                <input type="submit" class="btn btn-primary" value="Yes">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-dark mt-2" data-bs-toggle="modal" data-bs-target="#staticDelete"
                    style="height: 10%; width: 100%;">
                Delete
            </button>

            <!-- Modal delete -->
            <div class="modal fade text-dark" id="staticDelete" data-bs-backdrop="static" data-bs-keyboard="false"
                 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabelDelete">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this conference?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form method="post" action="../php/service/DeleteCard.php">
                                <input type="hidden" name="hidden" id="update-id-delete" value="id">
                                <input type="submit" class="btn btn-primary" value="Yes">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-dark mt-2" data-bs-toggle="modal" data-bs-target="#staticBackInfo"
                    style="height: 10%; width: 100%;">
                Info
            </button>

            <!-- Modal info -->
            <div class="modal fade text-dark" id="staticBackInfo" data-bs-backdrop="static" data-bs-keyboard="false"
                 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabelInfo">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to go to this page? Data will not be saved.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form method="post" action="info_page.php">
                                <input type="hidden" name="hiddenInfo" id="update-id-info" value="">
                                <input type="submit" class="btn btn-primary" value="Yes">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade text-dark" id="staticBackAllConf" data-bs-backdrop="static" data-bs-keyboard="false"
         tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabelAllConf">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to go to this page? Data will not be saved.
                </div>
                <div class="modal-footer">
                    <form action="all_conf.php">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVNUDdeNOAItAbkA6cME0MrYyDK_yuyQk&callback=initMap&v=weekly"
        defer
></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
<script src="../node_modules/air-datepicker/air-datepicker.js"></script>
<script src="../js/tools/country-list.js"></script>
<?php
require_once "../php/service/ReadByIdUpdate.php";

?>
<script src="../js/tools/tools.js"></script>
<script src="../js/tools/maps/map_for_update.js"></script>
<script src="../js/update-page.js"></script>
</body>
</html>