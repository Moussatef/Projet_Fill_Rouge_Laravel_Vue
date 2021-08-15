<template>
  <div>
    <img
      :src="'http://127.0.0.1:8000' + image.path"
      alt=""
      class="object-cover  mx-auto "
      style=" min-width:400px; min-height:600px; max-height:700px;  "
    />
  </div>
</template>

<script>
export default {
  name: "AppImage",
  props: ["image"],

  date() {
    return {
      img_avatar: "http://127.0.0.1:8000",
    };
  },
};
</script>
