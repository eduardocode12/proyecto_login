import Vue from 'vue'
import Router from 'vue-router'
import inicio from '@/componente_inicio/inicio'
import login from '@/components/login'
import registro from  '@/components/registro'
Vue.use(Router)

export default new Router({
  routes: [

    {
      path: '/',
      name: 'inicio',
     children:[
        {
        	 path:"/login",
           component:login
        },
         {
        	 path:"/registro",
           component:registro
        }
     ],
      component: inicio
    },
    
  ]
})
