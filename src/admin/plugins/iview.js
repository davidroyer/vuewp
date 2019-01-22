import Vue from "vue";
import {
  Button,
  Card,
  Content,
  Footer,
  Header,
  Icon,
  Layout,
  Menu,
  MenuItem,
  Message,
  Modal,
  Notice,
  TabPane,
  Tabs
} from "iview";
import lang from "iview/dist/locale/en-US";
import { locale } from "iview";

locale(lang);

// Vue.prototype.$Loading = LoadingBar;
Vue.prototype.$Message = Message;
Vue.prototype.$Modal = Modal;
Vue.prototype.$Notice = Notice;
// Vue.prototype.$Spin = Spin;

Vue.component("Button", Button);
Vue.component("Card", Card);
Vue.component("Content", Content);
Vue.component("Footer", Footer);
Vue.component("Header", Header);
Vue.component("Icon", Icon);
Vue.component("Layout", Layout);
Vue.component("Menu", Menu);
Vue.component("MenuItem", MenuItem);
Vue.component("Modal", Modal);
Vue.component("TabPane", TabPane);
Vue.component("Tabs", Tabs);

import "iview/dist/styles/iview.css";
