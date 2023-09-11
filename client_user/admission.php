<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head>
    <title>::Saurashtra College of engineering &amp; management,rajkot::</title>
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
                        <td colspan="2"><img src="images/banner.gif" width="1023" height="103"></td>
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
                                    <td height="26"><a href="course.php">
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
            <td width="83%" valign="top" bgcolor="#E6FBF4">
                <table width="99%" border="0" cellspacing="1" cellpadding="1" align="center">
                    <tr>
                        <td>
                            <table width="100%" border="0" cellspacing="1" cellpadding="1" align="center" class="border">
                                <tr>
                                    <td bgcolor="#E2F0FE">
                                        <table cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td valign="middle" colspan="4" background="images/header.gif" class=title><img src="images/decoration_head.png" align="absmiddle">&nbsp;&nbsp;Admission-<?php echo date('Y') + 1; ?>&nbsp;&nbsp;<img src="images/decoration_head.png" align="absmiddle"> </td>
                                            </tr>
                                        </table>
                                        <table width="100%" cellpadding="0" cellspacing="5" bgcolor="#E2F0FE">
                                            <tr>

                                            <tr bgcolor="#E2F0FE">
                                                <td height="150" bgcolor="#E2F0FE">
                                                    <table width="62%" align="center" cellpadding="3" cellspacing="1" border="0">

                                                        <tr>
                                                            <td align="center" colspan="2" class="path" background="images/admissionbg.gif"><img src="images/dot.png" border="0" align="texttop">&nbsp;&nbsp;Admission -<?php echo date('Y') + 1; ?>&nbsp;&nbsp;<img src="images/dot.png" border="0" align="texttop"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="16%">&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                        </tr>

                                                        <table width="100%" align="center" cellpadding="3" cellspacing="2">
                                                            <tr>
                                                                <td width="10%" class="path">Roll No </td>
                                                                <td width="27%" class="path">Name</td>
                                                                <td width="17%" class="path">Standard</td>


                                                            </tr>
                                                            <?php
                                                            mysql_connect("localhost", "root", "");
                                                            mysql_select_db("student") or die(" could not connect to DB");
                                                            $sql = "SELECT * from admission";
                                                            $result = mysql_query($sql);
                                                            while ($row = mysql_fetch_array($result)) {
                                                            ?>



                                                                <th>
                                                                    <tr align="center" class="gbg">
                                                                        <td>
                                                                            <div align="center"> <?php printf($row['id']); ?></div>
                                                                        </td>
                                                                        <td><?php printf($row['name']); ?></td>
                                                                        <td><?php printf($row['standard']); ?> </td>
                                                                    </tr>
                                                                </th>
                                                            <?php
                                                            }
                                                            ?>
                                                        </table>
                                                        <tr>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                        <tr>
                                                            <td colspan="2" background="images/admissionbg2.gif">&nbsp;</td>
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
                            <div align="center">&copy; <?php echo date("Y"); ?>Sahjanand Vidhyalay,Rajkot </div>
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