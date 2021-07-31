<template>
  <div class="home bg-gray-100 h-screen">
    <AppCardOne />
    <div class="w-1/3 mx-auto my-5">
      <AppCreatePost />

      <AppPost
          v-for="post in posts_personne"
          :key="post.id"
        />
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import AppCardOne from "@/components/cards/appCardOne";
import AppCreatePost from "@/components/profil/AppCreatePost";
import { mapGetters, mapActions } from "vuex";

export default {
  name: "Home",
  components: {
    AppCardOne,
    AppCreatePost,
  },
  methods: {
    ...mapActions(["AllPost"]),
  },
  computed: {
    ...mapGetters(["allPostProfile", "user_info"]),
  },
  created() {
    this.AllPost();
  },
};
</script>
