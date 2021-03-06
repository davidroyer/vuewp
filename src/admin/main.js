import Vue from "vue";
import App from "./App.vue"; // import "./registerServiceWorker";
import "./plugins/iview.js";
// import Vuetify from "vuetify";

import "@/admin/assets/main.scss";
// import "vuetify/dist/vuetify.min.css"; // Ensure you are using css-loader

// Vue.use(Vuetify);
Vue.config.productionTip = false;

new Vue({
  //   router,
  render: h => h(App)
}).$mount("#app");
