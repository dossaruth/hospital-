<?php

class Membre{

 private $id;
 private $nom;
 private $email;
 private $pseudo;
 private $mdp;
 private $date_enregistrement;

 function __construct(array $data){

    foreach ($data as $key => $value) {
        $setter = 'set'.ucfirst($key);
        if( method_exists($this, $setter) ){
            $this->$setter($value);
        }
    }

  //  $this->setPrenom($data['prenom']);


    // $this->prenom = $prenom; // $this->setPrenom($prenom);
    // $this->nom = $nom;
    // $this->email = $mail;
    // $this->pseudo = $pseudo;
    // $this->mdp = $mdp;
    // $this->civilite = $c;
    // $this->statut = "user";
    // $this->date_enregistrement = date("Y-m-d H:i:s");
 }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $prenom
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp): void
    {
        $this->mdp = $mdp;
    }


    /**
     * @return mixed
     */
    public function getDateEnregistrement()
    {
        return $this->date_enregistrement;
    }

    /**
     * @param mixed $date_enregistrement
     */
    public function setDateEnregistrement($date_enregistrement): void
    {
        $this->date_enregistrement = $date_enregistrement;
    }



}
