require('./bootstrap');
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'

InertiaProgress.init({  
  delay: 250,
  color: '#00FA9A',
  includeCSS: true,
  showSpinner: true,
})

createInertiaApp({  
  resolve: name => require(`./Pages/${name}`).default,
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mixin({ methods: { route }})
      .mount(el)
  },
})
