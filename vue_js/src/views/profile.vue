<template>
  <div v-if="apprenant != undefined" class="bg-gray-300">
    <AppProfile
      v-if="apprenant.id"
      :key="apprenant.id"
      :nom="apprenant.nom"
      :prenom="apprenant.prenom"
      :img="apprenant.img"
      :img_cover="apprenant.img_cover"
    />
    <div
      class="my-5 flex  justify-evenly  w-3/5 z-0  pb-56 mx-auto lg:flex-nowrap md:flex-wrap sm:flex-wrap"
    >
      <div class="mx-6 mb-5   space-y-4">
        <AppIntro
          v-if="apprenant.id"
          :key="apprenant.id"
          :github="apprenant.github"
          :email="apprenant.email"
          :linkedin="apprenant.linkedin"
          :facebook="apprenant.facebook"
          :instagram="apprenant.instagram"
          :adresse="apprenant.adresse"
        />
      </div>
      <div class="space-y-4">
        <AppCreatePost />
        <div v-if="posts != undefined">
          <AppPost
            v-for="post in posts"
            :key="post.id"
            :title="post.titre"
            :description="post.description"
            :path="post.path"
            :created_at="post.created_at"
            :nom="apprenant.nom"
            :prenom="apprenant.prenom"
            :like="post.like"
            :comment="post.comment"
          />
        </div>
        <!-- <MainPost />
          <MainPost />  -->
      </div>
    </div>
    <div v-if="apprenant != undefined">
      <!-- <h1>{{ date.fromNow() }}</h1> -->
    </div>
  </div>
</template>

<script>
import AppProfile from "@/components/profil/AppProfil";
import AppIntro from "@/components/profil/AppIntro";
import AppCreatePost from "@/components/profil/AppCreatePost";
// import AppPosts from "@/components/profil/AppPosts";
import AppPost from "@/components/profil/AppPost";

export default {
  name: "UserProfile",
  data() {
    return {
      token: localStorage.getItem("user_token"),
      id_apprenant: localStorage.getItem("user_id"),
      apprenant: undefined,
      posts: undefined,
      // date : moment("2019-01-01", "YYYY-MM-DD")
    };
  },
  components: {
    AppProfile,
    AppIntro,
    AppCreatePost,
    // AppPosts,
    AppPost,
  },
  methods: {
    async getInfoUser(token, id_apprenant) {
      var myHeaders = new Headers();
      myHeaders.append("Accept", "application/json");
      myHeaders.append("Authorization", "Bearer 	" + token);

      var requestOptions = {
        method: "GET",
        headers: myHeaders,
        redirect: "follow",
      };
      var res = await fetch(
        "http://127.0.0.1:8000/api/apprenant/id/" + id_apprenant,
        requestOptions
      );

      if (res.status === 200) {
        const result = await res.json();

        console.log(result);
        this.apprenant = result;
      } else {
        var error = res;
        console.log("error", error);
      }
    },
    async getPostProfile(token, id_apprenant) {
      var myHeaders = new Headers();
      myHeaders.append("Accept", "application/json");
      myHeaders.append("Authorization", "Bearer " + token);

      var requestOptions = {
        method: "GET",
        headers: myHeaders,
        redirect: "follow",
      };

      var res = await fetch(
        "http://127.0.0.1:8000/api/profile/post/" + id_apprenant,
        requestOptions
      );

      if (res.status === 200) {
        const result = await res.json();

        console.log(result);
        this.posts = result;
      } else {
        var error = res;
        console.log("error", error);
      }
    },
  },
  mounted() {
    this.getInfoUser(this.token, this.id_apprenant);
    this.getPostProfile(this.token, this.id_apprenant);
  },
};
</script>
