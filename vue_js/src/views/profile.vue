<template>
  <div class="bg-gray-300">
    <AppProfile
      v-if="user_info.id"
      :key="user_info.id"
      :nom="user_info.nom"
      :prenom="user_info.prenom"
      :img="user_info.img"
      :imgCover="user_info.cover"
    />
    <div
      class="my-5 justify-center w-4/5 z-0 flex  flex-row flex-wrap pb-56 mx-auto  "
    >
      <div class="mx-6 mb-5 w-2/6  space-y-4">
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
      <div class=" w-3/6 space-y-4">
        <AppCreatePost  />

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
        />
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

export default {
  name: "UserProfile",
  data() {
    return {
      token: localStorage.getItem("user_token"),
      id_apprenant: localStorage.getItem("user_id"),
      apprenant: undefined,
      posts: undefined,
    };
  },
  components: {
    AppProfile,
    AppIntro,
    AppCreatePost,
    AppPost,
    AppPhoto,
  },
  methods: {
    ...mapActions(["fetchPosts", "fetchUser"]),
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
    this.fetchPosts([this.id_apprenant, this.token]);
  },
  beforeMount() {
    
  },
};
</script>
