<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head>
    <title>::SAHJANAND VIDHAYALAY,RAJKOT::</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="images/title.gif" rel="shortcut icon" type="image/x-icon">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#E2F0FE">
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
                        <td colspan="2"><img src="images/banner.gif" width="1021" height="103"></td>
                    </tr>
                    <tr>
                        <td height="2" colspan="2"></td>
                    </tr>
                    <tr>
                        <td height="2" colspan="2"></td>
                    </tr>
                    <tr>
                        <td height="21" colspan="2" align="right" background="images/toplinkbg.gif">
                            <p>&nbsp;&nbsp;&nbsp; <a href="index.php"><img src="images/link_home.gif" align="middle" border="0"><img src="images/separator.gif" align="middle" border="0"></a><a href="about.php"><img src="images/link_about.gif" align="middle" border="0"><img src="images/separator.gif" align="middle" border="0"></a><a href="contact.php"><img src="images/link_contact.gif" align="middle" border="0"></a> </p>
                        </td>
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
                        <td width="16%" background="images/side.gif" valign="top">
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
                                    <td height="26"><a href="index.php">
                                            <font size="+1">Home</font>
                                        </a></td>
                                </tr>
                                <tr>
                                    <td height="26"><a href="about.php">
                                            <font size="+1">About us</font>
                                        </a></td>
                                </tr>
                                <tr>
                                    <td height="26"><a href="standard.php">
                                            <font size="+1">Standard</font>
                                        </a></td>
                                </tr>
                                <tr>
                                    <td height="26"><a href="STAFF.php">
                                            <font size="+1">Staff</font>
                                        </a></td>
                                </tr>
                                <tr>
                                    <td height="26"><a href="admission.php">
                                            <font size="+1">Admission</font>
                                        </a></td>
                                </tr>

                                <tr>
                                    <td height="26"><a href="activity.php">
                                            <font size="+1">StudentActivity</font>
                                        </a></td>
                                </tr>
                                <tr>
                                    <td height="26"><a href="contact.php">
                                            <font size="+1">Contact us</font>
                                        </a></td>
                                </tr>
                                <tr>
                                    <td height="26"><a href="feedback.php">
                                            <font size="+1">Feedback</font>
                                        </a></td>
                                </tr>
                                <td>&nbsp;</td>
                    </tr>
                </table>
            </td>
            <td width="84%" valign="top" bgcolor="#E6FBF4">
                <table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                        <td>
                            <table width="100%" border="0" cellspacing="1" cellpadding="0" align="center" class="border">
                                <tr>
                                    <td>
                                        <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#E2F0FE">
                                            <tr>
                                                <td valign="middle" colspan="4" background="images/header.gif" class=title><img src="images/decoration_head.png" align="absmiddle">&nbsp;&nbsp;Standard&nbsp;&nbsp;<img src="images/decoration_head.png" align="absmiddle"></td>
                                            </tr>
                                        </table>
                                        <table width="100%" cellpadding="0" cellspacing="5" bgcolor="#E2F0FE">


                                            <tr>
                                                <td height="135">
                                                    <table width="70%" align="center" cellpadding="3" cellspacing="2" bgcolor="#E2F0FE">
                                                        <tr>
                                                            <td colspan="5" align="center" background="images/admissionbg.gif"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="path">Standard </td>
                                                            <td class="path">Intake </td>
                                                            <td class="path">Fees(/year)</td>
                                                        </tr>
                                                        <?php
                                                        mysql_connect("localhost", "root", "");
                                                        mysql_select_db("student") or die(" could not connect to DB");
                                                        $sql = "SELECT * from standard";
                                                        $result = mysql_query($sql);
                                                        while ($row = mysql_fetch_array($result)) {

                                                        ?>

                                                            <th>
                                                                <tr align="center" class="gbg">

                                                                    <td>
                                                                        <div align="center">
                                                                            <font face="verdana" style="font-size:11px"><?php printf($row['standard_name']); ?></font>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <font face="verdana" style="font-size:11px"><?php printf($row['intake']); ?></font>
                                                                    </td>

                                                                    <td>
                                                                        <font face="verdana" style="font-size:11px"><?php printf($row['fees']); ?></font>
                                                                    </td>
                                                </td>
                                            </tr>

                                        <?php
                                                        }
                                        ?>
                                        <th colspan="5">
                                            <tr align="center">
                                                <td colspan="5" background="images/admissionbg3.gif">&nbsp;</td>
                                            </tr>
                                        </th>
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
    <tr>
        <td colspan="2" height="20" valign="top">
            <table width="100%" border="0" cellspacing="1" cellpadding="1" background="images/bottom.gif">
                <tr>
                    <td height="26" align="center" valign="bottom">
                        <div align="center">&copy; SAHJANAND VIDHAYALAY,RAJKOT </div>
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