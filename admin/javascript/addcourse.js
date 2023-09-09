function check() {
  dom = document.addcourseform;

  if (dom.course_name.value == "") {
    alert("Please enter course name");
    dom.name.focus();
    return false;
  }
  if (dom.intake.value == "") {
    alert("Please enter Intake.");
    dom.intake.focus();
    return false;
  }
  if (IsNumeric(dom.intake.value) == false) {
    alert("Intake value should be non Alphabetic");
    dom.intake.focus();
    return false;
  }
  if (dom.duration.value == "") {
    alert("Please enter Duration.");
    dom.duration.focus();
    return false;
  }
  if (IsNumeric(dom.duration.value) == false) {
    alert("Duration value should be non Alphabetic");
    dom.duration.focus();
    return false;
  }
  if (dom.fees.value == "") {
    alert("Please enter Fees.");
    dom.fees.focus();
    return false;
  }
  if (dom.userfile.value == "") {
    alert("Please select file to upload....");
    dom.userfile.focus();
    return false;
  }
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
