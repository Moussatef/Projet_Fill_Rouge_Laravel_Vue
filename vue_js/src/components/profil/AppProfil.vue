<template>
  <div class="bg-white lg:px-44 sm:px-2 shadow">
    <div
      class="relative h-96 rounded-xl flex justify-center sm:max-w-screen-sm     md:max-w-full"
    >
      <img
        v-if="
          cover != 'http://127.0.0.1:8000/storage/cover/' &&
            cover != 'http://127.0.0.1:8000/storage/cover' &&
            img_src == false
        "
        :src="cover"
        class="object-cover w-full h-full rounded-3xl"
        alt="cover"
      />
      <img
        v-if="img_src == true"
        :src="imagepreview"
        class="object-cover w-full h-full rounded-3xl"
        alt="cover need"
        id="cover"
      />
      <label
        @click="$refs.cover_img.click()"
        class="sm:absolute cursor-pointer h-5 w-5 p-2 rounded-full border-2 border-gray-500  bg-indigo-600 "
      >
        <svg
          class="h-5 w-5 "
          height="512pt"
          viewBox="0 -18 512 512"
          width="512pt"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="m512 80v106c0 11.046875-8.953125 20-20 20s-20-8.953125-20-20v-106c0-22.054688-17.945312-40-40-40h-352c-22.054688 0-40 17.945312-40 40v280c0 22.054688 17.945312 40 40 40h140c11.046875 0 20 8.953125 20 20s-8.953125 20-20 20h-140c-44.113281 0-80-35.886719-80-80v-280c0-44.113281 35.886719-80 80-80h352c44.113281 0 80 35.886719 80 80zm-428.105469 245.933594c8.800781 6.675781 21.34375 4.957031 28.023438-3.84375l28.40625-37.433594 52.773437 66.746094c3.792969 4.800781 9.574219 7.597656 15.6875 7.597656h.023438c6.125-.007812 11.90625-2.820312 15.695312-7.632812l153.859375-195.488282 31.207031 37.84375c7.023438 8.523438 19.628907 9.734375 28.152344 2.707032 8.523438-7.027344 9.734375-19.632813 2.707032-28.152344l-47-57c-3.851563-4.671875-9.601563-7.355469-15.65625-7.277344-6.050782.070312-11.746094 2.875-15.492188 7.628906l-153.53125 195.078125-53.0625-67.113281c-3.835938-4.851562-9.683594-7.621094-15.886719-7.59375-6.183593.0625-11.992187 2.980469-15.734375 7.910156l-44.011718 58c-6.679688 8.796875-4.957032 21.34375 3.839843 28.023438zm-3.894531-193.933594c0-33.085938 26.914062-60 60-60s60 26.914062 60 60-26.914062 60-60 60-60-26.914062-60-60zm40 0c0 11.027344 8.972656 20 20 20s20-8.972656 20-20-8.972656-20-20-20-20 8.972656-20 20zm374.425781 121.574219c23.394531 23.394531 23.394531 61.457031 0 84.851562l-109.570312 109.367188c-2.441407 2.4375-5.46875 4.199219-8.792969 5.117187l-80.722656 22.363282c-1.765625.488281-3.558594.726562-5.339844.726562-5.316406 0-10.5-2.121094-14.316406-6.035156-5.09375-5.21875-6.941406-12.800782-4.820313-19.777344l23.914063-78.726562c.957031-3.152344 2.675781-6.019532 5.007812-8.34375l109.804688-109.5625c23.378906-23.375 61.441406-23.375 84.835937.019531zm-60.457031 88.679687-28.289062-28.289062-74.089844 73.925781-11.882813 39.128906 40.609375-11.25zm32.171875-60.394531c-7.796875-7.800781-20.484375-7.800781-28.28125 0l-3.863281 3.851563 28.285156 28.285156 3.875-3.867188c7.785156-7.785156 7.785156-20.472656-.015625-28.269531zm0 0"
          />
        </svg>
        <input
          type="file"
          accept="image/*"
          name="inp_cover"
          class="hidden"
          id="inp_cover"
          ref="cover_img"
          @change="imageSelected"
        />
      </label>

      <!-- ../../../../PFA_Fill_Rouge/public/uploads/ot.jpg -->
      <div class="absolute -bottom-14">
        <img
          v-if="!!profile && img_profil == false"
          :src="profile"
          class="object-cover border-2 border-blue-600   w-40 h-40 rounded-full"
          alt="cover"
          id="profile"
        />
        <img
          v-else
          :src="Profilepreview"
          class="object-cover border-2 border-blue-600   w-40 h-40 rounded-full"
          alt="cover"
        />
        <label class="cursor-pointer absolute left-36 bottom-2">
          <svg
            class="h-5 w-5 "
            height="512pt"
            viewBox="0 -18 512 512"
            width="512pt"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="m512 80v106c0 11.046875-8.953125 20-20 20s-20-8.953125-20-20v-106c0-22.054688-17.945312-40-40-40h-352c-22.054688 0-40 17.945312-40 40v280c0 22.054688 17.945312 40 40 40h140c11.046875 0 20 8.953125 20 20s-8.953125 20-20 20h-140c-44.113281 0-80-35.886719-80-80v-280c0-44.113281 35.886719-80 80-80h352c44.113281 0 80 35.886719 80 80zm-428.105469 245.933594c8.800781 6.675781 21.34375 4.957031 28.023438-3.84375l28.40625-37.433594 52.773437 66.746094c3.792969 4.800781 9.574219 7.597656 15.6875 7.597656h.023438c6.125-.007812 11.90625-2.820312 15.695312-7.632812l153.859375-195.488282 31.207031 37.84375c7.023438 8.523438 19.628907 9.734375 28.152344 2.707032 8.523438-7.027344 9.734375-19.632813 2.707032-28.152344l-47-57c-3.851563-4.671875-9.601563-7.355469-15.65625-7.277344-6.050782.070312-11.746094 2.875-15.492188 7.628906l-153.53125 195.078125-53.0625-67.113281c-3.835938-4.851562-9.683594-7.621094-15.886719-7.59375-6.183593.0625-11.992187 2.980469-15.734375 7.910156l-44.011718 58c-6.679688 8.796875-4.957032 21.34375 3.839843 28.023438zm-3.894531-193.933594c0-33.085938 26.914062-60 60-60s60 26.914062 60 60-26.914062 60-60 60-60-26.914062-60-60zm40 0c0 11.027344 8.972656 20 20 20s20-8.972656 20-20-8.972656-20-20-20-20 8.972656-20 20zm374.425781 121.574219c23.394531 23.394531 23.394531 61.457031 0 84.851562l-109.570312 109.367188c-2.441407 2.4375-5.46875 4.199219-8.792969 5.117187l-80.722656 22.363282c-1.765625.488281-3.558594.726562-5.339844.726562-5.316406 0-10.5-2.121094-14.316406-6.035156-5.09375-5.21875-6.941406-12.800782-4.820313-19.777344l23.914063-78.726562c.957031-3.152344 2.675781-6.019532 5.007812-8.34375l109.804688-109.5625c23.378906-23.375 61.441406-23.375 84.835937.019531zm-60.457031 88.679687-28.289062-28.289062-74.089844 73.925781-11.882813 39.128906 40.609375-11.25zm32.171875-60.394531c-7.796875-7.800781-20.484375-7.800781-28.28125 0l-3.863281 3.851563 28.285156 28.285156 3.875-3.867188c7.785156-7.785156 7.785156-20.472656-.015625-28.269531zm0 0"
            />
          </svg>
          <input
            type="file"
            class="hidden"
            accept="image/*"
            name="img_profile"
            id="inp_profile"
            @change="profileSelected"
          />
        </label>
      </div>
    </div>
    <button
      v-if="img_src || img_profil"
      @click="updateImage()"
      class="my-2  h-9 w-20 inline-block float-right  bg-blue-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500"
    >
      Save
    </button>
    <div class="text-center mt-16 text-3xl font-bold text-fBlack">
      {{ nom }} {{ prenom }} <br />
    </div>
    <div>
      <p class="text-md">{{ bio }}</p>
      <p class="text-md">Apprenant</p>
      <p class="text-md">
        <strong>2K</strong> followers <strong>120</strong> following
      </p>
    </div>
    
    <div class="flex flex-wrap -mx-6">
      <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
        <div class="flex items-center px-5 py-6 shadow-xl rounded-md bg-white">
          <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
            <svg
              class="h-8 w-8 text-white"
              viewBox="0 0 28 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z"
                fill="currentColor"
              ></path>
              <path
                d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z"
                fill="currentColor"
              ></path>
              <path
                d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z"
                fill="currentColor"
              ></path>
              <path
                d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z"
                fill="currentColor"
              ></path>
              <path
                d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z"
                fill="currentColor"
              ></path>
              <path
                d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z"
                fill="currentColor"
              ></path>
            </svg>
          </div>

          <div class="mx-5">
            <h4 class="text-2xl font-semibold text-gray-700">8,282</h4>
            <div class="text-gray-500">New Users</div>
          </div>
        </div>
      </div>

      <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
        <div class="flex items-center px-5 py-6 shadow-xl rounded-md bg-white">
          <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">
            <svg
            class="h-12 w-12 mx-3"
            id="Capa_1"
            enable-background="new 0 0 512 512"
            height="512"
            viewBox="0 0 512 512"
            width="512"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
          >
            <linearGradient
              id="SVGID_1_"
              gradientUnits="userSpaceOnUse"
              x1="256"
              x2="256"
              y1="512"
              y2="0"
            >
              <stop offset="0" stop-color="#fd3a84" />
              <stop offset="1" stop-color="#ffa68d" />
            </linearGradient>
            <g>
              <g>
                <path
                  d="m256 0c-140.959 0-256 115.049-256 256 0 140.959 115.049 256 256 256 140.959 0 256-115.05 256-256 0-140.959-115.049-256-256-256zm0 482c-124.617 0-226-101.383-226-226s101.383-226 226-226 226 101.383 226 226-101.383 226-226 226zm75-361c-32.923 0-58.18 18.506-75 46.058-16.817-27.547-42.072-46.058-75-46.058-53.252 0-90 45.908-90 99.545 0 64.594 57.624 110.966 116.19 162.298 12.376 10.848 25.174 22.065 38.775 34.306 2.853 2.568 6.444 3.851 10.035 3.851s7.182-1.283 10.035-3.851c13.601-12.241 26.398-23.458 38.775-34.306 63.286-55.469 116.19-99.611 116.19-162.298 0-53.739-36.839-99.545-90-99.545zm-45.964 239.283c-9.375 8.216-18.988 16.643-29.036 25.587-10.047-8.944-19.661-17.371-29.036-25.587-66.079-57.918-105.964-92.877-105.964-139.738 0-39.647 25.794-69.545 60-69.545 32.707 0 53.643 31.628 60.516 56.399 1.763 6.548 7.701 11.101 14.484 11.101 6.796 0 12.743-4.569 14.494-11.135.15-.564 15.55-56.365 60.506-56.365 34.206 0 60 29.898 60 69.545 0 46.861-39.885 81.82-105.964 139.738z"
                  fill="url(#SVGID_1_)"
                />
              </g>
            </g>
          </svg>
          </div>

          <div class="mx-5">
            <h4 class="text-2xl font-semibold text-gray-700">200,521</h4>
            <div class="text-gray-500">Total Likes</div>
          </div>
        </div>
      </div>

      

      <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
        <div class="flex items-center px-5 py-6 shadow-xl rounded-md bg-white">
          <div class="p-3 rounded-full  bg-opacity-75">
            <svg
            class="w-8 h-8 mr-1 "
            stroke="currentColor"
            stroke-width="2"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            viewBox="0 0 24 24"
          >
            <path
              d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"
            ></path>
          </svg>
          </div>

          <div class="mx-5">
            <h4 class="text-2xl font-semibold text-gray-700">215,542</h4>
            <div class="text-gray-500">Available Products</div>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-gray-400 mt-10 border-opacity-10" />
    <div class="flex justify-between px-8">
      <div class="flex items-center  mx-auto">
        <div class="px-4 py-5 text-blue-500 border-b-4 border-blue-500">
          Posts
        </div>
        <div class="px-4 py-5 text-fGrey">Photos</div>
        <div class="px-4 py-5 text-fGrey">My Post Problems</div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  props: ["nom", "prenom", "img", "imgCover", "bio"],
  name: "AppProfile",
  data() {
    return {
      profile: "http://127.0.0.1:8000" + this.img,
      cover: "http://127.0.0.1:8000" + this.imgCover,
      img_src: false,
      img_profil: false,
      selectedProfile: null,
      image: null,
      imagepreview: "../../assets/cover.jpg",
      Profilepreview: "../../assets/ycc.jpg",
    };
  },
  methods: {
    imageSelected(e) {
      this.img_src = true;
      this.image = e.target.files[0];

      let reader = new FileReader();
      reader.readAsDataURL(this.image);
      reader.onload = (e) => {
        this.imagepreview = e.target.result;
      };
    },
    profileSelected(e) {
      this.img_profil = true;
      this.selectedProfile = e.target.files[0];

      let reader = new FileReader();
      reader.readAsDataURL(this.selectedProfile);
      reader.onload = (e) => {
        this.Profilepreview = e.target.result;
      };
    },
    updateImage() {
      if (
        this.img_src == true &&
        this.img_profil == true &&
        this.selectedProfile &&
        this.image
      ) {
        this.fetchdata(this.selectedProfile, this.image, "both");
      } else if (
        this.img_src == true &&
        this.img_profil == false &&
        !this.selectedProfile &&
        this.image
      ) {
        this.fetchdata(this.selectedProfile, this.image, "cover");
      } else if (
        this.img_src == false &&
        this.img_profil == true &&
        this.selectedProfile &&
        !this.image
      ) {
        this.fetchdata(this.selectedProfile, this.image, "profile");
      }
    },

    async fetchdata(imgP, imgC, api) {
      var data = new FormData();

      data.append("img", imgP);
      data.append("cover", imgC);

      const result = await axios.post(
        "http://127.0.0.1:8000/api/personne/update/img/" +
          api +
          "/" +
          localStorage.getItem("personne_id"),
        data,
        {
          headers: {
            Accept: "application/json",
            Authorization: "Bearer " + localStorage.getItem("user_token"),
          },
        }
      );

      if (result.status === 200) {
        console.log(result);
        this.img_profil = false;
        this.img_src = false;
        this.profile = "http://127.0.0.1:8000" + result.data.img;
        this.cover = "http://127.0.0.1:8000" + result.data.cover;
      } else {
        console.log(result);
      }
    },
  },
  watch: {
    selectedCover: function(value) {
      if (value) {
      }
    },
  },
};
</script>
