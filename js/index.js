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
            $('#loginForm').toggleClass("was-validated");
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
            $('#createAccountForm').toggleClass("was-validated");
        }
    });

    $('#addAppSubmit').click(function () {
        var appName = $('#applicationNameInput').val();
        var devName = $('#devNameInput').val();
        var shortdescrip = $('#shortApplicationDescription').val();
        var descrip = $('#applicationDescription').val();
        var version = $('#applicationVersionInput').val();
        var downloadLink = $('#downloadlink').val();
        var mac = $('#macCheckbox').val();
        var windows = $('#windowsCheckbox').val();
        var image = $('#applicationImageInput').val();
        if (appName !== '' && devName !== '' && shortdescrip !== '' && descrip !== '' && version !== '' && (mac === true || windows === true) && downloadlink !== '' && image !== null) {
            $.ajax({
                url: "addApp.php",
                method: "POST",
                data: {appName: appName, devName: devName, shortdescrip: shortdescrip, descrip: descrip, version: version, mac: mac, windows: windows, image: image downloadlink: downloadlink},
                success: function (data) {
                    if (data === 'Yes') {
                        $('#addAppModalForm').hide();
                        location.reload();
                        // alert("success");
                    } else {
                        alert(data);
                    }
                }
            });
        }  else {
            $('#createAccountForm').toggleClass("was-validated");
        }
    });

}); // end of jquery
