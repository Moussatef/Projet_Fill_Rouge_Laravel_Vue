<template>
  <div class="bg-gray-300">
    <AppProfile
      v-if="user_info.id"
      :key="user_info.id"
      :nom="user_info.nom"
      :prenom="user_info.prenom"
      :bio="user_info.bio"
      :img="user_info.img"
      :imgCover="user_info.cover"
    />
    <div
      class="my-5 justify-center lg:w-10/12 md:4/6 z-0 flex  flex-wrap pb-56 mx-auto "
    >
      <div class=" mb-5 w-5/12 space-y-4">
        <AppIntro
          :key="user_info.id"
          :github="user_info.github"
          :email="user_info.email"
          :linkedin="user_info.linkedin"
          :facebook="user_info.facebook"
          :instagram="user_info.instagram"
          :adresse="user_info.adresse"
        />
        <AppPhoto />
      </div>
      <div class=" w-7/12  space-y-4">
        <AppCreatePost />

        <AppPost
          v-for="post in posts_personne"
          :key="post.id"
          :post="post"
          :post_id="post.id"
          :personne_id="user_info.id"
          :title="post.titre"
          :description="post.description"
          :path="post.path"
          :created_at="post.created_at"
          :nom="user_info.nom"
          :prenom="user_info.prenom"
          :like="post.like"
          :comment="post.comment"
          :post_profil="post.post_profil"
          :storcomment="commentPost"
          :image="post.img_post"
          @showPost="getPost"
        />
      </div>
    </div>
    <AppShowPost v-if="show_post" :postinfo="post" @disablePost="disable" />
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import AppProfile from "@/components/profil/AppProfil";
import AppIntro from "@/components/profil/AppIntro";
import AppCreatePost from "@/components/profil/AppCreatePost";
import AppPost from "@/components/profil/AppPost";
import AppPhoto from "@/components/profil/AppPhoto";
import AppShowPost from "@/components/profil/AppShowPost";

export default {
  name: "UserProfile",
  data() {
    return {
      token: localStorage.getItem("user_token"),
      personne_id: localStorage.getItem("personne_id"),
      id_apprenant: localStorage.getItem("user_id"),
      show_post: false,
      post: null,
    };
  },
  components: {
    AppProfile,
    AppIntro,
    AppCreatePost,
    AppPost,
    AppPhoto,
    AppShowPost,
  },
  methods: {
    ...mapActions(["fetchPosts", "fetchUser"]),

    getPost(param) {
      console.log(param);
      this.post = param;
      if (this.post) {
        this.show_post = true;
      }
    },
    disable() {
      this.show_post = false;
    },
  },
  computed: {
    ...mapGetters([
      "posts_personne",
      "user_info",
      "postComment",
      "user_token",
      "apprenant_id",
    ]),
  },
  created() {
    this.fetchUser([this.id_apprenant, this.token]);
    this.fetchPosts([this.personne_id, this.token]);
  },
  beforeMount() {},
};
</script>
