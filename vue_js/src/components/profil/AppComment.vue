<template>
  <div
    class="inline-block w-full  bg-gray-200 rounded-tl-lg rounded-br-lg px-3 py-1 text-sm  text-gray-700 mr-2 my-2"
  >
    <h3
      class="inline-flex text-base items-center md:mb-2 lg:mb-0 ml-4 border-b-2 border-gray-400 "
    >
      {{ comments }} {{ comments.prenom }}
    </h3>
    <p class="leading-relaxed md:mb-2 lg:mb-0 ml-4">
      {{ comment_body }}
    </p>
    <p class="leading-relaxed text-xs text-gray-500 md:mb-2 lg:mb-0 ml-4">
      {{ convertTime(created_at) }}
    </p>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  name: "AppComment",

  props: ["comment_body", "personne_id", "comment_id", "created_at"],

  data() {
    return {
      post_Profile: this.postProfile,
      id_personne: this.personne_id,
      user_name: undefined,
      lastname: undefined,
      token: localStorage.getItem("user_token"),

      //   date: moment(this.created_at, "YYYY-MM-DD HH:mm:ss"),
    };
  },
  methods: {
    ...mapActions(["fetchComments"]),

    convertTime(time) {
      let res = moment(time, "YYYY-MM-DD HH:mm:ss");
      return res.fromNow();
    },

    async getCommentUserName(id, token) {
      var myHeaders = new Headers();
      myHeaders.append("Accept", "application/json");
      myHeaders.append("Authorization", "Bearer " + token);

      var requestOptions = {
        method: "GET",
        headers: myHeaders,
        redirect: "follow",
      };

      const res = await fetch(
        "http://127.0.0.1:8000/api/personne/fullname/id/" + id,
        requestOptions
      );
      if (res.status === 200) {
        const result = await res.json();
        console.log(result);
        this.user_name = result.nom;
        this.lastname = result.prenom;
      } else {
        var error = res;
        console.log("error", error);
      }
    },
  },
  computed: {
    ...mapGetters(["comments"]),
  },

  created() {
    // this.fetchComments([this.id_personne, this.token]);
  },
  beforeMount() {
    // this.getCommentUserName(this.id_personne, this.token);
    this.fetchComments([this.id_personne, this.token]);
  },
};
</script>
