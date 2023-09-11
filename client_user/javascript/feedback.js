// JavaScript Document

// Main function to validate a feedback form
function check() {
  // Getting form by name 'feedbackfrm'
  let dom = document.feedbackfrm;

  // Check if the first name field is empty
  if (dom.fname.value == "") {
    alert("Please Enter First Name.");
    dom.fname.focus();
    return false;
  }

  // Check if the first name is non-numeric
  if (isAlphabetic(dom.fname.value)) {
    alert("First Name should be Non Numeric.");
    dom.fname.focus();
    return false;
  }

  // Check if the last name field is empty
  if (dom.lname.value == "") {
    alert("Please Enter Last Name.");
    dom.lname.focus();
    return false;
  }

  // Check if the last name is non-numeric
  if (isAlphabetic(dom.lname.value)) {
    alert("Last Name should be Non Numeric.");
    dom.lname.focus();
    return false;
  }

  // Check if the age field is empty
  if (dom.age.value == "") {
    alert("Please Enter your Age.");
    dom.age.focus();
    return false;
  }

  // Check if the age is numeric
  if (IsNumeric(dom.age.value) == false) {
    alert("Age should be non Alphabetic.");
    dom.age.focus();
    return false;
  }

  // ... (Same checks for city, state, country, phone, fax)
  if (dom.city.value == "") {
    alert("Plese Enter City.");
    dom.city.focus();
    return false;
  }
  if (isAlphabetic(dom.city.value)) {
    alert("City should be Non Numeric.");
    dom.city.focus();
    return false;
  }

  if (dom.state.value == "") {
    alert("Plese Enter State.");
    dom.state.focus();
    return false;
  }
  if (isAlphabetic(dom.state.value)) {
    alert("State  Name should be Non Numeric.");
    dom.state.focus();
    return false;
  }
  if (dom.country.value == "") {
    alert("Plese Enter Country.");
    dom.country.focus();
    return false;
  }
  if (isAlphabetic(dom.country.value)) {
    alert("Country should be Non Numeric.");
    dom.country.focus();
    return false;
  }
  if (dom.phone.value == "") {
    alert("Plese Enter Phone.");
    dom.phone.focus();
    return false;
  }
  if (IsNumeric(dom.phone.value) == false) {
    alert("Phone no. should be non Alphebetic.");
    dom.phone.focus();
    return false;
  }
  if (dom.fax.value == "") {
    alert("Plese Enter Fax.");
    dom.fax.focus();
    return false;
  }
  if (IsNumeric(dom.fax.value) == false) {
    alert("Fax should be non Alphebetic.");
    dom.fax.focus();
    return false;
  }

  // Check if the email field is empty and valid
  if (dom.email.value == "") {
    alert("Please Enter E-Mail Id.");
    dom.email.focus();
    return false;
  }

  // Validate the email format
  if (emailcheck(dom.email.value)) {
    alert("Please Enter Correct E-Mail.");
    dom.email.focus();
    return false;
  }

  // Check if the comments field is empty
  if (dom.comments.value == "") {
    alert("Please Enter Your Comments.");
    dom.comments.focus();
    return false;
  }
}

// Function to validate email using regex
function emailcheck(email) {
  // Regular expression for email validation
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
    return false;
  }
  return true;
}

// Function to check if the string is numeric
function IsNumeric(strString) {
  // Valid characters in a numeric string
  var strValidChars = "0123456789.-";
  var strChar;
  var blnResult = true;
  // ... (Check each character)
  if (strString.length == 0) return false;
  for (i = 0; i < strString.length && blnResult == true; i++) {
    strChar = strString.charAt(i);
    if (strValidChars.indexOf(strChar) == -1) blnResult = false;
  }
  // Return result
  return blnResult;
}

// Function to check if the string is an integer
function isInteger(s) {
  // Check each character to see if it is a number
  // ...
  var i;
  for (i = 0; i < s.length; i++) {
    // Check that current character is number.
    var c = s.charAt(i);
    if (c < "0" || c > "9") return false;
  }

  // All characters are numbers
  return true;
}

// Function to check if the string is alphabetic
function isAlphabetic(val) {
  // Check if the value contains only alphabets
  if (val.match(/[a-zA-Z]+$/)) {
    return false;
  } else {
    return true;
  }
}
