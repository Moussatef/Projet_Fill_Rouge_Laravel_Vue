<template>
  <div class=" mt-2">
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
                  Titre
                </th>
                <th
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  Description
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
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  Date inscreption
                </th>
                <th
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  Dernier Update 
                </th>
                <th
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                >
                  Vesit Post
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
                        type="submit"
                        class=" inline-flex items-center md:mb-2 lg:mb-0 "
                      >
                        show post
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
  </div>
</template>
