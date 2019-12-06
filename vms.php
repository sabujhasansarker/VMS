<?php 
	/**
	 * Plugin Name: Univercity Mangment Systyme
	 * Description: For practice
	 * Plugin URI: http://#
	 * Author: sabuj sarker
	 * Author URI: http://#
	 * Version: 1.0.0
	 * License: GPL2
	 * Text Domain: vms
	 * Domain Path: 
	 */
	
	/*
	    Copyright (C) 2019  sabuj sarker  sabujsarker2016@gmail.com
	
	    This program is free software; you can redistribute it and/or modify
	    it under the terms of the GNU General Public License, version 2, as
	    published by the Free Software Foundation.
	
	    This program is distributed in the hope that it will be useful,
	    but WITHOUT ANY WARRANTY; without even the implied warranty of
	    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	    GNU General Public License for more details.
	
	    You should have received a copy of the GNU General Public License
	    along with this program; if not, write to the Free Software
	    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
	*/
	
	/**
	 * vms start 
	 */
	class vms{
		function __construct(){
			// add_action("activate_", array($this,"vmsTable"));
			add_action( 'admin_menu', array($this,'vmsAdmin'));
			add_action("admin_enqueue_scripts", array($this, "load_admin_assets"));
		}
		// Add table
		function vmsTable(){			
			require 'inc/table.php';
			global $wpdb;
	        foreach ($sqls as $sql) {
	        require_once(ABSPATH."wp-admin/includes/upgrade.php");
	        dbDelta($sql);
	    }
		}
		// Add Admin Forntend
		function vmsAdmin(){
			// Add main menu
			add_menu_page( 'University Mangement', 'Add Student', 'manage_options', 'add-student-information', 'menu_callback', 'dashicons-welcome-learn-more' );
			function menu_callback(){
				require_once dirname(__FILE__) . '/inc/from/addstudent.php';
				// require_once dirname(__FILE__) . '/inc/from/Dashio/form_component.php';
			}	
			// Add sub Menu
			add_submenu_page( 'add-student-information', 'All Students', 'All Students', 'manage_options', 'all-students', 'sub_menu_all_student' ) ; 

			function sub_menu_all_student(){
             	require_once dirname(__FILE__) . '/inc/from/allstudent.php';
             	// require_once dirname(__FILE__) . '/inc/from/Dashio/basic_table.php';
             }
             // Add Deperment , Semister , Location & Setion
             add_submenu_page( 'add-student-information', 'Add Deperment & Location', 'Add Deperment & Location', 'manage_options', 'add-department', 'sub_menu_add_deperment' ) ; 

			function sub_menu_add_deperment(){
				require_once dirname(__FILE__) . '/inc/from/addepartment.php';
             } 
		}
		
		   function load_admin_assets() {
            wp_enqueue_style( 'scl-admin-css','https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css' ); 
            wp_enqueue_style( 'font-admin-css','https://fonts.googleapis.com/icon?family=Material+Icons' ); 
            // wp_enqueue_style( 'scl-css', plugin_dir_url( __FILE__ )."style.css",  '1', 'all' );
            wp_enqueue_style( 'scl-admin', plugin_dir_url( __FILE__ )."assists/admin/admin.css",  '1', 'all' );
            wp_enqueue_script( 'scl-admin-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js' );
            wp_enqueue_script( 'admin-js', plugin_dir_url( __FILE__ ) ."assists/admin/admin.js", array("jquery"), '1', true );
    
		}

	}
	$sclIn = new vms(); 
	$sclIn -> vmsTable(); 
 ?>