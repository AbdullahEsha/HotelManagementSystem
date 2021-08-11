<?php
    require_once('../../../db/config.php');
    function get_all(){
        $conn = dbConnection();

        if(!$conn){
            echo "DB connection error";
        }

        $sql = "select * from package";
        $result = mysqli_query($conn, $sql);

        $packages = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($packages, $row);
        }
        
        return $packages;
    }

    function getData_byType($type){
        $conn = dbConnection();

        if(!$conn){
            echo "DB connection error";
        }

        $sql = "select * from package where type='$type'";
        $result = mysqli_query($conn, $sql);

        $packages = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($packages, $row);
        }
        
        return $packages;
    }

    function getData_byId($id){
        $conn = dbConnection();

        if(!$conn){
            echo "DB connection error";
        }

        $sql = "select * from package where id='$id'";
        $result = mysqli_query($conn, $sql);

        $package = (object)array();

		while($row = mysqli_fetch_assoc($result)){
            $package->name = $row['name'];
            $package->type = $row['type'];
            $package->facility = $row['facility'];
            $package->price = $row['price'];
            $package->available = $row['available'];
            $package->package_image = $row['package_image'];
        }
        
        return $package;
    }

    function removePackage($id){
        $conn = dbConnection();

        if(!$conn){
            echo "DB connection error";
        }
        $package = null;
        $sql = "delete from package where id='$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            return $result;
        }
        else{
            return mysqli_error($conn);
        }
        return $package;
    }

    function update($package){
        $conn = dbConnection();

        if(!$conn){
            echo "DB connection error";
        }

        $sql = "update package set name='$package->name', type='$package->type', facility='$package->facility', price='$package->price', available='$package->available' where id='$package->id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            return $result;
        }
        else{
            return mysqli_error($conn);
        }
    }

    function insert($object){
        $conn = dbConnection();

        if(!$conn){
            echo "DB connection error";
        }

        $sql = "insert into package  (id,name,type,facility,price,package_image,available) values('','$object->name','$object->type','$object->facility','$object->price','$object->pacakge_image','$object->available')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo $result;
        }
        else{
            echo mysqli_error($conn);
        }
        return $result;
    }
?>