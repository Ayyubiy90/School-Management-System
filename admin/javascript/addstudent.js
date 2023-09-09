function check() {
    dom = document.addstudent;

    if (dom.id.value == "") {
        alert("Please enter Student ID");
        dom.id.focus();
        return false;
    }
    if (dom.name.value == "") {
        alert("Please enter Student Name");
        dom.name.focus();
        return false;
    }
    if (dom.standard.value == "") {
        alert("Please enter Standard.");
        dom.standard.focus();
        return false;
    }

    function IsNumeric(strString) {
        // check for valid numeric strings
        var strValidChars = "0123456789.-";
        var strChar;
        var bInResult = true;

        if (strString.length == 0) return false;

        // test strString consists of valid characters listed above
        for (i = 0; i < strString.length && bInResult == true; i++) {
            strChar = strString.charAt(i);
            if (strValidChars.indexOf(strChar) == -1) {
                bInResult = false;
            }
        }
        return bInResult;
    }
}