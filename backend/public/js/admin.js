const body = document.querySelector("body"),
  modeToggle = body.querySelector(".mode-toggle");
sidebar = body.querySelector("nav");
sidebarToggle = body.querySelector(".sidebar-toggle");
let getStatus = localStorage.getItem("status");
if (getStatus && getStatus === "close") {
  sidebar.classList.toggle("close");
}

sidebarToggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
  if (sidebar.classList.contains("close")) {
    localStorage.setItem("status", "close");
  } else {
    localStorage.setItem("status", "open");
  }
});

document.querySelectorAll(".acs ").forEach((button) => {
  button.addEventListener("click", () => {
    Swal.fire({
      toast: true,
      title: "Bravo !",
      text: "The Car has been added",
      icon: "success",
    });
  });
});

document.querySelectorAll(".not").forEach((button) => {
  button.addEventListener("click", () => {
    Swal.fire({
      toast: true,
      title: "Are you sure?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          toast: true,
          title: "Deleted!",
          text: "Your file has been deleted.",
          icon: "success",
        });
      }
    });
  });
});

document.querySelectorAll(".sign2").forEach((button) => {
  button.addEventListener("click", async () => {
    const { value: text } = await Swal.fire({
      toast: true,
      title: "Send a message to seller",
      input: "textarea",
      inputLabel: "Message",
      inputPlaceholder: "Type your message...",
      showCancelButton: true,
    });

    if (text) {
      // Save the message to localStorage
      localStorage.setItem("sellerMessage", text);

      Swal.fire({
        toast: true,
        icon: "success",
        title: "Message sended",
      });
    }
  });
});

document.getElementById("logout").addEventListener("click", () => {
  Swal.fire({
    toast: true,
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, log out!",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        toast: true,
        title: "Logged out!",
        text: "You have been logged out successfully.",
        icon: "success",
      });
    }
  });
});

document
  .getElementById("submitButton")
  .addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the form from submitting immediately

    // Get the form fields
    const brand = document.getElementById("brand").value;
    const email = document.getElementById("model").value;

    // Check if any required field is empty
    if (!brand || !model) {
      // If any field is empty, show an error message
      Swal.fire({
        toast: true,
        title: "Oops!",
        text: "Please fill in all required fields.",
        icon: "error",
      });
    } else {
      // If all fields are filled, show the confirmation alert
      Swal.fire({
        toast: true,
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success",
      }).then(() => {
        // After SweetAlert closes, trigger the form submission
        document.getElementById("myForm").submit();
      });
    }
  });
