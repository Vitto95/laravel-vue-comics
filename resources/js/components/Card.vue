<template>
    <div class="vg-card-outer">
        <router-link :to="{ name: 'detail', params: { comicSlug } }">
            <img :src="comicObj.image" :alt="comicObj.slug" />
        </router-link>
        <h4>{{ comicObj.title }}</h4>
    </div>
</template>

<script>
export default {
    name: "Card",
    props: {
        comicObj: Object
    },
    data() {
        return {
            comicSlug: this.comicObj.slug
        };
    },
    created() {
        console.log("Oggetto props:");
        console.log(this.comicObj);
        console.log("Slug Comic");
        console.log(this.comicSlug);
    }
};
</script>

<style lang="scss" scoped>
.vg-card-outer h4 {
    text-transform: uppercase;
    color: white;
    max-width: 160px;
    margin-bottom: 2rem;
}
</style>
