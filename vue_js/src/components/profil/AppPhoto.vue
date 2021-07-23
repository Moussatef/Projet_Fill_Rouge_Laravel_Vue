<template>
  <div class="w-full shadow-fb bg-white rounded-lg border-r-2 border-l-2 border-blue-500 p-4">
    <div class="flex justify-between items-center">
      <div class="text-xl font-bold text-fBlack">Photos</div>
      <button class="focus:outline-none text-fBlue">
        See All Photos
      </button>
    </div>
    <div class="grid grid-cols-3 flex  gap-1.5 mt-4">
      <img src="../../assets/p1.jpg" class="rounded-tl" alt="photo" />
      <img src="../../assets/p2.jpg" alt="photo" />
      <img src="../../assets/p5.jpg" class="rounded-tr" alt="photo" />
      <img src="../../assets/p3.jpg" alt="photo" />
      <img src="../../assets/p4.jpg" alt="photo" />
      <img src="../../assets/p6.jpg" alt="photo" />
    </div>
  </div>
</template>

<script>
export default {
  name: "AppPhoto",
};
</script>
