<template>
<!-- v-if="admin_token" -->
    <div >
        <SideBar/>
    </div>
</template>

<script>
import SideBar from '@/components/Admin/SideBar'
import { mapGetters, mapActions } from "vuex";
export default {
    name: "AdminDash",
    data(){
      return{ 
        admin_token : localStorage.getItem('admin_token'),
      }
    },

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