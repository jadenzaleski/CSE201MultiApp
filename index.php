<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- metadata -->
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="Jaden Zaleski, Maoqing He, Drew Laikin, Ruoyu Xiang" name="author">
    <title>MultiApp - Home</title>
    <!-- css links -->
    <link href="images/favicon.png" rel="icon" type="image/x-icon"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- php links -->
    <?php include 'config.php'; ?>

    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/index.js"></script>

</head>
<!-- navbar with login and requests button -->
<nav>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-8 my-3">
                    <h4 class="text-white">Hello, name</h4>
                </div>
                <div class="col-4 my-3 ">
                    <!-- button group in navbar -->
                    <div aria-label="navbar buttons" class="btn-group me-auto float-end" role="group">
                        <!-- login button -->
                        <button class="btn btn-outline-light" data-bs-target="#accountLoginModal" data-bs-toggle="modal"
                                type="button">
                            <svg class="bi bi-person me-1" fill="currentColor" height="16" viewBox="0 2 16 16"
                                 width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                            Login
                        </button>
                        <!-- account login or create modal which has form in it -->
                        <div aria-hidden="true" aria-labelledby="accountLoginModal" class="modal fade"
                             id="accountLoginModal"
                             tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <!-- modal header -->
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="accountLoginModalLabel">Account</h5>
                                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"
                                                type="button"></button>
                                    </div>
                                    <!-- modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h5>Login:</h5>
                                                    <!-- login form -->
                                                    <form class="needs-validation" novalidate>
                                                        <div class="mb-1">
                                                            <label class="form-label" for="emailLoginInput">Email
                                                                address</label>
                                                            <input class="form-control" id="emailLoginInput"
                                                                   required type="email">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                   for="passwordLoginInput">Password</label>
                                                            <input class="form-control" id="passwordLoginInput"
                                                                   required type="password">
                                                        </div>
                                                        <button class="btn btn-outline-primary w-100" type="submit">
                                                            Submit
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="col-6">
                                                    <h5>Create Account:</h5>
                                                    <!-- create account form. makes sure passwords match-->
                                                    <form class="row needs-validation"
                                                          novalidate
                                                          oninput='p.setCustomValidity(cp.value !== p.value ? "Passwords do not match." : "")'>
                                                        <div class="col-6">
                                                            <label class="form-label" for="fn">First Name</label>
                                                            <input class="form-control" id="fn" required type="text">
                                                        </div>
                                                        <div class="col-6">
                                                            <label class="form-label" for="ln">Last Name</label>
                                                            <input class="form-control" id="ln" required type="text">
                                                        </div>
                                                        <div class="col-12 mt-1">
                                                            <label class="form-label" for="exampleInputEmail1">Email
                                                                address</label>
                                                            <input class="form-control" id="exampleInputEmail1"
                                                                   required type="email">
                                                        </div>
                                                        <div class="col-12 mt-1">
                                                            <label class="form-label" for="exampleInputPassword1">Password</label>
                                                            <input class="form-control" id="exampleInputPassword1"
                                                                   name="p" required type="password">
                                                            <div class="invalid-feedback">
                                                                Provide matching passwords.
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-1 mb-3">
                                                            <label class="form-label" for="cp">Confirm Password</label>
                                                            <input class="form-control" id="cp" name="cp"
                                                                   required type="password">
                                                        </div>
                                                        <div class="col-12">
                                                            <button class="btn btn-outline-primary w-100" type="submit">
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
                        <button class="btn btn-outline-light" data-bs-target="#form" data-bs-toggle="modal"
                                type="button">
                            <svg class="bi bi-plus-lg me-1" fill="currentColor" height="16" viewBox="0 2 16 16"
                                 width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"
                                      fill-rule="evenodd"/>
                            </svg>
                            Add App
                        </button>
                        <!-- add app modal with form -->
                        <div aria-hidden="true" aria-labelledby="addAppModal" class="modal fade" id="form"
                             tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- modal header-->
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addAppModalLabel">Add Application</h5>
                                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"
                                                type="button"></button>
                                    </div>
                                    <!-- modal body-->
                                    <div class="modal-body">
                                        <form class="row g-3 needs-validation" novalidate>
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
                                                <textarea class="form-control" id="applicationDescription"
                                                          placeholder="Leave a comment here" required
                                                          style="height: 150px"></textarea>
                                                <label for="applicationDescription">Description</label>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="applicationImageInput">Upload Application
                                                    Image</label>
                                                <input class="form-control form-control-sm" id="applicationImageInput"
                                                       required
                                                       type="file">
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input" id="macCheckbox" type="checkbox"
                                                           value="option1">
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
                                                           value="option2">
                                                    <label class="form-check-label" for="windowsCheckbox">
                                                        <svg class="bi bi-windows me-2" fill="currentColor" height="20"
                                                             viewBox="0 2 16 16" width="16"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
                                                        </svg>
                                                        Windows</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label" for="applicationVersionInput">Version</label>
                                                <input class="form-control" id="applicationVersionInput"
                                                       placeholder="1.0.0"
                                                       required type="text">
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                                <small class="text-muted float-end mt-2">Request will be reviewed by
                                                    admin.</small>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- requests button -->
                        <button class="btn btn-outline-light rounded-end" data-bs-target="#requests"
                                data-bs-toggle="modal"
                                type="button">
                            <svg class="bi bi-files me-1" fill="currentColor" height="20" viewBox="0 2 16 16"
                                 width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
                            </svg>
                            Requests
                        </button>
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
                                        <ul class="list-group">
                                            <!-- list element -->
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <h5>Messenger</h5>
                                                        </div>
                                                        <div class="col-2">
                                                            <div aria-label="button Group" class="btn-group"
                                                                 role="group">
                                                                <button class="btn btn-outline-success py-1"
                                                                        type="button">
                                                                    <svg class="bi bi-check-lg" fill="currentColor"
                                                                         height="16" viewBox="0 1 16 16"
                                                                         width="16" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                                                    </svg>
                                                                </button>
                                                                <button class="btn btn-outline-danger py-1"
                                                                        type="button">
                                                                    <svg class="bi bi-trash" fill="currentColor"
                                                                         height="16" viewBox="0 0 16 16"
                                                                         width="16" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                                              fill-rule="evenodd"/>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 text-center">
                                                            <img alt="" class="shadow-lg" src="images/messenger.png"
                                                                 style="border-radius: 12%;"
                                                                 width="50%">
                                                        </div>
                                                        <div class="col-8">
                                                            <p>Below is an example form built entirely with Bootstrap’s
                                                                form controls. Each
                                                                required form group has a validation state that can be
                                                                triggered by attempting to submit the form
                                                                without completing it.</p>
                                                        </div>
                                                        <div class="col-5 text-center">
                                                            <p>Submitted by: Jaden Zaleski</p>
                                                        </div>
                                                        <div class="col-5 text-center">
                                                            <p>Developer name</p>
                                                        </div>
                                                        <div class="col-2 text-center">
                                                            <p>
                                                                <svg class="bi bi-apple" fill="currentColor"
                                                                     height="18" viewBox="0 1 16 16" width="16"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                                                </svg>
                                                                <svg class="bi bi-windows mx-2" fill="currentColor"
                                                                     height="18" viewBox="0 0 16 16"
                                                                     width="16" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
                                                                </svg>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <h5>Messenger</h5>
                                                        </div>
                                                        <div class="col-2">
                                                            <div aria-label="Basic example" class="btn-group"
                                                                 role="group">
                                                                <button class="btn btn-outline-success py-1"
                                                                        type="button">
                                                                    <svg class="bi bi-check-lg" fill="currentColor"
                                                                         height="16" viewBox="0 1 16 16"
                                                                         width="16" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                                                    </svg>
                                                                </button>
                                                                <button class="btn btn-outline-danger py-1"
                                                                        type="button">
                                                                    <svg class="bi bi-trash" fill="currentColor"
                                                                         height="16" viewBox="0 0 16 16"
                                                                         width="16" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                                              fill-rule="evenodd"/>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 text-center">
                                                            <img alt="" class="shadow-lg" src="images/messenger.png"
                                                                 style="border-radius: 12%;"
                                                                 width="50%">
                                                        </div>
                                                        <div class="col-8">
                                                            <p>Below is an example form built entirely with Bootstrap’s
                                                                form controls. Each
                                                                required form group has a validation state that can be
                                                                triggered by attempting to submit the form
                                                                without completing it.</p>
                                                        </div>
                                                        <div class="col-5 text-center">
                                                            <p>Submitted by: Jaden Zaleski</p>
                                                        </div>
                                                        <div class="col-5 text-center">
                                                            <p>Developer name</p>
                                                        </div>
                                                        <div class="col-2 text-center">
                                                            <p>
                                                                <svg class="bi bi-apple" fill="currentColor"
                                                                     height="18" viewBox="0 1 16 16" width="16"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                                                </svg>
                                                                <svg class="bi bi-windows mx-2" fill="currentColor"
                                                                     height="18" viewBox="0 0 16 16"
                                                                     width="16" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
                                                                </svg>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <h5>Messenger</h5>
                                                        </div>
                                                        <div class="col-2">
                                                            <div aria-label="Basic example" class="btn-group"
                                                                 role="group">
                                                                <button class="btn btn-outline-success py-1"
                                                                        type="button">
                                                                    <svg class="bi bi-check-lg" fill="currentColor"
                                                                         height="16" viewBox="0 1 16 16"
                                                                         width="16" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                                                    </svg>
                                                                </button>
                                                                <button class="btn btn-outline-danger py-1"
                                                                        type="button">
                                                                    <svg class="bi bi-trash" fill="currentColor"
                                                                         height="16" viewBox="0 0 16 16"
                                                                         width="16" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                                              fill-rule="evenodd"/>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 text-center">
                                                            <img alt="" class="shadow-lg" src="images/messenger.png"
                                                                 style="border-radius: 12%;"
                                                                 width="50%">
                                                        </div>
                                                        <div class="col-8">
                                                            <p>Below is an example form built entirely with Bootstrap’s
                                                                form controls. Each
                                                                required form group has a validation state that can be
                                                                triggered by attempting to submit the form
                                                                without completing it.</p>
                                                        </div>
                                                        <div class="col-5 text-center">
                                                            <p>Submitted by: Jaden Zaleski</p>
                                                        </div>
                                                        <div class="col-5 text-center">
                                                            <p>Developer name</p>
                                                        </div>
                                                        <div class="col-2 text-center">
                                                            <p>
                                                                <svg class="bi bi-apple" fill="currentColor"
                                                                     height="18" viewBox="0 1 16 16" width="16"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                                                </svg>
                                                                <svg class="bi bi-windows mx-2" fill="currentColor"
                                                                     height="18" viewBox="0 0 16 16"
                                                                     width="16" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
                                                                </svg>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <h5>Messenger</h5>
                                                        </div>
                                                        <div class="col-2">
                                                            <div aria-label="Basic example" class="btn-group"
                                                                 role="group">
                                                                <button class="btn btn-outline-success py-1"
                                                                        type="button">
                                                                    <svg class="bi bi-check-lg" fill="currentColor"
                                                                         height="16" viewBox="0 1 16 16"
                                                                         width="16" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                                                    </svg>
                                                                </button>
                                                                <button class="btn btn-outline-danger py-1"
                                                                        type="button">
                                                                    <svg class="bi bi-trash" fill="currentColor"
                                                                         height="16" viewBox="0 0 16 16"
                                                                         width="16" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                                              fill-rule="evenodd"/>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 text-center">
                                                            <img alt="" class="shadow-lg" src="images/messenger.png"
                                                                 style="border-radius: 12%;"
                                                                 width="50%">
                                                        </div>
                                                        <div class="col-8">
                                                            <p>Below is an example form built entirely with Bootstrap’s
                                                                form controls. Each
                                                                required form group has a validation state that can be
                                                                triggered by attempting to submit the form
                                                                without completing it.</p>
                                                        </div>
                                                        <div class="col-5 text-center">
                                                            <p>Submitted by: Jaden Zaleski</p>
                                                        </div>
                                                        <div class="col-5 text-center">
                                                            <p>Developer name</p>
                                                        </div>
                                                        <div class="col-2 text-center">
                                                            <p>
                                                                <svg class="bi bi-apple" fill="currentColor"
                                                                     height="18" viewBox="0 1 16 16" width="16"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                                                </svg>
                                                                <svg class="bi bi-windows mx-2" fill="currentColor"
                                                                     height="18" viewBox="0 0 16 16"
                                                                     width="16" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
                                                                </svg>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
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
    <div class="container col-xl-10 col-xxl-8 px-4 py-1 bg-light mb-5">
        <div class="row align-items-center g-lg-5 py-4 text-center">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Messenger</h1>
                <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each
                    required form group has a validation state that can be triggered by attempting to submit the form
                    without completing it.</p>
                <a class="btn btn-success my-2 mb-4" href="#">Download</a>
                <button class="btn btn-outline-secondary my-2 mb-4" data-bs-target="#messengerModalCard"
                        data-bs-toggle="modal">View
                </button>
            </div>
            <img alt="" class="col-md-10 mx-auto p-0 col-lg-5 shadow-lg" src="images/messenger.png"
                 style="border-radius: 12%;">

        </div>
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
                           href="#">
                            <svg class="bi bi-arrow-down-up me-1" fill="currentColor" height="16" viewBox="0 1 16 16"
                                 width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"
                                      fill-rule="evenodd"/>
                            </svg>
                            sort</a>
                        <!-- dropdown list -->
                        <ul aria-labelledby="sort" class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">A-Z</a></li>
                            <li><a class="dropdown-item" href="#">Date Added</a></li>
                        </ul>
                    </li>
                    <!-- filter dropdown -->
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                           href="#">
                            <svg class="bi bi-funnel me-1" fill="currentColor" height="16" viewBox="0 1 16 16"
                                 width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>
                            </svg>
                            filter</a>
                        <!-- dropdown list -->
                        <ul aria-labelledby="filter" class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">
                                <svg class="bi bi-apple me-2"
                                     fill="currentColor"
                                     height="24" viewBox="0 3 16 16"
                                     width="16"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                </svg>
                                Mac</a></li>
                            <li><a class="dropdown-item" href="#">
                                <svg class="bi bi-windows me-2" fill="currentColor" height="20"
                                     viewBox="0 2 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
                                </svg>
                                Windows</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- search bar -->
                <form class="my-2">
                    <input aria-label="Search" class="form-control" placeholder="Search" type="text">
                </form>
            </div>
        </div>
    </nav>
    <!-- album of apps -->
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <!-- beginning of app which will need to be repeated for each app-->
                <!-- app Messenger -->
                <div class="col">
                    <!-- card for app-->
                    <div class="card shadow-sm">
                        <!-- images must be 1024x1024 -->
                        <img alt="" class="card-img-top p-3" height="225" role="img" src="images/messenger.png"
                             style="object-fit: contain;" width="225">
                        <!-- card body -->
                        <div class="card-body">
                            <h2 class="card-title">Messenger</h2>
                            <p class="card-text"> Description of app. This is a wider card with supporting text below as
                                a natural lead-in to
                                additional content. This content is a little longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-success" type="button">
                                        <svg class="bi bi-download" fill="currentColor" height="16" viewBox="0 1 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                        </svg>
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary"
                                            data-bs-target="#messengerModalCard"
                                            data-bs-toggle="modal" type="button">
                                        <svg class="bi bi-info-lg" fill="currentColor" height="16" viewBox="0 1 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z"/>
                                        </svg>
                                    </button>
                                </div>
                                <small class="text-muted">Developer Name</small>
                            </div>
                        </div>
                    </div>
                    <!-- modal for card-->
                    <div aria-hidden="true" aria-labelledby="modalCard"
                         class="modal fade modal-dialog-scrollable" data-bs-backdrop="static" data-bs-keyboard="false"
                         id="messengerModalCard" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <!-- modal header-->
                                <div class="modal-header">
                                    <h5 class="modal-title">Messenger</h5>
                                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"
                                            type="button"></button>
                                </div>
                                <!-- modal body -->
                                <div class="modal-body p-4">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg">
                                                <img alt="..." class="mx-auto d-block shadow-lg w-25 "
                                                     src="images/messenger.png"
                                                     style="border-radius: 12%;">
                                                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do
                                                    eiusmod tempor incididunt
                                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud
                                                    exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                                    voluptate
                                                    velit esse cillum dolore eu fugiat nulla pariatur.
                                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                    officia
                                                    deserunt mollit anim id est laborum.</p>

                                                <span class="badge bg-secondary">Version: 1.0.1</span>
                                                <span class="badge bg-secondary"><svg class="bi bi-apple me-1"
                                                                                      fill="currentColor"
                                                                                      height="12" viewBox="0 0 16 16"
                                                                                      width="12"
                                                                                      xmlns="http://www.w3.org/2000/svg">
                                      <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                      <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                    </svg><svg class="bi bi-windows me-1" fill="currentColor" height="12"
                                               viewBox="0 0 16 16" width="12" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
                                    </svg></span>
                                                <small class="text-muted float-end my-1">Developer Name</small>
                                            </div>
                                            <div class="col-lg overflow-scroll" style="height: 22rem;">
                                                <h5 class="sticky-top bg-white">Comments:</h5>
                                                <ul class="list-group">
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        <button class="btn btn-outline-green w-100 me-auto text-primary"
                                                                data-bs-target="#messengerAddComment"
                                                                data-bs-toggle="modal"
                                                                type="button">
                                                            <svg class="bi bi-plus-circle me-1" fill="currentColor"
                                                                 height="26" viewBox="0 1 16 16"
                                                                 width="18" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                            </svg>
                                                            Add Comment
                                                        </button>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold">Jaden Zaleski</div>
                                                            <p class="ms-4">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit, sed do eiusmod tempor incididunt ut
                                                                labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut
                                                                aliquip ex ea commodo consequat. Duis aute irure dolor
                                                                in reprehenderit in voluptate velit esse cillum dolore
                                                                eu fugiat nulla pariatur.</p>

                                                        </div>
                                                        <span class="badge bg-white text-dark mt-1">14 days ago</span>
                                                        <button class="btn btn-outline-danger py-0 px-1" type="button">
                                                            <svg class="bi bi-trash m-0" fill="currentColor"
                                                                 height="20" viewBox="0 1 16 16" width="16"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                                      fill-rule="evenodd"/>
                                                            </svg>
                                                        </button>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold">Jaden Zaleski</div>
                                                            <p class="ms-4">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit, sed do eiusmod tempor incididunt ut
                                                                labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut
                                                                aliquip ex ea commodo consequat. Duis aute irure dolor
                                                                in reprehenderit in voluptate velit esse cillum dolore
                                                                eu fugiat nulla pariatur.</p>

                                                        </div>
                                                        <span class="badge bg-white text-dark mt-1">14 days ago</span>
                                                        <button class="btn btn-outline-danger py-0 px-1" type="button">
                                                            <svg class="bi bi-trash m-0" fill="currentColor"
                                                                 height="20" viewBox="0 1 16 16" width="16"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                                      fill-rule="evenodd"/>
                                                            </svg>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">
                                        <svg class="bi bi-x-lg me-1" fill="currentColor" height="16" viewBox="0 2 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"
                                                  fill-rule="evenodd"/>
                                            <path d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"
                                                  fill-rule="evenodd"/>
                                        </svg>
                                        Close
                                    </button>
                                    <button class="btn btn-success" type="button">
                                        <svg class="bi bi-download me-1" fill="currentColor" height="16"
                                             viewBox="0 2 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                        </svg>
                                        Download
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal for add comment for card -->
                    <div aria-hidden="true" aria-labelledby="addComment" class="modal fade"
                         tabindex="-1" id="messengerAddComment">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- modal header-->
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Comment</h5>
                                    <button class="btn-close" data-bs-target="#modalCard" data-bs-toggle="modal"
                                            type="button"></button>
                                </div>
                                <!-- modal body -->
                                <div class="modal-body">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="messengerComment"
                                                  placeholder="Leave a comment here" style="height: 200px"></textarea>
                                        <label for="messengerComment">Comment</label>
                                    </div>
                                </div>
                                <!-- modal footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-target="#messengerModalCard"
                                            data-bs-toggle="modal"
                                            type="button">Close
                                    </button>
                                    <button class="btn btn-primary" data-bs-target="#messengerModalCard"
                                            data-bs-toggle="modal"
                                            type="button">Post
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of 3 elements for app (card, info modal, add comment modal) and col -->
                <!-- app Instagram -->
                <div class="col">
                    <!-- card for app-->
                    <div class="card shadow-sm">
                        <!-- images must be 1024x1024 -->
                        <img alt="" class="card-img-top p-3" height="225" role="img" src="images/instagram.png"
                             style="object-fit: contain; border-radius: 12%;" width="225">
                        <!-- card body -->
                        <div class="card-body">
                            <h2 class="card-title">Instagram</h2>
                            <p class="card-text"> Description of app. This is a wider card with supporting text below as
                                a natural lead-in to
                                additional content. This content is a little longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-success" type="button">
                                        <svg class="bi bi-download" fill="currentColor" height="16" viewBox="0 1 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                        </svg>
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary"
                                            data-bs-target="#instagramModalCard"
                                            data-bs-toggle="modal" type="button">
                                        <svg class="bi bi-info-lg" fill="currentColor" height="16" viewBox="0 1 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z"/>
                                        </svg>
                                    </button>
                                </div>
                                <small class="text-muted">Developer Name</small>
                            </div>
                        </div>
                    </div>
                    <!-- modal for card-->
                    <div aria-hidden="true" aria-labelledby="modalCard"
                         class="modal fade modal-dialog-scrollable" data-bs-backdrop="static" data-bs-keyboard="false"
                         id="instagramModalCard" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <!-- modal header-->
                                <div class="modal-header">
                                    <h5 class="modal-title">Instagram</h5>
                                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"
                                            type="button"></button>
                                </div>
                                <!-- modal body -->
                                <div class="modal-body p-4">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg">
                                                <img alt="..." class="mx-auto d-block shadow-lg w-25 bg-white"
                                                     src="images/instagram.png"
                                                     style="border-radius: 12%;">
                                                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed
                                                    do
                                                    eiusmod tempor incididunt
                                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud
                                                    exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                                    voluptate
                                                    velit esse cillum dolore eu fugiat nulla pariatur.
                                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                    officia
                                                    deserunt mollit anim id est laborum.</p>

                                                <span class="badge bg-secondary">Version: 1.0.1</span>
                                                <span class="badge bg-secondary"><svg class="bi bi-apple me-1"
                                                                                      fill="currentColor"
                                                                                      height="12" viewBox="0 0 16 16"
                                                                                      width="12"
                                                                                      xmlns="http://www.w3.org/2000/svg">
                                      <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                      <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                    </svg><svg class="bi bi-windows me-1" fill="currentColor" height="12"
                                               viewBox="0 0 16 16" width="12" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
                                    </svg></span>
                                                <small class="text-muted float-end my-1">Developer Name</small>
                                            </div>
                                            <div class="col-lg overflow-scroll" style="height: 22rem;">
                                                <h5 class="sticky-top bg-white">Comments:</h5>
                                                <ul class="list-group">
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        <button class="btn btn-outline-green w-100 me-auto text-primary"
                                                                data-bs-target="#instagramAddComment"
                                                                data-bs-toggle="modal"
                                                                type="button">
                                                            <svg class="bi bi-plus-circle me-1" fill="currentColor"
                                                                 height="26" viewBox="0 1 16 16"
                                                                 width="18" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                            </svg>
                                                            Add Comment
                                                        </button>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold">Jaden Zaleski</div>
                                                            <p class="ms-4">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit, sed do eiusmod tempor incididunt ut
                                                                labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut
                                                                aliquip ex ea commodo consequat. Duis aute irure dolor
                                                                in reprehenderit in voluptate velit esse cillum dolore
                                                                eu fugiat nulla pariatur.</p>

                                                        </div>
                                                        <span class="badge bg-white text-dark mt-1">14 days ago</span>
                                                        <button class="btn btn-outline-danger py-0 px-1" type="button">
                                                            <svg class="bi bi-trash m-0" fill="currentColor"
                                                                 height="20" viewBox="0 1 16 16" width="16"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                                      fill-rule="evenodd"/>
                                                            </svg>
                                                        </button>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold">Jaden Zaleski</div>
                                                            <p class="ms-4">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit, sed do eiusmod tempor incididunt ut
                                                                labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut
                                                                aliquip ex ea commodo consequat. Duis aute irure dolor
                                                                in reprehenderit in voluptate velit esse cillum dolore
                                                                eu fugiat nulla pariatur.</p>

                                                        </div>
                                                        <span class="badge bg-white text-dark mt-1">14 days ago</span>
                                                        <button class="btn btn-outline-danger py-0 px-1" type="button">
                                                            <svg class="bi bi-trash m-0" fill="currentColor"
                                                                 height="20" viewBox="0 1 16 16" width="16"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                                      fill-rule="evenodd"/>
                                                            </svg>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">
                                        <svg class="bi bi-x-lg me-1" fill="currentColor" height="16" viewBox="0 2 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"
                                                  fill-rule="evenodd"/>
                                            <path d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"
                                                  fill-rule="evenodd"/>
                                        </svg>
                                        Close
                                    </button>
                                    <button class="btn btn-success" type="button">
                                        <svg class="bi bi-download me-1" fill="currentColor" height="16"
                                             viewBox="0 2 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                        </svg>
                                        Download
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal for add comment for card -->
                    <div aria-hidden="true" aria-labelledby="addComment" class="modal fade"
                         tabindex="-1" id="instagramAddComment">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- modal header-->
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Comment</h5>
                                    <button class="btn-close" data-bs-target="#modalCard" data-bs-toggle="modal"
                                            type="button"></button>
                                </div>
                                <!-- modal body -->
                                <div class="modal-body">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="instagramComment"
                                                  placeholder="Leave a comment here" style="height: 200px"></textarea>
                                        <label for="instagramComment">Comment</label>
                                    </div>
                                </div>
                                <!-- modal footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-target="#instagramModalCard"
                                            data-bs-toggle="modal"
                                            type="button">Close
                                    </button>
                                    <button class="btn btn-primary" data-bs-target="#instagramModalCard"
                                            data-bs-toggle="modal"
                                            type="button">Post
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of 3 elements for app (card, info modal, add comment modal) and col -->
                <!-- app Spotify -->
                <div class="col">
                    <!-- card for app-->
                    <div class="card shadow-sm">
                        <!-- images must be 1024x1024 -->
                        <img alt="" class="card-img-top p-3" height="225" role="img" src="images/spotify.png"
                             style="object-fit: contain; border-radius: 12%;" width="225">
                        <!-- card body -->
                        <div class="card-body">
                            <h2 class="card-title">Spotify</h2>
                            <p class="card-text"> Description of app. This is a wider card with supporting text below as
                                a natural lead-in to
                                additional content. This content is a little longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-success" type="button">
                                        <svg class="bi bi-download" fill="currentColor" height="16" viewBox="0 1 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                        </svg>
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary" data-bs-target="#spotifyModalCard"
                                            data-bs-toggle="modal" type="button">
                                        <svg class="bi bi-info-lg" fill="currentColor" height="16" viewBox="0 1 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z"/>
                                        </svg>
                                    </button>
                                </div>
                                <small class="text-muted">Developer Name</small>
                            </div>
                        </div>
                    </div>
                    <!-- modal for card-->
                    <div aria-hidden="true" aria-labelledby="modalCard"
                         class="modal fade modal-dialog-scrollable" data-bs-backdrop="static" data-bs-keyboard="false"
                         id="spotifyModalCard" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <!-- modal header-->
                                <div class="modal-header">
                                    <h5 class="modal-title">Spotify</h5>
                                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"
                                            type="button"></button>
                                </div>
                                <!-- modal body -->
                                <div class="modal-body p-4">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg">
                                                <img alt="..." class="mx-auto d-block shadow-lg w-25 bg-white"
                                                     src="images/spotify.png"
                                                     style="border-radius: 12%;">
                                                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed
                                                    do
                                                    eiusmod tempor incididunt
                                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud
                                                    exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                                    voluptate
                                                    velit esse cillum dolore eu fugiat nulla pariatur.
                                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                    officia
                                                    deserunt mollit anim id est laborum.</p>

                                                <span class="badge bg-secondary">Version: 1.0.1</span>
                                                <span class="badge bg-secondary"><svg class="bi bi-apple me-1"
                                                                                      fill="currentColor"
                                                                                      height="12" viewBox="0 0 16 16"
                                                                                      width="12"
                                                                                      xmlns="http://www.w3.org/2000/svg">
                                      <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                      <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                    </svg><svg class="bi bi-windows me-1" fill="currentColor" height="12"
                                               viewBox="0 0 16 16" width="12" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
                                    </svg></span>
                                                <small class="text-muted float-end my-1">Developer Name</small>
                                            </div>
                                            <div class="col-lg overflow-scroll" style="height: 22rem;">
                                                <h5 class="sticky-top bg-white">Comments:</h5>
                                                <ul class="list-group">
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        <button class="btn btn-outline-green w-100 me-auto text-primary"
                                                                data-bs-target="#spotifyAddComment"
                                                                data-bs-toggle="modal"
                                                                type="button">
                                                            <svg class="bi bi-plus-circle me-1" fill="currentColor"
                                                                 height="26" viewBox="0 1 16 16"
                                                                 width="18" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                            </svg>
                                                            Add Comment
                                                        </button>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold">Jaden Zaleski</div>
                                                            <p class="ms-4">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit, sed do eiusmod tempor incididunt ut
                                                                labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut
                                                                aliquip ex ea commodo consequat. Duis aute irure dolor
                                                                in reprehenderit in voluptate velit esse cillum dolore
                                                                eu fugiat nulla pariatur.</p>

                                                        </div>
                                                        <span class="badge bg-white text-dark mt-1">14 days ago</span>
                                                        <button class="btn btn-outline-danger py-0 px-1" type="button">
                                                            <svg class="bi bi-trash m-0" fill="currentColor"
                                                                 height="20" viewBox="0 1 16 16" width="16"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                                      fill-rule="evenodd"/>
                                                            </svg>
                                                        </button>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold">Jaden Zaleski</div>
                                                            <p class="ms-4">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit, sed do eiusmod tempor incididunt ut
                                                                labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut
                                                                aliquip ex ea commodo consequat. Duis aute irure dolor
                                                                in reprehenderit in voluptate velit esse cillum dolore
                                                                eu fugiat nulla pariatur.</p>

                                                        </div>
                                                        <span class="badge bg-white text-dark mt-1">14 days ago</span>
                                                        <button class="btn btn-outline-danger py-0 px-1" type="button">
                                                            <svg class="bi bi-trash m-0" fill="currentColor"
                                                                 height="20" viewBox="0 1 16 16" width="16"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                                      fill-rule="evenodd"/>
                                                            </svg>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">
                                        <svg class="bi bi-x-lg me-1" fill="currentColor" height="16" viewBox="0 2 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"
                                                  fill-rule="evenodd"/>
                                            <path d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"
                                                  fill-rule="evenodd"/>
                                        </svg>
                                        Close
                                    </button>
                                    <button class="btn btn-success" type="button">
                                        <svg class="bi bi-download me-1" fill="currentColor" height="16"
                                             viewBox="0 2 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                        </svg>
                                        Download
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal for add comment for card -->
                    <div aria-hidden="true" aria-labelledby="addComment" class="modal fade"
                         tabindex="-1" id="spotifyAddComment">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- modal header-->
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Comment</h5>
                                    <button class="btn-close" data-bs-target="#modalCard" data-bs-toggle="modal"
                                            type="button"></button>
                                </div>
                                <!-- modal body -->
                                <div class="modal-body">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="spotifyComment"
                                                  placeholder="Leave a comment here" style="height: 200px"></textarea>
                                        <label for="spotifyComment">Comment</label>
                                    </div>
                                </div>
                                <!-- modal footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-target="#spotifyModalCard"
                                            data-bs-toggle="modal"
                                            type="button">Close
                                    </button>
                                    <button class="btn btn-primary" data-bs-target="#spotifyModalCard"
                                            data-bs-toggle="modal"
                                            type="button">Post
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of 3 elements for app (card, info modal, add comment modal) and col -->
                <!-- app Facebook -->
                <div class="col">
                    <!-- card for app-->
                    <div class="card shadow-sm">
                        <!-- images must be 1024x1024 -->
                        <img alt="" class="card-img-top p-3" height="225" role="img" src="images/facebook.png"
                             style="object-fit: contain; border-radius: 12%;" width="225">
                        <!-- card body -->
                        <div class="card-body">
                            <h2 class="card-title">Facebook</h2>
                            <p class="card-text"> Description of app. This is a wider card with supporting text below as
                                a natural lead-in to
                                additional content. This content is a little longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-success" type="button">
                                        <svg class="bi bi-download" fill="currentColor" height="16" viewBox="0 1 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                        </svg>
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary" data-bs-target="#facebookModalCard"
                                            data-bs-toggle="modal" type="button">
                                        <svg class="bi bi-info-lg" fill="currentColor" height="16" viewBox="0 1 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z"/>
                                        </svg>
                                    </button>
                                </div>
                                <small class="text-muted">Developer Name</small>
                            </div>
                        </div>
                    </div>
                    <!-- modal for card-->
                    <div aria-hidden="true" aria-labelledby="modalCard"
                         class="modal fade modal-dialog-scrollable" data-bs-backdrop="static" data-bs-keyboard="false"
                         id="facebookModalCard" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <!-- modal header-->
                                <div class="modal-header">
                                    <h5 class="modal-title">Facebook</h5>
                                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"
                                            type="button"></button>
                                </div>
                                <!-- modal body -->
                                <div class="modal-body p-4">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg">
                                                <img alt="..." class="mx-auto d-block shadow-lg w-25 bg-white"
                                                     src="images/facebook.png"
                                                     style="border-radius: 12%;">
                                                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed
                                                    do
                                                    eiusmod tempor incididunt
                                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud
                                                    exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                                    voluptate
                                                    velit esse cillum dolore eu fugiat nulla pariatur.
                                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                    officia
                                                    deserunt mollit anim id est laborum.</p>

                                                <span class="badge bg-secondary">Version: 1.0.1</span>
                                                <span class="badge bg-secondary"><svg class="bi bi-apple me-1"
                                                                                      fill="currentColor"
                                                                                      height="12" viewBox="0 0 16 16"
                                                                                      width="12"
                                                                                      xmlns="http://www.w3.org/2000/svg">
                                      <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                      <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                    </svg><svg class="bi bi-windows me-1" fill="currentColor" height="12"
                                               viewBox="0 0 16 16" width="12" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
                                    </svg></span>
                                                <small class="text-muted float-end my-1">Developer Name</small>
                                            </div>
                                            <div class="col-lg overflow-scroll" style="height: 22rem;">
                                                <h5 class="sticky-top bg-white">Comments:</h5>
                                                <ul class="list-group">
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        <button class="btn btn-outline-green w-100 me-auto text-primary"
                                                                data-bs-target="#facebookAddComment"
                                                                data-bs-toggle="modal"
                                                                type="button">
                                                            <svg class="bi bi-plus-circle me-1" fill="currentColor"
                                                                 height="26" viewBox="0 1 16 16"
                                                                 width="18" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                            </svg>
                                                            Add Comment
                                                        </button>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold">Jaden Zaleski</div>
                                                            <p class="ms-4">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit, sed do eiusmod tempor incididunt ut
                                                                labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut
                                                                aliquip ex ea commodo consequat. Duis aute irure dolor
                                                                in reprehenderit in voluptate velit esse cillum dolore
                                                                eu fugiat nulla pariatur.</p>

                                                        </div>
                                                        <span class="badge bg-white text-dark mt-1">14 days ago</span>
                                                        <button class="btn btn-outline-danger py-0 px-1" type="button">
                                                            <svg class="bi bi-trash m-0" fill="currentColor"
                                                                 height="20" viewBox="0 1 16 16" width="16"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                                      fill-rule="evenodd"/>
                                                            </svg>
                                                        </button>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold">Jaden Zaleski</div>
                                                            <p class="ms-4">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit, sed do eiusmod tempor incididunt ut
                                                                labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut
                                                                aliquip ex ea commodo consequat. Duis aute irure dolor
                                                                in reprehenderit in voluptate velit esse cillum dolore
                                                                eu fugiat nulla pariatur.</p>

                                                        </div>
                                                        <span class="badge bg-white text-dark mt-1">14 days ago</span>
                                                        <button class="btn btn-outline-danger py-0 px-1" type="button">
                                                            <svg class="bi bi-trash m-0" fill="currentColor"
                                                                 height="20" viewBox="0 1 16 16" width="16"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                                      fill-rule="evenodd"/>
                                                            </svg>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">
                                        <svg class="bi bi-x-lg me-1" fill="currentColor" height="16" viewBox="0 2 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"
                                                  fill-rule="evenodd"/>
                                            <path d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"
                                                  fill-rule="evenodd"/>
                                        </svg>
                                        Close
                                    </button>
                                    <button class="btn btn-success" type="button">
                                        <svg class="bi bi-download me-1" fill="currentColor" height="16"
                                             viewBox="0 2 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                        </svg>
                                        Download
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal for add comment for card -->
                    <div aria-hidden="true" aria-labelledby="addComment" class="modal fade"
                         tabindex="-1" id="facebookAddComment">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- modal header-->
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Comment</h5>
                                    <button class="btn-close" data-bs-target="#modalCard" data-bs-toggle="modal"
                                            type="button"></button>
                                </div>
                                <!-- modal body -->
                                <div class="modal-body">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="facebookComment"
                                                  placeholder="Leave a comment here" style="height: 200px"></textarea>
                                        <label for="facebookComment">Comment</label>
                                    </div>
                                </div>
                                <!-- modal footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-target="#facebookModalCard"
                                            data-bs-toggle="modal"
                                            type="button">Close
                                    </button>
                                    <button class="btn btn-primary" data-bs-target="#facebookModalCard"
                                            data-bs-toggle="modal"
                                            type="button">Post
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of 3 elements for app (card, info modal, add comment modal) and col -->
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