import './bootstrap';
import "../css/app.css";

import {createApp, h} from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";


createInertiaApp({
    title: (title) => `${title} - ${app_name}`,
    resolve: (name) =>
        resolvePageComponent(
            `./pages/${name}.vue`,
            import.meta.glob("./pages/**/*.vue")
        ),
        setup({ el, app, props, plugin }) {
            return createApp({ render: () => h(app, props) })
                .use(plugin)
                .mount(el);
        },
});

