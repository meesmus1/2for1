function login() {
    const email = $('#email').val()
    const password = $('#password').val()

    console.log(email)
    console.log(password)



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
            alert('con werkt')
            console.log(data)
            if (data['error'] == true) {
                alert('het werkt')
                window.location.href = './index.html';
            } else {
                alert('Er ging iets mis.')
            }
        }
    })
}