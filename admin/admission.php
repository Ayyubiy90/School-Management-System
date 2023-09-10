<?php
// Include file that restricts access to admin only
require_once("adminOnly.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head>
    <!-- Meta and title tags -->
    <title>SCEM Admin panel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

    <!-- CSS and favicon -->
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="images/title.gif" rel="shortcut icon" type="image/x-icon">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF">

    <!-- Main table layout -->
    <table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <!-- Header section -->
        <tr>
            <td valign="top" height="18" colspan="2">
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td colspan="2"><img src="images/cellside.gif" width="1050" height="168"></td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Sidebar and Content section -->
        <tr>
            <td valign="top" colspan="2">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
                    <!-- Sidebar -->
                    <tr>
                        <td width="13%" background="images/side.gif" valign="top">
                            <table width="160" border="0" cellspacing="0" cellpadding="0">
                                <!-- Sidebar links -->
                                <!-- ... -->
                            </table>
                        </td>

                        <!-- Main content -->
                        <td width="83%" valign="top">
                            <table width="99%" border="0" cellspacing="1" cellpadding="1" align="center">
                                <tr>
                                    <td>
                                        <table width="100%" border="0" cellspacing="1" cellpadding="1" align="center" class="border">
                                            <!-- Main content inside -->
                                            <!-- ... -->
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Footer section -->
        <tr bgcolor="#999999">
            <td colspan="2" height="20" valign="top" background="images/bottom.gif">
                <table width="95%" border="0" cellspacing="2" cellpadding="1">
                    <tr>
                        <td height="26" align="center" valign="bottom">
                            <!-- Copyright info -->
                            <div align="center">&copy;Sahjanand Vidhyalay,rajkot </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</body>

</html>