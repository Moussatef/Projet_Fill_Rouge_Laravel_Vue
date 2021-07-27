<template>
  <div
    class="w-full shadow-fb bg-white rounded-lg border-r-2 border-l-2 border-blue-500 p-4"
  >
    <div class="flex justify-between items-center">
      <div class="text-xl font-bold text-fBlack">Photos</div>
      <button class="focus:outline-none text-fBlue">
        See All Photos
      </button>
    </div>
    <div class="grid grid-cols-2   gap-1.5 mt-4">
      <img v-for="img in imageFor" :key="img.id" :src="'http://127.0.0.1:8000/storage/postImage/'+img.path" class="rounded-tl" alt="photo" />
      <!-- <img src="../../assets/p2.jpg" class="rounded-tr" alt="photo" />
      <img src="../../assets/p3.jpg" alt="photo" />
      <img src="../../assets/p6.jpg" alt="photo" /> -->
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  name: "AppPhoto",
  methods: {
    ...mapActions(["fetchImageFore"]),
  },
  computed: {
    ...mapGetters(["imageFor"]),
  },
  created() {
    this.fetchImageFore();
  },
};
</script>
