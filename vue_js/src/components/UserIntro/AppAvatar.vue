<template>
    <div class="flex justify-between items-center">
        <div class="flex items-center">
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
    props:["personne_id"],
    data(){
        return {
          user_info : null,
          personne : this.personne_id,
        };
    },
    methods:{
    async fetchAllUser(param) {
    var myHeaders = new Headers();
      myHeaders.append("Accept", "application/json");
      myHeaders.append("Authorization", "Bearer 	" + param[1]);

      var requestOptions = {
        method: "GET",
        headers: myHeaders,
        redirect: "follow",
      };
      var res = await fetch(
        "http://127.0.0.1:8000/api/apprenant/id/" + param[0],
        requestOptions
      );

      if (res.status === 200) {
        const result = await res.json();
        console.log(result);
        this.user_info = result;
      } else {
        var error = res;
        console.log("error", error);
      }
    },
    },
    created() {
      this.fetchAllUser(param)

    }
    
}
</script>