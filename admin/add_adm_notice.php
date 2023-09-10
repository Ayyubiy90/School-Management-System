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
                            <table width="160" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">
                                            <font color="#363636" style="font-size:12px">Home</font>
                                        </a></td>
                                </tr>

                                <tr>
                                    <td height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="course.php">
                                            <font color="#363636">Standards</font>
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
                                                <td height="225" bgcolor="#F4F4F4">
                                                    <table cellpadding="0" cellspacing="0" width="100%">
                                                        <tr>
                                                            <td valign="middle" colspan="4" class=title>Add Admission </td>
                                                        </tr>
                                                    </table>
                                                    <table width="100%" cellpadding="0" cellspacing="21" bgcolor="#F4F4F4">
                                                        <tr>
                                                            <td height="130">
                                                                <a href="admission.php"><img src="images/back.png" border="0" align="absmiddle"></a>
                                                                <?php
                                                                if ($_REQUEST['submit']) {


                                                                    echo '<pre>';
                                                                    $db = mysql_connect("localhost", "root", "");
                                                                    mysql_select_db("student", $db);
                                                                    $sql = "INSERT INTO admission 
			VALUES('$_POST[id]','$_POST[name]','$_POST[standard]')";
                                                                    $result = mysql_query($sql);
                                                                    echo '<font face="verdana" color="#336666">';
                                                                    echo '<u>';
                                                                    echo $db;
                                                                    echo '</u>';
                                                                    echo "  added successfully....";
                                                                    echo '</font>';
                                                                } else {
                                                                    echo '<font face="verdana" color="#336666">';
                                                                    echo "No file chosen..\n";
                                                                    echo '</font>';
                                                                }

                                                                print "</pre>";

                                                                ?>
                                                                <script language="javascript" src="javascript/add_admission.js"></script>
                                                                <form name="admissionform" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                                                    <table width="90%" align="center" border="0" cellspacing="4" cellpadding="4">
                                                                        <tr class="lgbg">
                                                                            <td width="286" align="right" class="fheader">
                                                                                <font style="font-size:12px"><b>name</b></font>
                                                                            </td>
                                                                            <td width="6" class="formfontcaps">
                                                                                <font face="Arial" size="+1">:</font>
                                                                            </td>
                                                                            <td width="390"><input type="text" name="name" size="50" /></td>
                                                                        </tr>
                                                                        <tr class="lgbg">
                                                                            <td width="286" align="right" class="fheader">
                                                                                <font style="font-size:12px"><b>standard</b></font>
                                                                            </td>
                                                                            <td width="6" class="formfontcaps">
                                                                                <font face="Arial" size="+1">:</font>
                                                                            </td>
                                                                            <td width="390"><select name="standard" class="listmenu">
                                                                                    <option>select</option>
                                                                                    <option>FIRST</option>
                                                                                    <option>SECOND</option>
                                                                                    <option>THIRD</option>
                                                                                    <option>FOURTH</option>
                                                                                    <option>FIFTH</option>
                                                                                    <option>SIXTH</option>
                                                                                    <option>SEVENTH</option>
                                                                                    <option>EIGHT</option>
                                                                                    <option>NINTH</option>
                                                                                    <option>TENTH</option>
                                                                                    <option>ELEVAN</option>
                                                                                    <option>TWELTH</option>
                                                                                </select></td>
                                                                        </tr>
                                                                    </table>

                                                                    <table width="56%" align="left" border="0" cellspacing="4" cellpadding="4">

                                                                        <tr>
                                                                            <td width="79%">&nbsp;</td>
                                                                            <td width="21%"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td align="center"><input type="submit" name="submit" value="Submit" onClick="return check()" /></td>
                                                                        </tr>
                                                                    </table>

                                                                </form>




                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>