function check() {
  dom = document.addfacultyform;

  if (dom.name.value == "") {
    alert("Plese Enter Faculty Name.");
    dom.name.focus();
    return false;
  }
  if (dom.designation.value == "") {
    alert("Plese Enter Designation.");
    dom.designation.focus();
    return false;
  }
  if (dom.qualification.value == "") {
    alert("Plese Enter Qualificaion.");
    dom.qualification.focus();
    return false;
  }
  if (dom.experience.value == "") {
    alert("Plese Enter Experience.");
    dom.experience.focus();
    return false;
  }

  if (IsNumeric(dom.experience.value) == false) {
    alert("Experience value should be non Alphebetic");
    dom.experience.focus();
    return false;
  }
  if (dom.contact.value == "") {
    alert("Plese Enter Contact Number.");
    dom.contact.focus();
    return false;
  }

  if (IsNumeric(dom.contact.value) == false) {
    alert("Contact number should be non Alphebetic");
    dom.contact.focus();
    return false;
  }

  if (dom.email.value == "") {
    alert("Plese Enter E-Mail Id ");
    dom.email.focus();
    return false;
  }
  if (emailcheck(dom.email.value)) {
    alert("Please Enter Correct E-Mail");
    dom.email.focus();
    return false;
  }
  if (dom.department.value == "select") {
    alert("Plese Select Department.");
    dom.department.focus();
    return false;
  }
}
function emailcheck(email) {
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
    return false;
  }
  return true;
}

function IsNumeric(strString) {
  //  check for valid numeric strings
  var strValidChars = "0123456789.-";
  var strChar;
  var blnResult = true;

  if (strString.length == 0) return false;

  //  test strString consists of valid characters listed above
  for (i = 0; i < strString.length && blnResult == true; i++) {
    strChar = strString.charAt(i);
    if (strValidChars.indexOf(strChar) == -1) {
      blnResult = false;
    }
  }
  return blnResult;
}
