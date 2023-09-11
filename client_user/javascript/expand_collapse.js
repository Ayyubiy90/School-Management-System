// Adds a stylesheet to the HTML document for styling.
document.write(
  '<link rel=stylesheet href="news.css" TYPE="text/css" media="screen">'
);

// Function to toggle the display of a procedure based on its current state.
function toggleProcedure(currProcedure) {
  // Get the style properties of the element with the ID "procedure<currProcedure>"
  let thisProcedure = document.getElementById(
    "procedure" + currProcedure
  ).style;

  // Get the element with the ID "expander<currProcedure>"
  let thisExpander = document.getElementById("expander" + currProcedure);

  // Check if the display is set to "block"
  if (thisProcedure.display == "block") {
    // Hide the procedure and change expander image to "readmore.gif"
    thisProcedure.display = "none";
    thisExpander.src = "images/readmore.gif";
  } else {
    // Show the procedure and change expander image to "hide.gif"
    thisProcedure.display = "block";
    thisExpander.src = "images/hide.gif";
  }

  // Prevent default action
  return false;
}

// Function to toggle the display of a procedure, taking into account uninitialized display states.
function toggleProcedureOpen(currProcedure) {
  // Get the style properties of the element with the ID "procedure<currProcedure>"
  let thisProcedure = document.getElementById(
    "procedure" + currProcedure
  ).style;

  // Get the element with the ID "expander<currProcedure>"
  let thisExpander = document.getElementById("expander" + currProcedure);

  // Check if the display is set to "block" or uninitialized ("")
  if ((thisProcedure.display == "block") | (thisProcedure.display == "")) {
    // Hide the procedure and change expander image to "readmore.gif"
    thisProcedure.display = "none";
    thisExpander.src = "images/readmore.gif";
  } else {
    // Show the procedure and change expander image to "hide.gif"
    thisProcedure.display = "block";
    thisExpander.src = "images/hide.gif";
  }

  // Prevent default action
  return false;
}

// JavaScript Document (this comment might be a placeholder for additional code or explanation)
