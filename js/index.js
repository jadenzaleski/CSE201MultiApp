
/**
 * Main javascript file for all custom code.
 * For creating documentation use:
 * @link https://jsdoc.app/index.html
 */

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation');

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()
function searchFunc() {
    // Declare variables
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
/**
 * @name checkPassword
 * @description Check to see if passwords match.
 * @param {string} p - password.
 * @param {string} cp - confirm password.
 * @returns {boolean} - true if passwords match and false if not.
 */
function checkPassword(p, cp) {

    // If Not same return False.
    if (p.length < 8 || p !== cp) {
        alert("Passwords do not match or are less than 8 characters long.")
        return false;
    }

    // If same return True.
    else {
        return true;
    }
}

/**
 * @name showApps
 * @description shows all apps in default order with ajax.
 * @return void
 */
function showApps() {
    $.ajax({
        url: "showApps.php",
        method: "GET",
        data: {},
        success: function (data) {
            $('#album').html(data);
            // alert('ajax worked');

        },
        error: function (result) {
            alert('ajax show apps error: ' + result);
        }
    })
}

function showFeatureApp() {
    $.ajax({
        url: "showFeatureApp.php",
        method: "GET",
        data: {},
        success: function (data) {
            $('#feature').html(data);
            // alert('ajax worked');

        },
        error: function (result) {
            alert('ajax show feature app error: ' + result);
        }
    });
}

function addRequestedApp(id) {
    $('#reqApp_' + id).fadeOut(500, function () {
        $('#reqApp_' + id).remove();
    });
    // alert('added req app id:' + id.toString());
    $.ajax({
        url: "addRequestedApp.php",
        method: "POST",
        data: {id: id},
        success: function (data) {
            // alert('id: ' + id + ' data: ' + data);

        },
        error: function (result) {
            alert('add req app error: ' + result);
        }
    });

}

function removeRequestedApp(id) {
    $('#reqApp_' + id).fadeOut(500, function () {
        $('#reqApp_' + id).remove();
    });
    // alert('added req app id:' + id.toString());
    $.ajax({
        url: "removeRequestedApp.php",
        method: "POST",
        data: {id: id},
        success: function (data) {
            // alert('id: ' + id + ' data: ' + data);

        },
        error: function (result) {
            alert('remove req app error: ' + result);
        }
    });
}

function showComments(id, name) {
    // alert('fired comment adder: ' + id + " comment: " + text);
    // alert("fired")
    $.ajax({
        url: "showComments.php",
        method: "POST",
        data: {id: id, name: name},
        success: function (data) {
            $('#commentsList_' + id).html(data); // must append to add comment button
        },
        error: function (result) {
            alert('ajax show comments in app error: ' + result);
        }
    });
}

function addCommentForApp(id) {
    let text = $('#' + id + 'Comment').val();
    // alert('fired comment adder: ' + id + " comment: " + text);
    $.ajax({
        url: "addComment.php",
        method: "POST",
        data: {text: text, id: id},
        success: function (name) {
            alert('Comment posted!');
            showComments(id, name);
        },
        error: function (result) {
            alert('add comment error: ' + result);
        }
    });
}

function removeComment(appID, cID) {
    $('#commentLI_' + cID).fadeOut(500, function () {
        $('#commentLI_' + cID).remove();
    });
    // alert('added req app id:' + id.toString());
    $.ajax({
        url: "removeComment.php",
        method: "POST",
        data: {appID: appID, cID: cID},
        success: function (data) {
            // alert('id: ' + id + ' data: ' + data);

        },
        error: function (result) {
            alert('remove req app error: ' + result);
        }
    });
}

/**
 * To enable jquery for your editor do this:
 * -> Settings -> Languages & Frameworks -> JavaScript -> Libraries,
 * check jquery and click ok.
 *
 * Beginning of JQUERY
 */
$(document).ready(function () {

    showApps();
    showFeatureApp();

    $('#loginButton').click(function () {
        // alert('fired');
        const username = $('#usernameLoginInput').val();
        const password = $('#passwordLoginInput').val();
        if (username !== '' && password !== '') {
            $.ajax({
                url: "login.php",
                method: "POST",
                data: {username: username, password: password},
                success: function (data) {
                    // alert(data);
                    if (data === 'No') {
                        alert("The username or password is incorrect or does not exist.");
                    } else {
                        location.reload();
                        // alert("success");
                    }
                }
            });
        } else {
            $('#loginForm').addClass("was-validated");
        }
    });

    $('#logout').click(function () {
        const action = "logout";
        $.ajax({
            url: "login.php",
            method: "POST",
            data: {action: action},
            success: function () {
                location.reload();
            }
        });
    });

    $('#registrationSubmitButton').click(function () {
        const firstName = $('#fn').val();
        const lastName = $('#ln').val();
        const username = $('#registrationUsername').val();
        const password = $('#registrationPassword').val();
        const confirmPassword = $('#confirmRegistrationPassword').val();
        if (firstName !== '' && lastName !== '' && username !== '' && password !== '' && confirmPassword !== '') {
            if (checkPassword(password, confirmPassword)) {
                $.ajax({
                    url: "createAccount.php",
                    method: "POST",
                    data: {firstName: firstName, lastName: lastName, username: username, password: password, level: 0},
                    success: function (data) {
                        if (data === 'Yes') {
                            $('#accountCloseBtn').click();
                            $(':input','#createAccountForm')
                                .not(':button, :submit, :reset, :hidden')
                                .val('')
                                .prop('checked', false)
                                .prop('selected', false);
                            $('#addAppModalForm').removeClass('was-validation').addClass('needs-validation');
                            alert("Account created! You are now logged in.");
                        } else {
                            alert(data);
                        }
                    }
                });
            }
        } else {
            $('#createAccountForm').addClass("was-validated");
        }
    });

    $('#addAppSubmit').click(function () {
        let appName = $('#applicationNameInput').val();
        let devName = $('#devNameInput').val();
        let shortDescription = $('#shortApplicationDescription').val();
        let description = $('#applicationDescription').val();
        let version = $('#applicationVersionInput').val();
        let downloadLink = $('#DownloadLinkInput').val();
        let mac = $('#macCheckbox')[0].checked;
        let windows = $('#windowsCheckbox')[0].checked;
        let imageInput = $('#fileAjax')[0].files;

        if (imageInput.length > 0 && appName !== '' && devName !== '' && shortDescription !== '' && description !== '' && !isNaN(version) && downloadLink !== '' && (mac || windows)) {
            let myFile = document.getElementById('fileAjax');
            let files = myFile.files;
            let formData = new FormData();
            let file = files[0];
            let date = new Date().toLocaleString()
            date = date.replaceAll('/', '_');
            date = date.replaceAll(',', '');
            date = date.replaceAll(':', '_');
            date = date.replaceAll(' ', '_');
            let fileName = date + "_" + file.name;
            let boxes = [0, 0];

            if (mac)
                boxes[0] = 1;
            if (windows)
                boxes[1] = 1;

            $.ajax({
                url: "addApp.php",
                method: "POST",
                data: {
                    appName: appName,
                    devName: devName,
                    shortDescription: shortDescription,
                    description: description,
                    version: version,
                    mac: mac,
                    windows: windows,
                    downloadLink: downloadLink,
                    fileName: fileName,
                    boxes: boxes
                },
                success: function (data) {
                    if (data === 'Yes') {
                        $('#addAppCloseBtn').click();
                        $(':input','#addAppForm')
                            .not(':button, :submit, :reset, :hidden')
                            .val('')
                            .prop('checked', false)
                            .prop('selected', false);
                        $('#addAppModalForm').removeClass('was-validation').addClass('needs-validation');
                        alert("App submitted!");
                    } else {
                        alert(data);
                    }
                }
            });

            // Add the file to the AJAX request
            formData.append('fileAjax', file, fileName);
            // Set up the request
            var xhr = new XMLHttpRequest();
            // Open the connection
            xhr.open('POST', '/uploadImage.php', true);
            // Set up a handler for when the task for the request is complete
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // alert(xhr.response);
                    // alert('Upload complete!');
                } else {
                    alert('Upload error. Try again.');
                }
            };
            // Send the data.
            xhr.send(formData);

        } else {
            if (mac || windows) {
                $('#macCheckbox').removeAttr('required');
                $('#windowsCheckbox').removeAttr('required');
            }
            if (!mac && !windows) {
                $('#macCheckbox').attr('required');
                $('#windowsCheckbox').attr('required');
            }

            $('#addAppModalForm').addClass("was-validated");
        }
    });

    $('#atozdrop').click(function () {
        $.ajax({
            url: "aToz.php",
            method: "GET",
            data: {},
            success: function (data) {
                $('#album').html(data);
                // alert('ajax worked');

            },
            error: function (result) {
                alert('ajax showAtoZ apps error: ' + result);
            }
        })
    });

    $('#dateAd').click(function () {
        $.ajax({
            url: "dateAdd.php",
            method: "GET",
            data: {},
            success: function (data) {
                $('#album').html(data);
                // alert('ajax worked');

            },
            error: function (result) {
                alert('ajax show date added apps error: :( ' + result);
            }
        })
    });

    $('#macSort').click(function () {
        $.ajax({
            url: "macfilter.php",
            method: "GET",
            data: {},
            success: function (data) {
                $('#album').html(data);
                // alert('ajax worked');

            },
            error: function (result) {
                alert('ajax show apps error: :( ' + result);
            }
        })
    });

    $('#windsort').click(function () {
        $.ajax({
            url: "windfilt.php",
            method: "GET",
            data: {},
            success: function (data) {
                $('#album').html(data);
                // alert('ajax worked');

            },
            error: function (result) {
                alert('ajax show apps error: :( ' + result);
            }
        })
    });

    $('#searchBar').onchange(function () {
        let chars = $('#searchBar').val();
        $.ajax({
            url: "search.php",
            method: "GET",
            data: {chars: chars},
            success: function (data) {
                $('#album').html(data);
                // alert('ajax worked');

            },
            error: function (result) {
                alert('ajax show apps error: :( ' + result);
            }
        })
    });

    $('#requestsButton').click(function () {
        $.ajax({
            url: "showRequestedApps.php",
            method: "GET",
            data: {},
            success: function (data) {
                $('#listOfReqApps').html(data);
                // alert('ajax worked');

            },
            error: function (result) {
                alert('ajax show feature app error: ' + result);
            }
        });
    });
})
; // end of jquery
