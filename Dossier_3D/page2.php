<?php
require('vues/ABIHead.view.php');
require('vues/page2.vue.php');
require('vues/title.view.php');
require('DAO/ABIDAO.php');

useHead();
 ?>
  </head>
  <body>
    <?php displayHeader();
    $user=$_POST['login'];
    $password=$_POST['Pwd'];
    $data = array() ;
    $data = AbiDAO::UsersList($user, $password);
    ?>
    <p>COUCOUUUU <?php foreach ($data as  $row) {
      echo $row['fgh'] ;?><br><?php
    };?></p>
  </body>
</html>


<!-- $mysqlPDO = VideoDAO::ConnectVideo($user, $password);

// recupere liste types films depuis table TypeFilm
$sql = 'select CODE_TYPE_FILM, LIB_TYPE_FILM from
typefilm order by LIB_TYPE_FILM;';
// echo $sql; // pour mise au point

// PDO query : retourne un recordset
$rs = $mysqlPDO->query($sql);
//var_dump($rs) ; // pour test -->
