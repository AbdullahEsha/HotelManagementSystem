<?php
    require_once("../../../services/admin/inventory_service.php");
    if(isset($_POST['getAllInv'])){
        $inv_list = get_allInventory();

        echo printData($inv_list);
    }

    if(isset($_POST['filter'])){
        $inv_list = getFilterData($_POST['filter']);

        echo printData($inv_list);
    }

    function printData($list){
        $doc = "";
        foreach($list as $item){
            $stat = "";
            if(empty($item['status'])){
                $stat = "Available";
            }
            else{
                $stat = $item['status'];
            }
            $doc .= "<tr>".
                        "<td>{$item['product']}</td>".
                        "<td>{$item['amount']}</td>".
                        "<td>{$item['price']}</td>".
                        "<td>$stat</td>".
                    "</tr>";
        }
        return $doc;
    }
?>