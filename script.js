const root = new Vue({
    el: "#root",
    data: {},
    methods: {
        getApi() {
            console.log("api");
        },
    },
    mounted() {
        this.getApi();
    },
});