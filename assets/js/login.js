$('#pass, #repass').on('keyup', () => {

    if ($('#pass').val() == $('#repass').val()) {
        $('#message').html('Igual').css('color', 'green');

    } else {
        $('#message').html('Não iguais').css('color', 'red');
    }
});


$('#email').on('keyup', () => {

    const reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/
    email = $('#email').val()

    if (email.match(reg)) {
        $('#messageemail').html('Email Válido').css('color', 'green');

    } else {
        $('#messageemail').html('Email Inválido').css('color', 'red');
    }
});


