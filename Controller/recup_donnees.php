<?php 
include_once "../Model/client.php";
include_once "../Model/compte.php";
// include "../Model/db.php";
// $adresse = $_POST["Adresse"];
// $telephone = $_POST["telephone"];
$valider = $_POST["valider"];
if(isset($valider)){
    //var_dump($_POST);
    $adresse = $_POST["Adresse"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $profession = $_POST["profession"];
    $salaire_actuel = $_POST["salaire_actuel"];
    $nom_entreprise = $_POST["nom_entreprise"];
   $adresse_entreprise = $_POST["adresse_entreprise"];
   $identifiant_entreprise = $_POST["identifiant_entreprise"];
   $numero_CNI = $_POST["numero_CNI"];
   $activite = $_POST["activite"];
   $type_entreprise = $_POST["type_entreprise"];
   $raison_social =$_POST["raison_social"];
   $id_client = 1;

//    echo $adresse, $telephone;
   
//    $sql = "INSERT INTO client_salarie(Null, '$nom', '$prenom', '$profession', $salaire_actuel, '$nom_entreprise',
//     '$adresse_entreprise', '$identifiant_entreprise', $numero_CNI, $id_client)";
//      //$requete=$db->prepare($sql);
//      $requete->execute($sql);

//      if(execute)
//      {
//          echo "données insérées";
//      }
//      else{
//          echo "données non insérées";
//      }

addClient($adresse, $telephone, $email);
$id_client = addClient($adresse, $telephone, $email);
// $id_client = 1;
    if($_POST['types_de_client']== "Client_salarie") 
    {
        addClient_salarie($nom, $prenom, $profession, $salaire_actuel, $nom_entreprise,
        $adresse_entreprise, $identifiant_entreprise, $numero_CNI, $id_client);

    }

}





















//  if(isset($_POST["valider"])){
//      //  var_dump($_POST);
//       $nom =  $_POST["nom"];
//       $prenom = $_POST["prenom"];
//       $cni = $_POST["cni"];
//       $matricule = $_POST["matricule"];
//       $sexe = $_POST["sexe"];
//       $adresse = $_POST["adresse"];
//       $email = $_POST["email"];
//       $telephone = $_POST["telephone"];
//       $activite_client = $_POST["activite_client"];
//       $profession = $_POST["profession"];
//       $nom_entreprise = $_POST["nom_entreprise"];
//       $adresse_entreprise = $_POST["adresse_entreprise"];
//       $type_entreprise = $_POST["type_entreprise"];
//       $activite_entreprise = $_POST["activite_entreprise"];
//       $raison_social = $_POST["raison_social"];
//       $types_de_comptes = $_POST["types_de_comptes"];
//       $numero_agence = $_POST["numero_agence"];
//       $numero_compte = $_POST["numero_compte"];
//       //$date = $_POST["date"];
//       $frais_ouverture= $_POST["frais_ouverture"];
//       $agios =$_POST["agios"];
//       $duree_blocage= $_POST["Duree_blocage"];
//       $cle_rib = $_POST["cle_rib"];
//       $adresse_employeur =$_POST["adresse_employeur"];
//       $id_client = 1;
//       //$solde =$_POST["solde"];
//       $solde = 500000;
//       $id_compte = 1;
//       $date_ouverture =["date_ouverture"];
//       $date_deblocage = ["date_deblocage"];
//       $id_responsable =1;

      

// if($_POST['types_de_client']=="client_salarie"){
     
//      addClient_salarie($prenom, $profession, $nom_entreprise, $adresse_entreprise, 
//      $nom, $cni, $telephone,$email, $matricule);
//      // echo "CSALARIE";
//      // var_dump($_POST);
// }


// if($_POST['types_de_client']=="client_non_salarie"){
     
//      addClient_non_salarie($prenom, $activite_client, $nom, $cni, $telephone, $email, $matricule);
//      // echo "CNOSALARIE";
//      // var_dump($_POST);
// }


// if($_POST['types_de_client']=="client_moral"){
     
//      addClient_moral($type_entreprise, $activite_entreprise, $nom_entreprise,$raison_social, $adresse_entreprise, 
//      $telephone, $email, $matricule);
 
// //   echo "Cmoral";
// //  var_dump($_POST);
// }

// addComptes($numero_compte, $cle_rib, $id_client, $id_responsable,'', $numero_agence);

// if($types_de_comptes=="Compte_Courant"){
//      addCompte_courant($adresse_employeur, $nom_entreprise, $raison_social, $id_compte, $solde);
// }
// if($types_de_comptes=="Compte_Bloqué"){
//      addCompte_Bloqué($date_deblocage, $solde, $id_compte);
// }
// if($types_de_comptes=="Compte_Epargne"){
//      addCompte_Epargne($solde, $id_compte);
// }


// //     echo "comptecourant";
// //     var_dump($_POST);
 
// }

 
?>