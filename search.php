<?php
include "config.php";
$txt = $_POST['chars'];
//$sql = "SELECT * FROM Data.apps WHERE name LIKE re% " . $_POST['chars'];
$sql = "SELECT * FROM Data.apps WHERE name= $txt ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        echo '                <!-- app ' . $row["name"] . ' -->
                <div class="col">
                    <!-- card for app-->
                    <div class="card shadow-sm">
                        <!-- images must be 1024x1024 -->
                        <img alt="" class="card-img-top p-3" height="225" role="img" src="' . $row["imgPath"] . '"
                             style="object-fit: contain;" width="225">
                        <!-- card body -->
                        <div class="card-body">
                            <h2 class="card-title">' . $row["name"] . '</h2>
                            <p class="card-text">' . $row["shortDescription"] . '</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-success" onclick="window.location.href = \'' . $row['downloadLink'] . '\';"  type="button">
                                        <svg class="bi bi-download" fill="currentColor" height="16" viewBox="0 1 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                        </svg>
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary"
                                            data-bs-target="#' . $row["name"] . 'ModalCard"
                                            data-bs-toggle="modal" type="button">
                                        <svg class="bi bi-info-lg" fill="currentColor" height="16" viewBox="0 1 16 16"
                                             width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z"/>
                                        </svg>
                                    </button>
                                </div>
                                <small class="text-muted">' . $row["devName"] . '</small>
                            </div>
                        </div>
                    </div>
                    <!-- modal for card-->
                    <div aria-hidden="true" aria-labelledby="modalCard"
                         class="modal fade modal-dialog-scrollable" data-bs-backdrop="static" data-bs-keyboard="false"
                         id="' . $row["name"] . 'ModalCard" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <!-- modal header-->
                                <div class="modal-header">
                                    <h5 class="modal-title">' . $row["name"] . '</h5>
                                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"
                                            type="button"></button>
                                </div>
                                <!-- modal body -->
                                <div class="modal-body p-4">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg">
                                                <img alt="..." class="mx-auto d-block shadow-lg w-25 "
                                                     src="' . $row["imgPath"] . '"
                                                     style="border-radius: 12%;">
                                                <p class="mt-2">' . $row["description"] . '</p>

                                                <span class="badge bg-secondary">Version: ' . $row["version"] . '</span>
                                               ';
        if ($row["apple"] || $row["windows"]) {
            echo '
                                                <span class="badge bg-secondary"> ';
        }
        if ($row["apple"] && $row["windows"]) {
            echo '<svg class="bi bi-apple me-1" fill="currentColor"
                                                                     height="12" viewBox="0 0 16 16" width="12"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                                                </svg>
                                                                <svg class="bi bi-windows me-1" fill="currentColor"
                                                                     height="12" viewBox="0 0 16 16"
                                                                     width="12" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
                                                                </svg>';
        } else {
            if ($row["apple"]) {
                echo '<svg class="bi bi-apple"
                                                                                      fill="currentColor"
                                                                                      height="12" viewBox="0 0 16 16"
                                                                                      width="12"
                                                                                      xmlns="http://www.w3.org/2000/svg">
                                      <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                      <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                                    </svg> ';
            }
            if ($row["windows"]) {
                echo '
                                    <svg class="bi bi-windows" fill="currentColor" height="12"
                                               viewBox="0 0 16 16" width="12" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
                                    </svg> ';
            }
        }
        if ($row["apple"] || $row["windows"]) {
            echo '</span>';
        }
        echo '
                                                <small class="text-muted float-end my-1">' . $row["devName"] . '</small>
                                            </div>
                                            <div class="col-lg overflow-scroll" style="height: 22rem;">
                                                <h5 class="sticky-top bg-white">Comments:</h5>
                                                <ul class="list-group">
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        <button class="btn btn-outline-green w-100 me-auto text-primary"
                                                                data-bs-target="#' . $row["name"] . 'AddComment"
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
                                                    <!-- add more comments here -->
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
                                    <button class="btn btn-success" type="button" onclick="window.location.href = \'' . $row['downloadLink'] . '\';">
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
                         tabindex="-1" id="' . $row["name"] . 'AddComment">
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
                                        <textarea class="form-control" id="' . $row["name"] . 'Comment"
                                                  placeholder="Leave a comment here" style="height: 200px"></textarea>
                                        <label for="' . $row["name"] . 'Comment">Comment</label>
                                    </div>
                                </div>
                                <!-- modal footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-target="#' . $row["name"] . 'ModalCard"
                                            data-bs-toggle="modal"
                                            type="button">Close
                                    </button>
                                    <button class="btn btn-primary" data-bs-target="#' . $row["name"] . 'ModalCard"
                                            data-bs-toggle="modal"
                                            type="button">Post
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        ';
    }
}

mysqli_close($connect);

