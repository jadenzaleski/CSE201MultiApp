<?php
include "config.php";

$sql = "SELECT * FROM Data.requestedApps";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<!-- list element -->
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
                                                            <h6 class="mb-0">Short Description:</h6>
                                                            <p>SHORT - Below is an example form built entirely with
                                                                Bootstrap’s
                                                                form controls. Each
                                                                required form group has a validation state that can be
                                                                triggered by attempting to submit the form
                                                                without completing it.</p>
                                                        </div>
                                                        <div class="col-12 mt-1">
                                                            <h6 class="mb-0">Description:</h6>
                                                            <p> MAIN - Below is an example form built entirely with
                                                                Bootstrap’s
                                                                form controls. Each
                                                                required form group has a validation state that can be
                                                                triggered by attempting to submit the form
                                                                without completing it.</p>
                                                        </div>
                                                        <div class="col-5 text-center">
                                                            <p>Submitted by: Jaden Zaleski</p>
                                                        </div>
                                                        <div class="col-3 text-center">
                                                            <p>Developer name</p>
                                                        </div>
                                                        <div class="col-2 text-center">
                                                            <p>ID: 45</p>
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
                                            </li>';
    }
}
