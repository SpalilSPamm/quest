<?php
//    require_once '../php/service/CreateCard.php';
//?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All conferences</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<!--  <body>-->

<div class="vh-100">
    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-dark bg-dark text-white " style="height: 8%;">

        <div class="container-fluid">
            <div class="d-flex">
                <!-- button for offcanvas -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- button for nav -->
                <div class="container">
                    <ul class="nav nav-bar ml-2">
                        <li>
                            <form method="LINK" action="create_page.php">
                                <input type="submit" class="btn btn-dark" value="Create new">
                            </form>

                        </li>

                    </ul>
                </div>
            </div>
            <!-- label for nav -->
            <a class="navbar-brand " href="#">QUEST</a>
            <!-- offcanvas -->
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


    <!-- div for name page -->
    <div class="bg-primary d-flex justify-content-center text-white fs-2" style="height: 7%;">
        Your all conferences:
    </div>

    <div class="bg-ligth" style="border: solid 3px black; height: 85%;">
        <div class="row h-100 w-100">

            <!-- scrollbar for list -->
            <div class="col-3 h-100" data-spy="scroll" data-target="#myScrollspy" data-offset="10"
                 style="overflow-y: scroll;">

                <!-- list for card -->
                <div id="simple-list-example" class="d-flex flex-column alien-item-center gap-2 text-center h-100">
                    <div class="list-group" id="list-href">
                        <template id="el-href">
                            <a href="#simple-list-item-1"
                               class="list-group-item list-group-item-action list-group-item-primary" id="href-conf">A
                                simple 1</a>
                        </template>


                    </div>
                </div>
            </div>

            <!-- space for cards -->
            <div class="col-9 h-100" data-spy="scroll" data-target="#myScrollspy" data-offset="10"
                 style="height:200px;overflow-y: scroll;padding:5px; border: 1px solid #ccc;">

                <div class="d-flex row mw-100" id="row-card">

                    <template id="el-card">

                        <div class="col-4 d-flex justify-content-center mt-2" id="node">
                            <!-- card -->
                            <div class="card w-75 bg-dark text-white" id="simple-list-item-2" style="width: 60%; ">
                                <!-- name for card -->
                                <div class="card-body" style="border-bottom: solid 1px; height: 20%;">
                                    <h5 class="card-title" id="name-card">Name conference</h5>
                                </div>

                                <div style="height: 60%;">
                                    <!-- img for card -->
                                    <img src="../foto/img2.akspic.ru-atmosfera-rastenie-oblako-poslesvechenie-prirodnyj_landshaft-4200x2800.jpg"
                                         class="card-img-top  h-100" alt="...">
                                </div>

                                <!-- info about card -->
                                <div class="card-body d-flex" style="border-top: solid 1px; height: 20%;">
                                    <div class="w-75">
                                        <span id="date-card">12/12/2022</span>
                                    </div>

                                    <div class="d-flex justify-content-center w-25">
                                        <div class="btn-group">

                                            <button class="btn btn-secondary btn-sm dropdown-toggle bg-dark get"
                                                    id="type" type="button" name="submit" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                ...
                                            </button>

                                            <ul class="dropdown-menu dropdown-menu-dark">
                                                <li>
                                                    <button type="button" class="btn text-white" data-bs-toggle="modal"
                                                            data-bs-target="#staticUpdate"
                                                            style="height: 10%; width: 100%;">
                                                        Update
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn text-white" data-bs-toggle="modal"
                                                            data-bs-target="#staticDelete"
                                                            style="height: 10%; width: 100%;">
                                                        Delete
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn text-white" data-bs-toggle="modal"
                                                            data-bs-target="#staticInfo"
                                                            style="height: 10%; width: 100%;">
                                                        Info
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </template>

                    <!-- Modal Update -->
                    <div class="modal fade text-dark" id="staticUpdate" data-bs-backdrop="static"
                         data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabelUpdate">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to go to this page?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                    </button>
                                    <form method="post" action="update_page.php">
                                        <input type="hidden" name="hiddenUpdate" id="input-id-update" value="">
                                        <input type="submit" class="btn btn-primary" id="all-update" value="Yes">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Info -->
                    <div class="modal fade text-dark" id="staticInfo" data-bs-backdrop="static" data-bs-keyboard="false"
                         tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabelInfo">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to go to this page?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                    </button>
                                    <form method="post" action="info_page.php">
                                        <input type="hidden" name="hiddenInfo" id="input-id-info" value="">
                                        <input type="submit" class="btn btn-primary" id="all-info" value="Yes">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal delete -->
                    <div class="modal fade text-dark" id="staticDelete" data-bs-backdrop="static"
                         data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabelDelete">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this conference?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                    </button>
                                    <form method="post" action="../php/service/DeleteCard.php">
                                        <input type="hidden" name="hidden" id="input-id-delete" value="">
                                        <input type="submit" class="btn btn-primary" id="all-delete" value="Yes">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="../js/all_conf.js"></script>
<?php
require_once '../php/service/CreateCard.php';

?>
</body>
</html>