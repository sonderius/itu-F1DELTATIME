var login_window = document.getElementById("login_window");
var login_window_button = document.getElementById("login_window_button");
var login_window_close = document.getElementsByClassName("login_window_close")[0];

var incorrect_window = document.getElementById("incorrect_window");
var incorrect_window_button = document.getElementById("incorrect_window_button");

var register_window = document.getElementById("register_window");
var register_window_button = document.getElementById("register_window_button");
var register_window_close = document.getElementsByClassName("register_window_close")[0];

login_window_button.onclick = function() {
  login_window.style.display = "block";
}

login_window_close.onclick = function() {
  login_window.style.display = "none";
}

login_window.onclick = function(event) {
  if (event.target == login_window) {
    login_window.style.display = "none";
  }
}



incorrect_window_button.onclick = function() {
    duplicate_user_window.style.display = "none";
}


incorrect_window.onclick = function(event) {
  if (event.target == incorrect_window) {
    incorrect_window.style.display = "none";
  }
}



register_window_button.onclick = function() {
    login_window.style.display = "none";
    register_window.style.display = "block";
}

register_window_close.onclick = function() {
  register_window.style.display = "none";
}

register_window.onclick = function(event) {
  if (event.target == register_window) {
    register_window.style.display = "none";
  }
}


