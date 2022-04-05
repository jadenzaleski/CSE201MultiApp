<?php
session_set_cookie_params(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- css links -->
    <link href="images/favicon.ico" rel="icon" type="image/x-icon"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- metadata -->
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="Jaden Zaleski, Maoqing He, Drew Laikin, Ruoyu Xiang" name="author">
    <title>MultiApp</title>
    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/index.js"></script>
</head>
<!-- navbar with login add app and requests button -->
<nav>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-8 my-3">
                    <?php
                    if (isset($_SESSION['firstName']) && isset($_SESSION['lastName'])) {
                        ?>
                        <h4 class="text-white">
                            Hello, <?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName']; ?></h4>
                        <?php
                    } else {
                        ?>
                        <h4 class="text-white">Hello, please log in.</h4>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-4 my-3 ">
                    <!-- button group in navbar -->
                    <div aria-label="navbar buttons" class="btn-group me-auto float-end" role="group">
                        <!-- login/logout button -->
                        <?php
                        if (isset($_SESSION['firstName']) && isset($_SESSION['lastName'])) {
                            ?>
                            <button class="btn btn-outline-light" id="logout"
                                    type="button">
                                <svg class="bi bi-person me-1" fill="currentColor" height="16" viewBox="0 2 16 16"
                                     width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                </svg>
                                Logout
                            </button>
                            <?php
                        } else {
                            ?>
                            <button class="btn btn-outline-light" data-bs-target="#accountModal" data-bs-toggle="modal"
                                    type="button" id="navLoginButton">
                                <svg class="bi bi-person me-1" fill="currentColor" height="16" viewBox="0 2 16 16"
                                     width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                </svg>
                                Login
                            </button>
                            <?php
                        }
                        ?>
                        <!-- account login or create modal which has form in it -->
                        <div aria-hidden="true" aria-labelledby="accountModal" class="modal fade"
                             id="accountModal"
                             tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <!-- modal header -->
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="accountLoginModalLabel">Account</h5>
                                        <button aria-label="Close" class="btn-close"  id="" data-bs-dismiss="modal"
                                                type="button"></button>
                                    </div>
                                    <!-- modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h5>Login:</h5>
                                                    <!-- login form -->
                                                    <form class="needs-validation" id="loginForm">
                                                        <div class="mb-1">
                                                            <label class="form-label"
                                                                   for="usernameLoginInput">Username</label>
                                                            <input class="form-control" id="usernameLoginInput"
                                                                   name="usernameLoginInput"
                                                                   required type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                   for="passwordLoginInput">Password</label>
                                                            <input class="form-control" id="passwordLoginInput"
                                                                   required type="password" name="passwordLoginInput">
                                                        </div>
                                                        <button class="btn btn-outline-primary w-100" type="button"
                                                                name="loginButton" id="loginButton">
                                                            Submit
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="col-6">
                                                    <h5>Create Account:</h5>
                                                    <!-- create account form. makes sure passwords match-->
                                                    <form class="row needs-validation"
                                                          method="post" id="createAccountForm">
                                                        <div class="col-6">
                                                            <label class="form-label" for="fn">First Name</label>
                                                            <input class="form-control" id="fn" type="text"
                                                                   name="registrationFirst" required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label class="form-label" for="ln">Last Name</label>
                                                            <input class="form-control" id="ln" required type="text"
                                                                   name="registrationLast">
                                                        </div>
                                                        <div class="col-12 mt-1">
                                                            <label class="form-label"
                                                                   for="registrationUsername">Username</label>
                                                            <input class="form-control" id="registrationUsername"
                                                                   name="registrationUsername"
                                                                   required type="text">
                                                        </div>
                                                        <div class="col-12 mt-1">
                                                            <label class="form-label"
                                                                   for="registrationPassword">Password</label>
                                                            <input class="form-control" id="registrationPassword"
                                                                   name="registrationPassword" required type="password">
                                                        </div>
                                                        <div class="col-12 mt-1 mb-3">
                                                            <label class="form-label" for="confirmRegistrationPassword">Confirm
                                                                Password</label>
                                                            <input class="form-control" id="confirmRegistrationPassword"
                                                                   name="confirmRegistrationPassword"
                                                                   required type="password">
                                                        </div>
                                                        <div class="col-12">
                                                            <button class="btn btn-outline-primary w-100"
                                                                    name="registrationSubmitButton"
                                                                    id="registrationSubmitButton" type="button">
                                                                Submit
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- add app button-->
                        <?php
                        if (isset($_SESSION['firstName']) && isset($_SESSION['lastName'])) {
                            ?>
                            <button class="btn btn-outline-light" data-bs-target="#addAppModalForm" data-bs-toggle="modal"
                                    type="button" id="addAppButton">
                                <svg class="bi bi-plus-lg me-1" fill="currentColor" height="16" viewBox="0 2 16 16"
                                     width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"
                                          fill-rule="evenodd"/>
                                </svg>
                                Add App
                            </button>
                        <?php
                        } else {
                        ?>
                            <script>
                                $(document).ready(function () {
                                    $('#navLoginButton').addClass("rounded-end");
                                });
                            </script>
                            <?php
                        }
                        ?>
                        <!-- add app modal with form -->
                        <div aria-hidden="true" aria-labelledby="addAppModal" class="modal fade" id="addAppModalForm"
                             tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- modal header-->
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addAppModalLabel">Add Application</h5>
                                        <button aria-label="Close" class="btn-close" id="addAppCloseBtn" data-bs-dismiss="modal"
                                                type="button"></button>
                                    </div>
                                    <!-- modal body-->
                                    <div class="modal-body">
                                        <form class="row g-3 needs-validation" method="post" id="addAppForm" enctype="multipart/form-data">
                                            <div class="col-md-6">
                                                <label class="form-label" for="applicationNameInput">Application
                                                    Name</label>
                                                <input class="form-control" id="applicationNameInput"
                                                       placeholder="MultiApp"
                                                       required type="text">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="devNameInput">Developer
                                                    Name</label>
                                                <input class="form-control" id="devNameInput"
                                                       placeholder="Company"
                                                       required type="text">
                                            </div>
                                            <div class=" col-12 form-floating">
                                                <textarea class="form-control" id="shortApplicationDescription"
                                                          placeholder="Leave a comment here" required
                                                          style="height: 100px"></textarea>
                                                <label for="shortApplicationDescription">Short Description</label>
                                            </div>
                                            <div class=" col-12 form-floating">
                                                <textarea class="form-control" id="applicationDescription"
                                                          placeholder="Leave a comment here" required
                                                          style="height: 150px"></textarea>
                                                <label for="applicationDescription">Description</label>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="fileAjax">Upload Application
                                                    Image</label>
                                                <input class="form-control form-control-sm" name="fileAjax" id="fileAjax"
                                                       required
                                                       type="file" accept="image/*">
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="DownloadLinkInput">Download Link</label>
                                                <input class="form-control" id="DownloadLinkInput"
                                                       placeholder="https://example.com"
                                                       required type="url">
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input" id="macCheckbox" type="checkbox"
                                                           value="option1" required>
                                                    <label class="form-check-label" for="macCheckbox">
                                                        <svg class="bi bi-apple me-1"
                                                             fill="currentColor"
                                                             height="24" viewBox="0 3 16 16"
                                                             width="16"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                                            <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                                        </svg>
                                                        Mac</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="windowsCheckbox" type="checkbox"
                                                           value="option2" required>
                                                    <label class="form-check-label" for="windowsCheckbox">
                                                        <svg class="bi bi-windows me-2" fill="currentColor" height="20"
                                                             viewBox="0 2 16 16" width="16"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
                                                        </svg>Windows</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label" for="applicationVersionInput">Version</label>
                                                <input class="form-control" id="applicationVersionInput"
                                                       placeholder="1.01"
                                                       required type="number" step="0.01">
                                            </div>
                                            <div class="col-12">
                                                <button id="addAppSubmit" class="btn btn-primary" type="button">Submit</button>
                                                <small class="text-muted float-end mt-2">Request will be reviewed by
                                                    admin.</small>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- requests button -->
                        <?php
                        if (isset($_SESSION['level']) && $_SESSION['level'] == 2) {
                            ?>
                            <button class="btn btn-outline-light rounded-end" data-bs-target="#requests"
                                    data-bs-toggle="modal"
                                    type="button" id="requestsButton">
                                <svg class="bi bi-files me-1" fill="currentColor" height="20" viewBox="0 2 16 16"
                                     width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
                                </svg>
                                Requests
                            </button>
                        <?php
                        } else {
                        ?>
                            <script>
                                $(document).ready(function () {
                                    $('#addAppButton').addClass("rounded-end");
                                });
                            </script>
                            <?php
                        }
                        ?>
                        <!-- requests modal with form -->
                        <div aria-hidden="true" aria-labelledby="requestsModal" class="modal fade" id="requests"
                             tabindex="-1">
                            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                <div class="modal-content">
                                    <!-- modal header -->
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="requestsLabel">Requests</h5>
                                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"
                                                type="button"></button>
                                    </div>
                                    <!-- modal body -->
                                    <div class="modal-body">
                                        <!-- list of requested app-->
                                        <ul class="list-group" id="listOfReqApps">

                                        </ul>
                                    </div>
                                    <!-- modal footer -->
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- collapsed navbar -->
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <!-- logo and name-->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <svg class="bi bi-boxes me-1" fill="currentColor" height="24" viewBox="0 0 18 16"
                     width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z"/>
                </svg>
                <strong>MultiApp</strong>
            </a>
            <!-- expand button-->
            <button aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler" data-bs-target="#navbarHeader" data-bs-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>
<!-- main container with everything in it expect top navbar -->
<main class="bg-light">
    <!-- feature page-->
    <div class="container col-xl-10 col-xxl-8 px-4 py-1 bg-light mb-5" id="feature">
        <!-- php showFeatureApp script here-->
    </div>
    <!-- navbar for album and items -->
    <nav aria-label="Album" class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container" style="box-shadow: lightgray 0 15px 20px -15px;">
            <h5 class="navbar-brand mt-2" href=""><strong>Available Apps:</strong></h5>

            <button class="navbar-toggler m-1" type="button" data-bs-toggle="collapse" data-bs-target="#albumNav"
                    aria-controls="albumNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="albumNav">
                <ul class="navbar-nav">
                    <!-- sort dropdown -->
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                           href="javascript:void(0)">
                            <svg class="bi bi-arrow-down-up me-1" fill="currentColor" height="16" viewBox="0 1 16 16"
                                 width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"
                                      fill-rule="evenodd"/>
                            </svg>
                            sort</a>
                        <!-- dropdown list -->
                        <ul aria-labelledby="sort" class="dropdown-menu">
                            <li><a class="dropdown-item" id="atozdrop" href="javascript:void(0)">A-Z</a></li>
                            <li><a class="dropdown-item" id="dateAd" href="javascript:void(0)">Date Added</a></li>
                        </ul>
                    </li>
                    <!-- filter dropdown -->
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                           href="javascript:void(0)">
                            <svg class="bi bi-funnel me-1" fill="currentColor" height="16" viewBox="0 1 16 16"
                                 width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>
                            </svg>
                            filter</a>
                        <!-- dropdown list -->
                        <ul aria-labelledby="filter" class="dropdown-menu">
                            <li><a class="dropdown-item" id="macSort" href="javascript:void(0)">
                                    <svg class="bi bi-apple me-2"
                                         fill="currentColor"
                                         height="24" viewBox="0 3 16 16"
                                         width="16"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                        <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                    </svg>
                                    Mac</a></li>
                            <li><a class="dropdown-item" id="windsort" href="javascript:void(0)">
                                    <svg class="bi bi-windows me-2" fill="currentColor" height="20"
                                         viewBox="0 2 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
                                    </svg>
                                    Windows</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- search bar -->
                <link rel = "stylesheet" type = "text/css" href = "searchcss.css">
                <input type="text" id="searchIn" onkeyup="searchFunc()" placeholder="Search for names..">

                <ul id="myUL">
                    <li><a href="#">Adele</a></li>
                    <li><a href="#">Agnes</a></li>

                    <li><a href="#">Billy</a></li>
                    <li><a href="#">Bob</a></li>

                    <li><a href="#">Calvin</a></li>
                    <li><a href="#">Christina</a></li>
                    <li><a href="#">Cindy</a></li>
                </ul>
                <!--<form class="my-2">
                    <input aria-label="Search" id="searchBar" class="form-control" placeholder="Search" type="text">
                </form>-->
            </div>
        </div>
    </nav>
    <!-- album of apps -->
    <div class="album py-5 bg-light">
        <div class="container">
            <!--                posted comments box for app modal. create one of these for each comment (under add comment li)-->
            <!--                <li class="list-group-item d-flex justify-content-between align-items-start">-->
            <!--                    <div class="ms-2 me-auto">-->
            <!--                        <div class="fw-bold">Jaden Zaleski</div>-->
            <!--                        <p class="ms-4 w-100 fw-light">Lorem ipsum dolor sit amet, consectetur-->
            <!--                            adipiscing elit, sed do eiusmod tempor incididunt ut-->
            <!--                            labore et dolore magna aliqua. Ut enim ad minim veniam,-->
            <!--                            quis nostrud exercitation ullamco laboris nisi ut-->
            <!--                            aliquip ex ea commodo consequat. Duis aute irure dolor-->
            <!--                            in reprehenderit in voluptate velit esse cillum dolore-->
            <!--                            eu fugiat nulla pariatur.</p>-->
            <!---->
            <!--                    </div>-->
            <!--                    <span class="badge bg-white text-dark mt-1">14 days ago</span>-->
            <!--                    <button class="btn btn-outline-danger py-0 px-1" type="button">-->
            <!--                        <svg class="bi bi-trash m-0" fill="currentColor"-->
            <!--                             height="20" viewBox="0 1 16 16" width="16"-->
            <!--                             xmlns="http://www.w3.org/2000/svg">-->
            <!--                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>-->
            <!--                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"-->
            <!--                                  fill-rule="evenodd"/>-->
            <!--                        </svg>-->
            <!--                    </button>-->
            <!--                </li>-->

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="album">
                <!-- where all apps go -->
            </div>
        </div>
    </div>
</main>
<!-- footer -->
<footer class="text-muted py-5">
    <div class="container">
        <p class="float-end mb-1 text-primary">
            <a href="#">
                <svg class="bi bi-chevron-compact-up" fill="currentColor" height="48" viewBox="0 0 16 16"
                     width="48" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.776 5.553a.5.5 0 0 1 .448 0l6 3a.5.5 0 1 1-.448.894L8 6.56 2.224 9.447a.5.5 0 1 1-.448-.894l6-3z"
                          fill-rule="evenodd"/>
                </svg>
            </a>
        </p>
        <p class="mb-1"><small>Website created by Jaden Zaleski, Maoqing He, Drew Laikin, and Ruoyu Xiang.</small></p>
        <p class="mb-0"><small>CSE201 at Miami University, Spring 2022</small></p>
    </div>
</footer>
</html>