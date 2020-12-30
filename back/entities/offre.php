<?php



class offre{




 private $id;
	private $name;  
    private $description;
    private $prix;
    private $duree;

	function __construct($Name,$Description,$Prix,$Duree){

		$this->name=$Name;
		$this->description=$Description;
		$this->prix=$Prix;
		$this->duree=$Duree;
	
		
		


	}
	
	function getid(){
		return $this->id;
	}
	function getname(){
		return $this->name;
	}
	function getdescription(){
		return $this->description;
	}
	function getprix(){
		return $this->prix;
	}
	
	
	function getduree(){
		return $this->duree;
	}
  

	

	function setid($Id){
		$this->id=$Id;
	}
	function setname($Name){
		$this->name=$Name;
	}
	function setdescription($description){
		$this->description=$description;
    }
	function setprix($prix){
		 $this->prix=$prix;
	}

    function setduree($duree){
		$this->duree=$duree;
	}


  
	
}


?>