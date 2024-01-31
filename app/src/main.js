import {createApp} from 'vue'
import App from '@/App.vue'
import router from '@/router.js'
import 'materialize-css/dist/js/materialize.min'

const app = createApp(App)

app.config.productionTip = false;

app.use(router)

router.isReady().then(() => {
  app.mount('#app')
})
