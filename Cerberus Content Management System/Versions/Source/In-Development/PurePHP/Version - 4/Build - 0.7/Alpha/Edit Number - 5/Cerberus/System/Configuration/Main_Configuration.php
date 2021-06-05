<?php
/*
 ===========================================================================================
 + Cerberus Content Management System.
 + ---
 + - Author : Gary Christopher Johnson
 + - E-Mail : TinkeSoftware@Protonmail.com // GCJohnsonChevalier@Protonmail.com
 + - Company: Tinke Software
 + - Notes  : View this file in a non-formatting text editor for correct indentation display
 + ---
 +
 +
 +
 +
 +
 +
 +
 +
 +
 +
 +
 + ---
 + - File Location: root->System->Configuration->Main_Configuration.php
 + - File Version:  0.5 - Tuesday, June, 01, 2021.
 + ---
 +%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
 +%%%()()%%()()()%%()()()%%()()()%%()()()%%()()()%%()%%()%%%%%%()()()%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()()()%%()()()%%()()()%%()()()%%()()()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%/-\%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%|4|%  ~ Wynn ~
 +%%%()()%%()()()%%()%%()%%()()()%%()()()%%()%%()%%()()()%%()()()%%%%%%%%%%%%\-/% Build: 0.7
 ===========================================================================================
*/

/*
 ===========================
 +
 +
 + INCLUDING ACCESS FILE
 +
 +
 ===========================
*/

$_ACCESS_FILE				= "System/Configuration/Main_Access.php";
$_CLASS_DATABASE			= "System/Configuration/Class_Database.php";

if (file_exists($_ACCESS_FILE)) {
	include_once "$_ACCESS_FILE";
} else {
	echo ("Missing: $_ACCESS_FILE");
} // [ @ ] FILE_EXISTS

/*
 ===========================
 +
 +
 + INCLUDING DATABASE CLASS
 +
 +
 ===========================
*/

if (file_exists($_CLASS_DATABASE)) {
	include_once "$_CLASS_DATABASE";
} else {
	echo ("Missing: $_CLASS_DATABASE");
} // [ @ ] FILE_EXISTS

/*
 ===========================
 +
 +
 + Application Variables
 +
 +
 ===========================
*/

$_INTERNAL_USER_MODULE			= "Application";
$_INTERNAL_ADMINISTRATOR_MODULE		= "adminApplication";
$_INTERNAL_CUSTOM_MODULE		= "customApplication";

/*
 ===========================
 +
 +
 + CERBERUS VERSION
 +
 +
 ===========================
*/

$_CERBERUS_FULL_VERSION			= "Cerberus Content Management System - Version: 4, Build: 0.7 ~ Wynn-Ghost - Tuesday, June, 01, 2021";
$_CERBERUS_VERSION			= "4.0.7";
$_TINKESOFTWARE_SERVER			= "http://www.TinkeSoftware.com";
?>
