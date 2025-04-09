document
  .getElementById("submitButton")
  .addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the form from submitting immediately

    // Get the form fields
    const title = document.getElementById("title").value.trim(); // Trim spaces from title
    const textarea = tinymce.get("default").getContent().trim(); // Use TinyMCE API to get content

    // Log the values to the console to check what is being captured
    console.log("Title:", title); // Check the value of the title
    console.log("Textarea:", textarea); // Check the value of the textarea

    // Check if any required field is empty
    if (!title || !textarea) {
      // If any field is empty, show an error message
      Swal.fire({
        toast: true,
        title: "Oops!",
        text: "Please fill in all required fields.",
        icon: "error",
        position: "top-end",
        showConfirmButton: false,
        timer: 1500
      });
    } else {
      // If all fields are filled, show the confirmation alert
      Swal.fire({
        toast: true,
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success",
        position: "top-end",
        showConfirmButton: false,
        timer: 1500
      }).then(() => {
        // After SweetAlert closes, trigger the form submission
         setTimeout(function () {
         
          document.getElementById("myForm").submit();
        }, 3000); 
      });
    }
  });
