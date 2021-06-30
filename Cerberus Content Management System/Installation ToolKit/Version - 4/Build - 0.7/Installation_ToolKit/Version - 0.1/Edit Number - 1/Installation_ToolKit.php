<?PHP
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
 + - File Location: Installation_ToolKit->Installation_ToolKit.php
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
 + Installation ToolKit
 +
 +
 ===========================
*/

/*
 ===========================
 +
 + HTML HEADER
 +
 ===========================
*/

echo ("
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">

<HTML>
	<HEAD>
		<TITLE>Cerberus Content Management System - Post Installation ToolKit</TITLE>
		<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html;charset=utf-8\">
		</HEAD>
		
		<BODY>
				<CENTER>Cerberus Content Management System - Post Installation ToolKit - Version 0.1</CENTER>
				<CENTER>[&nbsp;<A HREF=\"?\">Close Open Applications</A>&nbsp;-&nbsp;</A><A HREF=\"?Application&#61;Unpack\">Unpack Cerberus Content Management System Compressed Package</A>&nbsp;-&nbsp;<A HREF=\"?Application&#61;Terminal\">Execute Terminal Commands</A>&nbsp;-&nbsp;<A HREF=\"./Cerberus/Install.php\">Install Cerberus Content Management System</A>&nbsp;]</CENTER>
				<HR>
");

/*
 ===========================
 +
 + Unpack Packages
 +
 ===========================
*/
	
if ($_GET["Application"] == "Unpack") {

system('unzip Cerberus.zip');

} // [ + ] IF_APPLICATION_UNPACK

/*
 ===========================
 +
 + Execute Terminal Commands
 +
 ===========================
*/
	 
if ($_GET["Application"] == "Terminal") {
	
$_Installation_ToolKit_POST_TERMINAL_COMMANDS				= $_POST['Installation_ToolKit_Terminal_Commands'];
	
if (!$_Installation_ToolKit_POST_TERMINAL_COMMANDS) {

echo ("
			<FORM ACTION=\"?Application&#61;Terminal\" METHOD=\"POST\">
				Please Visit: <A HREF=\"https://www.GitHub.com/TinkeSoftware/CerberusCMS_Archives/\">Tinke Softwares' - Cerberus Content Management System Archives - GitHub Repository</A> for the most recent Archived CerberusCMS compressed package<BR>
				<TEXTAREA ROWS=\"15\" COLS=\"75\" NAME=\"Installation_ToolKit_Terminal_Commands\">Execute Terminal Commands On This Operating System From This Post-HypterText-PreProcessor Script E.G.: 'wget -O Cerberus.zip https://GitHub.com/TinkeSoftware/<File_Name_Here.zip>'</TEXTAREA><BR>
				<INPUT TYPE=\"SUBMIT\" VALUE=\"Execute\">
			</FORM>
");

} else {
	
		echo ("Executing Terminal Command: '$_Installation_ToolKit_POST_TERMINAL_COMMANDS'<BR>");
	
$_Installation_ToolKit_EXECUTE_TERMINAL_COMMAND				= shell_exec($_Installation_ToolKit_POST_TERMINAL_COMMANDS);
	
		echo ("$_Installation_ToolKit_EXECUTE_TERMINAL_COMMAND");

} // [ + ] IF_!POST_Installation_ToolKit_POST_TERMINAL_COMMANDS

} // [ + ] IF_APPLICATION_EXECUTE_COMMANDS

echo ("
		</BODY>
</HTML>
");
?>
