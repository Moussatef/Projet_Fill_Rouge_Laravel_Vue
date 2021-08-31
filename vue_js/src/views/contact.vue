<template>
  <div id="Model" class="modal">
    <!-- Modal content -->
    <div class="modal-content ">
      <div class="flex justify-center items-center">
        <div class=" w-1/2  flex items-center">
        <div class="shadow-lg">
          <img src="../assets/ycm.jpg" class=" object-cover " alt="" />
        </div>
        </div>
        <div class="flex items-center my-20 w-1/2  ">
          <div class="container mx-auto py-14 shadow-lg">
            <div
              class="max-w-md mx-auto my-10 bg-white px-5  rounded-md shadow-sm"
            >
              <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-gray-700 ">
                  Contact Us
                </h1>
                <p class="text-gray-400 ">
                  Fill up the form below to send us a message.
                </p>
              </div>
              <div class="m-7">
                

                  <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm text-gray-600 "
                      >Full Name</label
                    >
                    <input
                      type="text"
                      name="name"
                      id="name"
                      placeholder="John Doe"
                      required
                      class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                    />
                  </div>
                  <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm text-gray-600 "
                      >Email Address</label
                    >
                    <input
                      type="email"
                      name="email"
                      id="email"
                      placeholder="you@email.com"
                      required
                      class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                    />
                  </div>
                  
                  <div class="mb-6">
                    <label
                      for="message"
                      class="block mb-2 text-sm text-gray-600 "
                      >Your Message</label
                    >

                    <textarea
                      rows="5"
                      name="message"
                      id="message"
                      placeholder="Your Message"
                      class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                      required
                    ></textarea>
                  </div>
                  <div class="mb-6">
                    <button
                      type="submit"
                      class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none"
                    >
                      Send Message
                    </button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Contact",
};
</script>

<style scoped>
.gradient {
  background: rgb(0, 68, 168);
  background: linear-gradient(
    153deg,
    rgba(0, 67, 168, 0.61) 5%,
    rgba(0, 55, 184, 0.575) 17%,
    rgba(0, 80, 184, 1) 30%,
    rgba(3, 104, 199, 1) 41%,
    rgba(3, 144, 244, 0.582) 75%,
    rgba(0, 170, 255, 0.466) 100%
  );
}
.modal {
  display: block; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(212, 212, 212); /* Fallback color */
  background-color: rgba(236, 236, 236, 0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  margin-bottom: 10%;
  padding: 15px;
  width: 60%;
  border-radius: 15px;
}
</style>
