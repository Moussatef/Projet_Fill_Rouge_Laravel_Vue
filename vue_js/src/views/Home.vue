<template>
  <div class="home bg-gray-100 ">
    
    <AppCardOne />
    <div class=" w-3/6 mx-auto my-2" style="min-width:375px">
      <AppCreatePost v-if="token" />
      <Appload v-if="loading" class="my-2" />
      <AppPostProfile
        v-for="post in allPostProfile"
        :key="post.id"
        :post="post"
        :posts="allPostProfile"
        :personne_id="user_info.id"
        :storcomment="commentPost"
        @sendPost="getPost"
      />
      <div v-observe-visibility="handleScrolledToBottom"></div>
    </div>

    <!-- The Modal -->
    <div id="postModel" @click="exitPostModal()" class="Postmodal">
      <!-- Modal content -->
      <div class="modal-contentPost shadow-lg">
        <span @click="clickPostExit()" class="closePost">&times;</span>
        <div v-if="post" class="flex justify-center">
          <div class=" w-3/6">
            <div class="flex items-center m-4">
              <img
                :src="'http://127.0.0.1:8000' + post.img"
                alt=""
                class="h-10 w-10 rounded-full border  border-blue-500"
              />
              <div class="ml-4">
                <span class="cursor-pointer font-bold"
                  >{{ post.full_name }}
                </span>
                <span class="text-grey text-opacity-50 text-sm mx-3">{{
                  post.created_at
                }}</span>
              </div>
            </div>
            <div>
              <h2 class="text-2xl text-gray-900">
                {{ post.titre }}
              </h2>
              <p>
                {{ post.description }}
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
                {{ post.like.length }}
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
                {{ post.comment.length }}
              </div>
              <div></div>
            </div>
            <div class=" text-left overflow-y-auto" style="max-height:500px">
              <AppComment
                v-for="cmt in post.comment"
                :key="cmt.id"
                :full_name="cmt.full_name"
                :comment_body="cmt.comment"
                :personne_id="cmt.personne_id"
                :comment_id="cmt.id"
                :created_at="cmt.created_at"
                :img="cmt.img"
              />
            </div>
          </div>
          <div class="w-full p-2 mx-auto ">
            <AppImage v-for="img in post.img_post" :key="img.id" :image="img" />
          </div>
        </div>
      </div>
    </div>
    
  </div>
</template>

<script>
// @ is an alias to /src
import AppCardOne from "@/components/cards/appCardOne";
import AppCreatePost from "@/components/profil/AppCreatePost";
import AppPostProfile from "@/components/post/PostProfile/AppPostProfile";
import Appload from "@/components/dataload/ApploadCard";
import AppComment from "@/components/profil/AppComment";
import AppImage from "@/components/profil/AppImage";
import { mapGetters, mapActions } from "vuex";

export default {
  name: "Home",
  data() {
    return {
      page: 2,
      token: localStorage.getItem("user_token"),
      id_apprenant: localStorage.getItem("user_id"),
      show_post: false,
      post: null,
    };
  },
  components: {
    AppCardOne,
    AppCreatePost,
    AppPostProfile,
    Appload,
    AppImage,
    AppComment,
  },
  methods: {
    ...mapActions(["AllPost", "fetchUser"]),

    clickPostExit() {
      // Get the modal
      var modal = document.getElementById("postModel");
      // Get the <span> element that closes the modal

      modal.style.display = "none";
    },
    clickPostModal() {
      // Get the modal
      var modal = document.getElementById("postModel");
      // When the user clicks the button, open the modal
      modal.style.display = "block";
    },

    exitPostModal() {
      // Get the modal
      var modal = document.getElementById("postModel");
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };
    },

    getPost(param) {
      // console.log(param);
      this.post = param[0];
      if (this.post) {
        this.clickPostModal();
      }
    },
    disable() {
      this.show_post = false;
    },
    handleScrolledToBottom(isVisible) {
      if (!isVisible || this.allPostsPages < this.page) return;
      else this.AllPost(this.page++);
    },
  },
  computed: {
    ...mapGetters(["allPostProfile", "user_info", "loading", "allPostsPages"]),
  },
  created() {
    if (localStorage.getItem("user_token")) {
      this.fetchUser([this.id_apprenant, this.token]);
      this.AllPost();
    }
  },
};
</script>

<style scoped>
.Postmodal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0, 0, 0); /* Fallback color */
  background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-contentPost {
  background-color: #fefefe;
  margin: 5% auto; /* 15% from the top and centered */
  padding: 20px;
  width: 90%; /* Could be more or less, depending on screen size */
  border-radius: 15px;
}

/* The Close Button */
.closePost {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.closePost:hover,
.closePost:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
