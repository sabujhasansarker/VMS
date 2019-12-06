<?php

/**
 * @Author: sabuj
 * @Date:   2019-11-30 08:30:21
 * @Last Modified by:   sabuj
 * @Last Modified time: 2019-12-02 07:33:54
 */
global $wpdb;
$sqls = ["CREATE TABLE {$wpdb->prefix}AllStudent (
                        id INT NOT NULL AUTO_INCREMENT,
                        name VARCHAR(250),
                        fatherName VARCHAR(250),
                        motherName VARCHAR(250),
                        dateDate VARCHAR(250),
                        semister VARCHAR(250),
                        department VARCHAR(250),
                        setion VARCHAR(250),
                        gardiantName VARCHAR(250),
                        gardiantPhn VARCHAR(250),
                        email VARCHAR(250),
                        phone VARCHAR(250),
                        PRIMARY KEY (id)
        );",
        "CREATE TABLE {$wpdb->prefix}AllDeperment (
                        id INT NOT NULL AUTO_INCREMENT,
                        deperntmentName VARCHAR(250),
                        PRIMARY KEY (id)
        );",
        "CREATE TABLE {$wpdb->prefix}AllSemistar (
                        id INT NOT NULL AUTO_INCREMENT,
                        semistarName VARCHAR(250),
                        PRIMARY KEY (id)
        );", 
        "CREATE TABLE {$wpdb->prefix}allLocation (
                        id INT NOT NULL AUTO_INCREMENT,
                        locationName VARCHAR(250),
                        PRIMARY KEY (id)
        );",
        "CREATE TABLE {$wpdb->prefix}setion (
                        id INT NOT NULL AUTO_INCREMENT,
                        section VARCHAR(250),
                        PRIMARY KEY (id)
        );",    
    ];


