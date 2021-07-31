<template>
  <div class="p-16">
    <div class="md:flex">
      <div
        class="md:w-6/12 text-white bg-blue-500 p-8 sm:rounded-tr-lg md:rounded-tr-none md:rounded-bl-lg rounded-tl-lg flex items-center"
      >
        <div>
          <h1 class="text-4xl mb-5 font-bold">
            Lorem <span class="text-gray-800">ipsum</span> is simply dummy text.
          </h1>
          <h2 class="text-sm mb-12">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the
          </h2>
          <div class="flex">
            <div class="mr-8">
              <p class="text-2xl font-bold">10k+</p>
              <p class="text-sm">companies</p>
            </div>
            <div class="mr-8">
              <p class="text-2xl font-bold">120+</p>
              <p class="text-sm">teams</p>
            </div>
            <div>
              <p class="text-2xl font-bold">10k+</p>
              <p class="text-sm">events</p>
            </div>
          </div>
        </div>
      </div>
      <div class="md:w-6/12 relative">
        <div
          class="bg-gray-500 w-full h-96 opacity-60 absolute sm:rounded-bl-lg md:rounded-bl-none md:rounded-tr-lg rounded-br-lg"
        ></div>
        <img
          class="h-96 w-full object-cover sm:rounded-bl-lg md:rounded-bl-none md:rounded-tr-lg rounded-br-lg"
          src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=550&q=80"
          alt="Banner Desktop"
        />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "AppcardOne",
};
</script>
