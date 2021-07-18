<template>
    <div class="vg-card-outer">
        <img :src="comicObj.image" :alt="comicObj.slug" />
        <h4>{{ comicObj.title }}</h4>
    </div>
</template>

<script>
export default {
    name: "Card",
    props: {
        comicObj: Object
    },
    created() {
        console.log("Oggetto props:");
        console.log(this.comicObj);
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
