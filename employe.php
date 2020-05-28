<?php

interface Travailleur
{
    public function travailler();
}

class Employe implements Travailleur
{
    public $nom;
    public $prenom;
    protected $age;

    public function __construct($nom, $prenom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->setAge($age);
    }

    public function travailler()
    {
        return 'Je suis un employé et je travaille';
    }

    public function setAge($age)
    {
        if(is_int($age) && $age > 18 && $age < 60){
            $this->age = $age;
        }else{
            throw new Exception('Mauvaise valeur');
        }
        
    }

    public function getAge()
    {
        return $this->age;
    }

    public function presentation () {
        var_dump("Salut, je m'appel $this->nom $this->prenom et j'ai $this->age ans");
    }
}

class Patron extends Employe
{
    public $voiture;

    public function __construct($nom, $prenom, $age, $voiture)
    {
        parent::__construct($nom, $prenom, $age);
        $this->voiture = $voiture;
    }

    public function presentation()
    {
        var_dump("Bonjour, je m'appel $this->nom $this->prenom et j'ai $this->age ans");
    }

    public function travailler()
    {
        return 'Je suis le patron et je travaille aussi';
    }

    public function rouler ()
    {
        var_dump("Bonjour, je roule avec ma voiture: $this->voiture");
    }
}

class Etudiant implements Travailleur
{
    public function travailler()
    {
        return "Je suis étudiant et je révise";
    }
}

$patron = new Patron("nicolas", "acard", 40, "chevrolet");
$etudiant = new Etudiant();
$employe = new Employe("thor", "asgard", 40);

faireTravailler($employe);
faireTravailler($etudiant);
faireTravailler($patron);

function faireTravailler(Travailleur $objet)
{
    var_dump("Travail en cours: {$objet->travailler()}");
}

