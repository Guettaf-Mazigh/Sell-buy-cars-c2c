let enable = document.querySelector(".enablee");
let pass = document.querySelector("#password");
let pass1 = document.querySelector("#passwordconf");
enable.onclick = () => {
  pass.removeAttribute("disabled");
  pass.focus();
  pass1.removeAttribute("disabled");
};

let sold = document.getElementById("sold");

sold.onclick = () => {
  // Create the replacement span element
  const spanWrapper = document.createElement("span");
  spanWrapper.className = "img__wrapper";

  const soldOutText = document.createElement("span");
  soldOutText.className = "sold_out1";
  soldOutText.textContent = "sold out";

  // Nest the text span inside the wrapper
  spanWrapper.appendChild(soldOutText);

  // Replace the button with the new span
  sold.replaceWith(spanWrapper);
};
