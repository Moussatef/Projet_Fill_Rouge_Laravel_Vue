<template>
  <div
    class="w-full shadow-fb  bg-white p-4 rounded-lg py-4 border-l-2 border-r-2 border-blue-400"
  >
    <div class=" block">
      <div class="flex space-x-2">
        <img
          :src="img_avatar + user_info.img"
          alt="img"
          class="h-10 w-10 rounded-full"
        />
        <input
          class="bg-fFill px-4 py-4 w-full focus:outline-none rounded-full"
          placeholder="Write something to Roland…"
        />
        <hr />
      </div>
      <div class=" w-full  ">
        <textarea
          class="border-b-2 w-full  focus:outline-none rounded-md"
          name="description"
          id=""
          cols="30"
          rows="10"
          placeholder="Write description"
        ></textarea>

        <div class="flex">
          <div class="flex" id="div_post">
            <div
              class="space-y-1 w-32 text-center border-2 border-dashed  py-5 "
            >
              <svg
                class="mx-auto h-12 w-12 text-gray-400"
                stroke="currentColor"
                fill="none"
                viewBox="0 0 48 48"
                aria-hidden="true"
              >
                <path
                  d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              <div class="flex text-sm  text-gray-600">
                <label
                  for="cover_img"
                  class="relative cursor-pointer mx-auto  bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500"
                >
                  <span class="">Upload a file</span>
                  <input
                    id="cover_img"
                    name="img_cover"
                    type="file"
                    accept="image/*"
                    class="sr-only"
                  />
                </label>
              </div>
              <p class="text-xs text-center text-gray-500">
                PNG, JPG, GIF
              </p>
            </div>
          </div>
          <div class="w-32 text-center border-2 border-dashed mx-2 py-5">
            <button >
            <svg
              class="h-20 w-14 mx-auto opacity-30 "
              version="1.1"
              id="Capa_1"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              x="0px"
              y="0px"
              viewBox="0 0 477.867 477.867"
              style="enable-background:new 0 0 0.867 0.867;  "
              xml:space="preserve"
            >
              <g>
                <g>
                  <path
                    d="M392.533,0h-307.2C38.228,0.056,0.056,38.228,0,85.333v307.2c0.056,47.105,38.228,85.277,85.333,85.333h307.2
			c47.105-0.056,85.277-38.228,85.333-85.333v-307.2C477.81,38.228,439.638,0.056,392.533,0z M443.733,392.533
			c0,28.277-22.923,51.2-51.2,51.2h-307.2c-28.277,0-51.2-22.923-51.2-51.2v-307.2c0-28.277,22.923-51.2,51.2-51.2h307.2
			c28.277,0,51.2,22.923,51.2,51.2V392.533z"
                  />
                </g>
              </g>
              <g>
                <g>
                  <path
                    d="M324.267,221.867H256V153.6c0-9.426-7.641-17.067-17.067-17.067s-17.067,7.641-17.067,17.067v68.267H153.6
			c-9.426,0-17.067,7.641-17.067,17.067S144.174,256,153.6,256h68.267v68.267c0,9.426,7.641,17.067,17.067,17.067
			S256,333.692,256,324.267V256h68.267c9.426,0,17.067-7.641,17.067-17.067S333.692,221.867,324.267,221.867z"
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
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  name: "AppCreatePost",
  data() {
    return {
      img_avatar: "http://127.0.0.1:8000",
      cmp : 0
    };
  },
  methods:{
    addInput(){
      var div_post = document.getElementById("div_post")
      div_post.innerHTML += 
      `
        
      `


    }

  },
  components: {},
  computed: {
    ...mapGetters(["user_info"]),
  },
};
</script>
