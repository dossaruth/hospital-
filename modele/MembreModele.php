<?php

require 'DB.php';

class MembreModele extends DB{

  function inscription($donnees){
    $sql = "INSERT INTO membre VALUES(NULL, :log,:mdp, :nom, :mail, now())";

    $insert = $this->executerRequete($sql, [
      "log"    => $donnees->getPseudo(),
      "mdp"    => password_hash($donnees->getMdp(), PASSWORD_DEFAULT),
      "nom"    => $donnees->getNom(),
      "mail"   => $donnees->getEmail(),

    ] );

  }

  function connexion($data){
    $query = $this->executerRequete("SELECT * FROM membre WHERE email = ?", [$data["email"]]);

    if($query->rowCount() != 0){
      $membre = $query->fetch();
      if( password_verify($data['mdp'], $membre['mdp']) ){
        $_SESSION['membre'] = $membre;
      }

    }
  }

  function liste(){

    $liste = $this->executerRequete("SELECT * FROM membre");

    $tabMembre = [];

    while ($membre = $liste->fetch()) {
      $tabMembre[] = new Membre($membre);
    }
    return $tabMembre;
  }

  function delete($idMembre){
    $this->executerRequete("DELETE FROM membre WHERE pseudo = ?", array(
      $idMembre
    ));
  }

  function getMembre($idMembre){
    $info = $this->executerRequete("SELECT * FROM membre WHERE pseudo = ?", [
      $idMembre
    ]);
    return new Membre($info->fetch());
  }

  function update($membre){
    $res = $this->executerRequete("UPDATE membre SET
      pseudo   = :pseudo,
      nom      = :nom,
      mdp      = :mdp,
      email    = :mail,
      WHERE id = :id",
      [
        "pseudo"    => $membre->getPseudo(),
        "nom"       => $membre->getNom(),
        "mdp"       => $membre->getMdp(),
        "mail"      => $membre->getEmail(),
        "id"        => $membre->getId()
      ]);

  }

  function executerRequete($requete, $params = array()){
    $result = $this->connect()->prepare($requete);

    if( !empty($params) ){
      foreach ($params as $key => $value) {
        $params[$key] = htmlspecialchars($value);
      }
    }

    $result->execute($params);

    return $result;
  }

}

/*
 $tabMembre = [];
    $tabMembre[] = new Membre([
      "pseudo" => "ilci",
      "civilite" => "Femme",
      "prenom" => "toto",
      "nom" => "Tata",
      "email" => "rrr@fgfg.fr",
      "statut" => "admin",
      "dateEnregistrement" => "2020/12/08",
    ]);
    $tabMembre[] = new Membre([
      "pseudo" => "autre",
      "civilite" => "Homme",
      "prenom" => "Jacques",
      "nom" => "Tata",
      "email" => "rrr@fgfg.fr",
      "statut" => "admin",
      "dateEnregistrement" => "2020/12/08",
    ]);
    return $tabMembre;
*/
