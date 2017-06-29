<!--  fichier créer et éditer par Mr ORION -->
<?php



function ContentDisplay()
{ require ('vues/maps.vue.php');
require("vues/ABIHead.view.php");
require("vues/title.view.php");
require("DAO/ABIDAO.php");

	useHead();
?>
    <script type="text/javascript">

        function xhrInit()
        {

//Cette fonction sera appelée lors du click sur le bouton OK
// elle sert à contrôler que l'identification est correcte
// on crée tout d'abord l'objet XMLHttpRequest

            var xhr = null;
            try {
                xhr = new XMLHttpRequest();
// tout navigateur moderne
            }
            catch (e) {
                xhr = null;
// Ajax non supporté
                return;
            }


//on utilise la méthode POST pour passer les paramètres
            xhr.open("GET", "content.vue.php?login" + login.value + "&Pwd" + Pwd.value, true);
            xhr.send(null);
//on définit l'appel de la fonction au retour serveur. Lorsque le serveur a terminé son traitement,
// c'est cette fonction qui sera exécutée. Elle va renvoyer un message d'erreur
            xhr.onreadystatechange = function()
            {
                if (xhr.readyState==4  && (xhr.status == 200 || xhr.status == 0))
                {
									xhr.open()
									return true;
                }
                else{
                    document.getElementById("labelLoginRight").style.color = "red";
                    document.getElementById('labelLoginRight').innerHTML = "Login ou mot de passe incorrect !";
                    return false;
                }

            } // on devrait aussi tester xhr.status == 200 soit réponse HTTP OK

        };



        function checkForm(form)
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
            }

            if(xhrInit()){return true;}else {
                setTimeout(cleanLabel, 3000);
                form.login.focus();
                return false;
            }
        }

        /*if(checkForm()){

        }*/

    </script>

  </head>

    <style media="screen">
      #map{border: 2px solid red; display: block;height: 300px;width: 400px;}
      .logBlock{border: 2px solid blue;height: 300px;width: 1520px; text-transform: rotate(45deg);}

      label{}
    </style>
  </head>
  <body>
  <?php
  	displayHeader();
  ?>

    <table>
      <tr>
        <td>
          <div class="DisplayPart"> <!-- Displaying maps and login input-->
            <div id="map"> <?php  MapsDisplay();  ?></div>
        </td>
        <td>
          <form class="logBlock" action="page2.php" method="get" style="" onsubmit="return checkForm(this)">
              <label for="login" style="margin-right: 100px;margin-top:60px;"> login</label> <input type="text" name="login" id="login" value="" ><br>
                <label for="Pwd" style="margin-right: 72px;"> Password</label> <input type="password" name="Pwd" id="Pwd" value="" ><br>
              <label for="login" id="labelLoginRight" style=""></label><br>
                <input type="submit" name="Valider" value="Valider"> <input type="reset" name="Annuler" value="Annuler"><br>
              </form>
          </div>
        </td>
      </tr>
      <tr>
        <td></td>
      </tr>

    </table>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI_XrYkNWsETxURkscpnP7sV5A15rpVOQ&callback=initMap" ></script>
  </body>
</html>

  <!--  <form ... onsubmit="return checkForm(this);">
        <p>Username: <input type="text" name="username"></p>
        <p>Password: <input type="password" name="pwd1"></p>
        <p>Confirm Password: <input type="password" name="pwd2"></p>
        <p><input type="submit"></p>
    </form>-->





<?php
}
 ?>
