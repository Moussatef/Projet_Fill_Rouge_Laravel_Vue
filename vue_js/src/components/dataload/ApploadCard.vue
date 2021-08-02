<template>
  <div class="w-full flex items-center flex-col  bg-white">
    <div class="flex flex-col bg-white shadow-md w-full rounded-md items-center">
      <div class="flex items-center p-4">
        <div
          data-placeholder
          class="mr-2 h-10 w-10  rounded-full overflow-hidden relative bg-gray-200"
        ></div>
        <div class="flex flex-col justify-between items-center">
          <div
            data-placeholder
            class="mb-2 h-5 w-40 overflow-hidden relative bg-gray-200"
          ></div>
        </div>
      </div>
      <div
        data-placeholder
        class="h-52 w-full overflow-hidden relative bg-gray-200"
      ></div>

      <div class="flex flex-col p-4">
        <div class="flex">
          <div
            data-placeholder
            class=" flex h-5 w-5 overflow-hidden relative bg-gray-200 mr-1"
          ></div>
          <div
            data-placeholder
            class="flex h-5 w-48 overflow-hidden relative bg-gray-200"
          ></div>
        </div>
        <div class="flex mt-1">
          <div
            data-placeholder
            class="flex h-5 w-5 overflow-hidden relative bg-gray-200 mr-1"
          ></div>
          <div
            data-placeholder
            class="flex h-5 w-48 overflow-hidden relative bg-gray-200"
          ></div>
        </div>
      </div>
      <div class="w-full h-px  overflow-hidden relative bg-gray-200 m-4"></div>
      <div class="flex justify-between items-center p-4 w-full">
        <div
          data-placeholder
          class="mr-2 h-10 w-16  overflow-hidden relative bg-gray-200"
        ></div>

        <div
          data-placeholder
          class="mb-2 h-5 w-20 overflow-hidden relative bg-gray-200"
        ></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Appload",
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
