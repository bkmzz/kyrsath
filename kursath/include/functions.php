<?php
    function get_users()
    {
        global $link;

        $sql = "SELECT * FROM users";

        $result = mysqli_query($link, $sql);

        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //echo '<pre>';
        //var_dump($result);
        //echo '</pre>';
        return $users;
    }

    function get_trades()
    {
        global $link;
        
        $sql = "SELECT * FROM donation";

        $result = mysqli_query($link, $sql);

        $trades = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $trades;
    }

    function get_price()
    {
        global $link;
        
        $sql = "SELECT * FROM cust";

        $result = mysqli_query($link, $sql);

        $trades = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $trades;
    }
?>