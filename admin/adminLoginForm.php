<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head>
    <!-- Page title -->
    <title>Login to Admin panel of sahjanand vidhyalay</title>
    <!-- Meta charset -->
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="window.document.adminLoginForm.formuser.focus()" bgcolor="#F4F4F4">
    <!-- Header image -->
    <table width="100%" height="22%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr valign="top">
            <td colspan="2"><img src="images/cellside.gif" width="1050" height="168"></td>
        </tr>
    </table>

    <!-- Admin Login Form -->
    <table width="27%" align="center" vspace="30" cellspacing="0">
        <form method="post" name="adminLoginForm" action="adminLogin.php">
            <!-- Various Rows for Spacing and Titles -->
            <tr>
                <!-- Admin Login Title -->
                <td colspan="3">
                    <font face="verdana" color="#009999" style="font-size:14px"><u><b>Admin Login</b></u></font>
                </td>
            </tr>

            <!-- User Name Input -->
            <tr class="lgbg">
                <td align="right">
                    <font face="verdana" style="font-size:12px" color="#6A6A6A"><b>User Name</b></font>
                </td>
                <td align="center">:</td>
                <td>
                    <!-- PHP variable for username -->
                    <input type="text" name="formuser" value="<?php echo $formuser; ?>">
                </td>
            </tr>

            <!-- Password Input -->
            <tr class="lgbg">
                <td align="right">
                    <font face="verdana" style="font-size:12px" color="#6A6A6A"><b>Password</b></font>
                </td>
                <td align="center">:</td>
                <td>
                    <!-- PHP variable for password -->
                    <input type="password" name="formpassword" value="<?php echo $formpassword; ?>">
                </td>
            </tr>

            <!-- Login Button -->
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>
                    <input class="listmenu" type="submit" name="submit" value="Login">
                </td>
            </tr>
        </form>
    </table>
</body>

</html>