<template>
  <div v-if="apprenant != undefined" class="bg-gray-300">
    <AppProfile
      
      :key="user_info.id"
      :nom="user_info.nom"
      :prenom="user_info.prenom"
      :img="user_info.img"
      :img_cover="user_info.img_cover"
    />
    <div
      class="my-5 flex  justify-evenly  w-3/5 z-0  pb-56 mx-auto lg:flex-nowrap md:flex-wrap sm:flex-wrap"
    >
      <div class="mx-6 mb-5   space-y-4">
        <AppIntro
          
          :key="user_info.id"
          :github="user_info.github"
          :email="user_info.email"
          :linkedin="user_info.linkedin"
          :facebook="user_info.facebook"
          :instagram="user_info.instagram"
          :adresse="user_info.adresse"
        />
      </div>
      <div class="space-y-4">
        <AppCreatePost />
        <div v-if="posts_personne != undefined">
          <AppPost
            v-for="post in posts_personne"
            :key="post.id"
            :post_id="post.id"
            :personne_id="apprenant.id"
            :title="post.titre"
            :description="post.description"
            :path="post.path"
            :created_at="post.created_at"
            :nom="apprenant.nom"
            :prenom="apprenant.prenom"
            :like="post.like"
            :comment="post.comment"
            :post_profil="post.post_profil"
            :storcomment="commentPost"
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
import { mapGetters, mapActions } from "vuex";
import AppProfile from "@/components/profil/AppProfil";
import AppIntro from "@/components/profil/AppIntro";
import AppCreatePost from "@/components/profil/AppCreatePost";
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
    ...mapActions(["fetchPosts", "fetchUser"]),

    // async getInfoUser(token, id_apprenant) {
    //   var myHeaders = new Headers();
    //   myHeaders.append("Accept", "application/json");
    //   myHeaders.append("Authorization", "Bearer 	" + token);

    //   var requestOptions = {
    //     method: "GET",
    //     headers: myHeaders,
    //     redirect: "follow",
    //   };
    //   var res = await fetch(
    //     "http://127.0.0.1:8000/api/apprenant/id/" + id_apprenant,
    //     requestOptions
    //   );

    //   if (res.status === 200) {
    //     const result = await res.json();

    //     console.log(result);
    //     this.apprenant = result;
    //   } else {
    //     var error = res;
    //     console.log("error", error);
    //   }
    // },
    // async getPostProfile(token, id_apprenant) {
    //   var myHeaders = new Headers();
    //   myHeaders.append("Accept", "application/json");
    //   myHeaders.append("Authorization", "Bearer " + token);

    //   var requestOptions = {
    //     method: "GET",
    //     headers: myHeaders,
    //     redirect: "follow",
    //   };

    //   var res = await fetch(
    //     "http://127.0.0.1:8000/api/profile/post/" + id_apprenant,
    //     requestOptions
    //   );

    //   if (res.status === 200) {
    //     const result = await res.json();

    //     console.log(result);
    //     this.posts = result;
    //   } else {
    //     var error = res;
    //     console.log("error", error);
    //   }
    // },
    // async commentPost(id_person, id_post, comment, token) {
    //   var myHeaders = new Headers();
    //   myHeaders.append("Accept", "application/json");
    //   myHeaders.append("Authorization", "Bearer " + token);
    //   myHeaders.append("Content-Type", "application/json");

    //   var raw = JSON.stringify({
    //     personne_id: id_person,
    //     post_id: id_post,
    //     comment: comment,
    //   });

    //   var requestOptions = {
    //     method: "POST",
    //     headers: myHeaders,
    //     body: raw,
    //     redirect: "follow",
    //   };
    //   const res = await fetch(
    //     "http://127.0.0.1:8000/api/comment/store",
    //     requestOptions
    //   );
    //   if (res.status === 200) {
    //     const result = await res.json();
    //     console.log(result);
    //   } else {
    //     var error = res;
    //     console.log("error", error);
    //   }
    // },
  },
  computed: {
    ...mapGetters(["posts_personne", "user_info", "postComment"]),
  },
  created() {
    this.fetchUser([this.id_apprenant, this.token]);
    this.fetchPosts([this.id_apprenant, this.token]);
  },
  mounted() {
    // this.getInfoUser(this.token, this.id_apprenant);
    // this.getPostProfile(this.token, this.id_apprenant);
  },
};
</script>
