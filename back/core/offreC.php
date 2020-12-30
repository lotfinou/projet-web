<<?php 

include "C:/wamp64/www/Projet_web/back/entities/offre.php";
include "C:/wamp64/www/Projet_web/back/config.php";
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

	function modifieroffre($offre,$id){
		$sql="UPDATE offre SET name=:name, description=:description , prix=:prix, duree=:duree
		WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$name=$offre->getname();
		$description=$offre->getdescription();
        $prix=$offre->getprix();
        $duree=$offre->getduree();
	

      
       
		$datas = array(':id'=>$id,  ':name'=>$name, ':description'=> $description,':prix'=>$prix, ':duree'=>$duree);

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
	function rechercheroffre($HI){
		$sql="SELECT * from offre where id LIKE '%$HI%' or name LIKE '%$HI%' ";
		$db = config::getConnexion();
		try{
		    $sth = $db->prepare($sql);
			$sth->execute();
			$liste = $sth->fetchAll();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}

 ?>