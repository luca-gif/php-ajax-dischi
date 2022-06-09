const root = new Vue({
    el: "#root",
    data: {
        apiUrl: "http://localhost/primo-php/php-ajax-dischi/api.php",
        datas: [],
    },
    methods: {
        getApi() {
            axios.get(this.apiUrl).then((r) => {
                this.datas = r.data;
                console.log(this.datas);
            });
        },
    },
    mounted() {
        this.getApi();
    },
});