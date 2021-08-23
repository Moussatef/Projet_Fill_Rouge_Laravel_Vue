<template>
  <div id="nav" class="mb-10">
    <!-- <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link> -->
    <Nav class=" fixed w-full top-0  right-0 z-50 " />
  </div>
  <router-view />
</template>

<script>
import Nav from "@/components/inc/Nav";
export default {
  components: {
    Nav,
  },
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;
}
#nav a {
  font-weight: bold;
}
#nav a.router-link-exact-active {
  color: #ffffff;
  /* background: #0864ee; */
  /* box-shadow: 3px 4px 10px 2px rgb(165, 165, 165); */
}
</style>
