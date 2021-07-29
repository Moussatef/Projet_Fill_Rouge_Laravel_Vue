<template>
  <div
    class="w-screen h-screen z-10  top-0 fixed bg-black opacity-90 "
    @click="$emit('disablePost')"
  ></div>
  <div
    class="flex justify-center fixed top-0 transform translate-x-1/4  bg-gray-100 z-50 w-8/12  h-4/5 mt-20 overflow-hidden"
  >
    <div class="bg-gray-700 w-1/2">
      <div></div>
      <div></div>
    </div>
    <div class=" w-1/2  grid  gap-4   p-2 my-auto " :class="gridNumber">
      <img
        v-for="img in postinfo.img_post"
        :key="img.id"
        :src="'http://127.0.0.1:8000' + img.path"
        class="object-cover w-full"
        alt=""
      />
    </div>
  </div>
</template>
<script>
export default {
  name: "AppShowPost",
  props: ["postinfo"],
  data() {
    return {
      gridNumber: "grid-cols-1",
      image_post: this.postinfo.img_post,
    };
  },
  methods: {
    checkImg() {
      var lengthImg = this.image_post.length;
      console.log(lengthImg);
      if (lengthImg >= 2) {
        this.gridNumber = "grid-cols-2";
      }
    },
  },
  created() {
    this.checkImg();
  },
};
</script>
