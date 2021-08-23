<template>
  <div class="bg-gray-100">
    <div x-data="scrollProgress" class="fixed inset-x-0 top-0 z-50">
      <div class="h-1 bg-blue-500" :style="`width: ${percent}%`"></div>
    </div>

    <AppProfile
      v-if="user_info.id"
      :key="user_info.id"
      :nom="user_info.nom"
      :prenom="user_info.prenom"
      :bio="user_info.bio"
      :img="user_info.img"
      :imgCover="user_info.cover"
      @open_photo="open_photo"
      @open_post="open_post"
      @open_problem="open_problem"
    />
    <div
      class="my-5 justify-center max-w-screen-2xl md:4/6 z-0 flex lg:grid lg:gap-12 grid-cols-3 pb-56 mx-auto sm:flex flex-wrap "
    >
      <div class=" mb-5 space-y-4 col-span-1  sticky ">
        <AppIntro
          v-if="op_intro"
          :key="user_info.id"
          :github="user_info.github"
          :email="user_info.email"
          :linkedin="user_info.linkedin"
          :facebook="user_info.facebook"
          :instagram="user_info.instagram"
          :adresse="user_info.adresse"
          @editInfo="clickModal()"
          @fill_var="fill_var"
        />
        <AppPhoto v-if="op_post" @open_photo="open_photo" />
        <div
          class="fixed inline-flex items-center justify-center overflow-hidden rounded-full bottom-5 left-5"
        ></div>
      </div>
      <div class=" w-full col-start-2 col-span-3 space-y-4">
        <AppCreatePost v-if="op_post" />
        <Appload v-if="loading" />
        <div v-if="op_post">
          <AppPost
            v-for="post in posts_personne"
            :key="post.id"
            :post="post"
            :post_id="post.id"
            :personne_id="user_info.id"
            :title="post.titre"
            :description="post.description"
            :created_at="post.created_at"
            :like="post.like"
            :comment="post.comment"
            :image="post.img_post"
            @sendPost="getPost"
          />
          <div v-observe-visibility="handleScrolledToBottomProfile"></div>
        </div>
        <div v-if="op_problem">
          <AppEditeur />
          <AppPostProblem
            v-for="post in postsProblem"
            :key="post.id"
            :post="post"
            :post_id="post.id"
            :personne_id="user_info.id"
            :title="post.titre"
            :description="post.description"
            :created_at="post.created_at"
            :like="post.like"
            :comment="post.comment"
            :image="post.img_post"
            @sendPost="getPost"
          />
          <div v-observe-visibility="handleScrolledToBottom"></div>
        </div>
      </div>
    </div>

    <div id="myModal" @click="exitModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span @click="clickExit" class="close">&times;</span>
        <p class="text-2xl text-gray-500 mb-8">{ social media <span class="text-blue-500">information</span> }</p>
        <div class="intro mt-6">
          <div>
            <div class="mt-5 mx-auto flex items-center">
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
              <div v-if="!ed_adresse" class=" ml-3  flex items-center">
                <p class="ml-4 text-left"> {{ user_info.adresse }} </p>
                <button
                  @click="ed_adresse = !ed_adresse"
                  class=" ml-5 w-7 h-7 p-1 text-center rounded-full hover:bg-gray-200"
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
                v-if="ed_adresse"
                type="text"
                class="form-control ml-5  border-b border-blue-500 focus:outline-none"
                v-model="inp_adresse"
              />
            </div>
            <div class="mt-4 mx-auto  flex items-center">
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
              <div v-if="!ed_email" class=" ml-3  flex items-center">
                <p class="ml-4 text-left"> {{ user_info.email }} </p>
                <button
                  @click="ed_email = !ed_email"
                  class=" ml-5 w-7 h-7 p-1 text-center rounded-full hover:bg-gray-200"
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
                v-if="ed_email"
                type="text"
                class="form-control ml-5  border-b border-blue-500 focus:outline-none"
                v-model="inp_email"
              />
            </div>
            <div class="mt-4 mx-auto  flex items-center">
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
              <div v-if="!ed_github" class=" ml-3  flex items-center">
                <p class="ml-4 text-left"> {{ user_info.github }} </p>
                <button
                  @click="ed_github = !ed_github"
                  class=" ml-5 w-7 h-7 p-1 text-center rounded-full hover:bg-gray-200"
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
                v-if="ed_github"
                type="text"
                class="form-control ml-5  border-b border-blue-500 focus:outline-none"
                v-model="inp_github"
              />
            </div>
          </div>
          <div>
            <div class="mt-4 mx-auto  flex items-center">
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
              <div v-if="!ed_linkedin" class=" ml-3  flex items-center">
                <p class="ml-4 text-left"> {{ user_info.linkedin }} </p>
                <button
                  @click="ed_linkedin = !ed_linkedin"
                  class=" ml-5 w-7 h-7 p-1 text-center rounded-full hover:bg-gray-200"
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
                v-if="ed_linkedin"
                type="text"
                class="form-control ml-5  border-b border-blue-500 focus:outline-none"
                v-model="inp_linkedin"
              />
            </div>
            <div class="mt-4 mx-auto  flex items-center">
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
              <div v-if="!ed_facebook" class=" ml-3  flex items-center">
                <p class="ml-4 text-left"> {{ user_info.facebook }} </p>
                <button
                  @click="ed_facebook = !ed_facebook"
                  class=" ml-5 w-7 h-7 p-1 text-center rounded-full hover:bg-gray-200"
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
                v-if="ed_facebook"
                type="text"
                class="form-control ml-5 border-b border-blue-500 focus:outline-none"
                v-model="inp_facebook"
              />
            </div>
            <div class="mt-4 mx-auto  flex items-center">
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
              <div v-if="!ed_instagram" class=" ml-3  flex items-center">
                <p class="ml-4 text-left"> {{ user_info.instagram }} </p>
                <button
                  @click="ed_instagram = !ed_instagram"
                  class=" ml-5 w-7 h-7 p-1 text-center rounded-full hover:bg-gray-200"
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
                v-if="ed_instagram"
                type="text"
                class="form-control ml-5  border-b border-blue-500 focus:outline-none"
                v-model="inp_instagram"
              />
            </div>
          </div>
        </div>
        <div>
          <button
            v-if="
              inp_instagram != user_info.instagram ||
                inp_facebook != user_info.facebook ||
                inp_github != user_info.github ||
                inp_linkedin != user_info.linkedin ||
                inp_email != user_info.email ||
                inp_adresse != user_info.adresse
            "
            @click="updateInfoPersonne"
            class="ml-5 focus:outline-none   text-white text-sm py-1 px-4 rounded-md bg-gradient-to-r from-blue-400 to-blue-600 transform hover:scale-110"
          >
            <svg
              class="h-5 w-5 "
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
    <!-- The Modal -->
    <div id="postModel" @click="exitPostModal()" class="Postmodal">
      <!-- Modal content -->
      <div class="modal-contentPost">
        <span @click="clickPostExit()" class="closePost">&times;</span>
        <div v-if="post" class="flex justify-center">
          <div class=" w-3/6">
            <div class="flex items-center m-4">
              <img
                :src="'http://127.0.0.1:8000' + post.img"
                alt=""
                class="h-10 w-10 rounded-full border  border-blue-500"
              />
              <div class="ml-4">
                <span class="cursor-pointer font-bold"
                  >{{ post.full_name }}
                </span>
                <span class="text-grey text-opacity-50 text-sm mx-3">{{
                  post.created_at
                }}</span>
              </div>
            </div>
            <div>
              <h2 class="text-2xl text-gray-900">
                {{ post.titre }}
              </h2>
              <div
                class=" text-gray-900 text-left "
                v-html="post.description"
              ></div>
              <hr />
            </div>
            <div class="flex border-b-2 mx-3 rounded-lg  border-blue-300 my-4">
              <div class="flex items-center m-2">
                <svg
                  class="h-6 w-6 mx-3"
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
                {{ post.like.length }}
              </div>
              <div class="flex items-center  m-2">
                <svg
                  class="w-6 h-6 mr-1 "
                  stroke="currentColor"
                  stroke-width="2"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"
                  ></path>
                </svg>
                {{ post.comment.length }}
              </div>
              <div></div>
            </div>
            <div class=" text-left overflow-y-auto" style="max-height:500px">
              <AppComment
                v-for="cmt in post.comment"
                :key="cmt.id"
                :full_name="cmt.full_name"
                :comment_body="cmt.comment"
                :personne_id="cmt.personne_id"
                :comment_id="cmt.id"
                :created_at="cmt.created_at"
                :img="cmt.img"
              />
            </div>
          </div>
          <div class="w-full p-2 mx-auto ">
            <AppImage v-for="img in post.img_post" :key="img.id" :image="img" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import AppProfile from "@/components/profil/AppProfil";
import AppIntro from "@/components/profil/AppIntro";
import AppCreatePost from "@/components/profil/AppCreatePost";
import AppPost from "@/components/profil/AppPost";
import AppPhoto from "@/components/profil/AppPhoto";
import Appload from "@/components/dataload/ApploadCard";
import AppComment from "@/components/profil/AppComment";
import AppImage from "@/components/profil/AppImage";
import AppEditeur from "@/components/post/postProblem/AppEditor";
import AppPostProblem from "@/components/post/postProblem/AppPostProblem";
import Swal from "sweetalert2";

export default {
  name: "UserProfile",
  data() {
    return {
      token: localStorage.getItem("user_token"),
      personne_id: localStorage.getItem("personne_id"),
      id_apprenant: localStorage.getItem("user_id"),
      show_post: false,
      post: null,
      like: null,
      pageProfile: 2,
      pageProblem: 2,

      inp_adresse: "",
      inp_email: "",
      inp_github: "",
      inp_facebook: "",
      inp_instagram: "",
      inp_linkedin: "",

      ed_adresse: false,
      ed_email: false,
      ed_github: false,
      ed_facebook: false,
      ed_instagram: false,
      ed_linkedin: false,

      op_post: true,
      op_intro: true,
      op_photo: false,
      op_problem: false,
    };
  },
  components: {
    AppProfile,
    AppIntro,
    AppCreatePost,
    AppPost,
    AppPhoto,
    Appload,
    AppComment,
    AppImage,
    AppEditeur,
    AppPostProblem,
  },
  methods: {
    ...mapActions([
      "fetchPosts",
      "fetchUser",
      "updatePersonne",
      "fetchPostsProblem",
    ]),

    clickPostExit() {
      // Get the modal
      var modal = document.getElementById("postModel");
      // Get the <span> element that closes the modal

      modal.style.display = "none";
    },
    clickPostModal() {
      // Get the modal
      var modal = document.getElementById("postModel");
      // When the user clicks the button, open the modal
      modal.style.display = "block";
    },

    exitPostModal() {
      // Get the modal
      var modal = document.getElementById("postModel");
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };
    },

    updateInfoPersonne() {
      this.updatePersonne([
        localStorage.getItem("personne_id"),
        this.inp_email,
        this.inp_adresse,
        this.inp_github,
        this.inp_linkedin,
        this.inp_facebook,
        this.inp_instagram,
      ]);
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Your changed has been saved",
        showConfirmButton: false,
        timer: 1500,
      });
      this.clickExit();
    },

    fill_var(params) {
      this.inp_adresse = params[0];
      this.inp_email = params[1];
      this.inp_github = params[2];
      this.inp_facebook = params[3];
      this.inp_instagram = params[4];
      this.inp_linkedin = params[5];
    },

    open_photo() {
      this.op_post = false;
      this.op_photo = true;
      this.op_problem = false;
      this.op_intro = false;
    },
    open_post() {
      this.op_post = true;
      this.op_intro = true;
      this.op_photo = false;
      this.op_problem = false;
    },
    open_problem() {
      this.op_post = false;
      this.op_photo = false;
      this.op_intro = true;
      this.op_problem = true;
    },
    getPost(param) {
      // console.log(param);
      this.post = param[0];
      if (this.post) {
        this.clickPostModal();
      }
    },
    disable() {
      this.show_post = false;
    },
    clickExit() {
      // Get the modal
      var modal = document.getElementById("myModal");
      // Get the <span> element that closes the modal
      //   var span = document.getElementsByClassName("close")[0];
      // When the user clicks on <span> (x), close the modal
      //   span.onclick = function() {
      modal.style.display = "none";
      this.ed_adresse = false;
      this.ed_email = false;
      this.ed_github = false;
      this.ed_facebook = false;
      this.ed_instagram = false;
      this.ed_linkedin = false;
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
          this.ed_adresse = false;
          this.ed_email = false;
          this.ed_github = false;
          this.ed_facebook = false;
          this.ed_instagram = false;
          this.ed_linkedin = false;
        }
      };
    },
    handleScrolledToBottom(isVisible) {
      if (!isVisible || this.allPostsProblemPages < this.pageProblem) return;
      else this.fetchPostsProblem(this.pageProblem++);
      // console.log(this.allPostsProfilePages +' / '+ this.page );
    },

    handleScrolledToBottomProfile(isVisible) {
      if (!isVisible || this.allPostsProfilePages < this.pageProfile) return;
      else this.fetchPosts(this.pageProfile++);
      // console.log(this.allPostsProfilePages +' / '+ this.page );
    },
  },
  computed: {
    ...mapGetters([
      "posts_personne",
      "postsProblem",
      "user_info",
      "user_token",
      "apprenant_id",
      "loading",
      "allPostsProblemPages",
      "allPostsProfilePages",
    ]),
  },
  created() {
    // this.scrol();
    this.fetchUser([this.id_apprenant, this.token]);
    this.fetchPosts();
    this.fetchPostsProblem();
  },
  beforeMount() {},
};
</script>

<style scoped>
.Postmodal {
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
.modal-contentPost {
  background-color: #fefefe;
  margin: 5% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 90%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.closePost {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.closePost:hover,
.closePost:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
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
  width: 60%;
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
  justify-content: space-evenly;
  width: 100%;
}
.intro p {
  margin: 10px 10px;
}

@media screen and (max-width: 975px) {
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    width: 100%;
    border-radius: 15px;
  }
}
</style>
