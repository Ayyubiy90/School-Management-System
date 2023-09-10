<HTML>

<HEAD>
    <TITLE>DodoUpload - simple easy fast</TITLE>
    <meta http-equiv="Content-Type" CONTENT="text/html; charset=iso-8859-1" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta http-equiv="Pragma" content="no-cache" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font: 75% Helvetica, Arial, sans-serif;
            color: #474B4E;
            background: #fff;

        }

        a {
            color: #6FB0E2;
            font-weight: bold;
            text-decoration: none;

        }

        a:visited {
            color: #33595E;
            font-weight: bold;
        }

        a:hover {
            text-decoration: none;
            color: #0094F0;
        }

        p {
            margin: 0 0 1em 0;
            font-size: 80%;
        }

        #container {
            margin: 10px;
            text-align: center;
        }

        img,
        form {
            border: 0;
            margin: 0;
        }

        h1 {
            margin: 0;
            color: #7B8186;
            font-size: 90%;
            text-transform: uppercase;
        }

        h1 a {
            color: #7B8186;
        }

        .formtext {
            font-size: 100%;
            font-weight: bold;
        }

        .othertext {
            font-size: 80%;
        }

        .bottombutton {
            font-family: verdana, sans-serif;
            font-size: 12px;
            font-weight: bold;
            text-decoration: none;
            color: white;
            background-color: #0088BB;
            border-style: inset;
            border-color: #0088BB;
            margin: 0px;
            margin-top: 3px;
            letter-spacing: 0px;
            text-transform: uppercase;
            padding: 5px;
            padding-top: 3px;
            padding-bottom: 3px;
        }


        .input {
            background-color: #E5F8FF;
            border: 1px solid #0077BB;
        }

        .tableheader {
            background-color: #999999;
            padding: 3px;
            font-family: Georgia;
        }


        .tableheader a {
            color: #33595E;
            font-weight: bold;
            text-decoration: none;

        }

        .tableheader a:visited {
            color: #000000;
            font-weight: bold;
        }

        .tableheader a:hover {
            text-decoration: none;
            color: #0094F0;
        }


        .table {
            border: 1px solid #0088BB;
            padding: 0px;
        }
    </style>


    <script language="javascript">
        // if you remove this, check all function will no longer work

        ie = document.all ? 1 : 0
        ns4 = document.layers ? 1 : 0
        var SectionCheck = 1;
        SectionArr = new Array();

        function doGlobalCeckAll() {
            for (EBF = 1; EBF < SectionCheck; EBF++) {
                var SectionID = "ID" + EBF;
                doCheckCheckAll(SectionID);
            }
        }

        function doCheckCheckAll(section) {
            var CBName = "C" + section;
            if (ns4) {
                var WrkSec = document.SO;
                var CheckCounter = 0;
                var Spos = 0;
                section = section.slice(2);
                var IsChecked = "";
                for (SposI = 1; SposI < section; SposI++) {
                    Spos = Spos + SectionArr[SposI];
                }
                for (i = 0; i < WrkSec.length; i++) {
                    if (WrkSec.elements[i].name == "provider") {
                        if ((CheckCounter >= Spos) && (CheckCounter < Spos + SectionArr[section])) {
                            if (WrkSec.elements[i].checked == false)
                                IsChecked = 1;
                        }
                        CheckCounter++;
                    }
                }
                if (IsChecked)
                    WrkSec.elements[CBName].checked = false;
                else
                    WrkSec.elements[CBName].checked = true;
            } else {
                if (ie) {
                    var WrkSec = document.all[section].all.tags("input");
                    var CBState = document.all[CBName];
                } else {
                    var WrkSec = document.getElementById(section).getElementsByTagName("input");
                    var CBState = document.getElementById(CBName);
                }
                var IsChecked = "";
                for (i = 1; i < WrkSec.length; i++) {
                    if (WrkSec[i].checked == false)
                        IsChecked = 1;
                }
                if (IsChecked)
                    CBState.checked = false;
                else
                    CBState.checked = true;
            }
        }

        function doCheckAll(section) {
            var CBName = "C" + section;
            if (ns4) {
                var WrkSec = document.SO;
                var CheckCounter = 0;
                var Spos = 0;
                section = section.slice(2);
                for (SposI = 1; SposI < section; SposI++) {
                    Spos = Spos + SectionArr[SposI];
                }
                for (i = 0; i < WrkSec.length; i++) {
                    if (WrkSec.elements[i].name == "provider") {
                        if ((CheckCounter >= Spos) && (CheckCounter < Spos + SectionArr[section])) {
                            WrkSec.elements[i].checked = WrkSec.elements[CBName].checked;
                        }
                        CheckCounter++;
                    }
                }
            } else {
                if (ie) {
                    var WrkSec = document.all[section].all.tags("input");
                    var CBState = document.all[CBName].checked;
                } else {
                    var WrkSec = document.getElementById(section).getElementsByTagName("input");
                    var CBState = document.getElementById(CBName).checked;
                }
                for (i = 0; i < WrkSec.length; i++) {
                    WrkSec[i].checked = CBState;
                }
            }
        }
    </script>
</HEAD>

<BODY>
    <center>
        <TABLE WIDTH=723 BORDER=0 CELLPADDING=0 CELLSPACING=0 height="100%">
            <TR>
                <TD height="79">
                </TD>
                <TD height="79">
                </TD>
                <TD height="79">
                </TD>
            </TR>
            <TR>
                <TD>&nbsp;</TD>
                <TD valign="top">
                    <div id="container">