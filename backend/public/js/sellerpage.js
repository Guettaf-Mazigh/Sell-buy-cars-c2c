let enable = document.querySelector(".enablee");
let pass = document.querySelector("#password");
enable.onclick = () => {
  pass.removeAttribute("disabled");
  pass.focus();
};
