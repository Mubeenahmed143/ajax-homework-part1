$(document).ready(function(){

    let form = $('#form');
    let name = $('#name');
    let email = $('#email');
    let pass = $('#pass');
    let register = $('#register');
    register.on('click', function(e){
        e.preventDefault();

        $.ajax({
            url : 'insert.php',
            method : 'POST',
            data : {
                name : name.val(),
                email: email.val(),
                pass : pass.val()
            },
            success : function(user){
                alert(user)
                form.trigger("reset");
            }
        })
    })

})