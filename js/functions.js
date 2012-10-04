function validar_login(form){
    if(form.username.value==""){
        alert("Debe indicar su nombre de usuario.");
        form.username.focus();
        return false;
    } else if(form.password.value==""){
        alert("Debe indicar su contraseña.");
        form.password.focus();
        return false;
    }
    return true;
}