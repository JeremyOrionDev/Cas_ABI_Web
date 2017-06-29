<!--  fichier créer et éditer par Mr ORION -->
<?php



function ContentDisplay()
{
require ('vues/maps.vue.php');

require("vues/ABIHead.view.php");
require("vues/title.view.php");

    displayHeader();

    useHead();

    ?>

    <script type="text/javascript">

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

            return true;
        }

    </script>






    </head>
    <body>



    <!-- <table>
        <tr>
            <td>
                <div class="DisplayPart">
                    <div id="map"> </div>
            </td>
            <td>
                <form class="logBlock" action="page2.php" method="post" style="" onsubmit="return checkForm(this)">
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

    </table> -->

    <section >
        <article id="map">
          <?php   MapsDisplay(); ?>
        </article >

        <article class="logBlock">
            <form  action="page2.php" method="post" style="" onsubmit="return checkForm(this)">
                <label for="login" style="margin-right: 100px;margin-top:60px;">login</label> <input type="text" name="login" id="login" value="" ><br>
                <label for="Pwd" style="margin-right: 72px;"> Password</label> <input type="password" name="Pwd" id="Pwd" value="" ><br>
                <label for="login" id="labelLoginRight" style=""></label><br>
                <div >
                  <input class="button" type="submit" name="Valider" value="Valider">
                  <input class="button" type="reset" name="Annuler" value="Annuler">
                </div>

            </form>
        </article>
    </section>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI_XrYkNWsETxURkscpnP7sV5A15rpVOQ&callback=initMap" ></script>
    </body>
    </html>







    <?php
}
?>
