// Adds a stylesheet to the HTML document for styling purposes.
document.write(
  '<link rel=stylesheet href="news.css" TYPE="text/css" media="screen">'
);

// Function to toggle the visibility of a 'procedure' element.
function toggleProcedure(currProcedure) {
  // Fetch the style properties of the element with the ID "procedure<currProcedure>"
  let thisProcedure = document.getElementById(
    "procedure" + currProcedure
  ).style;

  // Fetch the 'expander' element associated with this 'procedure'
  let thisExpander = document.getElementById("expander" + currProcedure);

  // If the 'procedure' is currently displayed, hide it and update the expander image
  if (thisProcedure.display == "block") {
    thisProcedure.display = "none";
    thisExpander.src = "images/readmore1.gif";
  } else {
    // Otherwise, display the 'procedure' and update the expander image
    thisProcedure.display = "block";
    thisExpander.src = "images/hide2.png";
  }

  // Prevent any default actions
  return false;
}

// Function to toggle the visibility of a 'procedure' element, handling uninitialized states as well.
function toggleProcedureOpen(currProcedure) {
  // Fetch the style properties of the element with the ID "procedure<currProcedure>"
  let thisProcedure = document.getElementById(
    "procedure" + currProcedure
  ).style;

  // Fetch the 'expander' element associated with this 'procedure'
  let thisExpander = document.getElementById("expander" + currProcedure);

  // If the 'procedure' is currently displayed or uninitialized, hide it and update the expander image
  if ((thisProcedure.display == "block") | (thisProcedure.display == "")) {
    thisProcedure.display = "none";
    thisExpander.src = "images/readmore1.gif";
  } else {
    // Otherwise, display the 'procedure' and update the expander image
    thisProcedure.display = "block";
    thisExpander.src = "images/hide2.png";
  }

  // Prevent any default actions
  return false;
}

// End of JavaScript Document (This comment might serve as a placeholder for additional code or explanations)
