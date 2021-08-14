<template>
  <div v-if="!apprenant.validation || apprenant.validation == 'false' " class="flex flex-row mt-2">
    <div
      class="flex md:flex md:flex-wrap sm:flex sm:flex-wrap md:mt-5 sm:mt-4 w-full items-center justify-between bg-white px-8 py-6 border-l-4 border-blue-500 "
    >
      <!-- card -->
      <div class="flex">
        <img
          class="h-12 w-12 rounded-full object-fill"
          :src="'http://127.0.0.1:8000' + apprenant.img"
          alt=""
        />
        <div class="flex flex-col justify-center ml-6">
          <span class="text-lg font-bold">Apprenant Info</span>
          <div
            class=" mt-4 lg:grid lg:grid-cols-2 lg:gap-4 md:flex md:flex-wrap sm:flex sm:flex-wrap md:mt-5 sm:mt-4"
          >
            <div class="flex">
              <svg class="h-5 w-5 fill-current " viewBox="0 0 24 24">
                <path
                  d="M12 4a4 4 0 014 4 4 4 0 01-4 4
                    4 4 0 01-4-4 4 4 0 014-4m0
                    10c4.42 0 8 1.79 8
                    4v2H4v-2c0-2.21 3.58-4 8-4z"
                ></path>
              </svg>
              <span class="ml-2 text-sm text-gray-600  capitalize">
                {{ apprenant.full_name }}
              </span>
            </div>
            <div class="flex ml-6">
              <svg
                class="h-5 w-5"
                version="1.1"
                id="Layer_1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                viewBox="0 0 512 512"
                style="enable-background:new 0 0 512 512;"
                xml:space="preserve"
              >
                <g>
                  <g>
                    <path
                      d="M256,0C161.896,0,85.333,76.563,85.333,170.667c0,28.25,7.063,56.26,20.49,81.104L246.667,506.5
			c1.875,3.396,5.448,5.5,9.333,5.5s7.458-2.104,9.333-5.5l140.896-254.813c13.375-24.76,20.438-52.771,20.438-81.021
			C426.667,76.563,350.104,0,256,0z M256,256c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333
			s85.333,38.281,85.333,85.333C341.333,217.719,303.052,256,256,256z"
                    />
                  </g>
                </g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
              </svg>
              <span class="ml-2 text-sm text-gray-600  capitalize">
                {{ apprenant.campus }}
              </span>
            </div>
            <div class="flex">
              <svg
                class="h-5 w-5"
                version="1.1"
                id="Capa_1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                viewBox="0 0 512 512"
                style="enable-background:new 0 0 512 512;"
                xml:space="preserve"
              >
                <rect
                  x="64"
                  y="64"
                  style="fill:#ECEFF1;"
                  width="384"
                  height="384"
                />
                <polygon
                  style="fill:#CFD8DC;"
                  points="256,296.384 448,448 448,148.672 "
                />
                <path
                  style="fill:#F44336;"
                  d="M464,64h-16L256,215.616L64,64H48C21.504,64,0,85.504,0,112v288c0,26.496,21.504,48,48,48h16V148.672
	l192,147.68L448,148.64V448h16c26.496,0,48-21.504,48-48V112C512,85.504,490.496,64,464,64z"
                />
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
              </svg>
              <span class="ml-2 text-sm text-gray-600  capitalize">
                {{ apprenant.email }}
              </span>
            </div>
            <div class="flex ml-6">
              <svg
                class="h-5 w-5 fill-current
											"
                viewBox="0 0 24 24"
              >
                <path
                  d="M19
                    19H5V8h14m-3-7v2H8V1H6v2H5c-1.11
                    0-2 .89-2 2v14a2 2 0 002 2h14a2 2
                    0 002-2V5a2 2 0 00-2-2h-1V1m-1
                    11h-5v5h5v-5z"
                ></path>
              </svg>
              <span class="ml-2 text-sm text-gray-600  capitalize">
                {{ apprenant.created_at }}
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-col sm:flex-row sm:items-center   mr-20 ">
        <div class=" lg:inline-block mr-2 mt-2 ">
          <button
            @click="validerApprenant(apprenant.personne_id)"
            type="button"
            class="focus:outline-none w-full  text-white text-sm py-2.5 px-5 rounded-md bg-gradient-to-r from-blue-400 to-blue-600 transform hover:scale-110"
          >
            Valide
          </button>
        </div>
        <div class="inline-block mr-2 mt-2">
          <button
            @click="$emit('showApprenant', [apprenant])"
            type="button"
            class="focus:outline-none  w-full text-white text-sm py-2.5 px-5 rounded-md bg-gradient-to-r from-gray-400 to-gray-600 transform hover:scale-110"
          >
            Montre
          </button>
        </div>
        <div class="inline-block mr-2 mt-2">
          <button
            type="button"
            class="focus:outline-none w-full text-white text-sm py-2.5 px-5 rounded-md bg-gradient-to-r from-yellow-400 to-yellow-600 transform hover:scale-110"
          >
            Supprimer
          </button>
        </div>
      </div>
    </div>
    <!-- <div
              class="text-center flex flex-col items-center
						justify-center bg-white 					 ml-1 px-12 cursor-pointer
						hover:bg-blue-200 "
            >
              <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                <path
                  d="M9.47 9.65l-1.41 1.42L11
								14l5.19-5.18-1.41-1.42L11 11.18M17 3H7c-1.1 0-2
								.9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2m0 15l-5-2.18L7
								18V5h10z"
                ></path>
              </svg>
            </div> -->
  </div>
</template>
<script>
import { mapGetters, mapActions } from "vuex";
import Swal from "sweetalert2";
export default {
  name: "AppCardInfo",
  props: ["apprenant"],
  methods: {
    ...mapActions(["validateApprenant"]),
    validerApprenant(apprenant_id) {
      this.validateApprenant(apprenant_id);
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Validation avec success ",
        showConfirmButton: false,
        timer: 1500,
      });
    },
  },
};
</script>
