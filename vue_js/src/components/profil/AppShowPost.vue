<template>
  <div
    class="w-screen h-screen z-10  top-0 fixed bg-black opacity-90 "
    @click="$emit('disablePost')"
  ></div>
  <div
    class="flex justify-center fixed top-0 transform translate-x-1/4  bg-gradient-to-r from-white via-gray-300 to-blue-700 z-50 w-8/12  h-4/5 mt-20 overflow-scroll  "
  >
    <div class=" w-1/2">
      <div class="flex items-center m-6">
        <img
          :src="'http://127.0.0.1:8000' + user_info.img"
          alt=""
          class="h-10 w-10 rounded-full border  border-blue-500"
        />
        <div class="ml-4">
          <span class="cursor-pointer font-bold"
            >{{ user_info.nom }} {{ user_info.prenom }}
          </span>
          <span class="text-grey text-opacity-50 text-sm mx-3">{{
            date.fromNow()
          }}</span>
        </div>
      </div>
      <div>
        <h2 class="text-2xl text-gray-900">
          {{ postinfo.titre }}
        </h2>
        <p>
          {{ postinfo.description }}
        </p>
        <hr />
      </div>
      <div class="flex border-b-2 mx-3 rounded-lg  border-blue-300 my-4">
        <div class="flex items-center m-2">
          <svg
            class="h-6 w-6 mx-3"
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
          {{ likein }}
        </div>
        <div class="flex items-center  m-2">
          <svg
            class="w-6 h-6 mr-1 "
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
          {{ comments.length }}
        </div>
        <div></div>
      </div>
      <div class="text-left ">
        <AppComment
          v-for="cmt in comments"
          :key="cmt.id"
          :comment_body="cmt.comment"
          :personne_id="cmt.personne_id"
          :comment_id="cmt.id"
          :created_at="cmt.created_at"
        />
      </div>
    </div>
    <div class=" w-1/2  grid  gap-4   p-2 my-auto  " :class="gridNumber">
      <img
        v-for="img in postinfo.img_post"
        :key="img.id"
        :src="'http://127.0.0.1:8000' + img.path"
        class="object-cover w-full"
        alt=""
      />
    </div>
  </div>
</template>
<script>
import AppComment from "@/components/profil/AppComment";
import { mapActions, mapGetters } from "vuex";
export default {
  name: "AppShowPost",
  props: ["postinfo", "likein"],
  data() {
    return {
      gridNumber: "grid-cols-1",
      image_post: this.postinfo.img_post,
      comments: this.postinfo.comment,
      like: this.postinfo.like,
      date: moment(this.postinfo.created_at, "YYYY-MM-DD HH:mm:ss"),
    };
  },
  methods: {
    checkImg() {
      var lengthImg = this.image_post.length;
      if (lengthImg >= 2) {
        this.gridNumber = "grid-cols-2";
      }
    },
  },
  computed: {
    ...mapGetters(["user_info"]),
  },
  created() {
    this.checkImg();
  },
  components: {
    AppComment,
  },
};
</script>
