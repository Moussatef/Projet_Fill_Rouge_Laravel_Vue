<template>
  <div
    class="w-screen h-screen z-10  top-0 fixed bg-black opacity-90 "
    @click="$emit('disablePost')"
  ></div>
  <div
    class="flex justify-center fixed top-0 transform translate-x-1/4  bg-gray-300 z-50 w-8/12  h-4/5 mt-20"
  >
    <div class="bg-gray-700 w-1/2">{{ postinfo.id }}
     <div></div>
      <div></div>
    </div>
    <div class="w-1/2 text-center ">
      <img src="../../assets/ycc.jpg" class="object-cover w-full" alt="">
    </div>
  </div>
</template>
<script>
export default {
  name: "AppShowPost",
  props: ["postinfo"],
};
</script>
