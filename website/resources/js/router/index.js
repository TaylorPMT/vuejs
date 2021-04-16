import Vue from  'vue'
import Router from 'vue-router'
Vue.use(Router)
import firstPage from '../components/pages/myFirstVuePage'
import newRouteVue from '../components/pages/newRouterVuePage'
import hooks from '../components/pages/basic/hooks'
import methods from '../components/pages/basic/method'
import home from '../components/pages/basic/home.vue'
import tag  from '../components/pages/basic/tag.vue'
const routes= [
    {
        path:'/',
        component:home,
    },
    {
        path:'/tag',
        component:tag,
    },
    {
        path: '/test',
        component:firstPage,
    },
    {
        path: '/new',
        component:  newRouteVue
    },
    {
        path: '/hooks',
        component: hooks
    },
    {
        path: '/methods',
        component :methods
    }
    /*
    Vue Hooks
     */
]
export default new Router({
    mode:'history',
    routes
})
