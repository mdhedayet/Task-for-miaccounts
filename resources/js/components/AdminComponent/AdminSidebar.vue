<template>
  <div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
      <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
          <!-- Sidenav Menu Heading (Account)-->
          <div class="sidenav-menu-heading">
            <p>DashBoard</p>
          </div>
          <!-- Sidenav Accordion (Dashboard)-->

           <a
            class="nav-link collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#collapsePages1"
            aria-expanded="false"
            aria-controls="collapsePages"
          >
            <div class="nav-link-icon"></div>
            All Reports
            <div class="sidenav-collapse-arrow">
              <i class="fas fa-angle-down"></i>
            </div>
          </a>

          <div
            class="collapse"
            id="collapsePages1"
            data-bs-parent="#accordionSidenav"
          >
            <nav
              class="sidenav-menu-nested nav accordion"
              id="accordionSidenavAppsMenu"
            >
              <router-link :to="{name:'ReportOne'}">
               Report One
              </router-link>

            </nav>
          </div>
          <div
            class="collapse"
            id="collapsePages1"
            data-bs-parent="#accordionSidenav"
          >
            <nav
              class="sidenav-menu-nested nav accordion"
              id="accordionSidenavAppsMenu"
            >
              <router-link :to="{name:'ReportTwo'}">
               Report Two
              </router-link>

            </nav>
          </div>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
export default {

};
</script>

<style scoped>
#layoutSidenav_nav a {
  cursor: pointer;
  text-decoration: none;
  color: #000;
  padding: 5px 0 5px 0;
}

#layoutSidenav_nav a:hover {
    color: #4caf50;
}

#layoutSidenav_nav .router-link-exact-active {
    color: #004ec2;
}

.svg-inline--fa.fa-w-10 {
    width: 2.625em !important;
}
</style>
