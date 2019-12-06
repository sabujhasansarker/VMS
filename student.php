<?php

/**
 * @Author: sabuj
 * @Date:   2019-12-01 16:00:18
 * @Last Modified by:   sabuj
 * @Last Modified time: 2019-12-06 10:45:04
 */

/**
 * 
 */
class student{
	
	function __construct(){
		
	}
	// Add Student
	function addData($name,$fName,$mName,$age,$sem,$email,$phn,$deperment,$setion,$gardiantName,$gardiantPhn){
		    global $wpdb;
            $table_name = $wpdb->prefix . 'AllStudent'; 
        	$wpdb->insert( $table_name, ['name'  => $name,'fatherName'=>$fName,'motherName' => $mName,'dateDate'=>$age,'semister'=>$sem,'email' => $email,'phone'=>$phn,'department'=>$deperment,'setion'=>$setion,'gardiantName'=>$gardiantName,'gardiantPhn'=> $gardiantPhn
            ] );
		}
		// Update Student
		function upData($name,$fName,$mName,$age,$sem,$email,$phn,$deperment,$setion,$gardiantName,$gardiantPhn){
		    global $wpdb;
		    $data = ['name'  => $name,'fatherName'=>$fName,'motherName' => $mName,'dateDate'=>$age,'semister'=>$sem,'email' => $email,'phone'=>$phn,'department'=>$deperment,'setion'=>$setion,'gardiantName'=>$gardiantName,'gardiantPhn'=> $gardiantPhn];
		    $id = $_GET['id'];
            $where = array('id' => $id);
            $table_name = $wpdb->prefix . 'AllStudent'; 
            $wpdb->update( $table_name,$data,$where );
		}
		function add($name,$value,$table){
		    global $wpdb;
            $table_name = $wpdb->prefix . $table; 
        	$wpdb->insert( $table_name, [$name  => $value ] );
		}		
		function update($name,$value,$table){
		    global $wpdb;
		    $data = [$name=>$value];
            $id = $_GET['id'];
            $where = array('id' => $id);
            $table_name = $wpdb->prefix . $table; 
            $wpdb->update( $table_name,$data,$where );

		}		// Delete Data
		function deleteData($datatable){
			global $wpdb;
			$id = $_GET['id'] ?? '';
			if ($id) {
		    $result = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}$datatable WHERE id='{$id}'");
			}
			$dlt = $_GET['action'] ?? '';
			if ($dlt=='delete') {
			  global $wpdb;
			  $id = array('id'=> $id);
			  $table_name = $wpdb->prefix . $datatable; 
			  $wpdb->delete( $table_name,$id );
			}
		}
		function studentFilter($id){
			echo $id->name;	
			echo $id->semister ;
			echo $id->department;
			echo "</br>";
		}
	}