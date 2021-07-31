<template>
  <div class="home bg-gray-100 ">
    <AppCardOne />
    <div class="w-3/6 mx-auto my-2">
      <AppCreatePost v-if="token" />
      <AppPostProfile
        v-for="post in allPostProfile"
        :key="post.id"
        :post="post"
        :posts="allPostProfile"
        :personne_id="user_info.id"
        :storcomment="commentPost"
        @showPost="getPost"
      />
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
// @ is an alias to /src
import AppCardOne from "@/components/cards/appCardOne";
import AppCreatePost from "@/components/profil/AppCreatePost";
import AppShowPost from "@/components/profil/AppShowPost";
import AppPostProfile from "@/components/post/PostProfile/AppPostProfile";
import { mapGetters, mapActions } from "vuex";

export default {
  name: "Home",
  data() {
    return {
      token: localStorage.getItem("user_token"),
      id_apprenant: localStorage.getItem("user_id"),
      show_post: false,
    };
  },
  components: {
    AppCardOne,
    AppCreatePost,
    AppPostProfile,
    AppShowPost,
  },
  methods: {
    ...mapActions(["AllPost", "fetchUser"]),
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
    ...mapGetters(["allPostProfile", "user_info"]),
  },
  created() {
    this.fetchUser([this.id_apprenant, this.token]);
    this.AllPost();
  },
};
</script>
