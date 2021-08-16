<template>
  <nav
    class="
      mr-6
      w-56
      bg-white
      dark:bg-gray-800
      select-none
      overflow-y-auto
      transition
      duration-500
      ease-in-out
    "
  >
    <div class="flex flex-col items-center">
      <h1
        class="
          text-3xl
          font-light
          text-gray-600
          mt-0
          transition
          duration-500
          ease-in-out
        "
      >
        You
        <span
          class="
            text-3xl
            font-light
            text-blue-600
            dark:text-blue-400
            mt-0
            transition
            duration-500
            ease-in-out
          "
          >Code</span
        >
      </h1>

      <img
        class="h-16 w-16 rounded-full object-cover mt-4"
        src="http://127.0.0.1:8000/storage/image/ycc.jpg"
        alt="Admin Profile"
      />
      <span class="capitalize mt-2 mb-6 transition duration-500 ease-in-out">
        Admin
      </span>
    </div>

    <ul>
      <li
        class="
          pl-8
          py-2
          focus:text-blue-500
          mb-2
          transition
          duration-500
          ease-in-out
        "
      >
        <!-- active & hover classes 'bg-indigo-100 dark:bg-indigo-600' -->
        <a
          href=""
          @click="
            $event.preventDefault();
            open = !open;
          "
          class="
            flex
            items-center
            focus:text-blue-500
            transition-colors
            rounded-md
          "
          role="button"
        >
          <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24">
            <path
              d="M16 9c6 0 6 4 6
								4v2h-6v-2s0-1.69-1.15-3.2c-.17-.23-.38-.45-.6-.66C14.77
								9.06 15.34 9 16 9m-8 2c3.5 0 3.94 1.56 4
								2H4c.06-.44.5-2 4-2m0-2c-6 0-6 4-6
								4v2h12v-2s0-4-6-4m1 8v2h6v-2l3 3-3 3v-2H9v2l-3-3
								3-3M8 3c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1
								.45-1 1-1m0-2C6.34 1 5 2.34 5 4s1.34 3 3 3 3-1.34
								3-3-1.34-3-3-3m8 0c-1.66 0-3 1.34-3 3s1.34 3 3 3
								3-1.34 3-3-1.34-3-3-3z"
            ></path>
          </svg>
          <span class="ml-4 text-sm"> Apprenant </span>
          <span class="ml-auto" aria-hidden="true">
            <!-- active class 'rotate-180' -->
            <svg
              class="w-4 h-4 transition-transform transform"
              :class="{ 'rotate-180': open }"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 9l-7 7-7-7"
              />
            </svg>
          </span>
        </a>
        <div v-if="open" class="mt-2 space-y-2 px-2">
          <button
            @click="$emit('open_nv_Apprenant')"
            class="
              focus:text-blue-500
              focus:outline-none
              w-full
              transition
              duration-500
              ease-in-out
            "
          >
            <span class="flex items-center">
              <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                <path d="M15 5v4h-4v4H7v4H3v3h7v-4h4v-4h4V8h4V5h-7z"></path>
              </svg>

              <span class="ml-4 capitalize">apprenants non valide</span>
            </span>
          </button>
          <button
            @click="$emit('open_valid_Apprenant')"
            class="
              focus:text-blue-500
              focus:outline-none
              w-full
              transition
              duration-500
              ease-in-out
            "
          >
            <span class="flex items-center">
              <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                <path d="M15 5v4h-4v4H7v4H3v3h7v-4h4v-4h4V8h4V5h-7z"></path>
              </svg>

              <span class="ml-4 capitalize">existe apprenant</span>
            </span>
          </button>
        </div>
      </li>
      <!-- border-l-2 border-blue-500 -->
      <li
        class="
          pl-8
          py-2
          font-semibold
          focus:text-blue-500
          dark:text-blue-400
          hover:bg-blue-200
          mb-2
          transition
          duration-500
          ease-in-out
        "
      >
        <button
          @click="$emit('openPsts')"
          class="
            focus:text-blue-500
            focus:outline-none
            w-full
            transition
            duration-500
            ease-in-out
          "
        >
          <span class="flex items-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 text-gray-600"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"
              />
            </svg>

            <span class="ml-4 capitalize">Gestion des posts</span>
          </span>
        </button>
      </li>

      <li
        class="
          pl-8
          py-2
          font-semibold
          text-gray-700
          hover:bg-blue-200
          dark-hover:bg-blue-500
          mb-2
          transition
          duration-500
          ease-in-out
        "
      >
        <button
          class="
            focus:text-blue-500
            focus:outline-none
            w-full
            transition
            duration-500
            ease-in-out
          "
        >
          <span class="flex items-center">
            <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24">
              <path
                d="M16 9c6 0 6 4 6
								4v2h-6v-2s0-1.69-1.15-3.2c-.17-.23-.38-.45-.6-.66C14.77
								9.06 15.34 9 16 9m-8 2c3.5 0 3.94 1.56 4
								2H4c.06-.44.5-2 4-2m0-2c-6 0-6 4-6
								4v2h12v-2s0-4-6-4m1 8v2h6v-2l3 3-3 3v-2H9v2l-3-3
								3-3M8 3c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1
								.45-1 1-1m0-2C6.34 1 5 2.34 5 4s1.34 3 3 3 3-1.34
								3-3-1.34-3-3-3m8 0c-1.66 0-3 1.34-3 3s1.34 3 3 3
								3-1.34 3-3-1.34-3-3-3z"
              ></path>
            </svg>
            <span class="ml-4 capitalize">manage team</span>
          </span>
        </button>
      </li>

      <li
        class="
          pl-8
          py-2
          font-semibold
          text-gray-700
          hover:bg-blue-200
          dark-hover:bg-blue-500
          mb-2
          transition
          duration-500
          ease-in-out
        "
      >
        <button
          class="
            focus:text-blue-500
            focus:outline-none
            w-full
            transition
            duration-500
            ease-in-out
          "
          @click="$emit('open_campus')"
        >
          <span class="flex items-center">
            <svg class="h-4 w-4 fill-current" viewBox="0 0 448 512">
              <path
                d="M128 148v-40c0-6.6 5.4-12 12-12h40c6.6 0 12
								5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6
								0-12-5.4-12-12zm140 12h40c6.6 0 12-5.4
								12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12
								12v40c0 6.6 5.4 12 12 12zm-128 96h40c6.6 0 12-5.4
								12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12
								12v40c0 6.6 5.4 12 12 12zm128 0h40c6.6 0 12-5.4
								12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12
								12v40c0 6.6 5.4 12 12 12zm-76
								84v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12
								12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4
								12-12zm76 12h40c6.6 0 12-5.4
								12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12
								12v40c0 6.6 5.4 12 12 12zm180 124v36H0v-36c0-6.6
								5.4-12 12-12h19.5V24c0-13.3 10.7-24
								24-24h337c13.3 0 24 10.7 24 24v440H436c6.6 0 12
								5.4 12 12zM79.5 463H192v-67c0-6.6 5.4-12
								12-12h40c6.6 0 12 5.4 12 12v67h112.5V49L80 48l-.5
								415z"
              ></path>
            </svg>
            <span class="ml-4 capitalize">campus profil</span>
          </span>
        </button>
      </li>

      <li
        class="
          pl-8
          py-2
          font-semibold
          text-gray-700
          hover:bg-blue-200
          dark-hover:bg-blue-500
          mb-2
          transition
          duration-500
          ease-in-out
        "
      >
        <button
          @click="$emit('open_categories')"
          class="
            focus:text-blue-500
            focus:outline-none
            w-full
            transition
            duration-500
            ease-in-out
          "
        >
          <span class="flex items-center">
            <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24">
              <path d="M3 13h12v-2H3m0-5v2h18V6M3 18h6v-2H3v2z"></path>
            </svg>
            <span class="ml-4 capitalize">Gérer les catégories</span>
          </span>
        </button>
      </li>

      <li
        class="
          pl-8
          py-2
          font-semibold
          text-gray-700
          hover:bg-blue-200
          dark-hover:bg-blue-500
          transition
          duration-500
          ease-in-out
        "
      >
        <button
          class="
            focus:text-blue-500
            focus:outline-none
            w-full
            transition
            duration-500
            ease-in-out
          "
        >
          <span class="flex items-center">
            <svg class="h-4 w-4 fill-current" viewBox="0 0 496 512">
              <path
                d="M248 104c-53 0-96 43-96 96s43 96 96 96 96-43
								96-96-43-96-96-96zm0 144c-26.5
								0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5
								48-48 48zm0-240C111 8 0 119 0 256s111 248 248 248
								248-111 248-248S385 8 248 8zm0 448c-49.7
								0-95.1-18.3-130.1-48.4 14.9-23 40.4-38.6
								69.6-39.5 20.8 6.4 40.6 9.6 60.5 9.6s39.7-3.1
								60.5-9.6c29.2 1 54.7 16.5 69.6 39.5-35 30.1-80.4
								48.4-130.1
								48.4zm162.7-84.1c-24.4-31.4-62.1-51.9-105.1-51.9-10.2
								0-26 9.6-57.6 9.6-31.5 0-47.4-9.6-57.6-9.6-42.9
								0-80.6 20.5-105.1 51.9C61.9 339.2 48 299.2 48
								256c0-110.3 89.7-200 200-200s200 89.7 200 200c0
								43.2-13.9 83.2-37.3 115.9z"
              ></path>
            </svg>
            <span class="ml-4 capitalize" @click="$emit('open_app_profile')"
              >mon profil</span
            >
          </span>
        </button>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  name: "SideNav",
  data() {
    return {
      open: false,
      focussed: false,
    };
  },
};
</script>

