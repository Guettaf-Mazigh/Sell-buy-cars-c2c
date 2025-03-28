let enable = document.querySelector(".enablee");
let pass = document.querySelector("#password");
let pass1 = document.querySelector("#passwordconf");
enable.onclick = () => {
  pass.removeAttribute("disabled");
  pass.focus();
  pass1.removeAttribute("disabled");
};
