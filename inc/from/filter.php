<?php

/**
 * @Author: sabuj
 * @Date:   2019-12-06 09:54:48
 * @Last Modified by:   sabuj
 * @Last Modified time: 2019-12-06 14:29:32
 */
require (ABSPATH . 'wp-content/plugins/VMS/student.php');
$main = new student();
global $wpdb;
$sSamister = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}AllSemistar ORDER BY id DESC");
$sdeperment = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}AllDeperment ORDER BY id DESC"); 
?>
<form method="post">
<div class="row">
    <div class="input-field col s3">
        <input placeholder="Student Id" id="first_name" type="number" class="validate" name="sID">
        <label for="first_name"> ID </label>
    </div>
    <div class="input-field col s3">
        <input placeholder="Student Name" id="first_name" type="text" class="validate" name="sName">
        <label for="first_name">Student Name</label>
    </div>
     <div class="input-field col s3">
        <select name="sSam">
            <option value="" disabled selected>Choose your Semister</option>
            <!-- Deperment -->
            <?php
            	foreach ($sSamister as $s) {
            		?>
            		<option><?php echo $s->semistarName ?></option>
            		<?php
            	}
             ?>
        </select>
    </div>
    <div class="input-field col s3">
		    <select name="sDep">
		        <option value="" disabled selected>Choose your Deperment</option>
		        <!-- Deperment -->
		        <?php
		            foreach ($sdeperment as $dep) {
		                ?>
		                <option><?php echo $dep->deperntmentName ; ?></option>
		                <?php
		            }
		         ?>
		    </select>
		</div>
</div>
    <div class="row">
		<div class="input-field col s12">
			<button class="waves-effect waves-light btn-small" name="filter">Filter</button>
		</div>
    </div>
</form>
<?php 
	
	if (isset($_POST['filter'])) {
		$sID = $_POST['sID'] ?? '';
	$sName = $_POST['sName'] ?? '';
	$sSam = $_POST['sSam'] ?? '';
	$sDep = $_POST['sDep'] ?? '';
		// Filter By Student Id
	$AllStudents = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}AllStudent WHERE id='$sID' or name='$sName' or semister = '$sSam' or department = '$sDep'" );
	
	if (!empty($sID)) {
		$onlyId = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}AllStudent WHERE id='$sID'" );
		foreach ($onlyId as $id) {
			$main->studentFilter($id);
		}
	}
	if (!empty($sName)) {
		$onlyName = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}AllStudent WHERE name='$sName'" );
		foreach ($onlyName as $id) {
			$main->studentFilter($id);
		}
		}
	if (!empty($sID) && !empty($sName)) {
				$nameAndID = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}AllStudent WHERE id='$sID' or name='$sName'" );
				foreach ($nameAndID as $id) {
			$main->studentFilter($id);
		}
			}		
			
	}

