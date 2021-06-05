<?php
/*
 ===========================================================================================
 + Cerberus Content Management System.
 + ---
 + - Author : Gary Christopher Johnson
 + - E-Mail : TinkeSoftware@Protonmail.com // GCJohnsonChevalier@Protonmail.com
 + - Company: Tinke Software
 + - Notes  : Please view this file in Notepad or similar for proper indentation display
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
 + - File Location: root->Diagnose.php
 + - File Version:  0.4 - Sunday, March, 24, 2019
 + ---
 +%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
 +%%%()()%%()()()%%()()()%%()()()%%()()()%%()()()%%()%%()%%%%%%()()()%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()()()%%()()()%%()()()%%()()()%%()()()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%/-\%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%|4|%  ~ Wyn ~
 +%%%()()%%()()()%%()%%()%%()()()%%()()()%%()%%()%%()()()%%()()()%%%%%%%%%%%%\-/% Build 0.6
 ===========================================================================================
*/

/*
 ===========================
 +
 +
 + Error Handling
 +
 +
 ===========================
*/

error_reporting("E_WARNING ^ E_NOTICE");

/*
 ===========================
 +
 +
 + HTML Document Header Output
 +
 +
 ===========================
*/

echo ("
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">

<HTML>
	<HEAD>
		<TITLE>Cerberus Content Management System - Diagnostic Utility - Version: 1.2</TITLE>
		<LINK REL=\"stylesheet\" HREF=\"Theme/Cerberus/Style_Sheet/Style.css\" TYPE=\"text/css\">
		<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html;charset=utf-8\">
	</HEAD>

	<BODY>
");

/*
 ===========================
 +
 +
 + Language Selection List
 +
 +
 ===========================
*/

echo ("Language Selection:<HR>");

$_SPECIFY_DEFAULT_LANGUAGE_DIRECTORY			= "System/Language/";
$_OPEN_DEFAULT_LANGUAGE_DIRECTORY			= opendir($_SPECIFY_DEFAULT_LANGUAGE_DIRECTORY);

while (($_CHECK_DEFAULT_LANGUAGE_DIRECTORY = readdir($_OPEN_DEFAULT_LANGUAGE_DIRECTORY))) {

if (($_CHECK_DEFAULT_LANGUAGE_DIRECTORY == ".") || ($_CHECK_DEFAULT_LANGUAGE_DIRECTORY == "..") || ($_CHECK_DEFAULT_LANGUAGE_DIRECTORY == "index.php")) {
/**
 * Do Nothing
**/
} else {
		echo ("<A HREF=\"?Application&#61;File_Checks&amp;Language&#61;$_CHECK_DEFAULT_LANGUAGE_DIRECTORY\">$_CHECK_DEFAULT_LANGUAGE_DIRECTORY</A><BR>");
} // [ + ] WHILE_READ_DIRECTORY

/*
 ===========================
 +
 +
 + System File Detection
 +
 +
 ===========================
*/

if ($_GET["Application"] == "File_Checks") {

if ($_GET["Language"] == "$_CHECK_DEFAULT_LANGUAGE_DIRECTORY") {

include_once "System/Language/$_CHECK_DEFAULT_LANGUAGE_DIRECTORY/Language.cerb";

		echo ("Cerberus Content Management System Diagnostic Utility - Version: 1.3<BR><BR>");

		echo ($_Message_Diagnose_EXAMINING_FILES);

$_SPECIFY_ROOT_DIRECTORY				= "./";
$_OPEN_ROOT_DIRECTORY					= opendir($_SPECIFY_ROOT_DIRECTORY);

while (($_CHECK_ROOT_DIRECTORY = readdir($_READ_ROOT_DIRECTORY))) {

		echo ("$_CHECK_ROOT_DIRECTORY<BR>");

} // [ + ] WHILE_ARRAY

		echo ($_Message_Diagnose_LISTING_FILES);

$_ARRAY_SYSTEM_FILES_ROOT				= array();
$_ARRAY_SYSTEM_FILES_CONFIGURATION			= array();
$_ARRAY_SYSTEM_FILES_LANGUAGES				= array();
$_ARRAY_SYSTEM_FILES_SafeHTML				= array();
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR		= array();
$_ARRAY_SYSTEM_FILES_MODULES_BACKGROUND			= array();
$_ARRAY_SYSTEM_FILES_MODULES_BLOCKS			= array();
$_ARRAY_SYSTEM_FILES_MODULES_USER			= array();
$_ARRAY_SYSTEM_FILES_CLASSES				= array();

/*
 ===========================
 + Main Directory
 ===========================
*/

$_ARRAY_SYSTEM_FILES_ROOT[0]				= "Cerberus.php";
$_ARRAY_SYSTEM_FILES_ROOT[1]				= "Diagnose.php";
$_ARRAY_SYSTEM_FILES_ROOT[2]				= "index.php";
$_ARRAY_SYSTEM_FILES_ROOT[3]				= "Install.php";
$_ARRAY_SYSTEM_FILES_ROOT[4]				= "RSS.php";
$_ARRAY_SYSTEM_FILES_ROOT[5]				= "robots.txt";

/*
 ===========================
 + System Configuration Directory
 ===========================
*/

$_ARRAY_SYSTEM_FILES_CONFIGURATION[0]			= "System/Configuration/Class_Database.php";
$_ARRAY_SYSTEM_FILES_CONFIGURATION[1]			= "System/Configuration/index.php";
$_ARRAY_SYSTEM_FILES_CONFIGURATION[2]			= "System/Configuration/Main_Access.php";
$_ARRAY_SYSTEM_FILES_CONFIGURATION[3]			= "System/Configuration/Main_Configuration.php";

/*
 ===========================
 + English Language Directory
 ===========================
*/

$_ARRAY_SYSTEM_FILES_LANGUAGES[0]			= "System/Language/English/Language.cerb";

/*
 ===========================
 + Default Safe-HTML Directory
 ===========================
*/

$_ARRAY_SYSTEM_FILES_SafeHTML[0]			= "System/Safe-HTML/default/Safe-HTML.cerb";
$_ARRAY_SYSTEM_FILES_SafeHTML[1]			= "System/Safe-HTML/default/index.php";

/*
 ===========================
 + Administration Modules
 ===========================
*/

$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[0]		= "Module/Administration/Administrators";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[1]		= "Module/Administration/Applications";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[2]		= "Module/Administration/Backup";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[3]		= "Module/Administration/Banish";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[4]		= "Module/Administration/Blocks";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[5]		= "Module/Administration/Bot_Monitor";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[6]		= "Module/Administration/Categories";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[7]		= "Module/Administration/cPanel";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[8]		= "Module/Administration/Forum";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[9]		= "Module/Administration/index.php";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[10]		= "Module/Administration/Modify";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[11]		= "Module/Administration/phpinfo.php";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[12]		= "Module/Administration/Polls";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[13]		= "Module/Administration/Publish";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[14]		= "Module/Administration/Ranks";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[15]		= "Module/Administration/Referrers";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[16]		= "Module/Administration/Settings";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[17]		= "Module/Administration/SQL_Query";
$_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR[18]		= "Module/Administration/Submissions";

/*
 ===========================
 + Background Modules
 ===========================
*/

$_ARRAY_SYSTEM_FILES_MODULES_BACKGROUND[0]		= "index.php";
$_ARRAY_SYSTEM_FILES_MODULES_BACKGROUND[1]		= "Module/Background/Log_Administration";
$_ARRAY_SYSTEM_FILES_MODULES_BACKGROUND[2]		= "Module/Background/Log_Background";
$_ARRAY_SYSTEM_FILES_MODULES_BACKGROUND[3]		= "Module/Background/Log_User";

/*
 ===========================
 + Blocks
 ===========================
*/

$_ARRAY_SYSTEM_FILES_MODULES_BLOCKS[0]			= "Module/Block/Admin.blk";
$_ARRAY_SYSTEM_FILES_MODULES_BLOCKS[1]			= "Module/Block/Articles.blk";
$_ARRAY_SYSTEM_FILES_MODULES_BLOCKS[2]			= "Module/Block/Banned.blk";
$_ARRAY_SYSTEM_FILES_MODULES_BLOCKS[3]			= "Module/Block/Cerberus.blk";
$_ARRAY_SYSTEM_FILES_MODULES_BLOCKS[4]			= "Module/Block/Files.blk";
$_ARRAY_SYSTEM_FILES_MODULES_BLOCKS[5]			= "Module/Block/index.php";
$_ARRAY_SYSTEM_FILES_MODULES_BLOCKS[6]			= "Module/Block/Language.blk";
$_ARRAY_SYSTEM_FILES_MODULES_BLOCKS[7]			= "Module/Block/Member_List.blk";
$_ARRAY_SYSTEM_FILES_MODULES_BLOCKS[8]			= "Module/Block/Members.blk";
$_ARRAY_SYSTEM_FILES_MODULES_BLOCKS[9]			= "Module/Block/Modules.blk";
$_ARRAY_SYSTEM_FILES_MODULES_BLOCKS[10]			= "Module/Block/Polls.blk";
$_ARRAY_SYSTEM_FILES_MODULES_BLOCKS[11]			= "Module/Block/Shouts.blk";

/*
 ===========================
 + User Modules
 ===========================
*/

$_ARRAY_SYSTEM_FILES_MODULES_USER[0]			= "Module/User/All_News";
$_ARRAY_SYSTEM_FILES_MODULES_USER[1]			= "Module/User/All_Shouts";
$_ARRAY_SYSTEM_FILES_MODULES_USER[2]			= "Module/User/Articles";
$_ARRAY_SYSTEM_FILES_MODULES_USER[3]			= "Module/User/Change_Password";
$_ARRAY_SYSTEM_FILES_MODULES_USER[4]			= "Module/User/Comment";
$_ARRAY_SYSTEM_FILES_MODULES_USER[5]			= "Module/User/Contact_Admin";
$_ARRAY_SYSTEM_FILES_MODULES_USER[6]			= "Module/User/cPanel";
$_ARRAY_SYSTEM_FILES_MODULES_USER[7]			= "Module/User/Documentation";
$_ARRAY_SYSTEM_FILES_MODULES_USER[8]			= "Module/User/E-Mail";
$_ARRAY_SYSTEM_FILES_MODULES_USER[9]			= "Module/User/Edit_Profile";
$_ARRAY_SYSTEM_FILES_MODULES_USER[10]			= "Module/User/Files";
$_ARRAY_SYSTEM_FILES_MODULES_USER[11]			= "Module/User/Forum";
$_ARRAY_SYSTEM_FILES_MODULES_USER[12]			= "Module/User/Friend";
$_ARRAY_SYSTEM_FILES_MODULES_USER[13]			= "Module/User/index.php";
$_ARRAY_SYSTEM_FILES_MODULES_USER[14]			= "Module/User/Legal";
$_ARRAY_SYSTEM_FILES_MODULES_USER[15]			= "Module/User/Links";
$_ARRAY_SYSTEM_FILES_MODULES_USER[16]			= "Module/User/List";
$_ARRAY_SYSTEM_FILES_MODULES_USER[17]			= "Module/User/Login";
$_ARRAY_SYSTEM_FILES_MODULES_USER[18]			= "Module/User/Members";
$_ARRAY_SYSTEM_FILES_MODULES_USER[19]			= "Module/User/Members_Online";
$_ARRAY_SYSTEM_FILES_MODULES_USER[20]			= "Module/User/News";
$_ARRAY_SYSTEM_FILES_MODULES_USER[21]			= "Module/User/Polls";
$_ARRAY_SYSTEM_FILES_MODULES_USER[22]			= "Module/User/Private_Files";
$_ARRAY_SYSTEM_FILES_MODULES_USER[23]			= "Module/User/Private_Message";
$_ARRAY_SYSTEM_FILES_MODULES_USER[24]			= "Module/User/Profile";
$_ARRAY_SYSTEM_FILES_MODULES_USER[25]			= "Module/User/Referrers";
$_ARRAY_SYSTEM_FILES_MODULES_USER[26]			= "Module/User/Register";
$_ARRAY_SYSTEM_FILES_MODULES_USER[27]			= "Module/User/Reset_Password";
$_ARRAY_SYSTEM_FILES_MODULES_USER[28]			= "Module/User/Search";
$_ARRAY_SYSTEM_FILES_MODULES_USER[29]			= "Module/User/Send_Friend";
$_ARRAY_SYSTEM_FILES_MODULES_USER[30]			= "Module/User/Statistics";
$_ARRAY_SYSTEM_FILES_MODULES_USER[31]			= "Module/User/Submit_News";
$_ARRAY_SYSTEM_FILES_MODULES_USER[32]			= "Module/User/System_Message";
$_ARRAY_SYSTEM_FILES_MODULES_USER[33]			= "Module/User/Upload";
$_ARRAY_SYSTEM_FILES_MODULES_USER[34]			= "Module/User/Webspace";


/*
 ===========================
 + System Files
 ===========================
*/

$_ARRAY_SYSTEM_FILES_CLASSES[0]				= "System/Configuration/Class_Database.php";
$_ARRAY_SYSTEM_FILES_CLASSES[1]				= "System/Configuration/Main_Access.php";
$_ARRAY_SYSTEM_FILES_CLASSES[2]				= "System/Configuration/Main_Configuration.php";

/*
 ===========================
 + Increment Array Lists For Drop
 ===========================
*/

for ($i = 0; $i < sizeof($_ARRAY_SYSTEM_FILES_ROOT); $i++)
for ($i = 0; $i < sizeof($_ARRAY_SYSTEM_FILES_CONFIGURATION); $i++)
for ($i = 0; $i < sizeof($_ARRAY_SYSTEM_FILES_LANGUAGES); $i++)
for ($i = 0; $i < sizeof($_ARRAY_SYSTEM_FILES_SafeHTML); $i++)
for ($i = 0; $i < sizeof($_ARRAY_SYSTEM_FILES_MODULES_ADMINISTRATOR); $i++)
for ($i = 0; $i < sizeof($_ARRAY_SYSTEM_FILES_MODULES_BACKGROUND); $i++)
for ($i = 0; $i < sizeof($_ARRAY_SYSTEM_FILES_MODULES_BLOCKS); $i++)
for ($i = 0; $i < sizeof($_ARRAY_SYSTEM_FILES_MODULES_USER); $i++)
for ($i = 0; $i < sizeof($_ARRAY_SYSTEM_FILES_CLASSES); $i++)

/*
 ===========================
 + Read Number Of Lines
 ===========================
*/

// $_Diagnose_READ_FILE_ARRAY 				= basename($_SERVER['$_ARRAY_SYSTEM_FILES[$i]']); 
// $_Diagnose_COUNT_FILE_ARRAY 				= count(file($_Diagnose_READ_FILE_ARRAY);

/*
 ===========================
 + Calculate MD5 Signature
 ===========================
*/

// $_Diagnose_FILE_MD5_SIGNATURE			= md5(filesize($_SERVER[$_ARRAY_SYSTEM_FILES[$i]));

/*
 ===========================
 + If File(s) Missing
 ===========================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES[$i])) {
		echo ("***---------------------------------------*** [ Missing File: <A HREF=\"$_ARRAY_SYSTEM_FILES[$i]\" TITLE=\"View: $_ARRAY_SYSTEM_FILES[$i]\">$_ARRAY_SYSTEM_FILES[$i]</A> ]<BR>Number of Lines: $_Diagnose_COUNT_FILE_ARRAY - MD5 Signature: $_Diagnose_FILE_MD5_SIGNATURE<BR><BR>");
} else {
		echo ("Existing File: <A HREF=\"$_ARRAY_SYSTEM_FILES[$i]\" TITLE=\"View: $_ARRAY_SYSTEM_FILES[$i]\">$_ARRAY_SYSTEM_FILES[$i]</A> ]<BR>Number of Lines: $_Diagnose_COUNT_FILE_ARRAY - MD5 Signature: $_Diagnose_FILE_MD5_SIGNATURE<BR><BR>");
} // [ + ] IF_FILES

/*
 ===========================
 + Close Main Directory
 ===========================
*/

closedir($_OPEN_ROOT_DIRECTORY);

echo ($_Message_Diagnose_DIAGNOSTICS_FINISHED);

/*
 ===========================
 + Close Language Directory
 ===========================
*/

closedir($_OPEN_DEFAULT_LANGUAGE_DIRECTORY);

} else {
/**
 * Do Nothing
**/
} // [ + ] WHILE_FILES

} // [ + ] IF Language Selection

} // [ + ] IF Application_File_Checks

/*
 ===========================
 +
 +
 + MySQL Database Connection Test
 +
 +
 ===========================
*/

if ($_GET["Application"] == "MySQL_Test") {

	include_once "System/Configuration/Main_Configuration.php";
	include_once "System/Configuration/Main_Access.php";

	mysql_connect($_ACCESS_DATABASE_HOSTNAME, $_ACCESS_DATABASE_USERNAME, $_ACCESS_DATABASE_PASSWORD) or die('Connection To MySQL Server Error.');
	mysql_select_db($_ACCESS_DATABASE_NAME) or die('Connection To MySQL Database Error.');

} // [ + ] IF_Application_MySQL_Test

/*
 ===========================
 +
 +
 + Backdoor / Backup Login Form
 +
 +
 ===========================
*/

if ($_GET["Application"] == "Login") {

echo ("
		<FORM ACTION=\"Cerberus.php?InternalApplication&#61;Login\" METHOD=\"POST\">
			<HR>Backup Login Form<HR>
			Member Username:<BR>
				<INPUT TYPE=\"TEXT\" NAME=\"post_login_username\"><BR>
			Member Password:<BR>
				<INPUT TYPE=\"PASSWORD\" NAME=\"post_login_password\"><BR>
			<INPUT TYPE=\"SUBMIT\" VALUE=\"Login\">
		</FORM>
");

} // [ + ] IF_Application_Login

echo ("
	</BODY>
</HTML>
");
?>