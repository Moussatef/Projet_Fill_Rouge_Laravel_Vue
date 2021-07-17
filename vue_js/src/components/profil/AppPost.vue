<template>
  <div>
    <div
      class="w-full shadow-fb rounded-3xl border-r-2 border-l-2 border-blue-400 bg-white p-4 my-5"
    >
      <div class="flex justify-between items-center">
        <div class="flex items-center">
          <img
            src="../../assets/ms.jpg"
            alt="img"
            class="h-10 w-10 rounded-full"
          />
          <div class="ml-4">
            <span class="cursor-pointer font-bold">{{ nom }} {{ prenom }}</span>
            <span class="text-grey text-opacity-50 text-sm mx-3">{{
              date.fromNow()
            }}</span>
          </div>
        </div>
        <button
          class="w-9 h-9 rounded-full bg-fill flex items-center justify-center  focus:outline-none"
        >
          <svg
            class="w-6 h-6"
            id="Capa_1"
            enable-background="new 0 0 515.555 515.555"
            height="512"
            viewBox="0 0 515.555 515.555"
            width="512"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="m496.679 212.208c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138 65.971-25.167 91.138 0"
            />
            <path
              d="m303.347 212.208c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138 65.971-25.167 91.138 0"
            />
            <path
              d="m110.014 212.208c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138 65.971-25.167 91.138 0"
            />
          </svg>
        </button>
      </div>
      <div class="w-full mt-4 text-justify">
        <p class="text-lg text-gray-900 mx-3">{{ title }}</p>
        <p class=" text-gray-900 mx-5">{{ description }}</p>
      </div>
      <img
        src="../../assets/black.jpg"
        alt="img"
        class="w-4/5  object-contain md:object-scale-down mx-auto mt-4 rounded"
      />
      <div
        class="flex justify-between mt-4 items-center text-fGrey text-opacity-50"
      >
        <div class="flex items-center">
          <svg
            class="h-6 w-6 mx-3"
            id="Capa_1"
            enable-background="new 0 0 512 512"
            height="512"
            viewBox="0 0 512 512"
            width="512"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
          >
            <linearGradient
              id="SVGID_1_"
              gradientUnits="userSpaceOnUse"
              x1="256"
              x2="256"
              y1="512"
              y2="0"
            >
              <stop offset="0" stop-color="#fd3a84" />
              <stop offset="1" stop-color="#ffa68d" />
            </linearGradient>
            <g>
              <g>
                <path
                  d="m256 0c-140.959 0-256 115.049-256 256 0 140.959 115.049 256 256 256 140.959 0 256-115.05 256-256 0-140.959-115.049-256-256-256zm0 482c-124.617 0-226-101.383-226-226s101.383-226 226-226 226 101.383 226 226-101.383 226-226 226zm75-361c-32.923 0-58.18 18.506-75 46.058-16.817-27.547-42.072-46.058-75-46.058-53.252 0-90 45.908-90 99.545 0 64.594 57.624 110.966 116.19 162.298 12.376 10.848 25.174 22.065 38.775 34.306 2.853 2.568 6.444 3.851 10.035 3.851s7.182-1.283 10.035-3.851c13.601-12.241 26.398-23.458 38.775-34.306 63.286-55.469 116.19-99.611 116.19-162.298 0-53.739-36.839-99.545-90-99.545zm-45.964 239.283c-9.375 8.216-18.988 16.643-29.036 25.587-10.047-8.944-19.661-17.371-29.036-25.587-66.079-57.918-105.964-92.877-105.964-139.738 0-39.647 25.794-69.545 60-69.545 32.707 0 53.643 31.628 60.516 56.399 1.763 6.548 7.701 11.101 14.484 11.101 6.796 0 12.743-4.569 14.494-11.135.15-.564 15.55-56.365 60.506-56.365 34.206 0 60 29.898 60 69.545 0 46.861-39.885 81.82-105.964 139.738z"
                  fill="url(#SVGID_1_)"
                />
              </g>
            </g>
          </svg>
          <!-- <div v-for="lik in like" :key="lik.id">
            <h1 >{{lik.id}}</h1>
          </div> -->

          {{ likess }} Likes
        </div>
        <div>{{ comments }} Comment</div>
      </div>
      <div class="border border-fGray border-opacity-10 mt-4" />
      <div class="flex justify-between items-center mt-4">
        <button
          class="w-1/2 flex items-center justify-center focus:outline-none"
        >
          <svg
            class="h-6 w-6 mx-3"
            viewBox="0 0 511 511.99962"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="m512.445312 245.636719c-1.53125-66.976563-29.011718-129.394531-77.382812-175.75-48.300781-46.289063-111.726562-71.078125-178.589844-69.8437502-66.886718-1.2421878-130.285156 23.5585932-178.585937 69.8437502-48.371094 46.355469-75.851563 108.773437-77.382813 175.75l-.003906.210937v.210938c.351562 68.261718 29.574219 133.15625 80.320312 178.640625v61.886719c0 12.011718 8.386719 22.476562 19.941407 24.882812 1.710937.355469 3.433593.53125 5.144531.53125 4.652344 0 9.222656-1.300781 13.242188-3.8125l49.738281-31.070312c28.050781 9.820312 57.328125 14.796874 87.085937 14.796874h.367188c1.648437.03125 3.28125.046876 4.921875.046876 65.105469-.003907 126.65625-24.707032 173.800781-69.886719 48.371094-46.355469 75.851562-108.773438 77.382812-175.75l.007813-.34375zm-98.160156 154.757812c-42.59375 40.816407-98.546875 62.640625-157.515625 61.496094l-.324219-.003906c-.160156 0-.316406 0-.472656 0-27.53125 0-54.597656-4.808594-80.445312-14.289063-6.429688-2.359375-13.4375-1.640625-19.222656 1.972656l-45.457032 28.398438v-56.925781c0-6.347657-2.761718-12.390625-7.578125-16.578125-45.863281-39.871094-72.367187-97.578125-72.738281-158.351563 1.394531-58.898437 25.585938-113.773437 68.132812-154.542969 42.589844-40.820312 98.5625-62.632812 157.511719-61.496093l.296875.007812.296875-.007812c59.007813-1.160157 114.921875 20.675781 157.515625 61.496093 42.507813 40.738282 66.695313 95.566407 68.128906 154.414063-1.429687 58.84375-25.621093 113.671875-68.128906 154.410156zm0 0"
            />
            <path
              d="m307.714844 144.183594c-15.269532 0-29.234375 4.816406-41.511719 14.3125-3.4375 2.65625-6.6875 5.644531-9.730469 8.9375-3.042968-3.296875-6.289062-6.28125-9.726562-8.9375-12.28125-9.496094-26.246094-14.3125-41.511719-14.3125-20.257813 0-38.898437 8.121094-52.492187 22.867187-13.28125 14.40625-20.59375 33.988281-20.59375 55.136719 0 45.726562 35.054687 75.597656 83.574218 116.945312 7.96875 6.792969 17.003906 14.496094 26.363282 22.675782 3.980468 3.488281 9.089843 5.40625 14.386718 5.40625s10.40625-1.917969 14.382813-5.398438c9.433593-8.253906 18.433593-15.921875 26.375-22.6875 48.515625-41.34375 83.570312-71.214844 83.570312-116.941406 0-21.152344-7.316406-40.730469-20.597656-55.140625-13.59375-14.742187-32.234375-22.863281-52.488281-22.863281zm-29.960938 172.089844c-6.488281 5.53125-13.679687 11.660156-21.28125 18.246093-7.554687-6.550781-14.765625-12.695312-21.273437-18.242187-45.539063-38.804688-73.023438-62.226563-73.023438-94.089844 0-27.800781 18.109375-47.976562 43.058594-47.976562 8.578125 0 16.148437 2.628906 23.140625 8.035156 6.441406 4.984375 10.988281 11.382812 13.671875 15.878906 3.015625 5.054688 8.542969 8.191406 14.425781 8.191406 5.882813 0 11.414063-3.136718 14.429688-8.195312 2.683594-4.492188 7.230468-10.890625 13.671875-15.875 6.992187-5.40625 14.558593-8.035156 23.140625-8.035156 24.949218 0 43.058594 20.175781 43.058594 47.976562 0 31.863281-27.484376 55.285156-73.019532 94.085938zm0 0"
            />
          </svg>

          <span class="ml-1">Like</span>
        </button>
        <button
          class="w-1/2 flex items-center justify-center focus:outline-none"
        >
          <svg
            class="h-6 w-6 mx-3"
            version="1.1"
            id="Capa_1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px"
            y="0px"
            viewBox="0 0 60 60"
            style="enable-background:new 0 0 60 60;"
            xml:space="preserve"
          >
            <path
              d="M54,2H6C2.748,2,0,4.748,0,8v33c0,3.252,2.748,6,6,6h8v10c0,0.413,0.254,0.784,0.639,0.933C14.757,57.978,14.879,58,15,58
	c0.276,0,0.547-0.115,0.74-0.327L25.442,47H54c3.252,0,6-2.748,6-6V8C60,4.748,57.252,2,54,2z M58,41c0,2.168-1.832,4-4,4H27.179
	l3.579-4.161c0.36-0.418,0.313-1.05-0.106-1.41c-0.418-0.36-1.051-0.312-1.411,0.106l-4.998,5.811L16,54.414V46c0-0.552-0.448-1-1-1
	H6c-2.168,0-4-1.832-4-4V8c0-2.168,1.832-4,4-4h48c2.168,0,4,1.832,4,4V41z"
            />
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
          </svg>
          <span class="ml-1">Comment </span>
        </button>
      </div>
      <div class="border border-gray-500 border-opacity-20 mt-4" />
      <div class="flex space-x-2 my-4">
        <img
          src="../../assets/ms.jpg"
          alt="img"
          class="h-10 w-10 mt-2 rounded-full"
        />
        <input
          class="border-2 px-4 py-3 w-full focus:outline-none rounded-full"
          placeholder="Write something to Roland…"
          v-model="cmp"
        />
        <button
          v-if="cmp"
          @click="
            commentPost(
              user_id,
              post_id,
              cmp,
              token
            )
          "
        >
          <svg
            class="w-5 h-5 "
            height="512pt"
            viewBox="0 -16 512 512"
            width="512pt"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="m512 239.601562-511.667969-239.601562 27.695313 197.558594-28.027344 42.042968 28.027344 42.039063-27.695313 197.558594zm-457.015625-28.332031 139.769531 28.332031-139.769531 28.328126-18.886719-28.328126zm386.191406 28.332031-403.40625 188.902344 18.242188-130.136718 289.929687-58.765626-289.929687-58.769531-18.242188-130.136719zm0 0"
            />
          </svg>
        </button>
      </div>
      <div class="text-left " v-for="comme in comment_desc" :key="comme.id">
        <div
          class="inline-block w-full  bg-gray-200 rounded-tl-lg rounded-br-lg px-3 py-1 text-sm  text-gray-700 mr-2 my-2"
        >
          <h3
            class="inline-flex text-base items-center md:mb-2 lg:mb-0 ml-4 border-b-2 border-gray-600 "
          >
            Yassine Bissaoui
          </h3>
          <p class="leading-relaxed md:mb-2 lg:mb-0 ml-4">
            {{ comme.comment }}
          </p>
          <p class="leading-relaxed text-xs text-gray-500 md:mb-2 lg:mb-0 ml-4">
            {{ convertTime(created_at) }}
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: [
    "personne_id",
    "post_id",
    "title",
    "description",
    "path",
    "created_at",
    "nom",
    "prenom",
    "like",
    "comment",
  ],
  name: "AppPost",
  data() {
    return {
      date: moment(this.created_at, "YYYY-MM-DD HH:mm:ss"),
      likess: this.like.length,
      comment_desc: this.comment,
      comments: this.comment.length,
      cmp: "",
      user_id : this.personne_id,
      post_id : this.post_id,
      token: localStorage.getItem("user_token"),
    };
  },
  methods: {
    convertTime(time) {
      let res = moment(time, "YYYY-MM-DD HH:mm:ss");
      return res.fromNow();
    },

    async commentPost(id_person, id_post, comment, token) {
      var myHeaders = new Headers();
      myHeaders.append("Accept", "application/json");
      myHeaders.append("Authorization", "Bearer " + token);
      myHeaders.append("Content-Type", "application/json");

      var raw = JSON.stringify({
        personne_id: id_person,
        post_id: id_post,
        comment: comment,
      });

      var requestOptions = {
        method: "POST",
        headers: myHeaders,
        body: raw,
        redirect: "follow",
      };
      var res = await fetch(
        "http://127.0.0.1:8000/api/comment/store",
        requestOptions
      );
      if (res.status === 200) {
        const result = await res.json();
        console.log(result);
        
      } else {
        var error = res;
        console.log("error", error);
      }
    },
  },

  // provide() {
  //   return {
  //     tile : this.like.length// this will result in error `Cannot read property 'length' of undefined`
  //   }
  // },
};
</script>
