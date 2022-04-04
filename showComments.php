<?php
session_start();
include 'config.php';
$sqlComment = "SELECT * FROM Comments.comments_" . $_POST['id'];
$resultComment = $connect->query($sqlComment);

if ($resultComment && $resultComment->num_rows > 0) {
    while ($rowComment = $resultComment->fetch_assoc()) {
        echo '
                            <li class="list-group-item d-flex justify-content-between align-items-start" id="commentLI_' . $rowComment['id'] . '">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">' . $rowComment["firstName"] . ' ' . $rowComment["lastName"] . '</div>
                                    <p class="ms-4 w-100 fw-light">' . $rowComment["comment"] . '</p>
            
                                </div>
                                <span class="badge bg-white text-dark mt-1">' . $rowComment["createdAt"] . '</span>
                                '; if (isset($_SESSION['level']) && ($_SESSION['level'] == '1' || $_SESSION['level'] == '2')) { echo '
                                <button class="btn btn-outline-danger py-0 px-1" type="button" onclick="removeComment('. $_POST['id'] .',' . $rowComment['id'] . ')">
                                    <svg class="bi bi-trash m-0" fill="currentColor"
                                         height="20" viewBox="0 1 16 16" width="16"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                              fill-rule="evenodd"/>
                                    </svg>
                                </button>
                                ';} echo '
                            </li>';
    }
}

mysqli_close($connect);