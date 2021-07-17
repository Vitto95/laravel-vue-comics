<template>
    <div>
        <Header />
    </div>
</template>

<script>
import Header from "./components/Header.vue";

export default {
    name: "App",
    components: {
        Header
    }
};
</script>

<style lang="scss">
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Montserrat", sans-serif;
}

ul {
    list-style: none;
}

a {
    text-decoration: none;
    color: black;
}
</style>
