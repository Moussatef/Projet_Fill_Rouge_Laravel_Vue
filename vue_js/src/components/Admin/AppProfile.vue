<template>
  <div v-if="admin_info">
    <p class="text-2xl bold my-6">Admin profile</p>
    <div class="w-3/5 mx-auto bg-white border rounded-lg m-1 shadow-lg">
      <div class="flex justify-center">
        <label class="m-3 w-40 text-left"> Nom :</label>
        <div v-if="!is_edit_nom" class="w-1/2 flex items-center">
          <label class="m-3">{{ admin_info.admin_name }}</label>
          <button
            @click="is_edit_nom = !is_edit_nom"
            class="m-3 w-7 h-7 p-1 text-center rounded-full hover:bg-gray-200"
          >
            <svg
              class="h-5 w-5"
              height="484pt"
              viewBox="-15 -15 484.00019 484"
              width="484pt"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="m401.648438 18.234375c-24.394532-24.351563-63.898438-24.351563-88.292969 0l-22.101563 22.222656-235.269531 235.144531-.5.503907c-.121094.121093-.121094.25-.25.25-.25.375-.625.746093-.871094 1.121093 0 .125-.128906.125-.128906.25-.25.375-.371094.625-.625 1-.121094.125-.121094.246094-.246094.375-.125.375-.25.625-.378906 1 0 .121094-.121094.121094-.121094.25l-52.199219 156.96875c-1.53125 4.46875-.367187 9.417969 2.996094 12.734376 2.363282 2.332031 5.550782 3.636718 8.867188 3.625 1.355468-.023438 2.699218-.234376 3.996094-.625l156.847656-52.324219c.121094 0 .121094 0 .25-.121094.394531-.117187.773437-.285156 1.121094-.503906.097656-.011719.183593-.054688.253906-.121094.371094-.25.871094-.503906 1.246094-.753906.371093-.246094.75-.621094 1.125-.871094.125-.128906.246093-.128906.246093-.25.128907-.125.378907-.246094.503907-.5l257.371093-257.371094c24.351563-24.394531 24.351563-63.898437 0-88.289062zm-232.273438 353.148437-86.914062-86.910156 217.535156-217.535156 86.914062 86.910156zm-99.15625-63.808593 75.929688 75.925781-114.015626 37.960938zm347.664062-184.820313-13.238281 13.363282-86.917969-86.917969 13.367188-13.359375c14.621094-14.609375 38.320312-14.609375 52.945312 0l33.964844 33.964844c14.511719 14.6875 14.457032 38.332031-.121094 52.949218zm0 0"
              />
            </svg>
          </button>
        </div>
        <input
          v-if="is_edit_nom"
          type="text"
          class="m-3 w-1/2 border-b border-blue-500 focus:outline-none"
          v-model="admin_edit.admin_name"
          @blur="is_edit_nom = !is_edit_nom"
        />
      </div>
      <div class="flex justify-center">
        <label class="m-3 w-40 text-left">Email :</label>
        <div v-if="!is_edit_email" class="w-1/2 flex items-center">
          <label class="m-3">{{ admin_info.email }}</label>
          <button
            @click="is_edit_email = !is_edit_email"
            class="m-3 w-7 h-7 p-1 text-center rounded-full hover:bg-gray-200"
          >
            <svg
              class="h-5 w-5"
              height="484pt"
              viewBox="-15 -15 484.00019 484"
              width="484pt"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="m401.648438 18.234375c-24.394532-24.351563-63.898438-24.351563-88.292969 0l-22.101563 22.222656-235.269531 235.144531-.5.503907c-.121094.121093-.121094.25-.25.25-.25.375-.625.746093-.871094 1.121093 0 .125-.128906.125-.128906.25-.25.375-.371094.625-.625 1-.121094.125-.121094.246094-.246094.375-.125.375-.25.625-.378906 1 0 .121094-.121094.121094-.121094.25l-52.199219 156.96875c-1.53125 4.46875-.367187 9.417969 2.996094 12.734376 2.363282 2.332031 5.550782 3.636718 8.867188 3.625 1.355468-.023438 2.699218-.234376 3.996094-.625l156.847656-52.324219c.121094 0 .121094 0 .25-.121094.394531-.117187.773437-.285156 1.121094-.503906.097656-.011719.183593-.054688.253906-.121094.371094-.25.871094-.503906 1.246094-.753906.371093-.246094.75-.621094 1.125-.871094.125-.128906.246093-.128906.246093-.25.128907-.125.378907-.246094.503907-.5l257.371093-257.371094c24.351563-24.394531 24.351563-63.898437 0-88.289062zm-232.273438 353.148437-86.914062-86.910156 217.535156-217.535156 86.914062 86.910156zm-99.15625-63.808593 75.929688 75.925781-114.015626 37.960938zm347.664062-184.820313-13.238281 13.363282-86.917969-86.917969 13.367188-13.359375c14.621094-14.609375 38.320312-14.609375 52.945312 0l33.964844 33.964844c14.511719 14.6875 14.457032 38.332031-.121094 52.949218zm0 0"
              />
            </svg>
          </button>
        </div>

        <input
          v-if="is_edit_email"
          v-model="admin_edit.email"
          type="email"
          @blur="is_edit_email = !is_edit_email"
          class="m-3 w-1/2 border-b border-blue-500 focus:outline-none"
        />
      </div>
      <div class="mr-10 flex justify-end">
        <button
          v-if="
            admin_edit.admin_name !== admin_info.admin_name ||
            admin_edit.email !== admin_info.email
          "
          @click="update_admin_info"
          class="
            focus:outline-none
            text-white text-sm
            py-1
            px-4
            rounded-md
            bg-gradient-to-r
            from-blue-400
            to-blue-600
            transform
            hover:scale-110
          "
        >
          <svg
            class="h-5 w-5"
            id="bold"
            enable-background="new 0 0 24 24"
            height="512"
            viewBox="0 0 24 24"
            width="512"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g>
              <path
                d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z"
              />
            </g>
          </svg>
        </button>
      </div>
      <div
        v-if="err"
        class="
          bg-red-100
          border border-red-400
          text-red-700
          p-2
          rounded
          relative
          w-1/2
          mx-auto
        "
        role="alert"
      >
        <span class="block sm:inline">{{ err }}</span>
      </div>
      <div class="block">
        <div class="flex justify-center">
          <label class="m-3 w-40 text-left">Modifer mot de pass :</label>
          <div v-if="!is_edit_password" class="w-1/2 flex items-center">
            <label class="m-3"> ****************</label>
            <button
              @click="is_edit_password = !is_edit_password"
              class="m-3 w-7 h-7 p-1 text-center rounded-full hover:bg-gray-200"
            >
              <svg
                class="h-5 w-5"
                height="484pt"
                viewBox="-15 -15 484.00019 484"
                width="484pt"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="m401.648438 18.234375c-24.394532-24.351563-63.898438-24.351563-88.292969 0l-22.101563 22.222656-235.269531 235.144531-.5.503907c-.121094.121093-.121094.25-.25.25-.25.375-.625.746093-.871094 1.121093 0 .125-.128906.125-.128906.25-.25.375-.371094.625-.625 1-.121094.125-.121094.246094-.246094.375-.125.375-.25.625-.378906 1 0 .121094-.121094.121094-.121094.25l-52.199219 156.96875c-1.53125 4.46875-.367187 9.417969 2.996094 12.734376 2.363282 2.332031 5.550782 3.636718 8.867188 3.625 1.355468-.023438 2.699218-.234376 3.996094-.625l156.847656-52.324219c.121094 0 .121094 0 .25-.121094.394531-.117187.773437-.285156 1.121094-.503906.097656-.011719.183593-.054688.253906-.121094.371094-.25.871094-.503906 1.246094-.753906.371093-.246094.75-.621094 1.125-.871094.125-.128906.246093-.128906.246093-.25.128907-.125.378907-.246094.503907-.5l257.371093-257.371094c24.351563-24.394531 24.351563-63.898437 0-88.289062zm-232.273438 353.148437-86.914062-86.910156 217.535156-217.535156 86.914062 86.910156zm-99.15625-63.808593 75.929688 75.925781-114.015626 37.960938zm347.664062-184.820313-13.238281 13.363282-86.917969-86.917969 13.367188-13.359375c14.621094-14.609375 38.320312-14.609375 52.945312 0l33.964844 33.964844c14.511719 14.6875 14.457032 38.332031-.121094 52.949218zm0 0"
                />
              </svg>
            </button>
          </div>
        </div>
        <div
          v-if="is_edit_password"
          class="
            w-11/12
            bg-gray-50
            rounded-lg
            border-blue-500
            mx-auto
            p-1
            my-2
            shadow-lg
          "
        >
          <div class="flex">
            <label class="m-3 w-2/4 text-left">Mot de passe actuel </label>
            <div class="w-full flex items-center">
              <label class="m-3"> </label>
              <input
                v-model="admin_edit.old_password"
                type="password"
                class="m-3 w-full border-b border-blue-500 focus:outline-none"
                placeholder="Tapez votre mot de passe actuel"
              />
            </div>
          </div>
          <div class="flex">
            <label class="m-3 w-2/4 text-left">Nouveau mot de passe </label>
            <div class="w-full flex items-center">
              <label class="m-3"> </label>
              <input
                v-model="admin_edit.new_password"
                type="password"
                class="m-3 w-full border-b border-blue-500 focus:outline-none"
                placeholder="Tapez votre nouveau mot de passe"
              />
            </div>
          </div>
          <div class="flex">
            <label class="m-3 w-2/4 text-left">Nouveau mot de passe </label>
            <div class="w-full flex items-center">
              <label class="m-3"> </label>
              <input
                v-model="admin_edit.password_conformation"
                type="password"
                class="m-3 w-full border-b border-blue-500 focus:outline-none"
                placeholder="Tapez votre nouveau mot de passe encore "
              />
            </div>
          </div>
          <div class="flex justify-end">
            <button
              v-if="
                admin_edit.old_password !== admin_edit.new_password &&
                admin_edit.new_password === admin_edit.password_conformation &&
                admin_edit.old_password.length > 5 &&
                admin_edit.new_password.length > 5 &&
                admin_edit.password_conformation.length > 5
              "
              class="
                ml-5
                focus:outline-none
                text-white text-sm
                py-1
                px-4
                rounded-md
                bg-gradient-to-r
                from-blue-400
                to-blue-600
                transform
                hover:scale-110
              "
              @click="update_admin_password"
            >
              save
            </button>
            <button
              @click="is_edit_password = false"
              type="button"
              class="
                focus:outline-none
                w-20
                mx-2
                text-white text-sm
                py-1.5
                px-4
                rounded-md
                bg-gradient-to-r
                from-gray-400
                to-gray-600
                transform
                hover:scale-110
              "
            >
              Cancel
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
import Swal from "sweetalert2";

export default {
  name: "AppProfile",
  data: function () {
    return {
      is_edit_nom: false,
      is_edit_email: false,
      is_edit_password: false,
      admin_edit: {},
      err: null,
    };
  },
  computed: {
    ...mapGetters(["admin_info"]),
  },
  methods: {
    ...mapActions(["getAdminInfo", "updateAdminInfo"]),
    update_admin_info() {
      this.updateAdminInfo(this.admin_edit);
    },
    update_admin_password() {
      this.$store
        .dispatch("updateAdminPassword", this.admin_edit)
        .then((res) => {
          this.admin_edit.old_password = "";
          this.admin_edit.new_password = "";
          this.admin_edit.password_conformation = "";
          this.is_edit_password = false;
          Swal.fire({
            position: "center",
            icon: "success",
            title: "Votre mot de passe a été enregistré avec succès",
            showConfirmButton: false,
            timer: 1500,
          });
        })
        .catch((err) => {
          if (err.response.status === 401) {
            this.err = "Old password is incorrect";
            setTimeout(() => {
              this.err = null;
            }, 3000);
          }
        });
    },
  },
  async mounted() {
    await this.getAdminInfo();
    this.admin_edit = {
      admin_name: this.admin_info.admin_name,
      email: this.admin_info.email,
      old_password: "",
      new_password: "",
      password_conformation: "",
    };
  },
};
</script>

<style scoped>
</style>