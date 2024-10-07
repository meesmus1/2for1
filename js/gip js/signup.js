function registreer() {
    const voornaam =$('#voornaam').val()
    const achternaam =$('#achternaam').val()
    const gebruikersnaam =$('#gebruikersnaam').val()
    const emailadres =$('#emailadres').val()
    const wachtwoord1 =$('#wachtwoord1').val()
    const wachtwoord2 =$('#wachtwoord2').val()

    if (!voornaam || !achternaam || !gebruikersnaam || !emailadres || !wachtwoord1 || !wachtwoord2) {
        // $('#eroormessage').css({'display':'none'})
            $('#errormessage').css({'display':'block'})
            $('#errormessage').html('Niet alle velden zijn ingevuld.')

        
    }else if (wachtwoord1 != wachtwoord2) {
            $('#errormessage').css({'display':'block'})
            $('#errormessage').html('Wachtwoorden komen niet overeen.')

    }else{
        $.ajax({
            url:'./includes/signup.php',
            method:'POST',
            data:{
                voornaam,
                achternaam,
                gebruikersnaam,
                emailadres,
                'wachtwoord': wachtwoord1
            },
            datatype:'json',
            success: function(){
                console.log('yay')
            }
            
        })
    }


    
}