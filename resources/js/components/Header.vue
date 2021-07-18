<template>
    <header>
        <div class="vg-container">
            <div class="vg-hamburger-menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="vg-logo">
                <img src="/img/dc-logo.png" alt="dc-logo" />
            </div>
            <div class="vg-links">
                <ul>
                    <li>
                        <a href="#">characters</a>
                    </li>
                    <li>
                        <a href="#">comics</a>
                    </li>
                    <li>
                        <a href="#">movies</a>
                    </li>
                    <li>
                        <a href="#">tv</a>
                    </li>
                    <li>
                        <a href="#">games</a>
                    </li>
                    <li>
                        <a href="#">collectibles</a>
                    </li>
                    <li>
                        <a href="#">videos</a>
                    </li>
                    <li>
                        <a href="#">fans</a>
                    </li>
                    <li>
                        <a href="#">news</a>
                    </li>
                    <li>
                        <a href="#">show</a>
                    </li>
                </ul>
            </div>
            <div class="vg-search">
                <input type="text" placeholder="Search" />
                <!-- <p>Search</p> -->
                <i class="fas fa-search vg-fas-search"></i>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: "Header"
};
</script>

<style lang="scss" scoped>
/* Containers */

header {
    height: 100px;
    .vg-container {
        max-width: 1300px;
        margin: 0 auto;
        padding: 10px;
        padding-bottom: 0;
        height: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
}

.vg-logo-links {
    height: 100%;
    display: flex;
    align-items: center;
    .vg-logo {
        margin-right: 2rem;
    }
}

.vg-logo img {
    height: 80px;
}

.vg-links {
    height: 100%;
    display: none;
}

ul {
    height: 100%;
    text-transform: uppercase;
    li {
        height: 100%;
        display: flex;
        align-items: center;
        margin-right: 1rem;
        &:hover {
            border-bottom: 3px solid #0282f9;
        }
    }
}

.vg-search {
    display: flex;
    position: relative;
    input {
        border: none;
        border-bottom: 2px solid black;
        padding-right: 26px;
        &:focus {
            outline: none;
        }
    }
    .vg-fas-search {
        position: absolute;
        right: 0;
        bottom: 3px;
    }
}

/* Media Queries */

@media all and (min-width: 600px) {
    .vg-hamburger-menu {
        display: none;
    }

    .vg-links {
        display: block;
        ul {
            display: flex;
        }
    }
}

@media all and (max-width: 1130px) {
    .vg-links a {
        font-size: 0.9rem;
    }

    .vg-search input {
        min-width: 100px;
        width: 10vw;
    }

    .vg-logo img {
        height: 60px;
    }
}

@media all and (min-width: 768px) and (max-width: 950px) {
    .vg-links a {
        font-size: 0.67rem;
    }

    .vg-logo img {
        height: 50px;
    }
}

@media all and (min-width: 700px) and (max-width: 768px) {
    .vg-links a {
        font-size: 0.55rem;
    }
    .vg-logo img {
        height: 50px;
    }
}

@media all and (min-width: 600px) and (max-width: 700px) {
    .vg-links a {
        font-size: 0.5rem;
    }
    .vg-logo img {
        height: 50px;
    }
}
</style>
