<template>
  <div v-if="post" class="flex items-center">
    <img
      :src="'http://127.0.0.1:8000' + post.img"
      alt="img"
      class="h-10 w-10 rounded-full border  border-blue-500"
    />
    <div class="ml-4">
      <span class="cursor-pointer font-bold"
        >{{ post.full_name }}
      </span>
      <span class="text-grey text-opacity-50 text-sm mx-3">{{created_at}}</span>
    </div>
  </div>
  <AppProfileLoad v-else />
</template>

<script>
import AppProfileLoad from "@/components/dataload/AppProfilLoad";
export default {
  name: "AppAvatare",
  props: ["post", "created_at"],
  emits: ["loading"],
  components: {
    AppProfileLoad,
  },
  data() {
    return {
      loading: true,
    };
  },
  methods: {
  },
  beforeMount() {
  },
};
</script>
