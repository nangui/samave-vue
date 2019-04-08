import "jquery";
import "popper.js";
import"bootstrap";
import Vue from "vue";

import Welcome from "./components/Welcome.vue";

Vue({
    el: "#app",
    components: {
        Welcome
    },
});