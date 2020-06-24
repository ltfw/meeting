<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/lineicons/LineIcons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="dropdown mr-auto">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Meeting Room Lt. 1
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <div class="row mr-1">
            <div id="jam" class="mr-1"></div>
            <div id="tanggal"></div>
        </div>
        
        <button class="btn btn-secondary" type="button">
            <i class="lni lni-calendar"></i>
        </button>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md h-100" id="bg-left">
                <div class="row">
                    <div class="col text-center font-white" id="headline-container">
                        <h1 class="display-4"><strong>FREE</strong></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <button type="button" class="btn btn-secondary" id="add-button"><i class="lni lni-plus"></i></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center font-white" id="desc-container">
                        <h4>This Room is Available</h4>
                    </div>
                </div>
            </div>
            <div class="col-md bg-secondary">gffg</div>
        </div>
    </div>

    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/moment.min.js"></script>

    <script src="assets/js/script.js"></script>


</body>

</html>