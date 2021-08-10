<template>
    <div>

        <SideBar/>
    </div>
</template>

<script>
import SideBar from '@/components/Admin/SideBar'
import { mapGetters, mapActions } from "vuex";
export default {
    name: "AdminDash",

    components: {
        SideBar
    },
    methods: {
    ...mapActions(["getAllApprenant"]),
  },
    created() {
    this.getAllApprenant();
  }

    
}
</script>