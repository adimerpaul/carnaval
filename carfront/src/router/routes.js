import Index from "pages/Index";
import Ruta from "pages/Ruta";
import Rutaadmin from "pages/Rutaadmin";
import Rubro from "pages/Rubro";
const routes = [
  {
    path: "/",
    component: () => import("layouts/MainLayout.vue"),
    children: [
      { path: "", component: Ruta},
      { path: "rutaadmin", component: Rutaadmin },
      { path: "rubro/:id", component: Rubro },
    ],
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: "/:catchAll(.*)*",
    component: () => import("pages/Error404.vue"),
  },
];

export default routes;
