document.addEventListener("DOMContentLoaded", function () {
  const thumbnails = document.querySelectorAll(".thumbnail"); // Get all thumbnail images
  const popup = document.getElementById("popup"); // The popup container
  const popupImage = document.getElementById("popup-image"); // The image inside the popup
  const closePopupButton = document.getElementById("close-popup"); // Close button for the popup

  thumbnails.forEach((thumbnail) => {
    thumbnail.addEventListener("click", function () {
      // Get the image URL of the clicked thumbnail
      const selectedImageUrl = this.src;

      // Set the src of the popup image to the clicked thumbnail's src
      popupImage.src = selectedImageUrl;

      // Show the popup
      popup.classList.remove("hidden");
    });
  });

  closePopupButton.addEventListener("click", function () {
    // Hide the popup when the close button is clicked
    popup.classList.add("hidden");
  });

  // Close the popup when clicking anywhere outside the content
  popup.addEventListener("click", function (e) {
    if (e.target === popup) {
      popup.classList.add("hidden");
    }
  });
});
