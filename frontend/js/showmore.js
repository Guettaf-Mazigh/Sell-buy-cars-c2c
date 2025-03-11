let showmore = document.querySelector(".shown");
let current = 3;

showmore.onclick = () => {
  let box = [...document.querySelectorAll(".card-container")];
  for (let i = current; i < current + 3; i++) {
    box[i].style.display = "inline-block";
  }
  current += 3;
  if (current >= box.length) {
    showmore.style.display = "none";
  }
};

