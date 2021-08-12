<template>
  <div class=" mt-2" @click="exitModal">
    <div class="w-full mx-auto ">
      <div class="-mx-2 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
          <table class="min-w-full leading-normal">
            <thead>
              <tr>
                <th
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  Apprenant
                </th>
                <th
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  Nom et prenom
                </th>
                <th
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  campus
                </th>
                <th
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  email
                </th>
                <th
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  date de naissance
                </th>
                <th
                  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  telephon
                </th>
                <th
                  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  Nb_Post
                </th>
                <th
                  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  NB_Likes
                </th>
                <th
                  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  NB_Comments
                </th>
                <th
                  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  github
                </th>
                <th
                  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  linkedin
                </th>
                <th
                  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  facebook
                </th>
                <th
                  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  instagram
                </th>
                <th
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  Created at
                </th>
                <th
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  Last Update in
                </th>
                <th
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  Vesit Apprenant
                </th>
                <th
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                ></th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="appr in apprenant" :key="appr.id">
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <div class="flex-shrink-0 w-12 h-12">
                    <img
                      class="h-12 w-12 rounded-full object-fill"
                      :src="'http://127.0.0.1:8000' + appr.img"
                      alt=""
                    />
                  </div>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">
                    {{ appr.full_name }}
                  </p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">
                    {{ appr.campus }}
                  </p>
                </td>
                <td
                  class="px-5 py-5 border-b border-gray-200 bg-white text-sm  "
                >
                  {{ appr.email }}
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  {{ appr.date_N }}
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">
                    {{ appr.telephon }}
                  </p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">
                    {{ appr.nb_Post }}
                  </p>
                </td>
                <td
                  class="px-5 py-5 border-b border-gray-200 bg-white text-sm  "
                >
                  <span
                    class="text-gray-400 inline-flex items-center leading-none text-sm"
                  >
                    <svg
                      class="w-4 h-4 mr-1 "
                      viewBox="0 0 511 511.99962"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="m512.445312 245.636719c-1.53125-66.976563-29.011718-129.394531-77.382812-175.75-48.300781-46.289063-111.726562-71.078125-178.589844-69.8437502-66.886718-1.2421878-130.285156 23.5585932-178.585937 69.8437502-48.371094 46.355469-75.851563 108.773437-77.382813 175.75l-.003906.210937v.210938c.351562 68.261718 29.574219 133.15625 80.320312 178.640625v61.886719c0 12.011718 8.386719 22.476562 19.941407 24.882812 1.710937.355469 3.433593.53125 5.144531.53125 4.652344 0 9.222656-1.300781 13.242188-3.8125l49.738281-31.070312c28.050781 9.820312 57.328125 14.796874 87.085937 14.796874h.367188c1.648437.03125 3.28125.046876 4.921875.046876 65.105469-.003907 126.65625-24.707032 173.800781-69.886719 48.371094-46.355469 75.851562-108.773438 77.382812-175.75l.007813-.34375zm-98.160156 154.757812c-42.59375 40.816407-98.546875 62.640625-157.515625 61.496094l-.324219-.003906c-.160156 0-.316406 0-.472656 0-27.53125 0-54.597656-4.808594-80.445312-14.289063-6.429688-2.359375-13.4375-1.640625-19.222656 1.972656l-45.457032 28.398438v-56.925781c0-6.347657-2.761718-12.390625-7.578125-16.578125-45.863281-39.871094-72.367187-97.578125-72.738281-158.351563 1.394531-58.898437 25.585938-113.773437 68.132812-154.542969 42.589844-40.820312 98.5625-62.632812 157.511719-61.496093l.296875.007812.296875-.007812c59.007813-1.160157 114.921875 20.675781 157.515625 61.496093 42.507813 40.738282 66.695313 95.566407 68.128906 154.414063-1.429687 58.84375-25.621093 113.671875-68.128906 154.410156zm0 0"
                      />
                      <path
                        d="m307.714844 144.183594c-15.269532 0-29.234375 4.816406-41.511719 14.3125-3.4375 2.65625-6.6875 5.644531-9.730469 8.9375-3.042968-3.296875-6.289062-6.28125-9.726562-8.9375-12.28125-9.496094-26.246094-14.3125-41.511719-14.3125-20.257813 0-38.898437 8.121094-52.492187 22.867187-13.28125 14.40625-20.59375 33.988281-20.59375 55.136719 0 45.726562 35.054687 75.597656 83.574218 116.945312 7.96875 6.792969 17.003906 14.496094 26.363282 22.675782 3.980468 3.488281 9.089843 5.40625 14.386718 5.40625s10.40625-1.917969 14.382813-5.398438c9.433593-8.253906 18.433593-15.921875 26.375-22.6875 48.515625-41.34375 83.570312-71.214844 83.570312-116.941406 0-21.152344-7.316406-40.730469-20.597656-55.140625-13.59375-14.742187-32.234375-22.863281-52.488281-22.863281zm-29.960938 172.089844c-6.488281 5.53125-13.679687 11.660156-21.28125 18.246093-7.554687-6.550781-14.765625-12.695312-21.273437-18.242187-45.539063-38.804688-73.023438-62.226563-73.023438-94.089844 0-27.800781 18.109375-47.976562 43.058594-47.976562 8.578125 0 16.148437 2.628906 23.140625 8.035156 6.441406 4.984375 10.988281 11.382812 13.671875 15.878906 3.015625 5.054688 8.542969 8.191406 14.425781 8.191406 5.882813 0 11.414063-3.136718 14.429688-8.195312 2.683594-4.492188 7.230468-10.890625 13.671875-15.875 6.992187-5.40625 14.558593-8.035156 23.140625-8.035156 24.949218 0 43.058594 20.175781 43.058594 47.976562 0 31.863281-27.484376 55.285156-73.019532 94.085938zm0 0"
                      />
                    </svg>
                    {{ appr.nb_like }}
                  </span>
                </td>
                <td
                  class="px-5 py-5 border-b border-gray-200 bg-white text-sm  "
                >
                  <span
                    class="text-gray-400 inline-flex items-center leading-none text-sm"
                  >
                    <svg
                      class="w-4 h-4 mr-1 "
                      stroke="currentColor"
                      stroke-width="2"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"
                      ></path></svg
                    >{{ appr.nb_comment }}
                  </span>
                </td>
                <td
                  class="px-5 py-5 border-b border-gray-200 bg-white text-sm  "
                >
                  {{ appr.github }}
                </td>
                <td
                  class="px-5 py-5 border-b border-gray-200 bg-white text-sm  "
                >
                  {{ appr.linkedin }}
                </td>
                <td
                  class="px-5 py-5 border-b border-gray-200 bg-white text-sm  "
                >
                  {{ appr.facebook }}
                </td>
                <td
                  class="px-5 py-5 border-b border-gray-200 bg-white text-sm  "
                >
                  {{ appr.instagram }}
                </td>
                <td
                  class="px-5 py-5 border-b border-gray-200 bg-white text-sm  "
                >
                  {{ appr.created_at }}
                </td>
                <td
                  class="px-5 py-5 border-b border-gray-200 bg-white text-sm  "
                >
                  {{ appr.updated_at }}
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <span
                    class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight"
                  >
                    <span
                      aria-hidden
                      class="absolute inset-0 bg-green-200 opacity-50 rounded-full"
                    ></span>
                    <span class="relative">
                      <button
                        @click="
                          clickModal();
                          apprenat_affch = appr;
                        "
                        type="submit"
                        class=" inline-flex items-center md:mb-2 lg:mb-0 "
                      >
                        Montre apprenant
                        <svg
                          class="w-4 h-4 ml-2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          stroke-width="2"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path d="M5 12h14"></path>
                          <path d="M12 5l7 7-7 7"></path>
                        </svg>
                      </button>
                    </span>
                  </span>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <span
                    class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight"
                  >
                    <span
                      aria-hidden
                      class="absolute inset-0 bg-red-400 opacity-50 rounded-full"
                    ></span>
                    <span class="relative">
                      <button type="submit" class="text-blue-500">
                        <svg
                          class="w-5 h-5 "
                          id="Capa_1"
                          enable-background="new 0 0 512 512"
                          height="512"
                          viewBox="0 0 512 512"
                          width="512"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <g>
                            <path
                              id="XMLID_1089_"
                              d="m428.332 135.275-11.167-33.466c-2.248-6.736-8.552-11.278-15.653-11.278h-291.024c-7.101 0-13.405 4.543-15.653 11.278l-11.167 33.466c-2.53 7.582 3.113 15.414 11.106 15.414h322.451c7.994 0 13.637-7.832 11.107-15.414z"
                            />
                            <path
                              id="XMLID_835_"
                              d="m135.615 491.767c1.28 11.519 11.016 20.233 22.606 20.233h193.718c11.59 0 21.326-8.715 22.606-20.233l34.565-311.077h-308.06z"
                            />
                            <path
                              id="XMLID_831_"
                              d="m225.89 42.998c0-7.167 5.831-12.998 12.998-12.998h44.189c7.167 0 12.998 5.831 12.998 12.998v17.533h30v-17.533c0-23.709-19.289-42.998-42.998-42.998h-44.189c-23.709 0-42.998 19.289-42.998 42.998v17.533h30z"
                            />
                          </g>
                        </svg>
                      </button>
                    </span>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- The Modal -->
    <div id="myModal" @click="exitModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content" v-if="apprenat_affch != null" >
        <span @click="clickExet" class="close">&times;</span>
        <p>Card Info </p>
        <div class="intro" >
          <img
            class="h-12 w-12 rounded-full object-fill"
            :src="'http://127.0.0.1:8000' + apprenat_affch.img"
            alt="Cool"
          />
          <p>{{ apprenat_affch.full_name }}</p>
        </div>

        <div class="card_body">
          <div class="-mx-2 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <table>
              <tr>
                <td>
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
                </td>
                <td>
                  <p class="mx-4">{{ apprenat_affch.campus }}</p>
                </td>
              </tr>
              <tr>
                <td>
                  <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                    <path
                      d="M19
                    19H5V8h14m-3-7v2H8V1H6v2H5c-1.11
                    0-2 .89-2 2v14a2 2 0 002 2h14a2 2
                    0 002-2V5a2 2 0 00-2-2h-1V1m-1
                    11h-5v5h5v-5z"
                    ></path>
                  </svg>
                </td>
                <td>
                  <p class="mx-4">{{ apprenat_affch.created_at }}</p>
                </td>
              </tr>
              <tr>
                <td>
                  <svg
                    class="h-5 w-5"
                    version="1.1"
                    id="Capa_1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px"
                    y="0px"
                    viewBox="0 0 31.685 31.685"
                    style="enable-background:new 0 0 31.685 31.685;"
                    xml:space="preserve"
                  >
                    <g>
                      <path
                        d="M22.507,0H9.175C7.9,0,6.87,1.034,6.87,2.309v27.07c0,1.271,1.03,2.306,2.305,2.306h13.332
		c1.273,0,2.307-1.034,2.307-2.306V2.309C24.813,1.034,23.78,0,22.507,0z M23.085,25.672H8.599V3.895h14.486V25.672z M18.932,2.343
		h-6.181V1.669h6.182L18.932,2.343L18.932,2.343z M21.577,2.035c0,0.326-0.266,0.59-0.591,0.59c-0.326,0-0.591-0.265-0.591-0.59
		s0.265-0.59,0.591-0.59C21.312,1.444,21.577,1.709,21.577,2.035z M18.655,29.225h-5.629v-1.732h5.629V29.225z"
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
                </td>
                <td>
                  <p class="mx-4">{{ apprenat_affch.telephon }}</p>
                </td>
              </tr>
              <tr>
                <td>
                  <svg
                    class="h-5 w-5"
                    id="Capa_1"
                    enable-background="new 0 0 512.001 512.001"
                    height="512"
                    viewBox="0 0 512.001 512.001"
                    width="512"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <g>
                      <path
                        d="m15.001 421h75v45c0 8.284 6.716 15 15 15h392c8.284 0 15-6.716 15-15v-390c0-8.284-6.716-15-15-15h-75v-15c0-8.284-6.716-15-15-15s-15 6.716-15 15v15h-76v-15c0-8.284-6.716-15-15-15s-15 6.716-15 15v15h-75v-15c0-8.284-6.716-15-15-15s-15 6.716-15 15v15h-76c-8.284 0-15 6.716-15 15v90c0 110.55-45.945 195.596-84.603 228.477-4.852 4.043-6.651 10.691-4.502 16.63 2.151 5.938 7.789 9.893 14.105 9.893zm467 30h-362v-30h287c3.509 0 6.907-1.23 9.603-3.477 18.032-15.019 45.963-50.777 65.397-96.575zm-362-360h61v15c0 8.284 6.716 15 15 15s15-6.716 15-15v-15h75v15c0 8.284 6.716 15 15 15s15-6.716 15-15v-15h76v15c0 8.284 6.716 15 15 15s15-6.716 15-15v-15h60v60h-362zm-.257 89.99h361.991c-3.38 95.155-39.901 170.023-80.616 210.01h-351.999c46.133-58.781 68.149-135.318 70.624-210.01z"
                      />
                    </g>
                  </svg>
                </td>
                <td>
                  <p class="mx-4">{{ apprenat_affch.date_N }}</p>
                </td>
              </tr>
              <tr>
                <td>
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
                </td>
                <td>
                  <p class="mx-4">{{ apprenat_affch.adresse }}</p>
                </td>
              </tr>
              <tr>
                <td>
                  <svg
                    class="h-5 w-5"
                    enable-background="new 0 0 24 24"
                    height="512"
                    viewBox="0 0 24 24"
                    width="512"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="m12 .5c-6.63 0-12 5.28-12 11.792 0 5.211 3.438 9.63 8.205 11.188.6.111.82-.254.82-.567 0-.28-.01-1.022-.015-2.005-3.338.711-4.042-1.582-4.042-1.582-.546-1.361-1.335-1.725-1.335-1.725-1.087-.731.084-.716.084-.716 1.205.082 1.838 1.215 1.838 1.215 1.07 1.803 2.809 1.282 3.495.981.108-.763.417-1.282.76-1.577-2.665-.295-5.466-1.309-5.466-5.827 0-1.287.465-2.339 1.235-3.164-.135-.298-.54-1.497.105-3.121 0 0 1.005-.316 3.3 1.209.96-.262 1.98-.392 3-.398 1.02.006 2.04.136 3 .398 2.28-1.525 3.285-1.209 3.285-1.209.645 1.624.24 2.823.12 3.121.765.825 1.23 1.877 1.23 3.164 0 4.53-2.805 5.527-5.475 5.817.42.354.81 1.077.81 2.182 0 1.578-.015 2.846-.015 3.229 0 .309.21.678.825.56 4.801-1.548 8.236-5.97 8.236-11.173 0-6.512-5.373-11.792-12-11.792z"
                      fill="#212121"
                    />
                  </svg>
                </td>
                <td>
                  <p class="mx-4">{{ apprenat_affch.github }}</p>
                </td>
              </tr>
              <tr>
                <td>
                  <svg
                    class="h-5 w-5"
                    enable-background="new 0 0 24 24"
                    height="512"
                    viewBox="0 0 24 24"
                    width="512"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <g fill="#0077b5">
                      <path
                        d="m23.994 24v-.001h.006v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07v-2.185h-4.773v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243v7.801z"
                      />
                      <path d="m.396 7.977h4.976v16.023h-4.976z" />
                      <path
                        d="m2.882 0c-1.591 0-2.882 1.291-2.882 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909c-.001-1.591-1.292-2.882-2.882-2.882z"
                      />
                    </g>
                  </svg>
                </td>
                <td>
                  <p class="mx-4">{{ apprenat_affch.linkedin }}</p>
                </td>
              </tr>
              <tr>
                <td>
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
                    <path
                      style="fill:#1976D2;"
                      d="M448,0H64C28.704,0,0,28.704,0,64v384c0,35.296,28.704,64,64,64h384c35.296,0,64-28.704,64-64V64
	C512,28.704,483.296,0,448,0z"
                    />
                    <path
                      style="fill:#FAFAFA;"
                      d="M432,256h-80v-64c0-17.664,14.336-16,32-16h32V96h-64l0,0c-53.024,0-96,42.976-96,96v64h-64v80h64
	v176h96V336h48L432,256z"
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
                </td>
                <td>
                  <p class="mx-4">{{ apprenat_affch.facebook }}</p>
                </td>
              </tr>
              <tr>
                <td>
                  <svg
                    class="h-6 w-6"
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
                    <linearGradient
                      id="SVGID_1_"
                      gradientUnits="userSpaceOnUse"
                      x1="-46.0041"
                      y1="634.1208"
                      x2="-32.9334"
                      y2="647.1917"
                      gradientTransform="matrix(32 0 0 -32 1519 20757)"
                    >
                      <stop offset="0" style="stop-color:#FFC107" />
                      <stop offset="0.507" style="stop-color:#F44336" />
                      <stop offset="0.99" style="stop-color:#9C27B0" />
                    </linearGradient>
                    <path
                      style="fill:url(#SVGID_1_);"
                      d="M352,0H160C71.648,0,0,71.648,0,160v192c0,88.352,71.648,160,160,160h192
	c88.352,0,160-71.648,160-160V160C512,71.648,440.352,0,352,0z M464,352c0,61.76-50.24,112-112,112H160c-61.76,0-112-50.24-112-112
	V160C48,98.24,98.24,48,160,48h192c61.76,0,112,50.24,112,112V352z"
                    />
                    <linearGradient
                      id="SVGID_2_"
                      gradientUnits="userSpaceOnUse"
                      x1="-42.2971"
                      y1="637.8279"
                      x2="-36.6404"
                      y2="643.4846"
                      gradientTransform="matrix(32 0 0 -32 1519 20757)"
                    >
                      <stop offset="0" style="stop-color:#FFC107" />
                      <stop offset="0.507" style="stop-color:#F44336" />
                      <stop offset="0.99" style="stop-color:#9C27B0" />
                    </linearGradient>
                    <path
                      style="fill:url(#SVGID_2_);"
                      d="M256,128c-70.688,0-128,57.312-128,128s57.312,128,128,128s128-57.312,128-128
	S326.688,128,256,128z M256,336c-44.096,0-80-35.904-80-80c0-44.128,35.904-80,80-80s80,35.872,80,80
	C336,300.096,300.096,336,256,336z"
                    />
                    <linearGradient
                      id="SVGID_3_"
                      gradientUnits="userSpaceOnUse"
                      x1="-35.5456"
                      y1="644.5793"
                      x2="-34.7919"
                      y2="645.3331"
                      gradientTransform="matrix(32 0 0 -32 1519 20757)"
                    >
                      <stop offset="0" style="stop-color:#FFC107" />
                      <stop offset="0.507" style="stop-color:#F44336" />
                      <stop offset="0.99" style="stop-color:#9C27B0" />
                    </linearGradient>
                    <circle
                      style="fill:url(#SVGID_3_);"
                      cx="393.6"
                      cy="118.4"
                      r="17.056"
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
                </td>
                <td>
                  <p class="mx-4">{{ apprenat_affch.instagram }}</p>
                </td>
              </tr>
              <tr>
               
                <td>
                  <div class="inline-block mr-2 mt-2">
                    <button
                      type="button"
                      class="focus:outline-none w-full text-white text-sm py-2.5 px-5 rounded-md bg-gradient-to-r from-yellow-400 to-yellow-600 transform hover:scale-110"
                    >
                      Supprimer
                    </button>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { mapGetters, mapActions } from "vuex";
import Swal from "sweetalert2";

export default {
  name: "ApprenantValidCard",
  props: ["apprenant"],
  data() {
    return {
      apprenat_affch: null,
    };
  },
  methods: {
    ...mapActions(["validateApprenant"]),

    clickExet() {
      // Get the modal
      var modal = document.getElementById("myModal");
      // Get the <span> element that closes the modal
      //   var span = document.getElementsByClassName("close")[0];
      // When the user clicks on <span> (x), close the modal
      //   span.onclick = function() {
      modal.style.display = "none";
      //   };
    },

    clickModal() {
      // Get the modal
      var modal = document.getElementById("myModal");
      // Get the button that opens the modal
      // When the user clicks the button, open the modal
      modal.style.display = "block";
    },

    exitModal() {
      // Get the modal
      var modal = document.getElementById("myModal");
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };
    },
  },
  computed: {
    // ...mapGetters(["apprenant"]),
  },
  create() {
    this.exitModal();
  },
};
</script>

<style scoped>
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0, 0, 0); /* Fallback color */
  background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
  
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  width: 50%;
  border-radius: 15px;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.intro {
  margin: 10px 10px;
  display: flex;
  justify-content: left;
}
.intro p {
  margin: 10px 10px;
}
.card_body {
  display: flex;
  flex-wrap: wrap;
  justify-items: center;
  justify-content: center;
}
.card_body table tr td {
  margin: 10px;
  padding: 10px;
}
@media screen and (max-width: 975px) {
  .card_info {
    box-shadow: 3px 7px 8px 2px #b4b4b47e;
    border-radius: 10px;
    max-width: 100%;
    margin: 10px auto 2%;
    overflow: hidden;
  }
  .modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  width: 100%;
  border-radius: 15px;
}
}
</style>
