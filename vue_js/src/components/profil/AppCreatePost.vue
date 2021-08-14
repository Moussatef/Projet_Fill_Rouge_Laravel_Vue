<template>
  <div
    class="w-full  shadow-xl  bg-white p-4 rounded-lg py-4 border-l-2 border-r-2 border-blue-400"
  >
    <div class=" block">
      <div class="flex space-x-2">
        <img
          :src="img_avatar + user_info.img"
          alt="img"
          class="h-10 w-10 rounded-full border  border-blue-500"
        />
        <AppEditeur />
        <input
          @focus="onfocusin"
          @blur="onlivein"
          v-model="title"
          class="bg-fFill px-4 py-4 w-full border-b-2 my-2 focus:outline-none "
          placeholder="Write something to Roland…"
        />
        <hr />
        
      </div>
      <div v-if="addImg || title" class="w-full post-div">
        <textarea
          v-model="description"
          class="border-b-2 w-full my-3 focus:outline-none rounded-md"
          name="description"
          id=""
          cols="30"
          rows="10"
          placeholder="Write description"
        ></textarea>

        <div class="flex items-center  h-46 w-full">
          <div v-if="imagepreview[0]" class="w-30 h-40 overflow-hidden m-1">
            <img
              :src="imagepreview[0]"
              class="py-2 h-30 w-36 object-center object-contain "
              alt=""
            />
          </div>
          <div v-if="imagepreview[1]" class="w-30 h-40 overflow-hidden m-1">
            <img
              :src="imagepreview[1]"
              class="py-2 h-30 w-36 object-center object-contain "
              alt=""
            />
          </div>
          <div v-if="imagepreview[2]" class="w-30 h-40 overflow-hidden m-1">
            <img
              :src="imagepreview[2]"
              class="py-2 h-30 w-36 object-center object-contain "
              alt=""
            />
          </div>
          <div v-if="imagepreview[3]" class="w-30 h-40 overflow-hidden m-1">
            <img
              :src="imagepreview[3]"
              class="py-2 h-30 w-36 object-center object-contain "
              alt=""
            />
          </div>
          <div class="flex " id="div_post">
            <div
              class="space-y-1 w-36 object-center text-center border-2 border-dashed m-2  py-5 "
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
                    @change="imageSelected"
                    multiple
                  />
                </label>
              </div>
              <p class="text-xs text-center text-gray-500">
                PNG, JPG, GIF
              </p>
            </div>
          </div>
        </div>

        <div v-if="title && description" class="w-full text-right ">
          <button
            @click="sendData"
            class="bg-blue-600 text-white py-1 px-4 border-b border-gray-800 rounded-lg w-20  m-3 hover:bg-gray-200 hover:text-gray-600 hover:border-blue-500 transition duration-500 ease-in-out"
          >
            Post
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import AppEditeur from "@/components/post/postProblem/AppEditor";
export default {
  name: "AppCreatePost",
  components: {
    AppEditeur,
  },
  data() {
    return {
      title: "",
      description: "",
      img_avatar: "http://127.0.0.1:8000",
      img_src: [],
      imagepreview: [],
      image: [],
      cmp: 0,
      addImg: false,
      editorData: "<p>Content of the editor.</p>",
      editorConfig: {
        // The configuration of the editor.
      },
    };
  },
  methods: {
    ...mapActions(["newPost"]),
    sendData() {
      let data = {
        personne_id: localStorage.getItem("personne_id"),
        titre: this.title,
        description: this.description,
        img_one: this.image[0],
        img_two: this.image[1],
        img_three: this.image[2],
        img_fore: this.image[3],
      };
      this.newPost(data);
      this.imagepreview[0] = null;
      this.title = "";
      this.description = "";
    },
    imageSelected(e) {
      // console.log(e.target.files.length);
      for (let i = 0; i < e.target.files.length; i++) {
        this.img_src[i] = true;
        this.image[i] = e.target.files[i];

        let reader = new FileReader();
        reader.readAsDataURL(this.image[i]);
        reader.onload = (e) => {
          this.imagepreview[i] = e.target.result;
        };
        this.cmp++;
      }
    },
    onfocusin() {
      this.addImg = true;
    },
    onlivein() {
      this.addImg = false;
    },
    
  },
  components: {},
  computed: {
    ...mapGetters(["user_info"]),
  },
  created() {
    // this.test();
  },
};
</script>

<style lang="css" scoped>
.post-div {
  transition: 0.3s ease-in-out;
}
</style>
