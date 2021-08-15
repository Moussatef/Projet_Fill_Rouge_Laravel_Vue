<template>
  <div class="h-screen flex">
    <SideNav
      @open_valid_Apprenant="openExiste"
      @open_nv_Apprenant="openNv"
      @openPsts="openPsts"
      @open_app_profile="open_app_profile"
      @open_categories="open_categories"
      @open_campus="open_campus"
    />

    <main
      class="
        flex-1
        bg-gray-200
        dark:bg-gray-900
        overflow-y-auto
        transition
        duration-500
        ease-in-out
      "
    >
      <div
        class="px-10 pb-10 text-gray-700 transition duration-500 ease-in-out"
      >
        <div class="flex flex-wrap justify-center justify-evenly mb-6">
          <div
            class="
              flex
              items-center
              justify-around
              p-6
              bg-white
              w-64
              rounded-xl
              space-x-2
              mt-10
              shadow-lg
            "
          >
            <div class="sticky">
              <span class="text-sm font-semibold text-gray-400"
                >Total Apprenant</span
              >
              <h1 class="text-2xl font-bold">
                {{ admin_statistics.total_Apprenant }}
              </h1>
            </div>
            <div>
              <svg
                class="h-8 w-8 text-indigo-600"
                id="Capa_1"
                enable-background="new 0 0 512 512"
                height="512"
                viewBox="0 0 512 512"
                width="512"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <linearGradient
                  id="SVGID_1_"
                  gradientUnits="userSpaceOnUse"
                  x1="256"
                  x2="256"
                  y1="512"
                  y2="0"
                >
                  <stop offset="0" stop-color="#5558ff" />
                  <stop offset="1" stop-color="#00c0ff" />
                </linearGradient>
                <g>
                  <g>
                    <path
                      d="m256 0c-140.957 0-256 115.048-256 256 0 140.957 115.049 256 256 256 140.959 0 256-115.049 256-256 0-140.959-115.049-256-256-256zm0 482c-124.617 0-226-101.383-226-226s101.383-226 226-226 226 101.383 226 226-101.383 226-226 226zm75-316c0-41.355-33.645-75-75-75s-75 33.645-75 75 33.645 75 75 75 75-33.645 75-75zm-75 45c-24.813 0-45-20.187-45-45s20.187-45 45-45 45 20.187 45 45-20.187 45-45 45zm0 30c-74.439 0-135 60.561-135 135v14.058c0 4.264 1.814 8.326 4.99 11.171 36.538 32.74 82.71 50.771 130.01 50.771 47.301 0 93.473-18.031 130.01-50.771 3.176-2.845 4.99-6.908 4.99-11.171v-14.058c0-74.439-60.561-135-135-135zm105 142.193c-30.172 25.072-67.211 38.807-105 38.807s-74.828-13.735-105-38.807v-7.193c0-57.897 47.103-105 105-105s105 47.103 105 105z"
                      fill="url(#SVGID_1_)"
                    />
                  </g>
                </g>
              </svg>
            </div>
          </div>
          <div
            class="
              flex
              items-center
              justify-around
              p-6
              bg-white
              w-64
              rounded-xl
              space-x-2
              mt-10
              shadow-lg
            "
          >
            <div>
              <span class="text-sm font-semibold text-gray-400"
                >Total Responsable</span
              >
              <h1 class="text-2xl font-bold">
                {{ admin_statistics.total_Responsable }}
              </h1>
            </div>
            <div>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-8 w-8 text-indigo-600"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                />
              </svg>
            </div>
          </div>
          <div
            class="
              flex
              items-center
              justify-around
              p-6
              bg-white
              w-64
              rounded-xl
              space-x-2
              mt-10
              shadow-lg
            "
          >
            <div>
              <span class="text-sm font-semibold text-gray-400"
                >Total Posts</span
              >
              <h1 class="text-2xl font-bold">
                {{ admin_statistics.total_posts }}
              </h1>
            </div>
            <div>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-8 w-8 text-indigo-600"
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
            </div>
          </div>
          <div
            class="
              flex
              items-center
              justify-around
              p-6
              bg-white
              w-64
              rounded-xl
              space-x-2
              mt-10
              shadow-lg
            "
          >
            <div>
              <span class="text-sm font-semibold text-gray-400"
                >Total Comments</span
              >
              <h1 class="text-2xl font-bold">
                {{ admin_statistics.total_comments }}
              </h1>
            </div>
            <div>
              <svg
                class="h-8 w-8 text-indigo-600"
                version="1.1"
                id="Capa_1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                viewBox="0 0 512.001 512.001"
                style="enable-background: new 0 0 512.001 512.001"
                xml:space="preserve"
              >
                <linearGradient
                  id="SVGID_1_"
                  gradientUnits="userSpaceOnUse"
                  x1="307.4912"
                  y1="216.7054"
                  x2="554.6512"
                  y2="-30.4546"
                  gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5609)"
                >
                  <stop offset="0" style="stop-color: #a7f3ce" />
                  <stop offset="1" style="stop-color: #61db99" />
                </linearGradient>
                <path
                  style="fill: url(#SVGID_1_)"
                  d="M340.366,164.133c93.488-1.428,169.792,72.153,171.602,165.634
	c0.266,13.725-1.106,27.084-3.932,39.898c-4.786,21.697-7.631,43.776-7.631,65.995v42.948c0,6.58-5.334,11.914-11.914,11.914
	h-42.948c-22.219,0-44.298,2.845-65.995,7.631c-12.813,2.826-26.172,4.198-39.897,3.932
	c-93.48-1.809-167.061-78.111-165.635-171.597C175.407,239.238,249.117,165.527,340.366,164.133z"
                />
                <linearGradient
                  id="SVGID_2_"
                  gradientUnits="userSpaceOnUse"
                  x1="388.3985"
                  y1="135.8026"
                  x2="283.4185"
                  y2="240.7726"
                  gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5609)"
                >
                  <stop
                    offset="0"
                    style="stop-color: #61db99; stop-opacity: 0"
                  />
                  <stop offset="1" style="stop-color: #009e74" />
                </linearGradient>
                <path
                  style="fill: url(#SVGID_2_)"
                  d="M340.366,164.133c93.488-1.428,169.792,72.153,171.602,165.634
	c0.266,13.725-1.106,27.084-3.932,39.898c-4.786,21.697-7.631,43.776-7.631,65.995v42.948c0,6.58-5.334,11.914-11.914,11.914
	h-42.948c-22.219,0-44.298,2.845-65.995,7.631c-12.813,2.826-26.172,4.198-39.897,3.932
	c-93.48-1.809-167.061-78.111-165.635-171.597C175.407,239.238,249.117,165.527,340.366,164.133z"
                />
                <linearGradient
                  id="SVGID_3_"
                  gradientUnits="userSpaceOnUse"
                  x1="129.97"
                  y1="332.7742"
                  x2="390.92"
                  y2="71.8242"
                  gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5609)"
                >
                  <stop offset="0" style="stop-color: #62e1fb" />
                  <stop offset="1" style="stop-color: #00a2f3" />
                </linearGradient>
                <path
                  style="fill: url(#SVGID_3_)"
                  d="M209.098,9.909C95.204,8.169,2.245,97.81,0.039,211.696
	c-0.323,16.719,1.348,32.996,4.792,48.606c5.83,26.432,9.296,53.331,9.296,80.4v52.322c0,8.016,6.498,14.515,14.515,14.515h52.322
	c27.068,0,53.967,3.466,80.4,9.296c15.61,3.443,31.886,5.115,48.605,4.791c113.884-2.205,203.525-95.161,201.789-209.053
	C410.062,101.406,320.264,11.606,209.098,9.909z"
                />
                <linearGradient
                  id="SVGID_4_"
                  gradientUnits="userSpaceOnUse"
                  x1="179.0384"
                  y1="218.1926"
                  x2="41.6444"
                  y2="355.5826"
                  gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5609)"
                >
                  <stop
                    offset="0"
                    style="stop-color: #00a2f3; stop-opacity: 0"
                  />
                  <stop offset="1" style="stop-color: #0075cd" />
                </linearGradient>
                <path
                  style="fill: url(#SVGID_4_)"
                  d="M132.193,204.739c-5.816-6.18-14.048-10.061-23.206-10.061
	c-17.613,0-31.891,14.278-31.891,31.891c0,9.157,3.88,17.389,10.061,23.206l68.794,68.794c5.817,6.18,14.049,10.061,23.206,10.061
	c17.613,0,31.891-14.278,31.891-31.891c0-9.157-3.881-17.389-10.061-23.206L132.193,204.739z"
                />
                <circle
                  style="fill: #ffffff"
                  cx="108.986"
                  cy="226.565"
                  r="31.891"
                />
                <linearGradient
                  id="SVGID_5_"
                  gradientUnits="userSpaceOnUse"
                  x1="268.8719"
                  y1="218.196"
                  x2="131.4819"
                  y2="355.586"
                  gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5609)"
                >
                  <stop
                    offset="0"
                    style="stop-color: #00a2f3; stop-opacity: 0"
                  />
                  <stop offset="1" style="stop-color: #0075cd" />
                </linearGradient>
                <path
                  style="fill: url(#SVGID_5_)"
                  d="M222.383,204.739c-5.816-6.18-14.048-10.061-23.206-10.061
	c-17.613,0-31.891,14.278-31.891,31.891c0,9.157,3.88,17.389,10.061,23.206l68.794,68.794c5.817,6.18,14.049,10.061,23.206,10.061
	c17.613,0,31.891-14.278,31.891-31.891c0-9.157-3.881-17.389-10.061-23.206L222.383,204.739z"
                />
                <circle
                  style="fill: #ffffff"
                  cx="199.178"
                  cy="226.565"
                  r="31.891"
                />
                <linearGradient
                  id="SVGID_6_"
                  gradientUnits="userSpaceOnUse"
                  x1="358.7104"
                  y1="218.1945"
                  x2="221.3204"
                  y2="355.5845"
                  gradientTransform="matrix(1.0039 0 0 -1.0039 0.1922 516.5609)"
                >
                  <stop
                    offset="0"
                    style="stop-color: #00a2f3; stop-opacity: 0"
                  />
                  <stop offset="1" style="stop-color: #0075cd" />
                </linearGradient>
                <path
                  style="fill: url(#SVGID_6_)"
                  d="M312.572,204.739c-5.816-6.18-14.048-10.061-23.206-10.061
	c-17.613,0-31.891,14.278-31.891,31.891c0,9.157,3.881,17.389,10.061,23.206l68.794,68.794c5.817,6.18,14.049,10.061,23.206,10.061
	c17.613,0,31.891-14.278,31.891-31.891c0-9.157-3.881-17.389-10.061-23.206L312.572,204.739z"
                />
                <circle
                  style="fill: #ffffff"
                  cx="289.371"
                  cy="226.565"
                  r="31.891"
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
              <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
            </svg> -->
            </div>
          </div>
          <div
            class="
              flex
              items-center
              justify-around
              p-6
              bg-white
              w-64
              rounded-xl
              space-x-2
              mt-10
              shadow-lg
            "
          >
            <div>
              <span class="text-sm font-semibold text-gray-400"
                >Total Likes</span
              >
              <h1 class="text-2xl font-bold">
                {{ admin_statistics.total_Like }}
              </h1>
            </div>
            <div>
              <svg
                class="h-8 w-8"
                id="Capa_1"
                enable-background="new 0 0 512 512"
                height="512"
                viewBox="0 0 512 512"
                width="512"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <linearGradient
                  id="SVGID_1_"
                  gradientUnits="userSpaceOnUse"
                  x1="256"
                  x2="256"
                  y1="512"
                  y2="0"
                >
                  <stop offset="0" stop-color="#fd3a84" />
                  <stop offset="1" stop-color="#ffa68d" />
                </linearGradient>
                <g>
                  <g>
                    <path
                      d="m256 0c-140.959 0-256 115.049-256 256 0 140.959 115.049 256 256 256 140.959 0 256-115.05 256-256 0-140.959-115.049-256-256-256zm0 482c-124.617 0-226-101.383-226-226s101.383-226 226-226 226 101.383 226 226-101.383 226-226 226zm75-361c-32.923 0-58.18 18.506-75 46.058-16.817-27.547-42.072-46.058-75-46.058-53.252 0-90 45.908-90 99.545 0 64.594 57.624 110.966 116.19 162.298 12.376 10.848 25.174 22.065 38.775 34.306 2.853 2.568 6.444 3.851 10.035 3.851s7.182-1.283 10.035-3.851c13.601-12.241 26.398-23.458 38.775-34.306 63.286-55.469 116.19-99.611 116.19-162.298 0-53.739-36.839-99.545-90-99.545zm-45.964 239.283c-9.375 8.216-18.988 16.643-29.036 25.587-10.047-8.944-19.661-17.371-29.036-25.587-66.079-57.918-105.964-92.877-105.964-139.738 0-39.647 25.794-69.545 60-69.545 32.707 0 53.643 31.628 60.516 56.399 1.763 6.548 7.701 11.101 14.484 11.101 6.796 0 12.743-4.569 14.494-11.135.15-.564 15.55-56.365 60.506-56.365 34.206 0 60 29.898 60 69.545 0 46.861-39.885 81.82-105.964 139.738z"
                      fill="url(#SVGID_1_)"
                    />
                  </g>
                </g>
              </svg>
            </div>
          </div>
          <div
            class="
              flex
              items-center
              justify-around
              p-6
              bg-white
              w-64
              rounded-xl
              space-x-2
              mt-10
              shadow-lg
            "
          >
            <div>
              <span class="text-sm font-semibold text-gray-400"
                >Total Campus</span
              >
              <h1 class="text-2xl font-bold">
                {{ admin_statistics.total_compus }}
              </h1>
            </div>
            <div>
              <svg
                class="h-8 w-8"
                id="Capa_1"
                enable-background="new 0 0 512 512"
                height="512"
                viewBox="0 0 512 512"
                width="512"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <linearGradient
                  id="SVGID_1_"
                  gradientUnits="userSpaceOnUse"
                  x1="256"
                  x2="256"
                  y1="512"
                  y2="0"
                >
                  <stop offset="0" stop-color="#fd3a84" />
                  <stop offset="1" stop-color="#ffa68d" />
                </linearGradient>
                <g>
                  <g>
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
                  </g>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <!-- <AppFilter/> -->
        <div
          class="border border-gray-700 transition duration-500 ease-in-out"
        ></div>
        <AppShow
          v-if="showInfo == true"
          :apprenant="appr"
          @hiddenApprenant="hiddenCard"
        />

        <ApprenantValidCard
          v-if="open_valid_Apprenant"
          :apprenant="apprenant"
          @showApprenant="getApprenant"
        />
        <AppPosts v-if="showPsts" />
        <div v-if="showNvApp" class="flex flex-col mt-2">
          <AppCardInfo
            v-for="appr in apprenant"
            :key="appr.id"
            :apprenant="appr"
            @showApprenant="getApprenant"
          />
        </div>
        <AppProfile v-if="showProfile" />
        <Categories v-if="showCategories" />
        <Campus v-if="showCampus" />
      </div>
    </main>
  </div>
</template>
<script>
import SideNav from "@/components/Admin/sideNav";
import AppCardInfo from "@/components/Admin/AppCardInfo";
import AppFilter from "@/components/Admin/AppFilter";
import AppShow from "@/components/Admin/AppShow";
import ApprenantValidCard from "@/components/Admin/AppCardAprValid";
import AppPosts from "@/components/Admin/AppPosts";
import AppProfile from "@/components/Admin/AppProfile";
import Categories from "./Categories";
import Campus from "./Campus";
import { mapGetters, mapActions } from "vuex";
export default {
  name: "SideBar",
  components: {
    Categories,
    AppProfile,
    SideNav,
    AppCardInfo,
    AppFilter,
    AppShow,
    ApprenantValidCard,
    AppPosts,
    Campus,
  },
  data() {
    return {
      showInfo: false,
      open_valid_Apprenant: false,
      appr: null,
      showPsts: false,
      showProfile: false,
      showCategories: false,
      showCampus: false,
      showNvApp: true,
    };
  },
  methods: {
    ...mapActions(["getAllApprenant", "getStatisticsAdm"]),
    getApprenant(param) {
      this.appr = param[0];
      if (this.appr) {
        this.showInfo = true;
      }
    },
    hiddenCard() {
      this.showInfo = false;
      this.open_valid_Apprenant = false;
    },
    openExiste() {
      this.open_valid_Apprenant = true;
      this.showInfo = false;
      this.showPsts = false;
      this.showNvApp = false;
      this.showProfile = false;
      this.showCategories = false;
      this.showCampus = false;
    },
    openNv() {
      this.open_valid_Apprenant = false;
      this.showInfo = false;
      this.showPsts = false;
      this.showNvApp = true;
      this.showProfile = false;
      this.showCategories = false;
      this.showCampus = false;
    },
    openPsts() {
      this.showPsts = true;
      this.open_valid_Apprenant = false;
      this.showInfo = false;
      this.showNvApp = false;
      this.showProfile = false;
      this.showCategories = false;
      this.showCampus = false;
    },
    open_app_profile() {
      this.showPsts = false;
      this.open_valid_Apprenant = false;
      this.showInfo = false;
      this.showNvApp = false;
      this.showProfile = true;
      this.showCategories = false;
      this.showCampus = false;
    },
    open_categories() {
      this.showPsts = false;
      this.open_valid_Apprenant = false;
      this.showInfo = false;
      this.showNvApp = false;
      this.showProfile = false;
      this.showCategories = true;
      this.showCampus = false;
    },
    open_campus() {
      this.showPsts = false;
      this.open_valid_Apprenant = false;
      this.showInfo = false;
      this.showNvApp = false;
      this.showProfile = false;
      this.showCategories = false;
      this.showCampus = true;
    },
  },
  computed: {
    ...mapGetters(["apprenant", "admin_statistics"]),
  },
  created() {
    this.getStatisticsAdm();
    this.getAllApprenant();
  },
};
</script>
