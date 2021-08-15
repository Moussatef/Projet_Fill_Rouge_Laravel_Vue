<template>
  <div
    class="w-full  shadow-xl  bg-white p-4 rounded-lg py-4 border-l-2 border-r-2 border-blue-400"
  >
    <div class=" block">
      <div class="flex space-x-2">
        <img
          :src="img_avatar + user_info.img"
          alt="img"
          class="h-10 w-10 rounded-full border mb-4  border-blue-500"
        />
        <input
          @focus="onfocusin"
          @blur="onlivein"
          v-model="title"
          class="bg-fFill px-4 py-4 w-full border-b-2 my-2 focus:outline-none "
          placeholder="Titre de post"
        />
        <hr />
      </div>
      <div class="relative inline-flex m-3">
        <svg
          class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 412 232"
        >
          <path
            d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
            fill="#648299"
            fill-rule="nonzero"
          />
        </svg>
         
        <select
        v-model="inp_categorie"
          id="inp_categorie"
          class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none"
        >
          <option>Choose a categorie</option>
          <option v-for="cat in categorie" :key="cat.id" :value="cat.id">{{
            cat.libelle
          }}</option>
        </select>
      </div>
      <div class="w-full post-div">

        <quill-editor v-model:value="content" :options="options"></quill-editor>
        
       

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

        <div v-if="content && title && inp_categorie != 'Choose a categorie'" class="w-full text-right ">
          <button
            @click="sendData"
            class="ml-5 focus:outline-none   text-white text-sm py-1 px-7 rounded-md bg-gradient-to-r from-blue-400 to-blue-600 transform hover:scale-110"
          >
            Post
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { quillEditor } from "vue3-quill";
import { mapGetters, mapActions } from "vuex";

export default {
  name: "AppEditeur",
  data() {

    return {
      inp_categorie:'Choose a categorie',
      title: "",
      img_avatar: "http://127.0.0.1:8000",
      img_src: [],
      imagepreview: [],
      image: [],
      cmp: 0,
      addImg: false,
      content: "",
      options: {
        modules: {
          toolbar: [
            ["bold", "italic", "underline", "strike"],
            ["blockquote", "code-block"],
            [{ header: 1 }, { header: 2 }],
            [{ list: "ordered" }, { list: "bullet" }],
            [{ script: "sub" }, { script: "super" }],
            [{ indent: "-1" }, { indent: "+1" }],
            [{ direction: "rtl" }],
            [{ size: ["small", false, "large", "huge"] }],
            [{ header: [1, 2, 3, 4, 5, 6, false] }],
            [{ color: [] }, { background: [] }],
            [{ font: [] }],
            [{ align: [] }],
            ["clean"],
            ["link", "video"],
          ],
        },
      },
    };
  },

  components: {
    quillEditor,
  },
  methods: {
    ...mapActions(["newPostProblem", "getCategorie"]),
    sendData() {
      let data = {
        personne_id: localStorage.getItem("personne_id"),
        titre: this.title,
        description: this.content,
        categorie_id: document.getElementById("inp_categorie").value,
        img_one: this.image[0],
        img_two: this.image[1],
        img_three: this.image[2],
        img_fore: this.image[3],
      };
      this.newPostProblem(data);
      this.imagepreview[0] = null;
      this.title = "";
      this.content = ""
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
  created() {
    this.getCategorie();
  },
  computed: {
    ...mapGetters(["user_info", "categorie"]),
  },
};
</script>
