<?php
// DAO class - Renaud
class AbiDAO{
  //Function to connect to MySQL server
  public static function ConnectDb($user, $password) {
    $host = 'BIP11'; //server address
    $bdd = 'abi_db';

    try
    {
      $mysqlPDO = new PDO("mysql:host=$host;dbname=$bdd;charset=utf8", $user, $password, array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
      die('<h2>Erreur de connexion : </h2>' . $e->getMessage());
    }

    return $mysqlPDO;
  }

  //Disconnection function
  public static function DisconnectDb($mysqlPDO) {
    unset($mysqlPDO);
  }

  // //Function to retrieve all user/password pairs
  // public static function UsersList($user, $password) {
  //   $mysqlPDO=AbiDAO::ConnectDb($user, $password);
  //
  //   $sql='select * from mescouilles';
  //   $rs = $mysqlPDO ->query($sql);
  //   $data = array();
  //   foreach ($rs as $row) {
  //     $data[] = $row;
  //   }
  //   $rs->closeCursor();
  //   AbiDAO::DisconnectDb($mysqlPDO);
  //   return $data;
  // }
}
 ?>
