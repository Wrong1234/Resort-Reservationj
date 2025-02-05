<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modal Image Slider</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    /* Gallery */
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
            text-align: center;
        }
        .gallery {
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        .gallery-img {
        width: 30%;
        cursor: pointer;
        transition: 0.3s;
        }

        .gallery-img:hover {
        opacity: 0.7;
        }

        /* Modal */
        .modal {
        display: none; 
        position: fixed; 
        z-index: 1; 
        padding-top: 100px; 
        left: 0;
        top: 0;
        width: 100%; 
        height: 100%; 
        background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .mySlides {
        display: none;
        text-align: center;
        }

        .mySlides img {
        max-width: 80%;
        max-height: 80%;
        }

        /* Close button */
        .close {
        position: absolute;
        top: 10px;
        right: 25px;
        color: #fff;
        font-size: 35px;
        cursor: pointer;
        }

        /* Navigation buttons */
        .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        user-select: none;
        }

        .prev {
        left: 0;
        }

        .next {
        right: 0;
        }

  </style>
</head>
<body>

  <!-- Image gallery -->
  <div class="gallery">
    <img src="images/1.jpg" alt="Image 1" class="gallery-img" onclick="openModal(); currentSlide(1)">
  </div>

  <!-- The Modal -->
  <div id="myModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <div class="modal-content">

      <!-- Slides -->
      <div class="mySlides">
        <img src="images/1.jpg" alt="Image 1">
      </div>

      <div class="mySlides">
        <img src="images/2.jpg" alt="Image 2">
      </div>

      <div class="mySlides">
        <img src="images/5.jpg" alt="Image 3">
      </div>

      <!-- Navigation buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
  </div>

 <script>
    // Open the modal
        function openModal() {
        document.getElementById("myModal").style.display = "block";
        }

        // Close the modal
        function closeModal() {
        document.getElementById("myModal").style.display = "none";
        }

        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        let i;
        const slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
        }

 </script>
</body>
</html>
