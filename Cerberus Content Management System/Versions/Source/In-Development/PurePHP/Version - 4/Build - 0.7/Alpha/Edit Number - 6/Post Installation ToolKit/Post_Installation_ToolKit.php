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
 + - File Location: root->Post_Installation_ToolKit.php
 + - File Version:  0.5 - Tuesday, June, 19, 2021.
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
            <BG COLOR=\"#3A5176\">
				<CENTER>Cerberus Content Management System - Post Installation ToolKit - Version 0.1</CENTER>
				<CENTER>[&nbsp;<A HREF=\"?\">Close Open Applications</A>&nbsp;-&nbsp;<A HREF=\"?Application&#61;Terminal\">Execute Terminal Commands</A>&nbsp;-&nbsp;<A HREF=\"./Cerberus/Install.php\">Install Cerberus Content Management System</A>&nbsp;-&nbsp<A HREF=\"?Application&#61;Secure_Delete\">Secure-Delete This ToolKit</A>&nbsp;]</CENTER>
				<HR>
");

/*
 ===========================
 +
 + Execute Terminal Commands
 +
 ===========================
*/

/*
 ===========================
 + IF Application IS Terminal
 ===========================
*/
	 
if ($_GET["Application"] == "Terminal") {

/*
 ===========================
 + Define POST Variables
 ===========================
*/
	
$_Installation_ToolKit_POST_TERMINAL_COMMANDS				= $_POST['Installation_ToolKit_Terminal_Commands'];

/*
 ===========================
 + IF !POST Terminal Form
 ===========================
*/
	
if (!$_Installation_ToolKit_POST_TERMINAL_COMMANDS) {

echo ("
			<FORM ACTION=\"?Application&#61;Terminal\" METHOD=\"POST\">
				Please Visit: <A HREF=\"https://www.GitHub.com/TinkeSoftware/CerberusCMS_Archives/\">Tinke Softwares' - Cerberus Content Management System Archives - GitHub Repository</A> for the most recent Archived CerberusCMS compressed package<BR>
				<TEXTAREA ROWS=\"15\" COLS=\"75\" NAME=\"Installation_ToolKit_Terminal_Commands\">Execute Terminal Commands On This Operating System From This Post-HyperText-PreProcessor Script E.G.: 'wget https://GitHub.com/TinkeSoftware/<File_Name_Here.zip>'</TEXTAREA><BR>
				<INPUT TYPE=\"SUBMIT\" VALUE=\"Execute\">
			</FORM>
");

/*
 ===========================
 + Execute Terminal Command
 ===========================
*/

} else {
	
		echo ("Executing Terminal Command: '$_Installation_ToolKit_POST_TERMINAL_COMMANDS'<BR>");

$_Installation_ToolKit_EXECUTE_TERMINAL_COMMAND				= shell_exec($_Installation_ToolKit_POST_TERMINAL_COMMANDS);
	
		echo ("$_Installation_ToolKit_EXECUTE_TERMINAL_COMMAND");

} // [ + ] IF_!POST_Installation_ToolKit_POST_TERMINAL_COMMANDS

} // [ + ] IF_APPLICATION_EXECUTE_COMMANDS

/*
 ===========================
 +
 + Secure-Delete Self
 +
 ===========================
*/

/*
 ===========================
 + IF Application IS Secure-Delete
 ===========================
*/

if ($_GET["Application"] == "Secure_Delete") {

/*
 ===========================
 + Calculate File Size
 ===========================
*/

$_Installation_ToolKit_Secure_Delete_File_Name               = "./Post_Installation_ToolKit.php";

$_Installation_ToolKit_Secure_Delete_File_Name_Size          = filesize($_Installation_ToolKit_Secure_Delete_File_Name);

/*
 ===========================
 + Define Data To Be Written
 ===========================
*/

$_Installation_ToolKit_Secure_Delete_File_Data_Zero          = str_repeat('0', $_Installation_ToolKit_Secure_Delete_File_Name);

/*
 ===========================
 + Display File Size
 ===========================
*/

echo ("Calculating File Size...<BR>");

echo ("File Size Is: $_Installation_ToolKit_Secure_Delete_File_Name_Size<BR>");

/*
 ===========================
 + Zero ToolKit File
 ===========================
*/

echo ("Filling Space With Zeros...<BR>");

file_put_contents($_Installation_ToolKit_Secure_Delete_File_Name, $_Installation_ToolKit_Secure_Delete_File_Data_Zero);

/*
 ===========================
 + Delete Self
 ===========================
*/

echo ("Deleting File...<BR>");

unlink($_Installation_ToolKit_Secure_Delete_File_Name);

echo ("This Post Installation ToolKit Has Been Secure-Deleted Successfully.");

} // [ + ] IF_SECURE_DELETE

echo ("
		</BODY>
</HTML>
");
?>
