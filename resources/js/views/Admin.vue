<template>
  <div>
  <admin-navbar />
  <div id="layoutSidenav">
    <admin-sidebar />
    <div id="layoutSidenav_content">
      <main>
        <transition name="slide-fade" mode="out-in">
          <router-view></router-view>
        </transition>

      </main>
    </div>
  </div>
</div>
</template>

<script>
import AdminNavbar from '../components/AdminComponent/AdminNavbar.vue'
import AdminSidebar from '../components/AdminComponent/AdminSidebar.vue'
export default {
  components: { AdminNavbar, AdminSidebar },

}
</script>

<style>

</style>
