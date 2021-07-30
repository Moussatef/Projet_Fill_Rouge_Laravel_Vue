<template>
  <section class="mx-auto max-w-2xl">
    <h2
      class="text-4xl text-center tracking-wide font-extrabold font-serif leading-loose mb-2"
    >
      Slideshow Gallery
    </h2>
    <div class="shadow-2xl relative">
      <!-- large image on slides -->
      <div class="mySlides hidden">
        <div class="image1 w-full object-cover"></div>
      </div>
      <div class="mySlides hidden">
        <div class="image2 w-full object-cover"></div>
      </div>
      <div class="mySlides hidden">
        <div class="image3 w-full object-cover"></div>
      </div>
      <div class="mySlides hidden">
        <div class="image4 w-full object-cover"></div>
      </div>
      <div class="mySlides hidden">
        <div class="image5 w-full object-cover"></div>
      </div>

      <!-- butttons -->
      <a
        class="absolute left-0 inset-y-0 flex items-center -mt-32 px-4 text-white hover:text-gray-800 cursor-pointer text-3xl font-extrabold"
        onclick="plusSlides(-1)"
        >❮</a
      >
      <a
        class="absolute right-0 inset-y-0 flex items-center -mt-32 px-4 text-white hover:text-gray-800 cursor-pointer text-3xl font-extrabold"
        onclick="plusSlides(1)"
        >❯</a
      >

      <!-- image description -->
      <div
        class="text-center text-white font-light tracking-wider bg-gray-800 py-2"
      >
        <p id="caption"></p>
      </div>

      <!-- smaller images under description -->
      <div class="flex">
        <div>
          <img
            class="image1 description h-24 opacity-50 hover:opacity-100 cursor-pointer"
            src="#"
            onclick="currentSlide(1)"
            alt="Dog's Nose"
          />
        </div>
        <div>
          <img
            class="image2 description h-24 opacity-50 hover:opacity-100 cursor-pointer"
            src="#"
            onclick="currentSlide(2)"
            alt="Lawnmower"
          />
        </div>
        <div>
          <img
            class="image3 description h-24 opacity-50 hover:opacity-100 cursor-pointer"
            src="#"
            onclick="currentSlide(3)"
            alt="Globe"
          />
        </div>
        <div>
          <img
            class="image4 description h-24 opacity-50 hover:opacity-100 cursor-pointer"
            src="#"
            onclick="currentSlide(4)"
            alt="Optical Illusion"
          />
        </div>
        <div>
          <img
            class="image5 description h-24 opacity-50 hover:opacity-100 cursor-pointer"
            src="#"
            onclick="currentSlide(5)"
            alt="Lips"
          />
        </div>
      </div>
    </div>
  </section>
</template>
<script>
export default {
  name: "AppImageSlide",
  methods: {
    slide() {
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides((slideIndex += n));
      }

      function currentSlide(n) {
        showSlides((slideIndex = n));
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("description");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
          slideIndex = 1;
        }
        if (n < 1) {
          slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" opacity-100", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " opacity-100";
        captionText.innerHTML = dots[slideIndex - 1].alt;
      }
    },
  },
};
</script>
