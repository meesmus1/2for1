function login() {
    const email = $('#email').val()
    const password = $('#password').val()

    // data opstyren naat backend (login.php in includes)
    $.ajax({
        url: './include/includes_gip/login_includes.php',
        method: 'POST',
        data: {
            email,
            password
        },
        dataType: 'json',
        success: function (data) {
            if (data['error'] == true) {
                window.location.href = './index.php';
            } else {
                alert('Er ging iets mis.')
            }
        }
    })
}