var flag = "<p style = 'color: red; font-size: 16px; font-family: Didact Gothic, sans-serif;'>*</p>";

$(document).ready(function() {

  var name = document.getElementById("name");
  var email = document.getElementById("email");
  var msg = document.getElementById("msg");

  if (!name) {
    contact_issue(name);
  }

  if (!email) {
    // TODO: Add email flag
  }

  if (!msg) {
    // TODO: Add msg flag
  }

});

function contact_issue(input) {
  $(input).append(flag);
}
