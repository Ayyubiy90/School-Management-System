// Function to validate the 'addfacultyform' form fields
function check() {
  // Store the form object in the 'dom' variable for easier access
  dom = document.addfacultyform;

  // Check if the 'name' field is empty
  if (dom.name.value == "") {
    alert("Please Enter Faculty Name.");
    dom.name.focus(); // Focus back on the 'name' input
    return false;
  }

  // Check if the 'designation' field is empty
  if (dom.designation.value == "") {
    alert("Please Enter Designation.");
    dom.designation.focus(); // Focus back on the 'designation' input
    return false;
  }

  // Check if the 'qualification' field is empty
  if (dom.qualification.value == "") {
    alert("Please Enter Qualification.");
    dom.qualification.focus(); // Focus back on the 'qualification' input
    return false;
  }

  // Check if the 'experience' field is empty
  if (dom.experience.value == "") {
    alert("Please Enter Experience.");
    dom.experience.focus(); // Focus back on the 'experience' input
    return false;
  }

  // Check if the 'experience' field is numeric
  if (IsNumeric(dom.experience.value) == false) {
    alert("Experience value should be non Alphabetic");
    dom.experience.focus();
    return false;
  }

  // Check if the 'contact' field is empty
  if (dom.contact.value == "") {
    alert("Please Enter Contact Number.");
    dom.contact.focus(); // Focus back on the 'contact' input
    return false;
  }

  // Check if the 'contact' field is numeric
  if (IsNumeric(dom.contact.value) == false) {
    alert("Contact number should be non Alphabetic");
    dom.contact.focus();
    return false;
  }

  // Check if the 'email' field is empty
  if (dom.email.value == "") {
    alert("Please Enter E-Mail Id.");
    dom.email.focus(); // Focus back on the 'email' input
    return false;
  }

  // Validate the email format
  if (emailcheck(dom.email.value)) {
    alert("Please Enter Correct E-Mail");
    dom.email.focus();
    return false;
  }

  // Check if a department is selected
  if (dom.department.value == "select") {
    alert("Please Select Department.");
    dom.department.focus(); // Focus back on the 'department' input
    return false;
  }
}

// Function to validate email format
function emailcheck(email) {
  // Regular expression for email validation
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
    return false; // Return false if the email is valid
  }
  return true; // Return true if the email is invalid
}

// Function to check if a given string is numeric
function IsNumeric(strString) {
  // Define valid numeric characters
  var strValidChars = "0123456789.-";
  var strChar;
  var blnResult = true;

  // If the string is empty, return false
  if (strString.length == 0) return false;

  // Loop through each character to check if it's a valid numeric character
  for (i = 0; i < strString.length && blnResult == true; i++) {
    strChar = strString.charAt(i);
    if (strValidChars.indexOf(strChar) == -1) {
      blnResult = false;
    }
  }
  return blnResult; // Return the result (true if numeric, false otherwise)
}
