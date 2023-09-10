// Function to validate the 'addcourseform' form fields
function check() {
  // Store the form object in the 'dom' variable for easier access
  dom = document.addcourseform;

  // Check if the 'course_name' field is empty
  if (dom.course_name.value == "") {
    alert("Please enter course name");
    dom.name.focus(); // Focus the cursor back on the 'course_name' input
    return false; // Stop the form submission
  }

  // Check if the 'intake' field is empty
  if (dom.intake.value == "") {
    alert("Please enter Intake.");
    dom.intake.focus(); // Focus the cursor back on the 'intake' input
    return false; // Stop the form submission
  }

  // Check if the 'intake' field is numeric
  if (IsNumeric(dom.intake.value) == false) {
    alert("Intake value should be non Alphabetic");
    dom.intake.focus();
    return false;
  }

  // Check if the 'duration' field is empty
  if (dom.duration.value == "") {
    alert("Please enter Duration.");
    dom.duration.focus(); // Focus the cursor back on the 'duration' input
    return false; // Stop the form submission
  }

  // Check if the 'duration' field is numeric
  if (IsNumeric(dom.duration.value) == false) {
    alert("Duration value should be non Alphabetic");
    dom.duration.focus();
    return false;
  }

  // Check if the 'fees' field is empty
  if (dom.fees.value == "") {
    alert("Please enter Fees.");
    dom.fees.focus(); // Focus the cursor back on the 'fees' input
    return false; // Stop the form submission
  }

  // Check if the 'userfile' field is empty (i.e., no file uploaded)
  if (dom.userfile.value == "") {
    alert("Please select file to upload....");
    dom.userfile.focus(); // Focus the cursor back on the 'userfile' input
    return false; // Stop the form submission
  }
}

// Function to check if a given string is numeric
function IsNumeric(strString) {
  // Define valid numeric characters
  var strValidChars = "0123456789.-";
  var strChar;
  var bInResult = true;

  // If the string is empty, return false
  if (strString.length == 0) return false;

  // Loop through each character in the string to check if it's a valid numeric character
  for (i = 0; i < strString.length && bInResult == true; i++) {
    strChar = strString.charAt(i);
    if (strValidChars.indexOf(strChar) == -1) {
      bInResult = false;
    }
  }
  return bInResult; // Return the final result (true if numeric, false otherwise)
}
