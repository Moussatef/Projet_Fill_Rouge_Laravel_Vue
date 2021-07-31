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
    />
    <div
      class="my-5 justify-center max-w-screen-2xl md:4/6 z-0 flex lg:grid lg:gap-12 grid-cols-3 pb-56 mx-auto sm:flex flex-wrap "
    >
      <div class=" mb-5 space-y-4 col-span-1 overflow-y-auto   h-screen">
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
        <div
          :x-data="scrol()"
          class="fixed inline-flex items-center justify-center overflow-hidden rounded-full bottom-5 left-5"
        >
         
        </div>
      </div>
      <div class=" w-full col-start-2 col-span-3 space-y-4">
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
    <AppShowPost
      v-if="show_post"
      :likein="like"
      :postinfo="post"
      @disablePost="disable"
    />
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
import AppEditeur from "@/components/post/appEditerText";

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
    };
  },
  components: {
    AppProfile,
    AppIntro,
    AppCreatePost,
    AppPost,
    AppPhoto,
    AppShowPost,
    AppEditeur,
  },
  methods: {
    ...mapActions(["fetchPosts", "fetchUser"]),

    getPost(param) {
      // console.log(param);
      this.post = param[0];
      this.like = param[1];
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
      "user_token",
      "apprenant_id",
    ]),
  },
  created() {
    // this.scrol();
    this.fetchUser([this.id_apprenant, this.token]);
    this.fetchPosts([this.personne_id, this.token]);
  },
  beforeMount() {},
};
</script>
