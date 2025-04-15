import "./bootstrap";
import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import PublicLayout from "./Layouts/PublicLayout.vue";
import AdminLayout from "./Layouts/AdminLayout.vue";

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        let page = pages[`./Pages/${name}.vue`];
        page.default.layout = name.startsWith("User/") ? AdminLayout : PublicLayout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
    progress: {
      // The delay after which the progress bar will appear, in milliseconds...
      delay: 250,
  
      // The color of the progress bar...
      color: '#E5B299',
  
      // Whether to include the default NProgress styles...
      includeCSS: true,
  
      // Whether the NProgress spinner will be shown...
      showSpinner: true,
    },
});

