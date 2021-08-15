<template>
  <div class="bg-gray-100">
    <div x-data="scrollProgress" class="fixed inset-x-0 top-0 z-50">
      <div class="h-1 bg-blue-500" :style="`width: ${percent}%`"></div>
    </div>

    <AppProfile
      v-if="user_info.id"
      :key="user_info.id"
      :nom="user_info.nom"
      :prenom="user_info.prenom"
      :bio="user_info.bio"
      :img="user_info.img"
      :imgCover="user_info.cover"
      @open_photo="open_photo"
      @open_post="open_post"
      @open_problem="open_problem"
    />
    <div
      class="my-5 justify-center max-w-screen-2xl md:4/6 z-0 flex lg:grid lg:gap-12 grid-cols-3 pb-56 mx-auto sm:flex flex-wrap "
    >
      <div class=" mb-5 space-y-4 col-span-1  sticky ">
        <AppIntro
          v-if="op_intro"
          :key="user_info.id"
          :github="user_info.github"
          :email="user_info.email"
          :linkedin="user_info.linkedin"
          :facebook="user_info.facebook"
          :instagram="user_info.instagram"
          :adresse="user_info.adresse"
          @editInfo="clickModal()"
          @fill_var="fill_var"
        />
        <AppPhoto v-if="op_post" @open_photo="open_photo" />
        <div
          class="fixed inline-flex items-center justify-center overflow-hidden rounded-full bottom-5 left-5"
        ></div>
      </div>
      <div class=" w-full col-start-2 col-span-3 space-y-4">
        <AppCreatePost v-if="op_post" />
        <Appload v-if="loading" />
        <div v-if="op_post">
          <AppPost
            v-for="post in posts_personne"
            :key="post.id"
            :post="post"
            :post_id="post.id"
            :personne_id="user_info.id"
            :title="post.titre"
            :description="post.description"
            :created_at="post.created_at"
            :like="post.like"
            :comment="post.comment"
            :image="post.img_post"
            @sendPost="getPost"
          />
          <div v-observe-visibility="handleScrolledToBottomProfile"></div>
        </div>
        <div v-if="op_problem">
          <AppEditeur />
          <AppPostProblem
            v-for="post in postsProblem"
            :key="post.id"
            :post="post"
            :post_id="post.id"
            :personne_id="user_info.id"
            :title="post.titre"
            :description="post.description"
            :created_at="post.created_at"
            :like="post.like"
            :comment="post.comment"
            :image="post.img_post"
            @sendPost="getPost"
          />
          <div v-observe-visibility="handleScrolledToBottom"></div>
        </div>
      </div>
    </div>
    <!-- The Modal -->
    <div id="postModel" @click="exitPostModal()" class="Postmodal">
      <!-- Modal content -->
      <div class="modal-contentPost">
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
              <div class=" text-gray-900 text-left " v-html="post.description"></div>
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
import { mapGetters, mapActions } from "vuex";
import AppProfile from "@/components/profil/AppProfil";
import AppIntro from "@/components/profil/AppIntro";
import AppCreatePost from "@/components/profil/AppCreatePost";
import AppPost from "@/components/profil/AppPost";
import AppPhoto from "@/components/profil/AppPhoto";
import Appload from "@/components/dataload/ApploadCard";
import AppComment from "@/components/profil/AppComment";
import AppImage from "@/components/profil/AppImage";
import AppEditeur from "@/components/post/postProblem/AppEditor";
import AppPostProblem from "@/components/post/postProblem/AppPostProblem";
import Swal from "sweetalert2";

export default {
  name: "UserProfile",
  data() {
    return {
      token: localStorage.getItem("user_token"),
      personne_id: localStorage.getItem("personne_id"),
      id_apprenant: localStorage.getItem("user_id"),
      show_post: false,
      post: null,
      like: null,
      pageProfile:2,
      pageProblem:2,


      inp_adresse: "",
      inp_email: "",
      inp_github: "",
      inp_facebook: "",
      inp_instagram: "",
      inp_linkedin: "",

      ed_adresse: false,
      ed_email: false,
      ed_github: false,
      ed_facebook: false,
      ed_instagram: false,
      ed_linkedin: false,

      op_post: true,
      op_intro: true,
      op_photo: false,
      op_problem: false,
    };
  },
  components: {
    AppProfile,
    AppIntro,
    AppCreatePost,
    AppPost,
    AppPhoto,
    Appload,
    AppComment,
    AppImage,
    AppEditeur,
    AppPostProblem,
  },
  methods: {
    ...mapActions([
      "fetchPosts",
      "fetchUser",
      "updatePersonne",
      "fetchPostsProblem",
    ]),

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

    updateInfoPersonne() {
      this.updatePersonne([
        localStorage.getItem("personne_id"),
        this.inp_email,
        this.inp_adresse,
        this.inp_github,
        this.inp_linkedin,
        this.inp_facebook,
        this.inp_instagram,
      ]);
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Your changed has been saved",
        showConfirmButton: false,
        timer: 1500,
      });
      this.clickExit();
    },

    fill_var(params) {
      this.inp_adresse = params[0];
      this.inp_email = params[1];
      this.inp_github = params[2];
      this.inp_facebook = params[3];
      this.inp_instagram = params[4];
      this.inp_linkedin = params[5];
    },

    open_photo() {
      this.op_post = false;
      this.op_photo = true;
      this.op_problem = false;
      this.op_intro = false;
    },
    open_post() {
      this.op_post = true;
      this.op_intro = true;
      this.op_photo = false;
      this.op_problem = false;
    },
    open_problem() {
      this.op_post = false;
      this.op_photo = false;
      this.op_intro = true;
      this.op_problem = true;
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
    clickExit() {
      // Get the modal
      var modal = document.getElementById("myModal");
      // Get the <span> element that closes the modal
      //   var span = document.getElementsByClassName("close")[0];
      // When the user clicks on <span> (x), close the modal
      //   span.onclick = function() {
      modal.style.display = "none";
      this.ed_adresse = false;
      this.ed_email = false;
      this.ed_github = false;
      this.ed_facebook = false;
      this.ed_instagram = false;
      this.ed_linkedin = false;
      //   };
    },
    clickModal() {
      // Get the modal
      var modal = document.getElementById("myModal");
      // Get the button that opens the modal
      // When the user clicks the button, open the modal
      modal.style.display = "block";
    },

    exitModal() {
      // Get the modal
      var modal = document.getElementById("myModal");
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
          this.ed_adresse = false;
          this.ed_email = false;
          this.ed_github = false;
          this.ed_facebook = false;
          this.ed_instagram = false;
          this.ed_linkedin = false;
        }
      };
    },
    handleScrolledToBottom(isVisible) {
      if (!isVisible || this.allPostsProblemPages < this.pageProblem) return;
      else this.fetchPostsProblem(this.pageProblem++);
      // console.log(this.allPostsProfilePages +' / '+ this.page );
    },

    handleScrolledToBottomProfile(isVisible) {
      if (!isVisible || this.allPostsProfilePages < this.pageProfile) return;
      else this.fetchPosts(this.pageProfile++);
      // console.log(this.allPostsProfilePages +' / '+ this.page );
    },
    
  },
  computed: {
    ...mapGetters([
      "posts_personne",
      "postsProblem",
      "user_info",
      "user_token",
      "apprenant_id",
      "loading",
      "allPostsProblemPages",
      "allPostsProfilePages",
    ]),
  },
  created() {
    // this.scrol();
    this.fetchUser([this.id_apprenant, this.token]);
    this.fetchPosts();
    this.fetchPostsProblem();
  },
  beforeMount() {},
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
  border: 1px solid #888;
  width: 90%; /* Could be more or less, depending on screen size */
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
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0, 0, 0); /* Fallback color */
  background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  width: 60%;
  border-radius: 15px;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.intro {
  margin: 10px 10px;
  display: flex;
  justify-content: space-evenly;
  width: 100%;
}
.intro p {
  margin: 10px 10px;
}

@media screen and (max-width: 975px) {
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    width: 100%;
    border-radius: 15px;
  }
}
</style>
