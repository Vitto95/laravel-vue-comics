<template>
    <div>
        <Header />
        <Jumbotron />
    </div>
</template>

<script>
import Header from "./components/Header.vue";
import Jumbotron from "./components/Jumbotron.vue";

export default {
    name: "App",
    components: {
        Header,
        Jumbotron
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
