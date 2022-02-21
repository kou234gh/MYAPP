<!-- おれにはまだ早い2022年2月15日 -->

<?php
    try{
        $dbh = new PDO('mysql:host=localhost; dbname=delta', $user, $pass);    
        foreach($dbh->query('SELECT * from FOO') as $row) {
            print_r($row);    
        }    
        $dbh = null;
    } catch (PDOException $e) {    
        print "エラー!: " . $e->getMessage() . "<br/>";    
        die();
    }
?>