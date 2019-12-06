<?php

/**
 * @Author: sabuj
 * @Date:   2019-11-30 08:43:06
 * @Last Modified by:   sabuj
 * @Last Modified time: 2019-12-01 15:51:37
 */

add_menu_page( 'University Mangement', 'Add Student', 'manage_options', 'add-deperment-information', 'menu_callback', 'dashicons-welcome-learn-more' );
function menu_callback(){
	require_once dirname(__FILE__) . '/from/addstudent.php';
}