var imageSources = ["profilepic.jpg", "basketballpic.jpg", "thirdpic.jpg"];
var currentImageIndex = 0;

function updateImage() {
  var image = document.getElementById("slideshow-image");
  image.style.opacity = 0;
  
  setTimeout(function () {
    image.src = imageSources[currentImageIndex];
    image.style.opacity = 1;
    currentImageIndex = (currentImageIndex + 1) % imageSources.length;
  }, 500);
}

function toggleMoreDetails() {
  var moreDetails = document.getElementById("more-details");
  var buttonText = document.getElementById("show-more-btn");

  if (moreDetails.style.display === "none") {
    moreDetails.style.display = "block";
    buttonText.innerText = "Show Less";
  } else {
    moreDetails.style.display = "none";
    buttonText.innerText = "Show More";
  }
}
function goToNextPage() {
// Change the URL to the path of your blank HTML page
window.location.href = "nextPage.html";
}

setInterval(updateImage, 2000);