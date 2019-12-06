
<h2 class="center ">STUDENTS</h2>
<?php require (ABSPATH . 'wp-content/plugins/VMS/inc/from/filter.php'); ?>
<?php 
	// require (ABSPATH . 'wp-content/plugins/VMS/student.php');
	$delete = new student();
	$deletedata = $_GET['action'] ?? '';
	if ($deletedata) {
		$datatable = 'AllStudent';
		$delete->deleteData($datatable);
	}
 ?>
<a href="<?php echo admin_url('admin.php?page=add-student-information') ?>" class="waves-effect waves-light btn right">Add Student</a> 
<table class="">
    <thead>
      <tr>
          	<th>Student ID</th>
          	<th>Student Name</th>
	        <th>Father Name</th>
	        <th>Mother Name</th>
	        <th>Gardiant Name</th>
	        <th>Gardiant Phone</th>
	        <th>Date of Birth</th>
	        <th>Semister</th>
	        <th>Depertment</th>
	        <th>Email</th>
	        <th>Phone Number</th>
	        <th>Seation</th>
	        <th>Action</th>
      </tr>
    </thead>

    <tbody>
      <tr>
      	<?php 
      		global $wpdb;
			$query = "SELECT * FROM {$wpdb->prefix}AllStudent ORDER BY id DESC";
			$result = $wpdb->get_results($query);
			foreach ($result as $in) {
				?>
			<tr>
	            <td><?php echo $in->id ; ?></td>
	            <td><?php echo $in->name ; ?></td>
	            <td><?php echo $in->fatherName; ?></td>
	            <td><?php echo $in->motherName; ?></td>
	            <td><?php echo $in->gardiantName; ?></td>
	            <td><?php echo $in->gardiantPhn; ?></td>
	            <td><?php echo $in->dateDate; ?></td>
	            <td><?php echo $in->semister; ?></td>
	            <td><?php echo $in->department; ?></td>
	            <td><?php echo $in->email; ?></td>
	            <td><?php echo $in->phone; ?></td>
	            <td><?php echo $in->setion; ?></td>
	            <td class="action">
	            	<a href="<?php echo admin_url( 'admin.php?page=add-student-information&id='. $in->id ); ?>" class="btn tooltipped" data-position="top" data-tooltip="Edit Student"><i class="Small material-icons">edit</i></a>
              		<a name="dlt" href="<?php echo admin_url( 'admin.php?page=all-students&id='. $in->id . '&action=delete'); ?>" class="btn tooltipped delete" data-position="buttom" data-tooltip="Delete Student"><i class="Small material-icons">delete</i></a>
	            </td>
        	</tr>
      <?php } ?>
    </tbody>
  </table>


