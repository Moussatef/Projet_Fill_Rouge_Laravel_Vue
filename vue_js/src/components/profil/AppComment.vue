<template>
  <div
    class="inline-block w-4/5 text-justify overflow-hidden bg-gray-300 rounded-tl-lg rounded-br-lg px-3 py-1 text-sm  text-gray-800 ml-5 mb-1"
  >
        <div class="flex items-center">
          <img
            :src="'http://127.0.0.1:8000' + img"
            alt="img"
            class="h-10 w-10 rounded-full border border-blue-500"
          />
          <div class="ml-4">
            <span class="cursor-pointer font-bold"
              >{{ user_name }} {{ lastname }}
            </span>
          </div>
        </div>
   
    <p
      class="leading-relaxed break-words  overflow-ellipsis overflow-y-auto x  md:mb-2 lg:mb-0 ml-14 w-96 md:truncate"
    >
      {{ comment_body }}
    </p>
    <p class="leading-relaxed text-xs  text-gray-500 md:mb-2 lg:mb-0 ml-4">
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
      img: null,
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
        // console.log(result);
        this.user_name = result.nom;
        this.lastname = result.prenom;
        this.img = result.img;
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
    this.fetchComments([this.id_personne, this.token]);
  },
  beforeMount() {
    this.getCommentUserName(this.id_personne, this.token);
    // this.fetchComments([this.id_personne, this.token]);
  },
};
</script>
