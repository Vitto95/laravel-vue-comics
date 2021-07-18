<template>
    <div>
        <!-- <h2>hello vue</h2>
        <h3>HOMECOMICS</h3>
        <h3>DATI API:</h3> -->
        <div class="vg-container" v-for="comic in comics" :key="comic.id">
            <Card :comicObj="comic" />
        </div>

        <!-- <div>
            <h2>{{ comic.title }}</h2>
        </div> -->
    </div>
</template>

<script>
import axios from "axios";
import Card from "../components/Card.vue";

export default {
    name: "HomeComics",
    components: {
        Card
    },
    data() {
        return {
            comics: []
        };
    },
    methods: {
        getComicsData() {
            axios
                .get("http://127.0.0.1:8000/api/comics")
                .then(res => {
                    /* console.log("Dati API:");
                    console.log(res.data); */
                    this.comics = res.data;
                })
                .catch(err => {
                    console.log(err);
                });
        }
    },
    created() {
        this.getComicsData();
    }
};
</script>

<style lang="scss" scoped></style>
