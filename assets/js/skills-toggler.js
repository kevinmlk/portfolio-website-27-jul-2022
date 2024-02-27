"use strict";

var divs = ["it-skills", "soft-skills", "languages"];
var visibleDivId = null;
function divVisibility(divId) {
    visibleDivId = divId;
  
    hideNonVisibleDivs();
}
function hideNonVisibleDivs() {
  var i, divId, div;
  for(i = 0; i < divs.length; i++) {
    divId = divs[i];
    div = document.getElementById(divId);
    if(visibleDivId === divId) {
      div.style.display = "flex";
    } else {
      div.style.display = "none";
    }
  }
}