<?php
/**
 * Created by PhpStorm.
 * User: CDI14
 * Date: 27/06/2017
 * Time: 09:17
 */

<script type="text/javascript">

  function checkForm(form)
  {
      if(form.login.value == "") {
          alert("Erreur: Le nom d'utilisateur ne peut pas être vide !");
          form.login.focus();
          return false;
      }
      re = /^\w+$/;
    if(!re.test(form.login.value)) {
        alert("Erreur: Le nom d'utilisateur doit contenir seulement des lettres, nombres et \"_\" !");
        form.username.focus();
        return false;
    }

    if(form.Pwd.value != "" && form.Pwd.value == form.Pwd.value) {
        if(form.Pwd.value.length < 4) {
            alert("Erreur: Le mot de passe doit contenir au moins 4 caractères !");
            form.Pwd.focus();
            return false;
        }
        if(form.Pwd.value == form.login.value) {
            alert("Erreur: Le mot de passe doit être différent du nom d'utilisateur !");
            form.pwd1.focus();
            return false;
        }
        re = /[0-9]/;
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
        alert("Erreur: Veuillez vérifier que vous avez entré et validé votre mot de passe !");
        form.Pwd.focus();
        return false;
    }

    alert("You entered a valid password: " + form.pwd1.value);
    return true;
  }

</script>

<form ... onsubmit="return checkForm(this);">
<p>Username: <input type="text" name="username"></p>
<p>Password: <input type="password" name="pwd1"></p>
<p>Confirm Password: <input type="password" name="pwd2"></p>
<p><input type="submit"></p>
</form>