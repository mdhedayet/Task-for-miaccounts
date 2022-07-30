import Vue from 'vue'
import VueRouter from 'vue-router'

import Admin from '../views/Admin.vue'
import ReportOne from '../views/ReportOne.vue'
import ReportTwo from '../views/ReportTwo.vue'


Vue.use(VueRouter)

const routes = [

      {
        path: '/',
        name: 'Admin',
        component: Admin,
        children: [
            {
              path: '/report/one',
              name: 'ReportOne',
              component: ReportOne,
              meta: {
                title: "ReportOne",
              },
            },
            {
              path: '/report/two',
              name: 'ReportTwo',
              component: ReportTwo,
              meta: {
                title: "ReportTwo",
              },
            },

        ]

      },

]

const router = new VueRouter({
    mode: 'history',
    routes
})

export default router
