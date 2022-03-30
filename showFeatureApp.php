<?php
include 'config.php';

$sql = "SELECT * FROM Data.apps ORDER BY RAND() LIMIT 1";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo '<div class="row align-items-center g-lg-5 py-4 text-center">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">' . $row["name"] . '</h1>
                <p class="col-lg-10 fs-4">' . $row["shortDescription"] . '</p>
                <a class="btn btn-success my-2 mb-4" href="#" onclick="window.location.href = \'' . $row['downloadLink'] . '\';">Download</a>
                <button class="btn btn-outline-secondary my-2 mb-4" data-bs-target="#' . $row["name"] . 'ModalCard"
                        data-bs-toggle="modal">View
                </button>
            </div>
            <img alt="" class="col-md-10 mx-auto p-0 col-lg-5 shadow-lg" src="' . $row["imgPath"] . '"
                 style="border-radius: 12%;">

        </div>';
}