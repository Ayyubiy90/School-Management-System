// Function to handle deletion of all rows
function del_all() {
  // Access the 'deleteall' form in the document
  dom = deleteall.document;

  // Show a confirmation prompt asking if the user really wants to delete all rows
  if (this.confirm("Do you really want to Delete All Rows ?") == false) {
    return false; // If user selects 'Cancel', function will return false
  } else {
    return true; // If user selects 'OK', function will return true, allowing the deletion to proceed
  }
}
