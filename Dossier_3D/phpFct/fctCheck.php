<?php
function checkForm()
{
    function cleanLabel(){
        document.getElementById("labelLoginRight").innerHTML = "";
    }

    document.getElementById("labelLoginRight").style.color = "red";

    if(form.login.value == "") {
        //  alert("Erreur: Le nom d'utilisateur ne peut pas être vide !");
        document.getElementById("labelLoginRight").innerHTML = "Erreur: Le nom d'utilisateur ne peut pas être vide !";
        setTimeout(cleanLabel, 3000);
        form.login.focus();
        return false;
    }
    re = /^\w+$/;
    if(!re.test(form.login.value)) {
        document.getElementById("labelLoginRight").innerHTML = ("Erreur: Le nom d'utilisateur doit contenir seulement des lettres, nombres et \"_\" !");
        setTimeout(cleanLabel, 3000);
        form.login.focus();
        return false;
    }

    if(form.Pwd.value != "" && form.Pwd.value == form.Pwd.value) {
        if(form.Pwd.value.length < 4) {
            document.getElementById("labelLoginRight").innerHTML = ("Erreur: Le mot de passe doit contenir au moins 4 caractères !");
            setTimeout(cleanLabel, 3000);
            form.Pwd.focus();
            return false;
        }
        if(form.Pwd.value == form.login.value) {
            document.getElementById("labelLoginRight").innerHTML = ("Erreur: Le mot de passe doit être différent du nom d'utilisateur !");
            setTimeout(cleanLabel, 3000);
            form.Pwd.focus();
            return false;
        }
        /*   re = /[0-9]/;*/
        /* if(!re.test(form.Pwd.value)) {
         alert("Erreur: Le mot de passe must co at least one number (0-9)!");
         form.pwd1.focus();
         return false;
         }
         re = /[a-z]/;
         if(!re.test(form.pwd1.value)) {
         alert("Error: password must contain at least one lowercase letter (a-z)!");
         form.pwd1.focus();
         return false;
         }
         re = /[A-Z]/;
         if(!re.test(form.pwd1.value)) {
         alert("Error: password must contain at least one uppercase letter (A-Z)!");
         form.pwd1.focus();
         return false;
         }*/
    } else {
        document.getElementById("labelLoginRight").innerHTML =("Erreur: Veuillez vérifier que vous avez entré et validé votre mot de passe !");
        setTimeout(cleanLabel, 3000);
        form.Pwd.focus();
        return false;
    }?>
    <?php
    $user=$_POST['login'];
    $password=$_POST['Pwd'];
    AbiDAO::UsersList($user,$password);
    ?>
    return true;
}
