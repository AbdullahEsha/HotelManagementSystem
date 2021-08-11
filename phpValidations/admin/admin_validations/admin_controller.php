<?php
    require_once("../../../services/admin/admin_service.php");
    require_once("../../../services/admin/employee_service.php");

    if(isset($_POST['getAll'])){
        $pagename = $_POST['getAll'];
        $applications = getAll_application();
        echo printData($applications,$pagename);
    }

    if(isset($_POST['app_id'])){
        $app_id = $_POST['app_id'];
        $applicationInfo = getApplicationById($app_id);
        $applicationObj = json_encode($applicationInfo);
        echo $applicationObj;
    }

    if(isset($_POST['update_id'])){
        $update_id = $_POST['update_id'];
        $applicant = getApplicationById($update_id);
        $empObj = (object)array();
        $empObj->name = $applicantObj->name;
        $empObj->email = $applicantObj->email;
        $empObj->role = $applicantObj->position;
        $empObj->salary = $applicantObj->expected_salary;
        $empObj->date = date('yyyy-mm-dd');
        $adEmp = insertEmp($empObj);
        if($adEmp){
            $rmvApp = deleteApplication($applicant->id);
            if($rmvApp){
                echo "1";
            }
            else{
                echo $rmvApp;
            }
        }
        else{
            echo $adEmp;
        }
    }

    if(isset($_POST['reject_id'])){
        $reject_id = $_POST['reject_id'];

        $reject_stat = rejectApplication($reject_id);

        if($reject_stat){
            echo 1;
        }
        else{
            echo $reject_stat;
        }
    }

    function printData($list,$pagename){
        $doc = "";
        $count = 1;
        if($pagename == "AdminHome"){
            foreach($list as $application){
                $doc .= "<tr>".
                            "<th class='dashData'>SL#$count</th>".
                            "<td class='dashData'>{$application['name']}</td>".
                            "<td class='dashData'>{$application['email']}</td>".
                            "<td class='dashData'>{$application['position']}</td>".
                        "</tr>";
                if($count == 3){
                    break;
                }
                $count++;
            }
        }
        else{
            foreach($list as $application){
                $doc .= "<tr>".
                            "<th>SL#$count</th>".
                            "<td>{$application['name']}</td>".
                            "<td>{$application['position']}</td>".
                            "<td>{$application['expected_salary']}</td>".
                            "<td>".
                                "<a href='../../../pages/admin/admin_layouts/updateNotification.php?option=view&id={$application['id']}' class='view_btn'>View</a>".
                                "<button class='delete_btn' onclick='rejectApplication({$application['id']})'>Reject</button>".
                            "</td>".
                        "</tr>";
                $count++;
            }
        }
        
        return $doc;
    }

?>