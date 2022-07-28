import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./pages/Home";
import About from "./pages/About"
import Page404 from "./pages/Page404"
import SinglePost from "./pages/SinglePost"
const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/chi-siamo",
            name: "about",
            component: About
        },
        {
            path: "/posts/:slug",
            name: "single-post",
            component: SinglePost
        },
        // {
        //     path: "/posts/category",
        //     name: "categories",
        //     component: Categories
        // },
        {
            path: "/*",
            name: "error-404",
            component: Page404
        },
    ]
});

export default router