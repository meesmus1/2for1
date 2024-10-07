function login(){
    const username=$('#email').val()
    const password=$('#password').val()
    

    // data opstyren naat backend (login.php in includes)
    $.ajax({
        url:'./includes/login.php',
        method:'POST',
        data:{
            username,
            password
        },
        dataType:'json',
        success: function(data){
            if (data['error']==true) {
                window.location.href = './home2.php';
            } else {
                alert('Er ging iets mis.')
            } 
        }
    })
}