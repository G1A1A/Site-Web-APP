<!DOCTYPE html>
    <?php
        try 
            {
                $bdd = new PDO ("mysql:host=localhost ; dbname=home_switch_home","root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } 
        catch (Exception $ex) 
            {
                die ('Erreur:'.$ex ->getMessage());
            }
    ?>

    <?php /*Get the house description*/
        $askdesc = $bdd->query('SELECT description FROM house WHERE id=:idhouse');
            $askdesc->execute(array('idhouse' => $_GET['id']));    
        $askdesc->closeCursor();
    ?>

    <?php /*Get the date for the ads*/
        $idhouse= $_GET['id'];
        $askdatebegin = $bdd->query('SELECT A.date_begin FROM ad A,house H WHERE H.id = A.id_house AND id=:idhouse');
            $askdatebegin->execute(array('idhouse' => $idhouse));
        $askdateend = $bdd->query('SELECT A.date_end FROM ad A,house H WHERE H.id = A.id_house AND id=:idhouse');
            $askdateend->execute(array('idhouse' => $idhouse));
        $askdatebegin->closeCursor();
        $askdateend->closeCursor();
    ?>