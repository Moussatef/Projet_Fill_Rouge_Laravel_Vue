<template>
  <div class="home bg-gray-100 ">
    <AppCardOne />
    <div class="w-3/6 mx-auto my-5">
      <AppCreatePost v-if="token" />

      <AppPostProfile v-for="post in allPostProfile" :key="post.id" 
          :post="post"
          :personne_id="user_info.id"
          :storcomment="commentPost"
          @showPost="getPost"  />
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import AppCardOne from "@/components/cards/appCardOne";
import AppCreatePost from "@/components/profil/AppCreatePost";
import AppPostProfile from "@/components/post/PostProfile/AppPostProfile";
import { mapGetters, mapActions } from "vuex";

export default {
  name: "Home",
  data() {
    return {
      token: localStorage.getItem("user_token"),
      id_apprenant: localStorage.getItem("user_id"),
    };
  },
  components: {
    AppCardOne,
    AppCreatePost,
    AppPostProfile,
  },
  methods: {
    ...mapActions(["AllPost", "fetchUser"]),
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
