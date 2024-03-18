import './bootstrap';
import '../css/app.css';

import {createApp, h} from 'vue';
import {createInertiaApp} from '@inertiajs/vue3';
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers';
import {ZiggyVue} from '../../vendor/tightenco/ziggy';
import VueTippy from 'vue-tippy'
import 'tippy.js/dist/tippy.css' // optional for styling
import 'tippy.js/themes/light.css'
import 'tippy.js/themes/light-border.css'


const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({el, App, props, plugin}) {

        return createApp({render: () => h(App, props)})
            .use(plugin)
            .use(ZiggyVue)
            .use(VueTippy, {
                directive: "tippy", // => v-tippy
                component: "tippy", // => <tippy/>
                componentSingleton: "tippy-singleton", // => <tippy-singleton/>
                defaultProps: {
                    theme: 'light-border',
                    placement: 'auto-end',
                    allowHTML: true,
                }
            })
            .mount(el);

    },
    progress: {
        color: '#4B5563',
    },
});
