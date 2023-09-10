<?php require_once("adminOnly.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head>
    <title>SCEM Admin panel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="images/title.gif" rel="shortcut icon" type="image/x-icon">
    <script type="text/JavaScript">
        <!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_jumpMenuGo(selName,targ,restore){ //v3.0
  var selObj = MM_findObj(selName); if (selObj) MM_jumpMenu(targ,selObj,restore);
}
//-->
    </script>
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
                                        <table width="100%" height="232" border="0" align="center" cellpadding="1" cellspacing="1" class="border">
                                            <tr>
                                                <td height="201" bgcolor="#F4F4F4">
                                                    <table cellpadding="0" cellspacing="0" width="100%">
                                                        <tr>
                                                            <td valign="middle" colspan="4" class=title>STAFF</td>
                                                        </tr>
                                                    </table>
                                                    <table width="100%" cellpadding="0" cellspacing="5">
                                                        <tr>

                                                        <tr>
                                                            <td height="135">
                                                                <table height="92" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#F4F4F4">
                                                                    <tr class="lgbg">
                                                                        <td width="68" align="center"><a href="add_faculty.php"><img src="images/add_facin.png" width="68" height="38" border="0"></a></td>
                                                                        <td width="245" class="path">Teacher name</td>
                                                                        <td width="85" class="path"><span class="fheader">
                                                                                <font style="font-size:12px"><b>Designations</b></font>
                                                                            </span></td>
                                                                        <td width="105" class="path">Qualification</td>
                                                                        <td width="79" class="path">
                                                                            <font style="font-size:12px"><b>Exp.(years)</b></font>
                                                                        </td>
                                                                        <td width="86" class="path">Contact no.</td>
                                                                        <td width="86" class="path">Email</td>
                                                                        <td width="59" height="50" align="center" class="fheader"><a href="add_faculty.php">
                                                                                <font style="font-size:12px"><b></b></font>
                                                                            </a></td>
                                                                    </tr>
                                                                    <tr class="lgbg">
                                                                        <?php
                                                                        if ($_REQUEST['update']) {

                                                                            $db = mysql_connect("localhost", "root", "");
                                                                            mysql_select_db("student", $db);
                                                                            $sql = "UPDATE  staff SET name='$_POST[name]',designation='$_POST[designation],qualification='$_POST[qualification]',experience='$_POST[experience]',	
contact='$_POST[contact]',emil='$_POST[emil]' WHERE id=$_POST[id]";
                                                                            $result = mysql_query($sql);
                                                                        } else if ($_REQUEST['delete']) {
                                                                            $db = mysql_connect("localhost", "root", "");
                                                                            mysql_select_db("studant", $db);
                                                                            $sql = "DELETE from staff WHERE id=$_POST[id]";
                                                                            $result = mysql_query($sql);
                                                                        }

                                                                        mysql_connect("localhost", "root", "");
                                                                        mysql_select_db("student") or die(" could not connect to DB");
                                                                        $sql = "SELECT * from staff";
                                                                        $result = mysql_query($sql);
                                                                        while ($row = mysql_fetch_array($result)) {

                                                                        ?>


                                                                            <td align="center"></td>
                                                                            <td align="center" bgcolor="#DDDDDD"><input type="Text" class="textbox1" name="name" size="35" value="<?php printf($row['name']); ?>"> </td>
                                                                            <td align="center" bgcolor="#DDDDDD"><input type="Text" class="textbox1" name="designations" size="10" value="<?php printf($row['designation']); ?>"></td>
                                                                            <td align="center" bgcolor="#DDDDDD"><input type="Text" class="textbox1" name="qualification" size="15" value="<?php printf($row['qualification']); ?>"> </td>
                                                                            <td align="center" bgcolor="#DDDDDD"><input type="Text" class="textbox1" name="experience" size="5" value="<?php printf($row['experience']); ?>"> </td>
                                                                            <td align="center" bgcolor="#DDDDDD"><input type="Text" class="textbox1" name="contact" size="15" value="<?php printf($row['contact']); ?>"> </td>
                                                                            <td align="center" bgcolor="#DDDDDD"><input type="Text" class="textbox1" name="email" size="30" value="<?php printf($row['email']); ?>"> </td>
                                                                            </form>
                                                                    </tr>

                                                                <?php
                                                                        }
                                                                ?>

                                                                <td width="6" align="center" class="fheader"> </td>
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
        <tr bgcolor="#999999">
            <td colspan="2" height="20" valign="top" background="images/bottom.gif">
                <table width="95%" border="0" cellspacing="2" cellpadding="1">
                    <tr>
                        <td height="26" align="center" valign="bottom">
                            <div align="center">&copy;Sahjanand Vidhyalay,Rajkot </div>
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