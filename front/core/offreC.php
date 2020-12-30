<?php 

include "C:/wamp64/www/Projet_web/front/entities/offre.php";
include "C:/wamp64/www/Projet_web/front/config.php";
include "C:/wamp64/www/Projet_web/front/core/panierC.php";
class offreC {


function ajouteroffre($offre){ 
		$sql="insert into offre (id,name,prix,duree,description) values (:id,:name,:prix,:duree,:description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$offre->getid();
		$name=$offre->getname();
		$description=$offre->getdescription();

        $prix=$offre->getprix();
		$duree=$offre->getduree();

		$req->bindValue(':id',$id);
		$req->bindValue(':name',$name);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':duree',$duree);
		$req->bindValue(':description',$description);	


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

function supprimeroffre($id){
		$sql="DELETE FROM offre  where id= :id";
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
/*
	function modifierpaiment($paiment,$id){
		$sql="UPDATE offre SET id=:idd, name=:name,description=description,prix=:prix, duree=duree
		WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$offre->getid();
		$name=$offre->getname();
		$description=$offre->getdescription();
        $prix=$offre->getprix();
        $duree=$offre->getduree();
	

      
       
		$datas = array(':idd'=>$idd,':id'=>$id,  ':name'=>$name, ':description'=> $description,':prix'=>$prix, ':duree'=>$duree);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);

		$req->bindValue(':name',$name);
		$req->bindValue(':description',$description);

		$req->bindValue(':prix',$prix);
		$req->bindValue(':duree',$duree);

	

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
*/

		function afficheroffre(){

		$sql="SElECT * From offre";
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
		$sql="SELECT * from offre where id=$id";
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