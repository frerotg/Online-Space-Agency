<?php
 
    include('config.php');
    include('request.php');
    
    
    //-------------------- CONNEXION A LA DB (debut) --------------------//
    try
    {
       $cnx = new PDO(DSN,LOGIN,PASSW,$option);
    
        $cnx -> query('SET CHARACTER SET UTF8;
                    SET NAMES UTF8');
        
		//-------------------- DEBUT DE LA REQUETE PRINCIPAL --------------------//
		
        $req = $listUsers;
        $res = $cnx -> query($req);
        $users = $res -> fetchAll();
        
        $xml = simplexml_load_file('../xml/ressource.xml');
        $ressources =  new SimpleXMLElement('../xml/ressource.xml', NULL, TRUE);

        foreach($users AS $user){
        	$id_user = $user['id'];
        	
        	$req = $listBuildings;
            $res = $cnx -> prepare($req);
            $res -> bindParam(':id_user', $id_user);
            $res -> execute();
            $buildings = $res -> fetchAll();
            
            foreach($buildings AS $building){
            
            	if($building['id_building'] == 6){
        			$lvl_pierre = $building['level_building'];
        			$get_pierre = $ressources->xpath('../ressources/ressource[@name="pierre"]/get[@niveau=1]');
        		}
        		elseif($building['id_building'] == 7){
        			$lvl_metal = $building['level_building'];
        			$get_metal = $ressources->xpath('/ressources/ressource[@name="metal"]/get[@niveau='.$lvl_metal.']');
        		}
        		elseif($building['id_building'] == 8){
        			$lvl_oxygene = $building['level_building'];
        			$get_oxygene = $ressources->xpath('/ressources/ressource[@name="oxygene"]/get[@niveau='.$lvl_oxygene.']');
        		}
        		elseif($building['id_building'] == 9){
        			$lvl_carburant = $building['level_building'];
        			$get_carburant = $ressources->xpath('/ressources/ressource[@name="carburant"]/get[@niveau='.$lvl_carburant.']');
        		}
        		elseif($building['id_building'] == 16){
        			$lvl_argent = $building['level_building'];
        			$get_argent = $ressources->xpath('/ressources/ressource[@name="argent"]/get[@niveau='.$lvl_argent.']');
        		}
            }
            
            
            $req = $updateRessources;
            $res = $cnx -> prepare($req);
            $res -> bindParam(':id_user', $id_user);
            $res -> bindParam(':getpierre', $get_pierre[0]->value);
            $res -> bindParam(':getmetal', $get_metal[0]->value);
            $res -> bindParam(':getoxygene', $get_oxygene[0]->value);
            $res -> bindParam(':getcarburant', $get_carburant[0]->value);
            $res -> bindParam(':getargent', $get_argent[0]->value);
            $res -> execute();
        }
        
        //-------------------- FIN DE LA REQUETE PRINCIPAL --------------------//

        
    }
    catch(PDOException $e)
    {
        echo ($e->getMessage());
    }
    //-------------------- CONNEXION A LA DB (fin) --------------------//
    