<template>
    <nav
        class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
        id="sidenavAccordion"
    >
        <!-- Sidenav Toggle Button-->
        <button
            class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0"
            id="sidebarToggle"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-menu"
            >
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>
        <router-link
            class="navbar-brand pe-3 ps-4 ps-lg-2"
            :to="{ name: 'DashBoard' }"
            >Account Report</router-link
        >

        <!-- Navbar Items-->
        <ul class="navbar-nav align-items-center ms-auto">
            <!-- User Dropdown-->

            <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
                <a
                    class="btn btn-icon btn-transparent-dark dropdown-toggle"
                    id="navbarDropdownUserImage"
                    href="javascript:void(0);"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Logout
                </a>
                <div
                    class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up routerColorChange"
                    aria-labelledby="navbarDropdownUserImage"
                >
                    <a
                        class="dropdown-item"
                        style="cursor: pointer"
                        @click="Logout"
                    >
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: "UserNavbar",

    methods: {
        Logout() {
            this.$store
                .dispatch("adminLogout")
                .then(() => {
                    this.$router.push({name:'AdminLogin'})
                })
                .catch((e) => {
                    console.log(e.message);
                });
        },
    },
};
</script>

<style scoped>
.navbar-nav {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
    position: absolute !important;
    right: 19px !important;
}
</style>
