<?php

    $listUsers = 'SELECT * FROM users';
    $listBuildings = 'SELECT * FROM user_building WHERE id_user = :id_user';
    
    $updateRessources = 'UPDATE users SET pierre = pierre + :getpierre, metal = metal + :getmetal, oxygene = oxygene + :getoxygene, carburant = carburant + :getcarburant, argent = argent + :getargent WHERE id= :id_user';