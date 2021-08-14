<template>
  <div class="mb-8">
    <label class="text-xl text-gray-600"
    >Content <span class="text-red-500">*</span></label
    >
    <quill-editor v-model:value="content" :options="options"></quill-editor>
    <div v-html="content"></div>
  </div>
</template>

<script>
import {quillEditor} from 'vue3-quill'

export default {
  name: "AppEditeur",
  data() {
    return {
      content: "",
      options: {
        modules: {
          toolbar: [
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],
            [{ header: 1 }, { header: 2 }],
            [{ list: 'ordered' }, { list: 'bullet' }],
            [{ script: 'sub' }, { script: 'super' }],
            [{ indent: '-1' }, { indent: '+1' }],
            [{ direction: 'rtl' }],
            [{ size: ['small', false, 'large', 'huge'] }],
            [{ header: [1, 2, 3, 4, 5, 6, false] }],
            [{ color: [] }, { background: [] }],
            [{ font: [] }],
            [{ align: [] }],
            ['clean'],
            ['link', 'video']
          ]
        },
      }
    };
  },
  components: {
    quillEditor,
  },
  methods: {},
  created() {
  },
};
</script>
