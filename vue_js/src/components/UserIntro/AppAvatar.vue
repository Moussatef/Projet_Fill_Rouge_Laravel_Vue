<template>
  <div v-if="user_info" class="flex items-center">
    <img
      :src="'http://127.0.0.1:8000' + user_info.img"
      alt="img"
      class="h-10 w-10 rounded-full border  border-blue-500"
    />
    <div class="ml-4">
      <span class="cursor-pointer font-bold"
        >{{ user_info.nom }} {{ user_info.prenom }}
      </span>
      <span class="text-grey text-opacity-50 text-sm mx-3">{{
        date.fromNow()
      }}</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "AppAvatare",
  props: ["personne_id", "date"],
  data() {
    return {
      user_info: undefined,
      personne: this.personne_id,
      token: localStorage.getItem("user_token"),
    };
  },
  methods: {
    async fetchAllUser(param) {
      var myHeaders = new Headers();
      myHeaders.append("Accept", "application/json");
      myHeaders.append("Authorization", "Bearer 	" + this.token);

      var requestOptions = {
        method: "GET",
        headers: myHeaders,
        redirect: "follow",
      };
      var res = await fetch(
        "http://127.0.0.1:8000/api/personne/id/" + param,
        requestOptions
      );

      if (res.status === 200) {
        const result = await res.json();
        // console.log(result);
        this.user_info = result;
      } else {
        var error = res;
        console.log("error", error);
      }
    },
  },
  beforeMount() {
    this.fetchAllUser(this.personne);
  },
};
</script>
