<?php 


class classCategorie{


	private $id;
	private $nom;
    private $description;

	 public function __construct($nom,$description)
    {
        $this->nom = $nom;
        $this->description = $description;
        
    }

 public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
 public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $nom
     */
    public function setDescription($description)
    {
        $this->description= $description;
    }
    
}




 ?>