/*
* @Author: sabuj
* @Date:   2019-12-01 16:17:00
* @Last Modified by:   sabuj
* @Last Modified time: 2019-12-04 13:10:50
*/
 jQuery(document).ready(function($){
    $('.datepicker').datepicker({
    	yearRange :50
    	});
    $('select').formSelect();
    $('.dropdown-trigger').dropdown({
    	alignment : 'center'
    });
    $('.tooltipped').tooltip();
  });
