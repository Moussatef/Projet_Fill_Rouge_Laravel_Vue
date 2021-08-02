<template>
 <div class="p-5 bg-white w-full rounded-lg flex items-center justify-between space-x-8">
        <div class="flex-1 flex justify-between items-center">
          <div class="h-4 w-48 bg-gray-300 rounded"></div>
          <div class="w-24 h-6 rounded-lg bg-purple-300"></div>
        </div>
      </div>
</template>

<script>
export default {
  name: "AppProfileLoad",
};
</script>

<style>
[data-placeholder]::after {
  content: " ";
  box-shadow: 0 0 50px 9px rgba(254, 254, 254);
  position: absolute;
  top: 0;
  left: -100%;
  height: 100%;
  animation: load 1s infinite;
}
@keyframes load {
  0% {
    left: -100%;
  }
  100% {
    left: 150%;
  }
}
</style>
