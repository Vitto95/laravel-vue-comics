<template>
    <div class="wrapper-detail">
        <div class="vg-container">
            <div class="image-container">
                <img :src="comic.image" :alt="comic.slug" />
            </div>
            <div class="title-container">
                <p>{{ comic.title }}</p>
            </div>
            <div class="author-writer-container">
                <p><strong>Author:</strong> {{ comic.author }}</p>
                <p><strong>Writer:</strong> {{ comic.writer }}</p>
            </div>
            <div class="price-container">
                <p><strong>Price:</strong> {{ comic.price }} $</p>
            </div>
            <div class="description-container">
                <p>{{ comic.description }}</p>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "ComicDetail",
    data() {
        return {
            comic: []
        };
    },
    methods: {
        getComicDetail() {
            axios
                .get(
                    "http://127.0.0.1:8000/api/comics/" +
                        this.$route.params.comicSlug
                )
                .then(res => {
                    console.log("res", res);
                    this.comic = res.data;
                })
                .catch(err => {
                    console.log(err);
                });
        }
    },
    created() {
        this.getComicDetail();
    }
};
</script>

<style lang="scss" scoped>
.wrapper-detail {
    background-color: #f6f6f6ca;
}

.vg-container {
    padding: 30px;
}

.title-container {
    margin-top: 1rem;
    margin-bottom: 0.5rem;
    p {
        color: #0182f9;
        text-transform: uppercase;
        font-size: 1.5rem;
        font-weight: 800;
    }
}

.author-writer-container {
    margin-bottom: 1rem;
}

.price-container {
    margin-bottom: 1rem;
}

.description-container {
    font-weight: 600;
    color: #555555;
}
</style>
