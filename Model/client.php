<?php
include_once ("db.php");

function addClient($adresse, $telephone, $email)
{
    $conn = getConnection(); 
    $sql = "INSERT INTO client values (null, '$adresse', '$telephone', '$email')";
    $conn->exec($sql);
    $id_client = $conn->lastInsertId();
    return $id_client;
}

function addClient_salarie($nom, $prenom, $profession, $salaire_actuel, $nom_entreprise,
 $adresse_entreprise, $identifiant_entreprise, $numero_CNI, $id_client)
{
    $conn = getConnection();
    // $id_client = addClient($adresse, $telephone, $email);
    $sql = "INSERT INTO client_salarie values (null, '$nom', '$prenom', '$profession', '$salaire_actuel', '$nom_entreprise',
    '$adresse_entreprise', '$identifiant_entreprise', '$numero_CNI', '$id_client')";
     $conn->exec($sql);

     if(exec($sql))
     {
         echo "données insérées";
     }
     else{
         echo "données non insérées";
     }
}

function addClient_non_salarie($nom, $prenom, $activite, $numero_CNI)
{
    $conn = getConnection();
    $id_client = addClient($adresse, $telephone, $email);
    $sql = "INSERT INTO client_non_salarie values(Null, $nom, $prenom, $activite, $numero_CNI,
     $id_client)";
     echo $sql;
    $conn->exec($sql);
}

function addClient_moral($nom_entreprise, $type_entreprise, $raison_social,
 $identifiant_entreprise, $adresse_entreprise)
{
    $conn = getConnection();
    $id_client = addClient($adresse, $telephone, $email);
    $sql =  "INSERT INTO client_moral values(Null,'$nom_entreprise','$type_entreprise', 
   '$raison_social','$identifiant_entreprise', '$adresse_entreprise', $id_client)";
    $conn->exec($sql);
}

?>

















 