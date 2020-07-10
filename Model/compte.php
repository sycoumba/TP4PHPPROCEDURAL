<?php
include_once("db.php");








// function addComptes($numero_compte, $cle_rib,$id_client, $id_responsable,$date_ouverture, $numero_agence)
// {
//   $conn = getConnection();
//   $sql="INSERT INTO comptes 
//         values(null, '$numero_compte', $cle_rib, $id_client,
//          $id_responsable,'$date_ouverture', $numero_agence
//   )";
//   $conn->exec($sql);
// }
// function addCompte_Courant($adresse_employeur, $nom_entreprise, $raison_social, $solde)
//     {
//     $id_compte = $conn->exec($sql)->lastInsertId();
//    $sql1="INSERT INTO Compte_Courant values(NULL, '$adresse_employeur', '$nom_entreprise', '$raison_social', 
//    '$solde',$id_compte)";
//    $conn = getConnection();
//    $conn->exec($sql1);
//   }
// function addCompte_Bloqué($date_deblocage, $solde, $id_compte)
//  {
//     $id_compte = $conn->exec($sql)->lastInsertId();
//    $sql2="INSERT INTO Compte_Bloqué values(NULL, '$date_deblocage', '$solde', $id_compte)";
//    $conn = getConnection();
//    $conn->exec($sql2);

//   }
   
//   function addCompte_Epargne($solde, $id_compte)
//   {
//     $id_compte= $conn->exec($sql)->lastInsertId();
//    $sql3="INSERT INTO Compte_Epargne values(NULL,$solde, $id_compte)";
//    $conn = getConnection();
//    return $conn->exec($sql3);
//  }
?>