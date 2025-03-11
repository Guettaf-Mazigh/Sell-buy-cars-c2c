let nameofca = document.getElementById("nameofca"); // Remove the #
let put = document.getElementById("searchcar"); // Remove the #
let search = document.querySelector(".search");

search.onclick = () => {
  let box = [...document.querySelectorAll(".card-container")];
  let searchValue = put.value.trim().toLowerCase(); // Trim whitespace and make it case-insensitive

  box.forEach((card) => {
    let cardText = card.textContent.trim().toLowerCase(); // Get text content of the card
    if (cardText.includes(searchValue)) {
      card.style.display = "block"; // Show matching cards
    } else {
      card.style.display = "none"; // Hide non-matching cards
    }
  });
};
