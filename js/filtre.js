let filter = document.querySelector(".filter1");
let side = document.querySelector(".sidebar");

filter.onclick = () => {
    if (side.style.display === "none" || side.style.display === "") {
        side.style.display = "block";
        side.style.position = "fixed";
    } else {
        side.style.display = "none";
    }
};

document.addEventListener("click", (event) => {
    if (!side.contains(event.target) && event.target !== filter) {
        side.style.display = "none";
    }
});







