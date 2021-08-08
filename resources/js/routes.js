import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import HomeComics from "./pages/HomeComics.vue";
import ComicDetail from "./pages/ComicDetail.vue";

const router = new VueRouter({
    mode: "history",
    linkExactActiveClass: "active",
    routes: [
        {
            path: "/",
            name: "home",
            component: HomeComics
        },
        {
            path: "/:comicSlug",
            name: "detail",
            component: ComicDetail
        }
    ]
});

export default router;
