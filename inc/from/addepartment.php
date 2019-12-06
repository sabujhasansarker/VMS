<?php

/**
 * @Author: sabuj
 * @Date:   2019-12-02 07:38:38
 * @Last Modified by:   sabuj
 * @Last Modified time: 2019-12-03 07:35:06
 */
require (ABSPATH . 'wp-content/plugins/VMS/student.php');
  // Vartiable
  $deperntmentName = $_POST['deperntmentName'] ?? '' ;
  $semisterName = $_POST['semisterName'] ?? '';
  $deletedata = $_GET['action'] ?? '';
  global $wpdb;
  $delete = new student();
  // Delete Data
  if ($deletedata) {
    // Delete Samistar Data
    $Samistertable = 'AllSemistar';
    $delete->deleteData($Samistertable); 
    // Delete Daperment data
    $Depermenttable = 'AllDeperment';
    $delete->deleteData($Depermenttable);
  }
  $id = $_GET['id'] ?? '';
  if ($id) {
    $result = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}AllDeperment WHERE id='{$id}'");
  }

?>
<!-- Html -->
<div class="container">
<div class="row">
		<form method="post">
		<h3 class="center">Add Depertment</h3>
		<div class="input-field col s12">
			<!-- Add Deperment -->
		   <input id="last_name" type="text" class="validate" value="" name="deperntmentName">
           <label for="last_name">Add Deperment</label>
           <button class="waves-effect waves-light btn-small" name="addDep">Add Deperment</button>
           <?php
           // Add Deperment
           	if (isset($_POST['addDep'])) {
           		if (!empty($deperntmentName)) {
           		// Deperment AlReady Exits Chacke	
 				           $datum = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}AllDeperment WHERE deperntmentName  = '".$deperntmentName."'");
           			if (! $datum == $deperntmentName) {
           				// Insert Deperment
           				$delete->add('deperntmentName',$deperntmentName,'AllDeperment');
           				?>
           				<h6><?php echo $deperntmentName; ?></h6>
           				<?php
           			}else{
           				?>
                  <!-- Deperment name Exits -->
           				<h6c class="exits">Deperment Already Exits</h6>
           				<?php
           			}
           			
           		}
           	}
           	?>
           	 <!-- Deperment name  -->
           	 <br>
           	 <br>
           	 <?php 
           	 	// Deperment Name Quary
           	$query = "SELECT * FROM {$wpdb->prefix}AllDeperment ORDER BY id DESC";
			      $result = $wpdb->get_results($query);
           	  ?>
              <!-- Droupdown btn -->
           <button class='dropdown-trigger btn' href='#' data-target='dropdown1'><i class="material-icons right">arrow_drop_down</i>All Deperment Names</button>
           <ul id='dropdown1' class='dropdown-content'>
           <!-- <li class="collection-header"><h6>Deperment Names</h6></li> -->
           	<?php		
			       foreach ($result as $in) {
            				?>
            				<li><?php echo $in->deperntmentName ; ?>
                    <div class="right">
                    <a name="dlt" href="<?php echo admin_url( 'admin.php?page=add-department&id='. $in->id . '&action=delete'); ?>" >
                      <!-- Metarial Icon -->
                    <i class="Small material-icons delete">delete</i>
                    </a>
                    </div>    
                    </li>
            				<?php
            			   }
            ?>
            </ul>
            <!-- Deperment Name end -->
       	</div>

       	<!-- Add Semister -->
       	<h3 class="center">Add Semister</h3>
		<div class="input-field col s12">
		   <input id="last_name" type="text" class="validate"  name="semisterName">
           <label for="last_name">Add Semister</label>
              <button class="waves-effect waves-light btn-small" name="addSemister">Add Semister</button>
        	<?php 
          // Add Semistar
        		if (isset($_POST['addSemister'])) {
        			if (!empty($semisterName)) {
        				// Samister Exist 
        				$samChk = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}AllSemistar WHERE semistarName   = '".$semisterName."'");
        				if (!$samChk == $semisterName) {
                  // Insert Semistar
        					$delete->add('semistarName',$semisterName,'AllSemistar');
        					?>
                  <!-- Not Exits -->
        					<h6><?php echo($semisterName); ?></h6>
        					<?php
        				}else{
        					?>
                  <!-- Exits -->
        					<h6 class="exits">Samister Alrady exist</h6>
        					<?php
        				}
        				
        			}
        		}
        		// All semister Quary
        		?>
        		<br><br>
            <!-- DroupDown Btn -->
        		<button class='dropdown-trigger btn' href='#' data-target='dropdown'>All Samister Names<i class="material-icons right">arrow_drop_down</i></button>
           		<ul id='dropdown' class='dropdown-content'>
        		<?php
            // All Samistar Quary
        		$allsemister = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}AllSemistar ORDER BY id DESC");
        		foreach ($allsemister as $sam) {
              ?>
      				<li><?php echo $sam->semistarName  ; ?>
              <!-- add icon -->
              <div class="right">
                <!-- delete icon -->
              <a name="dlt" href="<?php echo admin_url( 'admin.php?page=add-department&id='. $sam->id . '&action=delete'); ?>" ><i class="Small material-icons delete">delete</i></a>
              </div>
              </li>
      				<?php
          		}
          	 	?>
	        	</ul>
	        	</div>
       	</div>
		</form>
	</div>
</div>
</div>