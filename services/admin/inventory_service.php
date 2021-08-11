<?php
    require_once("../../../db/config.php");

    function get_allInventory(){
        $con = dbConnection();

        if(!$con){
            return "DB NOT CONNECTED";
        }

        $sql = "select * from inventory";
        $res_list = mysqli_query($con,$sql);
        
        $invList = [];
        while($row = mysqli_fetch_assoc($res_list)){
            array_push($invList,$row);
        }

        return $invList;
    }

    function getFilterData($filter){
        $con = dbConnection();

        if(!$con){
            return "DB NOT CONNECTED";
        }

        $sql = "select * from inventory where status='$filter'";
        $res_list = mysqli_query($con,$sql);
        
        $invList = [];
        while($row = mysqli_fetch_assoc($res_list)){
            array_push($invList,$row);
        }

        return $invList;
    }
?>