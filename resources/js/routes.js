import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import HomeComics from "./pages/HomeComics.vue";

const router = new VueRouter({
    mode: "history",
    linkExactActiveClass: "active",
    routes: [
        {
            path: "/",
            name: "home",
            component: HomeComics
        }
    ]
});

export default router;
