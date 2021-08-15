<template>
  <div v-if="categories">
    <div class="flex justify-center items-center mt-6" v-if="!edit_mode">
      <label>Nouvelle catégorie :</label>
      <input
        type="text"
        v-model="categorie.libelle"
        class="
          mx-2
          shadow
          appearance-none
          border
          rounded
          w-2/6
          py-2
          px-3
          text-gray-700
          leading-tight
          focus:outline-none
          focus:shadow-outline
        "
      />
      <div class="ml-2">
        <button
          v-if="can_add_or_edit"
          @click="add_categorie"
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
    </div>
    <div class="flex flex-wrap justify-evenly">
      <div
        v-for="(categorie, index) in categories"
        :key="index"
        class="mx-2 lg:w-5/12 md:w-6/12 sm:11/12"
      >
        <div class="flex flex-row mt-2">
          <div
            class="
              flex
              md:flex md:flex-wrap
              sm:flex sm:flex-wrap
              md:mt-5
              sm:mt-4
              w-full
              items-center
              justify-between
              bg-white
              px-8
              py-6
              border-l-4 border-blue-500
            "
          >
            <!-- card -->
            <div class="flex">
              <div class="flex flex-col justify-center ml-6">
                <span class="text-lg font-bold">{{ categorie.libelle }}</span>
              </div>
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center mr-20">
              <div class="lg:inline-block mr-2 mt-2">
                <button
                  id="open_edit_model"
                  @click="open_edit(categorie)"
                  class="
                    m-3
                    w-7
                    h-7
                    p-1
                    text-center
                    rounded-full
                    hover:bg-gray-200
                  "
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
              <div class="inline-block mr-2 mt-2">
                <button
                  @click="open_delete(categorie)"
                  class="
                    m-3
                    w-7
                    h-7
                    p-1
                    text-center
                    rounded-full
                    hover:bg-gray-200
                  "
                >
                  <svg
                    class="h-5 w-5"
                    id="Layer_1"
                    enable-background="new 0 0 512 512"
                    height="512"
                    viewBox="0 0 512 512"
                    width="512"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <g>
                      <path
                        d="m424 64h-88v-16c0-26.467-21.533-48-48-48h-64c-26.467 0-48 21.533-48 48v16h-88c-22.056 0-40 17.944-40 40v56c0 8.836 7.164 16 16 16h8.744l13.823 290.283c1.221 25.636 22.281 45.717 47.945 45.717h242.976c25.665 0 46.725-20.081 47.945-45.717l13.823-290.283h8.744c8.836 0 16-7.164 16-16v-56c0-22.056-17.944-40-40-40zm-216-16c0-8.822 7.178-16 16-16h64c8.822 0 16 7.178 16 16v16h-96zm-128 56c0-4.411 3.589-8 8-8h336c4.411 0 8 3.589 8 8v40c-4.931 0-331.567 0-352 0zm313.469 360.761c-.407 8.545-7.427 15.239-15.981 15.239h-242.976c-8.555 0-15.575-6.694-15.981-15.239l-13.751-288.761h302.44z"
                      />
                      <path
                        d="m256 448c8.836 0 16-7.164 16-16v-208c0-8.836-7.164-16-16-16s-16 7.164-16 16v208c0 8.836 7.163 16 16 16z"
                      />
                      <path
                        d="m336 448c8.836 0 16-7.164 16-16v-208c0-8.836-7.164-16-16-16s-16 7.164-16 16v208c0 8.836 7.163 16 16 16z"
                      />
                      <path
                        d="m176 448c8.836 0 16-7.164 16-16v-208c0-8.836-7.164-16-16-16s-16 7.164-16 16v208c0 8.836 7.163 16 16 16z"
                      />
                    </g>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="edit_model" class="edit_modal" @click="exit_model">
        <div class="edit_modal_content">
          <span class="close_edit" @click="close_edit">&times;</span>
          <p class="text-2xl bold mb-5">Modifier la catégorie</p>
          <input
            type="text"
            v-model="categorie.libelle"
            class="
              mx-2
              mb-5
              shadow
              appearance-none
              border
              rounded
              w-2/6
              py-2
              px-3
              text-gray-700
              leading-tight
              focus:outline-none
              focus:shadow-outline
            "
          />
          <div class="ml-2">
            <button
              v-if="can_add_or_edit"
              @click="edit_categorie"
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
        </div>
      </div>
      <div id="delete_model" class="delete_modal" @click="exit_model">
        <div class="delete_modal_content">
          <span class="close_delete" @click="close_delete">&times;</span>
          <p class="text-2xl bold mb-5">Supprimer categorie</p>
          <p>Êtes-vous sûr de vouloir supprimer cette catégorie</p>
          <div class="mt-6">
            <button
              @click="delete_categorie"
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
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";

export default {
  name: "Categories",
  data: function () {
    return {
      categorie: {
        id: "",
        libelle: "",
      },
      edit_mode: false,
    };
  },
  computed: {
    ...mapGetters(["categories"]),
    can_add_or_edit() {
      if (this.categories)
        return (
          this.categorie.libelle !== "" &&
          !this.categories.some(
            (el) =>
              el.libelle.toLowerCase() === this.categorie.libelle.toLowerCase()
          )
        );
    },
  },
  methods: {
    ...mapActions([
      "getCategories",
      "addCategorie",
      "editCategorie",
      "deleteCategorie",
    ]),
    add_categorie() {
      this.addCategorie(this.categorie).then(
        (res) => (this.categorie.libelle = "")
      );
    },
    edit_categorie() {
      this.editCategorie(this.categorie).then((res) => {
        this.close_edit();
        this.categorie.libelle = "";
      });
    },
    delete_categorie() {
      this.deleteCategorie(this.categorie).then((res) => {
        this.close_delete();
        this.categorie.id = "";
      });
    },
    open_edit(categorie) {
      this.edit_mode = true;
      this.categorie.id = categorie.id;
      this.categorie.libelle = categorie.libelle;
      const edit_model = document.getElementById("edit_model");
      edit_model.style.display = "block";
    },
    close_edit() {
      this.edit_mode = false;
      this.categorie.id = "";
      this.categorie.libelle = "";
      const edit_model = document.getElementById("edit_model");
      edit_model.style.display = "none";
    },
    open_delete(categorie) {
      this.categorie.id = categorie.id;
      const delete_model = document.getElementById("delete_model");
      delete_model.style.display = "block";
    },
    close_delete() {
      this.categorie.id = "";
      const delete_model = document.getElementById("delete_model");
      delete_model.style.display = "none";
    },
    exit_model() {
      window.onclick = function (event) {
        const edit_model = document.getElementById("edit_model");
        const delete_model = document.getElementById("delete_model");
        if (event.target == edit_model) {
          edit_model.style.display = "none";
        }
        if (event.target == delete_model) {
          delete_model.style.display = "none";
        }
      };
    },
  },
  mounted() {
    this.getCategories();
  },
};
</script>

<style scoped>
/* The Modal (background) */
.edit_modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0, 0, 0); /* Fallback color */
  background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.edit_modal_content {
  background-color: #fefefe;
  margin: 20% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close_edit {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close_edit:hover,
.close_edit:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
/* The Modal (background) */
.delete_modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0, 0, 0); /* Fallback color */
  background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.delete_modal_content {
  background-color: #fefefe;
  margin: 20% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close_delete {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close_delete:hover,
.close_delete:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>