let showmore = document.querySelector(".shown");
let showmore1 = document.querySelector(".shownn");
let currentPublished = 3;
let currentPending = 3;

showmore.onclick = () => {
  let box = [...document.querySelectorAll(".carcard:first-of-type .card-container")];
  for (let i = currentPublished; i < currentPublished + 3; i++) {
    if (box[i]) {
      box[i].style.display = "inline-block";
    }
  }
  currentPublished += 3;
  if (currentPublished >= box.length) {
    showmore.style.display = "none";
  }
};

showmore1.onclick = () => {
  let box = [...document.querySelectorAll(".carcard:last-of-type .card-container")];
  for (let i = currentPending; i < currentPending + 3; i++) {
    if (box[i]) {
      box[i].style.display = "inline-block";
    }
  }
  currentPending += 3;
  if (currentPending >= box.length) {
    showmore1.style.display = "none";
  }
};

document.querySelectorAll('.published-cars .card-container')
document.querySelectorAll('.pending-cars .card-container')
