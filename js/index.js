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
    })
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
                        $('#accountModal').hide();
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
                            $('#accountModal').hide();
                            location.reload();
                            // alert("success");
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
        let image = $('#applicationImageInput').val();

        if (appName !== '' && devName !== '' && shortDescription !== '' && description !== '' && !isNaN(version) && downloadLink !== '' && (mac || windows)) {
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
                    image: image,
                    downloadLink: downloadLink
                },
                success: function (data) {
                    if (data === 'Yes') {
                        $('#addAppModalForm').hide();
                        location.reload();
                        alert("App submitted!");
                    } else {
                        alert(data);
                    }
                }
            });
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
                alert('ajax show apps error: ' + result);
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
                alert('ajax show apps error: :( ' + result);
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
})
; // end of jquery
