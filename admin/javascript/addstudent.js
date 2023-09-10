// Function to validate the 'addstudent' form fields
function check() {
  // Store the form object in the 'dom' variable for easier access
  dom = document.addstudent;

  // Check if the 'id' field is empty
  if (dom.id.value == "") {
    alert("Please enter Student ID");
    dom.id.focus(); // Focus back on the 'id' input field
    return false;
  }

  // Check if the 'name' field is empty
  if (dom.name.value == "") {
    alert("Please enter Student Name");
    dom.name.focus(); // Focus back on the 'name' input field
    return false;
  }

  // Check if the 'standard' field is empty
  if (dom.standard.value == "") {
    alert("Please enter Standard.");
    dom.standard.focus(); // Focus back on the 'standard' input field
    return false;
  }

  // Nested function to check if a given string is numeric
  function IsNumeric(strString) {
    // Define valid numeric characters
    var strValidChars = "0123456789.-";
    var strChar;
    var bInResult = true;

    // If the string is empty, return false
    if (strString.length == 0) return false;

    // Loop through each character to check if it's a valid numeric character
    for (i = 0; i < strString.length && bInResult == true; i++) {
      strChar = strString.charAt(i);
      if (strValidChars.indexOf(strChar) == -1) {
        bInResult = false;
      }
    }
    return bInResult; // Return the result (true if numeric, false otherwise)
  }
}
