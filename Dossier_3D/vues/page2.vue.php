<?php function afficheClient($user,$password){
  //Connect a la bdd
  $mysqlPDO=ABIDAO::ConnectDb($user,$password);
  $sql2 = 'select login from abi_db';
  echo $sql2;?>
  <main>
    <h1> Liste des Clients: </h1>
    <p><?php echo $sql2; ?></p>
  </main>
<?php
} ?>
<!--

public static function ListeTypesFilms($user, $password){
 // connection BDD
 $mysqlPDO = VideoDAO::ConnectVideo($user, $password);

 // recupere liste types films depuis table TypeFilm
 $sql = 'select CODE_TYPE_FILM, LIB_TYPE_FILM from
 typefilm order by LIB_TYPE_FILM;';
 // echo $sql; // pour mise au point

 // PDO query : retourne un recordset
 $rs = $mysqlPDO->query($sql);
 //var_dump($rs) ; // pour test

 $data = array(); // init tableau vide
 // boucle lecture recordset
  foreach ($rs as $row) {
  //var_dump($row) ; // pour test
  $data[] = $row; // ajout ligne lue en fin de tableau
  }
  //var_dump($data) ; // pour -->
