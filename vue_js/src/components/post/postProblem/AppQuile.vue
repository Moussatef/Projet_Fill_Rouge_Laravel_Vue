<template>
  <div>
    <quill-editor v-model:value="content"  @change="$emit('sendData',[content])" :options="options"></quill-editor>
    {{content}}
  </div>
</template>

<script>
import { quillEditor } from "vue3-quill";
export default {
  name: "AppQuile",
  props: ["desc"],
  data() {
    return {
      content: this.desc,
      options: {
        modules: {
          toolbar: [
            ["bold", "italic", "underline", "strike"],
            ["blockquote", "code-block"],
            [{ header: 1 }, { header: 2 }],
            [{ list: "ordered" }, { list: "bullet" }],
            [{ script: "sub" }, { script: "super" }],
            [{ indent: "-1" }, { indent: "+1" }],
            [{ direction: "rtl" }],
            [{ size: ["small", false, "large", "huge"] }],
            [{ header: [1, 2, 3, 4, 5, 6, false] }],
            [{ color: [] }, { background: [] }],
            [{ font: [] }],
            [{ align: [] }],
            ["clean"],
            ["link", "video"],
          ],
        },
      },
    };
  },
  components: {
    quillEditor,
  },
};
</script>
