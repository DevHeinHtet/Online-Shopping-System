// import { createRouter, createWebHistory } from "vue-router";

// import homeView from "../pages/home.vue";
// import loginView from "../pages/login.vue";
// import dashboardView from "../pages/dashboard/layout/dashboard.vue";
// import productsView from "../pages/dashboard/product/index.vue";
// import productView from "../pages/dashboard/product/add.vue";
// import categoriesView from "../pages/dashboard/category/index.vue";
// import categoryView from "../pages/dashboard/category/add.vue";
// import addView from "../pages/dashboard/add.vue";

// const routes = [
//     {
//         path: "/",
//         name: "home",
//         component: homeView,
//         meta: {
//             requiresAuth: false,
//         },
//     },
//     {
//         path: "/login",
//         name: "login",
//         component: loginView,
//         meta: {
//             requiresAuth: false,
//         },
//     },
//     {
//         path: "/dashboard",
//         name: "dashboard",
//         component: dashboardView,
//         children: [
//             {
//                 name: "products",
//                 path: "/products",
//                 component: productsView,
//             },
//             {
//                 name: "addProduct",
//                 path: "/product/add",
//                 component: productView,
//             },
//             {
//                 name: "categories",
//                 path: "/categories",
//                 component: categoriesView,
//             },
//             {
//                 name: "addCategory",
//                 path: "/category/add",
//                 component: categoryView,
//             },
//             {
//                 name: "add",
//                 path: "/add",
//                 component: addView,
//             },
//         ],
//         meta: {
//             requiresAuth: true,
//         },
//     },
// ];

// const router = createRouter({
//     history: createWebHistory(),
//     routes,
// });

// router.beforeEach((to, from) => {
//     if (to.meta.requiresAuth && !localStorage.getItem("token")) {
//         return { name: "login" };
//     }

//     if (to.meta.requiresAuth == false && localStorage.getItem("token")) {
//         return { name: "products" };
//     }
// });

// export default router;
