<template>
  <section class="component bg-black p-10 mx-1 md:mx-10 ">
    <blockquote class="relative text-white text-center p-10 w-full m-1">
      It’s good to meet you, Dr. Banner. Your work on anti-electron collisions
      is unparalleled. And I’m a huge fan of the way you lose control and turn
      into an enormous green rage monster.
      <cite> - Tony Stark</cite>
    </blockquote>
  </section>
</template>
<script>
export default {};
</script>

<style scoped>
.component {
  font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
}

blockquote {
  background: linear-gradient(to right, #039be5 6px, transparent 4px) 0 100%,
    linear-gradient(to left, #039be5 6px, transparent 4px) 100% 0,
    linear-gradient(to bottom, #039be5 6px, transparent 4px) 100% 0,
    linear-gradient(to top, #039be5 6px, transparent 4px) 0 100%;
  background-repeat: no-repeat;
  background-size: 20px 20px;
}

/* -- create the quotation marks -- */
blockquote:before,
blockquote:after {
  font-family: FontAwesome;
  position: absolute;
  color: #039be5;
  font-size: 34px;
}

blockquote:before {
  content: "\f10d";
  top: -12px;
  margin-right: -20px;
  right: 100%;
}

blockquote:after {
  content: "\f10e";
  margin-left: -20px;
  left: 100%;
  top: auto;
  bottom: -20px;
}
</style>
