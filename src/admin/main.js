import Vue from "vue";
import Vuetify from "vuetify";
import App from "./App.vue"; // import "./registerServiceWorker";
import "@/admin/assets/main.scss";

Vue.use(Vuetify);
Vue.config.productionTip = false;

new Vue({
  //   router,
  render: h => h(App)
}).$mount("#app");
