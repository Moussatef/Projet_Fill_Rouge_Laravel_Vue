<template>
  <div>
    <div
      class="w-2/4 mx-auto my-7  space-y-8 p-10 bg-white rounded-xl shadow-lg z-10   border-r-2 border-l-2 border-blue-500"
    >
      <div class="grid  gap-8 grid-cols-1">
        <div class="flex flex-col ">
          <div class="flex flex-col sm:flex-row items-center">
            <h2 class="font-semibold text-lg mr-auto">Apprenant Info</h2>
            <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
          </div>
          <div class="mt-5">
            <div class="form">
              <div class="md:space-y-2 mb-3">
                <!-- <label class="text-xs font-semibold text-gray-700 py-2">Profile Image<abbr class="hidden" title="required">*</abbr></label>
						    <div class="flex items-center py-6">
							    <div class="w-12 h-12 mr-4 flex-none rounded-xl border overflow-hidden">
								    <img class="w-12 h-12 mr-4 object-cover" src="https://images.unsplash.com/photo-1611867967135-0faab97d1530?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1352&amp;q=80" alt="Avatar Upload">
                                </div>
							    <label class="cursor-pointer ">
                                    <span class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-blue-400 hover:bg-green-500 hover:shadow-lg">Browse</span>
                                    <input type="file" class="hidden" :multiple="multiple" name="img" :accept="accept">
                                </label>
							</div> -->
                <div>
                  <label class="block text-sm font-medium text-gray-700">
                    Photo Profile
                  </label>
                  <div class="mt-1 flex items-center">
                    <span
                      class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100"
                    >
                      <svg
                        class="h-full w-full text-gray-300"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                      >
                        <path
                          d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"
                        />
                      </svg>
                    </span>

                    <label class="cursor-pointer ">
                      <span
                        class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >Browse</span
                      >
                      <input
                        type="file"
                        class="hidden"
                        :multiple="multiple"
                        name="img"
                        :accept="accept"
                      />
                    </label>
                  </div>
                </div>
              </div>
              <div class="my-5">
                <label class="block text-sm font-medium text-gray-700">
                  Cover photo
                </label>
                <div
                  class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md"
                >
                  <div class="space-y-1 text-center">
                    <svg
                      class="mx-auto h-12 w-12 text-gray-400"
                      stroke="currentColor"
                      fill="none"
                      viewBox="0 0 48 48"
                      aria-hidden="true"
                    >
                      <path
                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                      <label
                        for="file-upload"
                        class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500"
                      >
                        <span>Upload a file</span>
                        <input
                          id="file-upload"
                          name="img_cover"
                          type="file"
                          class="sr-only"
                        />
                      </label>
                      <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">
                      PNG, JPG, GIF up to 10MB
                    </p>
                  </div>
                </div>
              </div>
              <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                <div class="mb-3 space-y-2 w-full text-xs">
                  <label class="font-semibold text-gray-600 py-2"
                    >Name <abbr title="required">*</abbr></label
                  >
                  <input
                    v-model="inp_nom"
                    placeholder="Name"
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    required="required"
                    type="text"
                    name="name"
                    id="name"
                  />
                  <p class="text-red text-xs hidden">
                    Please fill out this field.
                  </p>
                </div>
                <div class="mb-3 space-y-2 w-full text-xs">
                  <label class="font-semibold text-gray-600 py-2"
                    >Last Name <abbr title="required">*</abbr></label
                  >
                  <input
                    v-model="inp_prenom"
                    placeholder="last Name"
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    required="required"
                    type="text"
                    name="lastname"
                    id="lastname"
                  />
                  <p class="text-red text-xs hidden">
                    Please fill out this field.
                  </p>
                </div>
              </div>

              <div>
                <div class="mb-3 space-y-2 w-full text-xs">
                  <label class="font-semibold text-gray-600 py-2"
                    >Email <abbr title="required">*</abbr></label
                  >
                  <input
                    v-model="inp_email"
                    placeholder="Email "
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    required="required"
                    type="email"
                    name="email"
                    id="email"
                  />
                  <p class="text-red text-xs hidden">
                    Please fill out this field.
                  </p>
                </div>
              </div>

              <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                <div class="mb-3 space-y-2 w-full text-xs">
                  <label class="font-semibold text-gray-600 py-2"
                    >Password <abbr title="required">*</abbr></label
                  >
                  <input
                    v-model="inp_password"
                    placeholder="Email "
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    required="required"
                    type="password"
                    name="password"
                    id="password"
                  />
                  <p class="text-red text-xs hidden">
                    Please fill out this field.
                  </p>
                </div>
                <div class="mb-3 space-y-2 w-full text-xs">
                  <label class="font-semibold text-gray-600 py-2"
                    >Password Confirmation
                    <abbr title="required">*</abbr></label
                  >
                  <input
                    v-model="inp_password_confirmation"
                    placeholder="Password Confirmation "
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    required="required"
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                  />
                  <p class="text-red text-xs hidden">
                    Please fill out this field.
                  </p>
                </div>
              </div>

              <div>
                <div class="mb-3 space-y-2 w-full text-xs">
                  <label class="font-semibold text-gray-600 py-2"
                    >Telephone <abbr title="required">*</abbr></label
                  >
                  <input
                    v-model="inp_telephon"
                    placeholder="Telephon +212..."
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    required="required"
                    type="text"
                    name="tele"
                    id="tele"
                  />
                  <p class="text-red text-xs hidden">
                    Please fill out this field.
                  </p>
                </div>
                <div class="mb-3 space-y-2 w-full text-xs">
                  <label class="font-semibold text-gray-600 py-2"
                    >Date of Birth <abbr title="required">*</abbr></label
                  >
                  <input
                    v-model="inp_date_N"
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    required="required"
                    type="date"
                    name="dateBirth"
                    id="dateBirth"
                  />
                  <p class="text-red text-xs hidden">
                    Please fill out this field.
                  </p>
                </div>
              </div>
              <div>
                <label for="">Info Optionile</label>
              </div>
              <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                <div class="w-full flex flex-col mb-3">
                  <label class="font-semibold text-gray-600 py-2"
                    >Address</label
                  >
                  <input
                    v-model="inp_adresse"
                    placeholder="Address"
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    type="text"
                    name="integration[street_address]"
                    id="integration_street_address"
                  />
                </div>
              </div>
              <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                <div class="w-full flex flex-col mb-3">
                  <label class="font-semibold text-gray-600 py-2">GitHub</label>
                  <input
                    v-model="inp_github"
                    placeholder="GitHub"
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    type="text"
                    name="link_Git"
                    id="integration_street_address"
                  />
                </div>

                <div class="w-full flex flex-col mb-3">
                  <label class="font-semibold text-gray-600 py-2"
                    >LinkedIn</label
                  >
                  <input
                    v-model="inp_linkedin"
                    placeholder="LinkedIn"
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    type="text"
                    name="link_linkedin"
                    id="integration_street_address"
                  />
                </div>
              </div>

              <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                <div class="w-full flex flex-col mb-3">
                  <label class="font-semibold text-gray-600 py-2"
                    >Facebook</label
                  >
                  <input
                    v-model="inp_facebook"
                    placeholder="Facebook"
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    type="text"
                    name="link_face"
                    id="integration_street_address"
                  />
                </div>

                <div class="w-full flex flex-col mb-3">
                  <label class="font-semibold text-gray-600 py-2"
                    >Instagram</label
                  >
                  <input
                    v-model="inp_instagram"
                    placeholder="Instagram"
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    type="text"
                    name="link_insta"
                    id="integration_street_address"
                  />
                </div>
              </div>

              <div class="flex-auto w-full mb-1 text-xs space-y-2">
                <label class="font-semibold text-gray-600 py-2">Bio</label>
                <textarea
                  v-model="inp_bio"
                  required=""
                  name="bio"
                  id="bio"
                  class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block  bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4"
                  placeholder="Enter your comapny info"
                  spellcheck="false"
                ></textarea>
              </div>
              <p class="text-xs text-red-500 text-right my-3">
                Required fields are marked with an asterisk
                <abbr title="Required field">*</abbr>
              </p>
              <div
                class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse"
              >
                <button
                  class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100"
                >
                  Cancel
                </button>
                <button
                  @click="
                    registerApprenant([
                      inp_nom,
                      inp_prenom,
                      inp_email,
                      inp_password,
                      inp_password_confirmation,
                      inp_telephon,
                      inp_date_N,
                      inp_adresse,
                      inp_github,
                      inp_linkedin,
                      inp_facebook,
                      inp_instagram,
                      inp_img,
                      inp_img_cover,
                      inp_bio,
                    ])
                  "
                  class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500"
                >
                  Save
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions } from "vuex";
export default {
  name: "AppRegister",
  data() {
    return {
      inp_nom: " ",
      inp_prenom: " ",
      inp_email: " ",
      inp_password: " ",
      inp_password_confirmation: " ",
      inp_telephon: " ",
      inp_date_N: " ",
      inp_adresse: " ",
      inp_github: " ",
      inp_linkedin: " ",
      inp_facebook: " ",
      inp_instagram: " ",
      inp_img: " ",
      inp_img_cover: " ",
      inp_bio: " ",
    };
  },
  methods: {
    ...mapActions(["registerApprenant"]),
  },
};
</script>
