<template>
  <div id="Model" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <div class="flex justify-center">
        <div class="flex items-center min-h-screen bg-gray-50 dark:bg-gray-900">
          <div class="container mx-auto">
            <div
              class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm"
            >
              <div class="text-center">
                <h1
                  class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200"
                >
                  Contact Us
                </h1>
                <p class="text-gray-400 dark:text-gray-400">
                  Fill up the form below to send us a message.
                </p>
              </div>
              <div class="m-7">
                <form
                  action="https://api.web3forms.com/submit"
                  method="POST"
                  id="form"
                >
                  <input
                    type="hidden"
                    name="apikey"
                    value="YOUR_ACCESS_KEY_HERE"
                  />
                  <input
                    type="hidden"
                    name="subject"
                    value="New Submission from Web3Forms"
                  />
                  <input
                    type="checkbox"
                    name="botcheck"
                    id=""
                    style="display: none;"
                  />

                  <div class="mb-6">
                    <label
                      for="name"
                      class="block mb-2 text-sm text-gray-600 dark:text-gray-400"
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
                    <label
                      for="email"
                      class="block mb-2 text-sm text-gray-600 dark:text-gray-400"
                      >Email Address</label
                    >
                    <input
                      type="email"
                      name="email"
                      id="email"
                      placeholder="you@company.com"
                      required
                      class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                    />
                  </div>
                  <div class="mb-6">
                    <label
                      for="phone"
                      class="text-sm text-gray-600 dark:text-gray-400"
                      >Phone Number</label
                    >
                    <input
                      type="text"
                      name="phone"
                      id="phone"
                      placeholder="+1 (555) 1234-567"
                      required
                      class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                    />
                  </div>
                  <div class="mb-6">
                    <label
                      for="message"
                      class="block mb-2 text-sm text-gray-600 dark:text-gray-400"
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
                  <p
                    class="text-base text-center text-gray-400"
                    id="result"
                  ></p>
                </form>
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
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0, 0, 0); /* Fallback color */
  background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  width: 60%;
  border-radius: 15px;
}
</style>
