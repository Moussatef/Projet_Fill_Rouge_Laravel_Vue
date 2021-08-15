<template>
  <div class="bg-white lg:px-44 sm:px-2 shadow">
    <div
      class="relative h-96 rounded-xl flex justify-center sm:max-w-screen-sm     md:max-w-full"
    >
      <img
        v-if="img_src == false"
        :src="'http://127.0.0.1:8000' + user_info.cover"
        class="object-cover w-full h-full rounded-3xl"
        alt=""
      />
      <img
        v-if="img_src == true"
        :src="imagepreview"
        class="object-cover w-full h-full rounded-3xl"
        alt=""
        id="cover"
      />
      <label
        @click="$refs.cover_img.click()"
        class="sm:absolute cursor-pointer h-5 w-5 p-2 rounded-full border-2 border-gray-500  bg-indigo-600 "
      >
        <svg
          class="h-5 w-5 "
          height="512pt"
          viewBox="0 -18 512 512"
          width="512pt"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="m512 80v106c0 11.046875-8.953125 20-20 20s-20-8.953125-20-20v-106c0-22.054688-17.945312-40-40-40h-352c-22.054688 0-40 17.945312-40 40v280c0 22.054688 17.945312 40 40 40h140c11.046875 0 20 8.953125 20 20s-8.953125 20-20 20h-140c-44.113281 0-80-35.886719-80-80v-280c0-44.113281 35.886719-80 80-80h352c44.113281 0 80 35.886719 80 80zm-428.105469 245.933594c8.800781 6.675781 21.34375 4.957031 28.023438-3.84375l28.40625-37.433594 52.773437 66.746094c3.792969 4.800781 9.574219 7.597656 15.6875 7.597656h.023438c6.125-.007812 11.90625-2.820312 15.695312-7.632812l153.859375-195.488282 31.207031 37.84375c7.023438 8.523438 19.628907 9.734375 28.152344 2.707032 8.523438-7.027344 9.734375-19.632813 2.707032-28.152344l-47-57c-3.851563-4.671875-9.601563-7.355469-15.65625-7.277344-6.050782.070312-11.746094 2.875-15.492188 7.628906l-153.53125 195.078125-53.0625-67.113281c-3.835938-4.851562-9.683594-7.621094-15.886719-7.59375-6.183593.0625-11.992187 2.980469-15.734375 7.910156l-44.011718 58c-6.679688 8.796875-4.957032 21.34375 3.839843 28.023438zm-3.894531-193.933594c0-33.085938 26.914062-60 60-60s60 26.914062 60 60-26.914062 60-60 60-60-26.914062-60-60zm40 0c0 11.027344 8.972656 20 20 20s20-8.972656 20-20-8.972656-20-20-20-20 8.972656-20 20zm374.425781 121.574219c23.394531 23.394531 23.394531 61.457031 0 84.851562l-109.570312 109.367188c-2.441407 2.4375-5.46875 4.199219-8.792969 5.117187l-80.722656 22.363282c-1.765625.488281-3.558594.726562-5.339844.726562-5.316406 0-10.5-2.121094-14.316406-6.035156-5.09375-5.21875-6.941406-12.800782-4.820313-19.777344l23.914063-78.726562c.957031-3.152344 2.675781-6.019532 5.007812-8.34375l109.804688-109.5625c23.378906-23.375 61.441406-23.375 84.835937.019531zm-60.457031 88.679687-28.289062-28.289062-74.089844 73.925781-11.882813 39.128906 40.609375-11.25zm32.171875-60.394531c-7.796875-7.800781-20.484375-7.800781-28.28125 0l-3.863281 3.851563 28.285156 28.285156 3.875-3.867188c7.785156-7.785156 7.785156-20.472656-.015625-28.269531zm0 0"
          />
        </svg>
        <input
          type="file"
          accept="image/*"
          name="inp_cover"
          class="hidden"
          id="inp_cover"
          ref="cover_img"
          @change="imageSelected"
        />
      </label>

      <!-- ../../../../PFA_Fill_Rouge/public/uploads/ot.jpg -->
      <div class="absolute -bottom-14">
        <img
          v-if="img_profil == false"
          :src="'http://127.0.0.1:8000' + user_info.img"
          class="object-cover bg-cover border-2 border-blue-600   w-40 h-40  rounded-full"
          alt=""
          id="profile"
        />
        <img
          v-else
          :src="Profilepreview"
          class="object-cover border-2 border-blue-600   w-40 h-40 rounded-full"
          alt=""
        />
        <label class="cursor-pointer absolute left-36 bottom-2">
          <svg
            class="h-5 w-5 "
            height="512pt"
            viewBox="0 -18 512 512"
            width="512pt"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="m512 80v106c0 11.046875-8.953125 20-20 20s-20-8.953125-20-20v-106c0-22.054688-17.945312-40-40-40h-352c-22.054688 0-40 17.945312-40 40v280c0 22.054688 17.945312 40 40 40h140c11.046875 0 20 8.953125 20 20s-8.953125 20-20 20h-140c-44.113281 0-80-35.886719-80-80v-280c0-44.113281 35.886719-80 80-80h352c44.113281 0 80 35.886719 80 80zm-428.105469 245.933594c8.800781 6.675781 21.34375 4.957031 28.023438-3.84375l28.40625-37.433594 52.773437 66.746094c3.792969 4.800781 9.574219 7.597656 15.6875 7.597656h.023438c6.125-.007812 11.90625-2.820312 15.695312-7.632812l153.859375-195.488282 31.207031 37.84375c7.023438 8.523438 19.628907 9.734375 28.152344 2.707032 8.523438-7.027344 9.734375-19.632813 2.707032-28.152344l-47-57c-3.851563-4.671875-9.601563-7.355469-15.65625-7.277344-6.050782.070312-11.746094 2.875-15.492188 7.628906l-153.53125 195.078125-53.0625-67.113281c-3.835938-4.851562-9.683594-7.621094-15.886719-7.59375-6.183593.0625-11.992187 2.980469-15.734375 7.910156l-44.011718 58c-6.679688 8.796875-4.957032 21.34375 3.839843 28.023438zm-3.894531-193.933594c0-33.085938 26.914062-60 60-60s60 26.914062 60 60-26.914062 60-60 60-60-26.914062-60-60zm40 0c0 11.027344 8.972656 20 20 20s20-8.972656 20-20-8.972656-20-20-20-20 8.972656-20 20zm374.425781 121.574219c23.394531 23.394531 23.394531 61.457031 0 84.851562l-109.570312 109.367188c-2.441407 2.4375-5.46875 4.199219-8.792969 5.117187l-80.722656 22.363282c-1.765625.488281-3.558594.726562-5.339844.726562-5.316406 0-10.5-2.121094-14.316406-6.035156-5.09375-5.21875-6.941406-12.800782-4.820313-19.777344l23.914063-78.726562c.957031-3.152344 2.675781-6.019532 5.007812-8.34375l109.804688-109.5625c23.378906-23.375 61.441406-23.375 84.835937.019531zm-60.457031 88.679687-28.289062-28.289062-74.089844 73.925781-11.882813 39.128906 40.609375-11.25zm32.171875-60.394531c-7.796875-7.800781-20.484375-7.800781-28.28125 0l-3.863281 3.851563 28.285156 28.285156 3.875-3.867188c7.785156-7.785156 7.785156-20.472656-.015625-28.269531zm0 0"
            />
          </svg>
          <input
            type="file"
            class="hidden"
            accept="image/*"
            name="img_profile"
            id="inp_profile"
            @change="profileSelected"
          />
        </label>
      </div>
    </div>
    <button
      v-if="img_src || img_profil"
      @click="updateImage"
      class="my-2  h-9 w-20 inline-block float-right  bg-blue-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500"
    >
      Save
    </button>
    <div class="text-center mt-16 text-3xl  font-bold ">
      <div class="flex justify-center items-center">
        {{ nom }} {{ prenom }}
        <button
          @click="
            fill_value([
              user_info.nom,
              user_info.prenom,
              user_info.telephon,
              user_info.bio,
              user_info.date_N,
            ]);
            clickModal();
          "
        >
          <svg
            class="h-5 w-5 mx-2"
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
    <div>
      <p class="text-md">{{ bio }}</p>
      <p class="text-md">Apprenant</p>
      <p class="text-md">
        <!-- <strong>2K</strong> followers <strong>120</strong> following -->
      </p>
    </div>

    <div class="flex flex-wrap -mx-6">
      <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
        <div class="flex items-center px-5 py-6 shadow-xl rounded-md bg-white">
          <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
            <svg
              class="h-8 w-8 text-white"
              id="Capa_1"
              enable-background="new 0 0 512 512"
              height="512"
              viewBox="0 0 512 512"
              width="512"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g>
                <g>
                  <g>
                    <path
                      d="m415.419 417.143h-345.336c-8.284 0-15-6.716-15-15v-387.143c0-8.284 6.716-15 15-15h345.336c8.284 0 15 6.716 15 15v387.143c0 8.284-6.716 15-15 15z"
                      fill="#d3effb"
                    />
                  </g>
                  <g>
                    <path
                      d="m415.935 0h-12.255v375.919c0 7.999-6.485 14.484-14.484 14.484h-334.113v12.255c0 7.999 6.485 14.484 14.484 14.484h346.368c7.999 0 14.484-6.485 14.484-14.484v-388.174c0-7.999-6.485-14.484-14.484-14.484z"
                      fill="#b1e4f9"
                    />
                  </g>
                  <g>
                    <path
                      d="m370.1 311.727h-10.414l-161.48-13.229-92.802-79.99v-121.981c0-5.523 4.477-10 10-10h254.696c5.523 0 10 4.477 10 10v205.2c0 5.523-4.478 10-10 10z"
                      fill="#3d4fc3"
                    />
                  </g>
                  <g>
                    <g>
                      <circle
                        cx="115.904"
                        cy="354.177"
                        fill="#90d8f9"
                        r="10.501"
                      />
                    </g>
                    <g>
                      <circle
                        cx="153.012"
                        cy="354.177"
                        fill="#90d8f9"
                        r="10.501"
                      />
                    </g>
                    <g>
                      <circle
                        cx="190.121"
                        cy="354.177"
                        fill="#90d8f9"
                        r="10.501"
                      />
                    </g>
                  </g>
                  <g>
                    <path
                      d="m271.585 54.819h-32.483c-4.141 0-7.497-3.356-7.497-7.497s3.356-7.497 7.497-7.497h32.483c4.141 0 7.497 3.356 7.497 7.497s-3.357 7.497-7.497 7.497z"
                      fill="#90d8f9"
                    />
                  </g>
                  <g>
                    <path
                      d="m200.622 54.819h-88.716c-4.141 0-7.497-3.356-7.497-7.497s3.356-7.497 7.497-7.497h88.716c4.141 0 7.497 3.356 7.497 7.497s-3.356 7.497-7.497 7.497z"
                      fill="#90d8f9"
                    />
                  </g>
                  <g>
                    <path
                      d="m115.398 311.727h244.287l-95.596-95.596c-3.904-3.903-10.232-3.903-14.136 0l-20.971 20.971c-1.952 1.952-5.116 1.952-7.068 0l-60.485-60.485c-3.904-3.904-10.232-3.903-14.136 0l-41.891 41.891v83.224c.001 5.52 4.476 9.995 9.996 9.995z"
                      fill="#5766cb"
                    />
                  </g>
                  <g>
                    <circle
                      cx="306.257"
                      cy="157.632"
                      fill="#5766cb"
                      r="19.055"
                    />
                  </g>
                </g>
                <g>
                  <g>
                    <circle
                      cx="380.099"
                      cy="435.183"
                      fill="#ffd064"
                      r="76.817"
                    />
                  </g>
                  <g>
                    <path
                      d="m419.383 369.17c6.856 11.496 10.805 24.926 10.805 39.283 0 42.425-34.392 76.817-76.817 76.817-14.357 0-27.787-3.949-39.283-10.805 13.402 22.475 37.944 37.535 66.012 37.535 42.425 0 76.817-34.392 76.817-76.817 0-28.068-15.06-52.609-37.534-66.013z"
                      fill="#ffc250"
                    />
                  </g>
                  <path
                    d="m411.395 427.902h-23.799v-23.799c0-4.14-3.356-7.497-7.497-7.497s-7.497 3.356-7.497 7.497v23.799h-23.799c-4.141 0-7.497 3.356-7.497 7.497 0 4.14 3.356 7.497 7.497 7.497h23.799v23.799c0 4.14 3.356 7.497 7.497 7.497s7.497-3.356 7.497-7.497v-23.799h23.799c4.141 0 7.497-3.356 7.497-7.497s-3.356-7.497-7.497-7.497z"
                    fill="#d56617"
                  />
                </g>
              </g>
            </svg>
          </div>

          <div class="mx-5" v-if="!loadingInfo">
            <h4 class="text-2xl font-semibold text-gray-700">{{ nb_post }}</h4>
            <div class="text-gray-500">Total posts</div>
          </div>
          <AppProfileLoad v-else />
        </div>
      </div>

      <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
        <div class="flex items-center px-5 py-6 shadow-xl rounded-md bg-white">
          <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">
            <svg
              class="h-8 w-8 mx-3"
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

          <div class="mx-5" v-if="!loadingInfo">
            <h4 class="text-2xl font-semibold text-gray-700">{{ nb_like }}</h4>
            <div class="text-gray-500">Total Likes</div>
          </div>
          <AppProfileLoad v-else />
        </div>
      </div>

      <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
        <div class="flex items-center px-5 py-6 shadow-xl rounded-md bg-white">
          <div class="p-3 rounded-full  bg-opacity-75">
            <svg
              class="w-8 h-8 mr-1 "
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
          </div>

          <div class="mx-5" v-if="!loadingInfo">
            <h4 class="text-2xl font-semibold text-gray-700">
              {{ nb_comment }}
            </h4>
            <div class="text-gray-500">Total comments</div>
          </div>
          <AppProfileLoad v-else />
        </div>
      </div>
    </div>

    <div class="border border-gray-400 mt-10 border-opacity-10" />
    <div class="flex justify-between px-8">
      <div class="flex items-center  mx-auto">
        <div
          @click="
            $emit('open_post');
            op_post = true;
            op_photo = false;
            op_problem = false;
          "
          class="px-4 py-5  hover:text-blue-500 cursor-pointer"
          :class="{ 'text-blue-500 border-b-4 border-blue-500': op_post }"
        >
          Posts
        </div>
        <div
          @click="
            $emit('open_photo');
            op_post = false;
            op_photo = true;
            op_problem = false;
          "
          class="px-4 py-5 text-gray-500 hover:text-blue-500 cursor-pointer"
          :class="{ 'text-blue-500 border-b-4 border-blue-500': op_photo }"
        >
          Photos
        </div>
        <div
          @click="
            $emit('open_problem');
            op_post = false;
            op_photo = false;
            op_problem = true;
          "
          class="px-4 py-5 text-gray-500 hover:text-blue-500 cursor-pointer"
          :class="{ 'text-blue-500 border-b-4 border-blue-500': op_problem }"
        >
          My Post Problems
        </div>
      </div>
    </div>
    <!-- The Modal -->
    <div id="myModalP" @click="exitModal()" class="modalP">
      <!-- Modal content -->
      <div class="modal-contentP">
        <span @click="clickExit()" class="close">&times;</span>

        <p class="text-2xl text-gray-500">
          { Edit <span class="text-blue-500">Information</span> }
        </p>

        <div class="flex flex-wrap justify-evenly my-10 text-gray-500  ">
          <div
            class="w-5/12 border-b-2 border-blue-500 rounded-lg mx-1 shadow-lg"
          >
            <div class="flex ">
              <label class="m-3 w-40 text-left" for="nom">Nom :</label>
              <div v-if="!ed_nom" class="w-1/2   flex items-center">
                <label class="m-3 " for="nom">{{ user_info.nom }}</label>
                <button
                  @click="ed_nom = !ed_nom"
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
                v-if="ed_nom"
                type="text"
                class=" m-3 w-1/2  border-b border-blue-500 focus:outline-none"
                v-model="inp_nom"
              />
            </div>
            <div class="flex">
              <p class="m-3 w-40 text-left" for="nom">Telephone :</p>
              <div v-if="!ed_telephon" class=" w-1/2  flex items-center">
                <label class="m-3 " for="nom">{{ user_info.telephon }}</label>
                <button
                  @click="ed_telephon = !ed_telephon"
                  class=" m-3 w-7 h-7 p-1 text-center rounded-full hover:bg-gray-200"
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
                v-if="ed_telephon"
                type="text"
                class=" m-3 w-1/2 border-b border-blue-500 focus:outline-none"
                v-model="inp_telephon"
              />
            </div>
            <div class="flex ">
              <label class="m-3 w-40 text-left">Bio :</label>
              <div v-if="!ed_bio" class="w-1/2 flex items-center">
                <p class="m-3 text-left ">{{ user_info.bio }}</p>
                <button
                  @click="ed_bio = !ed_bio"
                  class=" m-3 w-7 h-7 p-1 text-center rounded-full hover:bg-gray-200"
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
              <textarea
                name=""
                v-if="ed_bio"
                v-model="inp_bio"
                class=" m-3  w-1/2 border-b border-blue-500 focus:outline-none"
                id=""
                cols="30"
                rows="4"
              ></textarea>
            </div>
          </div>
          <div
            class="w-5/12  border-b-2 border-blue-500 rounded-lg m-1 shadow-lg "
          >
            <div class="flex">
              <label class="m-3 w-40 text-left" for="nom">Prenom :</label>
              <div v-if="!ed_prenom" class="w-1/2   flex items-center">
                <label class="m-3 " for="nom">{{ user_info.prenom }}</label>
                <button
                  @click="ed_prenom = !ed_prenom"
                  class=" m-3 w-7 h-7 p-1 text-center rounded-full hover:bg-gray-200"
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
                v-if="ed_prenom"
                type="text"
                class=" m-3  w-1/2 border-b border-blue-500 focus:outline-none"
                v-model="inp_prenom"
              />
            </div>
            <div class="flex">
              <label class="m-3 w-40 text-left" for="nom"
                >Date de naissance :</label
              >
              <div v-if="!ed_date_n" class="w-1/2   flex items-center">
                <label class="m-3 " for="nom">{{ user_info.date_N }}</label>
                <button
                  @click="ed_date_n = !ed_date_n"
                  class=" m-3 w-7 h-7 p-1 text-center rounded-full hover:bg-gray-200"
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
                v-if="ed_date_n"
                v-model="inp_date_n"
                type="date"
                class=" m-3  w-1/2 border-b border-blue-500 focus:outline-none"
              />
            </div>
            <div class="block">
              <div class="flex">
                <label class="m-3 w-40 text-left" for="nom"
                  >Modifer mot de pass :</label
                >
                <div v-if="!ed_password" class="w-1/2  flex items-center">
                  <label class="m-3 " for="nom"> ****************</label>
                  <button
                    @click="ed_password = !ed_password"
                    class=" m-3 w-7 h-7 p-1 text-center rounded-full hover:bg-gray-200"
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
                v-if="ed_password"
                class=" w-11/12 bg-gray-50  rounded-lg border-blue-500 mx-auto p-1 my-2 shadow-lg"
              >
                <p class="text-red-500" v-if="error">
                  {{ error }}
                </p>
                <div class="flex">
                  <label class="m-3 w-2/4 text-left" for="nom"
                    >Mot de passe actuel
                  </label>
                  <div class="w-full  flex items-center">
                    <label class="m-3 " for="nom"> </label>
                    <input
                      v-model="inp_password"
                      type="password"
                      class=" m-3 w-full border-b border-blue-500 focus:outline-none"
                      placeholder="Tapez votre mot de passe actuel"
                    />
                  </div>
                </div>
                <div class="flex">
                  <label class="m-3 w-2/4 text-left" for="nom"
                    >Nouveau mot de passe
                  </label>
                  <div class="w-full  flex items-center">
                    <label class="m-3 " for="nom"> </label>
                    <input
                      v-model="inp_new_password"
                      type="password"
                      class=" m-3 w-full border-b border-blue-500 focus:outline-none"
                      placeholder="Tapez votre nouveau mot de passe"
                    />
                  </div>
                </div>
                <div class="flex">
                  <label class="m-3 w-2/4 text-left" for="nom"
                    >Nouveau mot de passe
                  </label>
                  <div class="w-full  flex items-center">
                    <label class="m-3 " for="nom"> </label>
                    <input
                      v-model="inp_conferm_password"
                      type="password"
                      class=" m-3 w-full border-b border-blue-500 focus:outline-none"
                      placeholder="Tapez votre nouveau mot de passe encore "
                    />
                  </div>
                </div>
                <div class="flex justify-end">
                  <button
                    v-if="
                      inp_conferm_password == inp_new_password &&
                        inp_new_password.length > 5 &&
                        inp_password.length > 5 &&
                        inp_new_password != inp_password
                    "
                    @click="updatePassword(user_info.id)"
                    class="ml-5 focus:outline-none   text-white text-sm py-1 px-4 rounded-md bg-gradient-to-r from-blue-400 to-blue-600 transform hover:scale-110"
                  >
                    save
                  </button>
                  <button
                    @click="ed_password = false"
                    type="button"
                    class="focus:outline-none  w-20 mx-2 text-white text-sm py-1.5 px-4 rounded-md bg-gradient-to-r from-gray-400 to-gray-600 transform hover:scale-110"
                  >
                    Cancel
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <button
            v-if="
              inp_nom != user_info.nom ||
                inp_prenom != user_info.prenom ||
                inp_bio != user_info.bio ||
                inp_telephon != user_info.telephon ||
                (inp_date_n != undefined &&
                  inp_date_n != '' &&
                  inp_date_n != user_info.date_N)
            "
            @click="updateInfoPersonne(user_info.id)"
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
  </div>
</template>

<script>
import axios from "axios";
import AppProfileLoad from "@/components/dataload/AppProfilLoad";
import { mapGetters, mapActions } from "vuex";
import Swal from "sweetalert2";
export default {
  props: ["nom", "prenom", "img", "imgCover", "bio"],
  name: "AppProfile",
  components: {
    AppProfileLoad,
  },
  data() {
    return {
      op_post: true,
      op_photo: false,
      op_problem: false,

      ed_nom: false,
      ed_telephon: false,
      ed_bio: false,
      ed_prenom: false,
      ed_date_n: false,
      ed_password: false,

      error: null,

      inp_nom: "",
      inp_telephon: "",
      inp_bio: "",
      inp_prenom: "",
      inp_date_n: "",
      inp_password: "",
      inp_new_password: "",
      inp_conferm_password: "",

      checkErr: null,

      profile: "http://127.0.0.1:8000" + this.img,
      cover: "http://127.0.0.1:8000" + this.imgCover,
      img_src: false,
      img_profil: false,
      selectedProfile: null,
      image: null,
      imagepreview: "../../assets/cover.jpg",
      Profilepreview: "../../assets/ycc.jpg",
    };
  },
  methods: {
    ...mapActions([
      "updateImg",
      "getStatistics",
      "updatePersonneInfo",
      "updatePasswordPersonne",
    ]),

    updatePassword(id) {
      this.$store
        .dispatch("updatePasswordPersonne", [
          id,
          this.inp_new_password,
          this.inp_conferm_password,
          this.inp_password,
        ])
        .then((result) => {
          this.ed_password = false;
          this.inp_new_password = "";
          this.inp_conferm_password = "";
          this.inp_password = "";
          Swal.fire({
            position: "center",
            icon: "success",
            title: "Votre mot de passe a été enregistré avec succès",
            showConfirmButton: false,
            timer: 1500,
          });
          this.error = null;
        })
        .catch((error) => {
          if (error.response.status === 401) {
            this.error = "votre mot de passe actuel est incorrect";
          }
        });

      this.updatePasswordPersonne();

      if (!this.checkErr) {
      }
    },

    updateInfoPersonne(id) {
      this.updatePersonneInfo([
        id,
        this.inp_nom,
        this.inp_prenom,
        this.inp_telephon,
        this.inp_bio,
        this.inp_date_n,
      ]);
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Votre modification a été enregistrée",
        showConfirmButton: false,
        timer: 1500,
      });
      this.clickExit();
    },

    fill_value(param) {
      this.inp_nom = param[0];
      this.inp_prenom = param[1];
      this.inp_telephon = param[2];
      this.inp_bio = param[3];
      this.inp_date_n = param[4];
      this.inp_password = param[5];
    },

    imageSelected(e) {
      this.img_src = true;
      this.image = e.target.files[0];

      let reader = new FileReader();
      reader.readAsDataURL(this.image);
      reader.onload = (e) => {
        this.imagepreview = e.target.result;
      };
    },
    profileSelected(e) {
      this.img_profil = true;
      this.selectedProfile = e.target.files[0];

      let reader = new FileReader();
      reader.readAsDataURL(this.selectedProfile);
      reader.onload = (e) => {
        this.Profilepreview = e.target.result;
      };
    },
    updateImage() {
      if (
        this.img_src == true &&
        this.img_profil == true &&
        this.selectedProfile &&
        this.image
      ) {
        this.fetchdata(this.selectedProfile, this.image, "both");
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Le profil et la couverture ont été enregistrés",
          showConfirmButton: false,
          timer: 2000,
        });
      } else if (
        this.img_src == true &&
        this.img_profil == false &&
        !this.selectedProfile &&
        this.image
      ) {
        this.fetchdata(this.selectedProfile, this.image, "cover");
        Swal.fire({
          position: "center",
          icon: "success",
          title: "La couverture de l'image a été enregistrée",
          showConfirmButton: false,
          timer: 2000,
        });
      } else if (
        this.img_src == false &&
        this.img_profil == true &&
        this.selectedProfile &&
        !this.image
      ) {
        this.fetchdata(this.selectedProfile, this.image, "profile");
        Swal.fire({
          position: "center",
          icon: "success",
          title: "La mise à jour de l'image de profil a été enregistrée",
          showConfirmButton: false,
          timer: 2000,
        });
      }
    },

    fetchdata(imgP, imgC, api) {
      this.updateImg([imgP, imgC, api]);
      this.img_profil = false;
      this.img_src = false;
    },

    clickExit() {
      // Get the modal
      var modal = document.getElementById("myModalP");
      // Get the <span> element that closes the modal

      modal.style.display = "none";
    },
    clickModal() {
      // Get the modal
      var modal = document.getElementById("myModalP");
      // When the user clicks the button, open the modal
      modal.style.display = "block";
    },

    exitModal() {
      // Get the modal
      var modal = document.getElementById("myModalP");
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };
    },
  },
  created() {
    this.getStatistics();
  },
  computed: {
    ...mapGetters([
      "user_info",
      "nb_post",
      "nb_comment",
      "nb_like",
      "loadingInfo",
      "passwordErr",
    ]),
  },
};
</script>

<style scoped>
.modalP {
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
.modal-contentP {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  width: 80%; /* Could be more or less, depending on screen size */
  border-radius: 15px;
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
