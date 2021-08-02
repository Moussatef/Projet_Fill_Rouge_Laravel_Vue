<template>
  <div
    class="shadow-xl sticky  w-full px-4 bg-white rounded-lg py-6 border-r-2 border-l-2 border-blue-500"
  >
    <div class="text-xl   font-bold text-fBlack">Intro</div>
    <div class="mt-5 mx-auto w-4/5  flex items-center">
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

      <span class="ml-2">
        {{ user_info.adresse }}
      </span>
    </div>
    <div class="mt-4 mx-auto w-4/5  flex items-center">
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
        <rect x="64" y="64" style="fill:#ECEFF1;" width="384" height="384" />
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
      <span class="ml-2">
        {{ user_info.email }}
      </span>
    </div>
    <div class="mt-4 mx-auto w-4/5 flex items-center">
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
      <span class="ml-2">{{ user_info.github }}</span>
    </div>
    <div class="mt-4 mx-auto w-4/5 flex items-center">
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

      <span class="ml-2">{{ user_info.linkedin }} </span>
    </div>
    <div class="mt-4 mx-auto w-4/5 flex items-center">
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
      <span class="ml-2"> {{ user_info.facebook }} </span>
    </div>
    <div class="mt-4 mx-auto w-4/5 flex items-center">
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
        <circle style="fill:url(#SVGID_3_);" cx="393.6" cy="118.4" r="17.056" />
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

      <span class="ml-2"> {{ user_info.instagram }} </span>
    </div>
    <div class="mt-4 mx-auto w-4/5 flex items-center">
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
              d="M428.522,0H83.478C37.446,0,0,37.446,0,83.478v345.043C0,474.554,37.446,512,83.478,512h345.043
			C474.554,512,512,474.554,512,428.522V83.478C512,37.446,474.554,0,428.522,0z M122.435,439.652
			c-27.619,0-50.087-22.468-50.087-50.087c0-27.619,22.468-50.087,50.087-50.087c27.619,0,50.087,22.468,50.087,50.087
			C172.522,417.184,150.054,439.652,122.435,439.652z M256,422.957c-18.413,0-33.391-14.978-33.391-33.391
			c0-55.234-44.935-100.174-100.174-100.174c-18.413,0-33.391-14.978-33.391-33.391s14.978-33.391,33.391-33.391
			c92.065,0,166.956,74.897,166.956,166.956C289.391,407.978,274.413,422.957,256,422.957z M389.565,422.957
			c-18.413,0-33.391-14.978-33.391-33.391c0-128.886-104.859-233.739-233.739-233.739c-18.413,0-33.391-14.978-33.391-33.391
			c0-18.413,14.978-33.391,33.391-33.391c165.707,0,300.522,134.815,300.522,300.522
			C422.957,407.978,407.978,422.957,389.565,422.957z"
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
      <span class="ml-2"> Followed by <b>97 people</b> </span>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  name: "AppIntro",
  computed: {
    ...mapGetters(["user_info"]),
  },
};
</script>
