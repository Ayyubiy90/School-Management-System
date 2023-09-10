<?php require_once("adminOnly.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head>
    <title>SCEM Admin panel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="images/title.gif" rel="shortcut icon" type="image/x-icon">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF">
    <table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td valign="top" height="18" colspan="2">
                <style type="text/css">
                    <!--
                    .style1 {
                        color: #336666
                    }
                    -->
                </style>
                <a name="top"></a>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td colspan="2"><img src="images/cellside.gif" width="1050" height="168"></td>
                    </tr>


                    <tr>
                        <td height="2" colspan="2"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td valign="top" colspan="2">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
                    <tr>
                        <td width="13%" background="images/side.gif" valign="top">
                            <style type="text/css">
                                <!--
                                .style1 {
                                    font-size: 13px;
                                    font-weight: bold;
                                    color: #99FF00;
                                }
                                -->
                            </style>
                            <table width="175" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="273" height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">
                                            <font color="#363636" style="font-size:12px">Home</font>
                                        </a></td>
                                </tr>

                                <tr>
                                    <td height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="course.php">
                                            <font color="#363636">Standard</font>
                                        </a></td>
                                </tr>

                                <tr>
                                    <td height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="staff.php">
                                            <font color="#363636">Staff</font>
                                        </a></td>
                                </tr>
                                <tr>
                                    <td height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admission.php">
                                            <font color="#363636" style="font-size:12px">Admission</font>
                                        </a></td>
                                </tr>



                                <tr>
                                    <td height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="adminLogOut.php">
                                            <font color="#363636" style="font-size:12px">Logout</font>
                                        </a></td>
                                </tr>
                                <tr>

                                    <td>&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                        <td width="83%" valign="top">
                            <table width="99%" border="0" cellspacing="1" cellpadding="1" align="center">
                                <tr>
                                    <td>
                                        <table width="100%" border="0" cellspacing="1" cellpadding="1" align="center" class="border">
                                            <tr>
                                                <td bgcolor="#F4F4F4">
                                                    <table cellpadding="0" cellspacing="0" width="100%">
                                                        <tr>
                                                            <td valign="middle" colspan="4" class=title>Standard</td>
                                                        </tr>
                                                    </table>
                                                    <table width="100%" cellpadding="0" cellspacing="5" bgcolor="#F4F4F4">
                                                        <tr>

                                                        <tr>
                                                            <td height="135">
                                                                <table width="71%" align="center" cellpadding="3" cellspacing="2">
                                                                    <tr>
                                                                        <td width="14%" height="47" align="center"><a href="add_course.php"><img src="images/add_course.png" border="0"></a></td>

                                                                        <td width="33%" class="path">Standard</td>
                                                                        <td width="10%" class="path">Intake </td> <br>
                                                                        <td class="path">Fees(/Annum)</td>
                                                                        <td width="10%" class="path">Update </td>
                                                                    </tr>
                                                                    <?php
                                                                    if ($_REQUEST['update']) {
                                                                        $db = mysql_connect("localhost", "root", "");
                                                                        mysql_select_db("student", $db);
                                                                        $sql = "UPDATE standard SET standard_name='$_POST[standard_name]',intake='$_POST[intake]',fees='$_POST[fees]'
		 WHERE id='$_POST[id]'";
                                                                        $result = mysql_query($sql);
                                                                    } else if ($_REQUEST['delete']) {
                                                                        $db = mysql_connect("localhost", "root", "");
                                                                        mysql_select_db("student", $db);
                                                                        $sql = "DELETE from standard WHERE id='$_POST[id]'";
                                                                        $result = mysql_query($sql);
                                                                    }

                                                                    mysql_connect("localhost", "root", "");
                                                                    mysql_select_db("student") or die(" could not connect to DB");
                                                                    $sql = "SELECT * from standard";
                                                                    $result = mysql_query($sql);
                                                                    while ($row = mysql_fetch_array($result)) {

                                                                    ?>

                                                                        <tr align="center">
                                                                            <form name="course" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                                                                <td></td>
                                                                                <input class="textbox1" type="hidden" name="id" value="<?php printf($row['id']); ?>">
                                                                                <td bgcolor="#DDDDDD"><input type="Text" class="textbox1" name="standard_name" size="35" value="<?php printf($row['standard_name']); ?>"> </td>
                                                                                <td bgcolor="#DDDDDD"><input type="Text" class="textbox1" name="intake" size="5" value="<?php printf($row['intake']); ?>"></td>

                                                                                <td bgcolor="#DDDDDD"><input type="Text" class="textbox1" name="fees" size="15" value="<?php printf($row['fees']); ?>"> </td>
                                                                                <td bgcolor="#DDDDDD">
                                                                                    <font face="verdana" style="font-size:12px"></font> <input type="image" src="images/update.gif" name="update" value="update">
                                                                                </td>

                                                                            </form>
                                                                        </tr>

                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </table>


                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" valign="top" height="2"></td>
                    </tr>
                    <tr bgcolor="#999999">
                        <td colspan="2" height="20" valign="top" background="images/bottom.gif">
                            <table width="95%" border="0" cellspacing="2" cellpadding="1">
                                <tr>
                                    <td height="26" align="center" valign="bottom">
                                        <div align="center">&copy;Sahjanand vidhylay,Rajkot </div>
                                    </td>
                                </tr>
                            </table>
                            <div align="center"></div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>