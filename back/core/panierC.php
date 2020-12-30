<?php 

include "C:/wamp64/www/Projet_web/front/entities/panier.php";

class panierC {


function ajouterpanier($panier){ 
		$sql="insert into panier (id_offre,nom,prenom,email,job,phone,address) values (:id_offre,:nom,:prenom,:email,:job,:phone,:address)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		

        $id_offre=$panier->getid_offre();
        $nom=$panier->getnom();
        $prenom=$panier->getprenom();
        $email=$panier->getemail();
        $job=$panier->getjob();
        $phone=$panier->getphone();
        $address=$panier->getaddress();

 
        $req->bindValue(':id_offre',$id_offre);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':job',$job);
		$req->bindValue(':phone',$phone);	
		$req->bindValue(':address',$address);	


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

function supprimerpanier($id){
		$sql="DELETE FROM panier  where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

		function afficherpanier(){

		$sql="SElECT * From panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    
    function recupereroffre($id){
		$sql="SELECT * from panier where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}

 ?>