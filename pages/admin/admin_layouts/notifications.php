<?php
    session_start();
    if(isset($_SESSION['username'])){
        $name = $_SESSION['username'];
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="../../../assets/js/join_applicationScript.js" type="text/javaScript"></script>
    
    <link rel="stylesheet" href="../../../assets/css/adminHome.css">
    <link rel="stylesheet" href="../../../assets/css/employeeList.css">
    <link rel="stylesheet" href="../../../assets/css/join_requestStyle.css">
    <link rel="stylesheet" href="../../../assets/css/profileDetails.css">
    <link rel="stylesheet" href="../../../assets/css/leftMenu_style.css">

    <script src="../../../assets/js/admin/dashboard_script.js" ></script>
    <script src="../../../assets/js/admin/joinApp_script.js" ></script>

    <title>Join Application</title>
</head>
<body onload="getAllApplication('notifications')">
    <div class="left-sidebar">
        <div class="dashboard_controller">
            <?php
                include "../include/left_menu.php";
            ?>
        </div>
        <div class="scrollable-area">
            <div class="content-area scrollbar title-header-main">
                <div class="header-row title-header">
                    <div class="textarea">
                        <h4>Join Applications</h4>
                        <p>All Applications are shown bellow.</p>
                    </div>
                    <div class="content-holder">
                        <div class="search-area">
                            <form action="" method="POST" class="form_search">
                                <p>Search By : </p>
                                <select name="searchBy" id="searchBy" class="searchBox">
                                    <option value="#"></option>
                                    <option value="Customer">Customer</option>
                                    <option value="Employee">Employee</option>
                                    <option value="Food Item">Food Item</option>
                                </select>
                                <div class="search">
                                    <input type="search" name="search_box" id="search_box" class="searchBox" onkeyup="search_data()"  onblur="hide()" onreset="hide()">
                                    <input type="submit" value="Search" id="" class="btn_search btn" onclick="showSearchData()">
                                    <div class="search_result" id="search_result">

                                    </div>
                                </div>
                            </form>
                        </div>
                        <span class="border-span"></span>
                        <div class="profile-settings dropdown">
                            <a class="dropbtn" href="#" id="dropMenu" onclick="dropMenuAction()"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php 
                                if(isset($name)){
                                    echo $name;
                                }   
                            ?>
                            </a>
                            <div class="dropdown-content" id="dropContent" aria-labelledby="navbarDropdown">
                                <?php
                                    include "../include/profile_settings.php"
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter_area">
                    <form action="" method="POST" class="filter-form">
                        <div class="form-group filter">
                            <label for="filter" class="title lbl">Filter Employee's : </label>
                            <select name="user_type" class="filter_select" id="filterData" onchange="filterRequest()">
                                <option value="#">Select</option>
                                <option value="Manager">Managers</option>
                                <option value="Chef">Chef's</option>
                                <option value="Staff">Staffs</option>
                            </select>
                        </div>
                        <div class="form-group lbl">
                            <input type="reset" value="Reset" name="reset" class="btn btn-info">
                        </div>
                    </form>
                </div>
                <div class="table_area">
                    <h4>Joining Applications</h4>
                    <table class="table_details table_join">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="">Application No</th>
                                <th scope="">Applicant Name</th>
                                <th scope="">Selected Post</th>
                                <th scope="">Expected Salary</th>
                                <th scope="">Action</th>
                            </tr>
                        </thead>
                        <tbody id="applicationBody">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
<?php
    }
    else{
        header('location: ../../../common_pages/login.php');
    }
?>