<template>
  <div class="holder">
    <div
      class="card border w-96 hover:shadow-none relative flex flex-col mx-auto shadow-lg m-5"
    >
      <img
        class="max-h-20 w-full opacity-80 absolute top-0"
        style="z-index:-1"
        src="https://unsplash.com/photos/h0Vxgz5tyXA/download?force=true&w=640"
        alt=""
      />
      <div class="profile w-full flex m-3 ml-4 text-white">
        <img
          class="w-28 h-28 p-1 bg-white rounded-full"
          src="https://images.pexels.com/photos/61100/pexels-photo-61100.jpeg?crop=faces&fit=crop&h=200&w=200&auto=compress&cs=tinysrgb"
          alt=""
        />
        <div class="title mt-11 ml-3 font-bold flex flex-col">
          <div class="name break-words">Sarah</div>
          <!--  add [dark] class for bright background -->
          <div class="add font-semibold text-sm italic dark">Model</div>
        </div>
      </div>
      <div
        class="buttons flex absolute bottom-0 font-bold right-0 text-xs text-gray-500 space-x-0 my-3.5 mr-3"
      >
        <div
          class="add border rounded-l-2xl rounded-r-sm border-gray-300 p-1 px-4 cursor-pointer hover:bg-gray-700 hover:text-white"
        >
          Contact
        </div>
        <!-- <div class="add border rounded-r-2xl rounded-l-sm border-gray-300 p-1 px-4 cursor-pointer hover:bg-gray-700 hover:text-white">Bio</div> -->
      </div>
    </div>
    <!-- card end -->
  </div>
</template>

<style>
.dark {
  color: rgba(55, 65, 81, 1);
}
body {
  background: white !important;
}
</style>
