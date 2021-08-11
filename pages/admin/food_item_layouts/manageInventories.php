<?php
    session_start();
    if(isset($_SESSION['username'])){
        $name = $_SESSION['username'];
        $option = null;
        if(isset($_GET['option'])){
            $option = $_GET['option'];
        }
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
                                    </tr>
                                </thead>
                                <tbody id="inventryBody">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="content_area form_holder" id="formContent">
                        <h4>Edit Inventory</h4>
                        <form action="" method="POST" onsubmit="return edit_item()" enctype="multipart/form-data">
                            <div class="form_fieldHolder">
                                <div class="form_update">
                                    <label for="item_name" class="title">Item Name</label>
                                    <input type="text" name="item_name" id="item_name" class="form_field ftp">
                                </div>
                                <div class="form_update">
                                    <label for="amount" class="title">Amount</label>
                                    <input type="number" name="amount" id="amount" class="form_field ftp"> 
                                </div>
                                <div class="form_update">
                                    <label for="price" class="title">Price</label>
                                    <input type="number" name="price" id="price" class="form_field ftp"> 
                                </div>
                            </div>
                            <div class="form_update btn_holderArea">
                                <input type="hidden" name="id" id="id" value="">
                                <a href="../../../pages/admin/food_item_layouts/manageInventories.php" class="btn btn-info">Back</a>
                                <input type="submit" value="Save" name="confirm" class="btn save_btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
<?php
    }
    else{
        header('location: ../other/login.php');
    }
?>