import Vue from 'vue';
import Router from 'vue-router';
import AdminHome from '@/components/admin/home';

Vue.use(Router);

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/admin',
      name: 'AdminHome',
      component: AdminHome,
    },
  ],
});
