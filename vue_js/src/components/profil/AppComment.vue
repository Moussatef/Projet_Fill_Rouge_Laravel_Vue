<template>
  <div
    class="inline-block w-4/5 text-justify  bg-gray-200  rounded-3xl px-3 py-1 text-sm  text-gray-800 ml-5 mb-1"
  >
    <div class="flex justify-between items-center ">
      <div class="flex justify-center items-center ">
        <img
          v-if="user_info.id == personne_id"
          :src="'http://127.0.0.1:8000' + user_info.img"
          alt="img"
          class="h-10 w-10 rounded-full border border-blue-500"
        />
        <img
          v-else
          :src="'http://127.0.0.1:8000' + img"
          alt="img"
          class="h-10 w-10 rounded-full border border-blue-500"
        />
        <div class="ml-4">
          <span class="cursor-pointer font-bold">{{ nom }} {{ prenom }} </span>
        </div>
      </div>
      <div class="relative ">
        <button
          @click="dropdownOpen = !dropdownOpen"
          class="relative block  w-9 h-9 rounded-full bg-fill  items-center justify-center  focus:outline-none"
        >
          <svg
            class="w-6 h-6"
            id="Capa_1"
            enable-background="new 0 0 515.555 515.555"
            height="512"
            viewBox="0 0 515.555 515.555"
            width="512"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="m496.679 212.208c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138 65.971-25.167 91.138 0"
            />
            <path
              d="m303.347 212.208c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138 65.971-25.167 91.138 0"
            />
            <path
              d="m110.014 212.208c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138 65.971-25.167 91.138 0"
            />
          </svg>
        </button>

        <div
          v-if="dropdownOpen"
          @click="dropdownOpen = false"
          class="fixed inset-0 h-full w-full p-4 z-10 border border-gray-500"
        ></div>

        <div
          v-if="dropdownOpen"
          class="absolute right-0 mt-1 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10 border border-gray-200"
        >
          <button
            class="w-full block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white"
          >
            Edit
          </button>
          <button
            @click="deletcommentpost"
            class="w-full block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white"
          >
            Delete
          </button>
        </div>
      </div>
    </div>
    <!-- sm:truncate -->

    <p
      class="leading-relaxed break-words  overflow-ellipsis overflow-y-auto   md:mb-2 lg:mb-0 ml-14 w-96 "
    >
      {{ comment_body }}
    </p>
    <p class="leading-relaxed text-xs  text-gray-500 md:mb-2 lg:mb-0 ml-4">
      {{ created_at }}
    </p>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  name: "AppComment",

  props: [
    "comment_body",
    "personne_id",
    "comment_id",
    "created_at",
    "nom",
    "prenom",
    "post_id",
    "img"
  ],

  data() {
    return {
      dropdownOpen: false,
      post_Profile: this.postProfile,
      id_personne: this.personne_id,
      id_comment: this.comment_id,
      id_post: this.post_id,
      user_name: undefined,
      lastname: undefined,
      token: localStorage.getItem("user_token"),
      
    };
  },
  methods: {
    ...mapActions(["fetchComments", "deleteComment"]),

    deletcommentpost() {
      this.deleteComment([this.id_personne, this.id_post, this.id_comment]);
      this.dropdownOpen = false;
    },
  },
  computed: {
    ...mapGetters(["comments", "user_info"]),
  },
  created() {
    // this.fetchComments([this.id_personne, this.token]);
  },
  beforeMount() {
    // this.getCommentUserName(this.id_personne, this.token);
    // this.fetchComments([this.id_personne, this.token]);
  },
};
</script>
