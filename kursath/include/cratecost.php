<?php
session_start();
    if (empty($_SESSION['Sumcrate'])){
        $_SESSION['Suctrate']=0;
    }
    
    function get_cost()
    {
        
    }

    function get_item($id){
        global $link;

        $query = "SELECT * FROM trades WHERE id=".$id;
        $req = mysqli_query($link, $query);
        $resp = mysqli_fetch_assoc($req);

        return $resp;
    }
?>