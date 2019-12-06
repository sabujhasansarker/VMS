<?php

/**
 * @Author: sabuj
 * @Date:   2019-11-30 09:33:35
 * @Last Modified by:   sabuj
 * @Last Modified time: 2019-12-06 11:16:31
 */
require (ABSPATH . 'wp-content/plugins/VMS/student.php');
// Variable Decliar
    $addstudent = new student();
    $name = $_POST['name'] ?? '';
    $fName = $_POST['fName'] ?? '';
    $mName = $_POST['mName'] ?? '';
    $age = $_POST['age'] ?? '';
    $email = $_POST['email'] ?? '';
    $phn = $_POST['phn'] ?? '';
    $sem = $_POST['sem'] ?? '';
    $setion = $_POST['setion'] ?? '';
    $deperment = $_POST['deperment'] ?? '';
    $gardiantName = $_POST['gardiantName'] ?? '';
    $gardiantPhn = $_POST['gardiantPhn'] ?? '';

    // Edit Student
    global $wpdb;
    $id = $_GET['id'] ?? 0;
    if ($id) {
        $result = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}AllStudent WHERE id='{$id}'");
    }
    ?>
    <!-- Table Html -->
    <h2 class="center ">ADD STUDENT</h2>
    <div class="container">
        <div class="row">
            <form action="" method="POST">
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Enter Your name" id="first_name" type="text" class="validate" name="name" value="<?php echo $id == true ? $result->name : $name ?>">
                        <label for="first_name">Student Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Father Name" id="first_name" type="text" class="validate" name="fName" value="<?php echo $id == true ? $result->fatherName : $fName  ?>">
                        <label for="first_name"> Father Name </label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Mother Name" id="first_name" type="text" class="validate" name="mName" value="<?php echo $id == true ? $result->motherName : $mName ?>">
                        <label for="first_name">Mother Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Father Name" id="first_name" type="text" class="validate" name="gardiantName" value="<?php echo $id == true ? $result->gardiantName : $gardiantName ?>">
                        <label for="first_name"> Gardiant Name </label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Mother Name" id="first_name" type="tel" class="validate" name="gardiantPhn" value="<?php echo $id == true ? $result->gardiantPhn : $gardiantPhn ?>">
                        <label for="first_name">Gardiant Number</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="text" class="datepicker" name="age" value="<?php echo $id == true ? $result->dateDate : $age ?>">
                        <label for="email">Date of Birth</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="sem">
                            <option value="" disabled selected>Choose your Semistar</option>
                            <!-- Semistar -->
                            <?php
                            $AllSemistar = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}AllSemistar ORDER BY id DESC"); 
                                foreach ($AllSemistar as $sam) {
                                    ?>
                                    <option value="<?php echo $sam->semistarName ; ?>" <?php 
                                    if ($id) echo $result->semister == $sam->semistarName ? 'selected' : '' ;
                                     ?>><?php echo $sam->semistarName ; ?></option>
                                    <?php
                                }
                             ?>
                        </select>
                    </div>
                    <div class="input-field col s4">
                        <select name="deperment">
                            <option value="" disabled selected>Choose your Deperment</option>
                            <!-- Deperment -->
                            <?php
                            $alldeperment = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}AllDeperment ORDER BY id DESC"); 
                                foreach ($alldeperment as $dep) {
                                    ?>
                                    <option value="<?php echo $dep->deperntmentName ; ?>" <?php 
                                    if ($id) echo $result->department == $dep->deperntmentName ? 'selected' : '' ;
                                     ?>><?php echo $dep->deperntmentName ; ?></option>
                                    <?php
                                }
                             ?>
                        </select>
                    </div>
                    <div class="input-field col s4">
                        <input id="email" type="email" class="validate" name="email" value="<?php echo $id == true ? $result->email : $email ?>">
                        <label for="">Email</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="email" type="number" class="validate" name="phn" value="<?php echo $id == true ? $result->phone : $phn ?>">
                        <label for="">Phone Number</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="email" type="text" class="validate" name="setion" value="<?php echo $id == true ? $result->setion : $setion ?>">
                        <label for="">sessions</label>
                    </div>
                </div>
                <div class="row">
                    <!-- Add & Update Button -->
                    <?php
                        if ($id) {
                            ?>
                    <button class="waves-effect waves-light btn-small" name="update">Update Student</button>
                            <?php
                        }else {
                            ?>
                    <button class="waves-effect waves-light btn-small" name="btn">Add Student</button>
                            <?php
                        }
                    ?>                
                </div>
            </form>
        </div>
    </div>
    <?php
    // Update Data
    if (isset($_POST['update'])) {
        $addstudent->upData($name,$fName,$mName,$age,$sem,$email,$phn,$deperment,$setion,$gardiantName,$gardiantPhn);
        require (ABSPATH . 'wp-content/plugins/VMS/inc/from/footer.php');
    }
    // Add Data
    if (isset($_POST['btn'])) {
        if ( empty($name) || empty($fName) || empty($mName) || empty($age) || empty($email) || empty($phn) || empty($sem) || empty($setion) || empty($deperment) || empty($gardiantName) || empty($gardiantPhn)){ 
            echo "All Field Are Requard**";
        }else{
            $addstudent->addData($name,$fName,$mName,$age,$sem,$email,$phn,$deperment,$setion,$gardiantName,$gardiantPhn);
            require (ABSPATH . 'wp-content/plugins/VMS/inc/from/footer.php');
        }
        
    }
     ?>
