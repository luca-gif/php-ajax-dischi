const root = new Vue({
    el: "#root",
    data: {
        apiUrl: "http://localhost/primo-php/php-ajax-dischi/api.php",
        datas: [],
        selected: "all",
    },
    methods: {
        getApi() {
            axios.get(this.apiUrl).then((r) => {
                if (this.selected === "all") {
                    this.datas = r.data;
                    //console.log(this.datas);
                } else {
                    this.datas = r.data.filter((data) => {
                        return data.genre.toLowerCase() === this.selected.toLowerCase();
                    });
                }
            });
        },
        changeValue() {
            this.getApi();
        },
    },
    mounted() {
        this.getApi();
    },
});