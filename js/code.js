function validaForm() {
    var email = document.getElementById('email').value;
    var pass = document.getElementById('pass').value;

    if (email=='' && pass=='') {
        //alert('Los dos campos estan vacios');
        document.getElementById("email").style.border = "thick solid #ff0000 ";
        document.getElementById("pass").style.border = "thick solid #ff0000 ";
        return false;
    }else{
        if (email=='') {
            //alert('El campo email esta vacio');
            document.getElementById("pass").style.border = "thick solid #f2f2f2 ";
            document.getElementById("email").style.border = "thick solid #ff0000 ";
            return false;
        }else{
            if (pass=='') {
                //alert('El campo password esta vacio');
                document.getElementById("email").style.border = "thick solid #f2f2f2 ";
                document.getElementById("pass").style.border = "thick solid #ff0000 ";
                return false;
            }  
        }
    }

    return true;
}