<template>
    <div>
        <img :src="comicObj.image" :alt="comicObj.slug" />
        <h2>{{ comicObj.title }}</h2>
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

<style lang="scss" scoped></style>
