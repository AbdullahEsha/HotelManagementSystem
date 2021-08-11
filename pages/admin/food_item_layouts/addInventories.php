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

    <link rel="stylesheet" href="../../../assets/css/adminHome.css">
    <link rel="stylesheet" href="../../../assets/css/bookRooms_style.css">
    <link rel="stylesheet" href="../../../assets/css/leftMenu_style.css">
    <link rel="stylesheet" href="../../../assets/css/employeeList.css">
    <link rel="stylesheet" href="../../../assets/css/profileDetails.css">
    <link rel="stylesheet" href="../../../assets/css/foodMenu_style.css">

    <script src="../../../assets/js/admin/dashboard_script.js" ></script>
    <script src="../../../assets/js/admin/inventory_script.js" ></script>

    <title>Admin Homepage</title>
</head>
<?php
    $option = isset($_GET['option']) ? $_GET['option'] : "add";
    if($option == "add"){
?>
<body onload="getAllInventory()">
    <section class="left-sidebar">
        <div class="dashboard_controller">
            <?php
                include "../include/left_menu.php";
            ?>
        </div>
        <div class="main">
            <div class="rmv-pad scrollable-area">
                <div class="content-area scrollbar title-header-main">
                <div class="header-row title-header">
                        <div class="textarea">
                            <h4>DASHBOARD</h4>
                            <p>All Informations are shown bellow.</p>
                        </div>
                        <div class="content-holder">
                            <div class="search-area">
                                <form action="" method="POST" class="form_search">
                                    <p>Search By : </p>
                                    <select name="searchBy" id="searchBy" class="btn">
                                        <option value="#"></option>
                                        <option value="Customer">Customer</option>
                                        <option value="Employee">Employee</option>
                                        <option value="Food Item">Food Item</option>
                                    </select>
                                    <div class="search">
                                        <input type="search" name="search_box" id="search_box" class="btn" onkeyup="search_data()"  onblur="hide()" onreset="hide()">
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
                                    <a class="dropdown-item" href="../../../common_pages/profile_details.php">Profile Details</a>
                                    <a class="dropdown-item" href="../../../common_pages/change_password.php">Change Password</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../../../common_php/logout.php" id="logout">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content_area">
                        <div class="filter_area">
                            <form action="" method="POST" class="filter-form">
                                <div class="form-group filter">
                                    <label for="filter" class="title lbl">Filter Employee's : </label>
                                    <select name="user_type" class="filter_select" id="filterData" onchange="filterRequest()">
                                        <option value="#">All</option>
                                        <option value="Requested">Requests</option>
                                    </select>
                                    <input type="reset" value="Reset" name="reset" class="btn btn-info">
                                </div>
                                <div class="form-group lbl">
                                    <a href="../../../pages/admin/food_item_layouts/addInventories.php" class="btn btn-success">Add Inventory</a>
                                </div>
                            </form>
                        </div>
                        <div class="table_area">
                            <h4>All Inventory List</h4>
                            <table class="table_details table_join">
                                <thead class="thead-dark">
                                    <tr>
                                        <th id="thMain">Item Name</th>
                                        <th id="thMain">Quantity</th>
                                        <th id="thMain">Price</th>
                                        <th id="thMain">Status</th>
                                        <th id="thMain">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="inventryBody">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php
    }
    else{
?>
<body onload="getAllInventory()">
    <section class="left-sidebar">
        <div class="dashboard_controller">
            <?php
                include "../include/left_menu.php";
            ?>
        </div>
        <div class="main">
            <div class="rmv-pad scrollable-area">
                <div class="content-area scrollbar title-header-main">
                <div class="header-row title-header">
                        <div class="textarea">
                            <h4>DASHBOARD</h4>
                            <p>All Informations are shown bellow.</p>
                        </div>
                        <div class="content-holder">
                            <div class="search-area">
                                <form action="" method="POST" class="form_search">
                                    <p>Search By : </p>
                                    <select name="searchBy" id="searchBy" class="btn">
                                        <option value="#"></option>
                                        <option value="Customer">Customer</option>
                                        <option value="Employee">Employee</option>
                                        <option value="Food Item">Food Item</option>
                                    </select>
                                    <div class="search">
                                        <input type="search" name="search_box" id="search_box" class="btn" onkeyup="search_data()"  onblur="hide()" onreset="hide()">
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
                                    <a class="dropdown-item" href="../../../common_pages/profile_details.php">Profile Details</a>
                                    <a class="dropdown-item" href="../../../common_pages/change_password.php">Change Password</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../../../common_php/logout.php" id="logout">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content_area">
                        <div class="table_area">
                            
                            <table class="table_details table_join">
                                <thead class="thead-dark">
                                    <tr>
                                        <th id="thMain">Item Name</th>
                                        <th id="thMain">Quantity</th>
                                        <th id="thMain">Price</th>
                                        <th id="thMain">Status</th>
                                        <th id="thMain">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="inventryBody">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php
    }
?>
</html>
<?php
    }
    else{
        header('location: ../other/login.php');
    }
?>