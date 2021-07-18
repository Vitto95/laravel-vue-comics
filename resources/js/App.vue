<template>
    <div>
        <Header />
        <Jumbotron />
        <Footer />
    </div>
</template>

<script>
import Header from "./components/Header.vue";
import Jumbotron from "./components/Jumbotron.vue";
import Footer from "./components/Footer.vue";

export default {
    name: "App",
    components: {
        Header,
        Jumbotron,
        Footer
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

.vg-container {
    max-width: 1300px;
    margin: 0 auto;
    padding: 10px;
    height: 100%;
}
</style>
