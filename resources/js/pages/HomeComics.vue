<template>
    <main>
        <div class="vg-container">
            <div
                class="vg-card-container"
                v-for="comic in comics"
                :key="comic.id"
            >
                <Card :comicObj="comic" />
            </div>
        </div>
    </main>
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

<style lang="scss" scoped>
main {
    background-color: #1c1c1c;
    padding-top: 20px;
}

.vg-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    .vg-card-container {
        display: flex;
        justify-content: center;
    }
}

@media all and (min-width: 1000px) and (max-width: 1200px) {
    .vg-container {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media all and (min-width: 1201px) {
    .vg-container {
        grid-template-columns: repeat(6, 1fr);
    }
}
</style>
