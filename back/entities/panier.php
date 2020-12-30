<?php



class panier{




    private $id;
	private $id_offre;  
    private $nom;
    private $prenom;
    private $email;
    private $job;
    private $phone;
    private $address;


    
    



	function __construct($Id_offre,$Nom,$Prenom,$Email,$Job,$Phone,$Address){

		$this->id_offre=$Id_offre;
		$this->nom=$Nom;
		$this->prenom=$Prenom;
		$this->email=$Email;
		$this->job=$Job;
		$this->phone=$Phone;
		$this->address=$Address;
	

	}
	
	function getid(){
		return $this->id;
    }
    function getid_offre(){
		return $this->id_offre;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getemail(){
		return $this->email;
	}
	
	function getjob(){
		return $this->job;
    }
    function getphone(){
		return $this->phone;
    }
    function getaddress(){
		return $this->address;
	}
  

	

	function setid($Id){
		$this->id=$Id;
	}
	function setid_offre($id_offre){
		$this->id_offre=$id_offre;
	}
	function setnom($nom){
		$this->nom=$nom;
    }
	function setprenom($prenom){
		 $this->prenom=$prenom;
	}

    function setemail($email){
		$this->email=$email;
    }
    function setjob($job){
		$this->job=$job;
    }
    function setphone($phone){
		$this->phone=$phone;
    }
    function setaddress($address){
		$this->address=$address;
	}


  
	
}


?>