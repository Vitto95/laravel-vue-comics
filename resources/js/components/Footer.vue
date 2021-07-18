<template>
    <footer>
        <div class="vg-wrapper-top">
            <div class="vg-container">
                <div class="vg-wrapper-lists">
                    <div class="vg-container-lists">
                        <ul>
                            <li>
                                <a href="#" class="vg-title-list">
                                    DC COMICS
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Characters
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Movies
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    TV
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Games
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Videos
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    News
                                </a>
                            </li>
                            <li>
                                <a href="#" class="vg-title-list">dc shop</a>
                            </li>
                            <li>
                                <a href="#">SHOP DC</a>
                            </li>
                            <li>
                                <a href="#">SHOP DC Collectibles</a>
                            </li>
                        </ul>
                    </div>
                    <div class="vg-container-lists">
                        <ul>
                            <li>
                                <a href="#" class="vg-title-list">dc</a>
                            </li>
                            <li>
                                <a href="#">Terms Of Use</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy (New)</a>
                            </li>
                            <li>
                                <a href="#">Ad Choices</a>
                            </li>
                            <li>
                                <a href="#">Advertising</a>
                            </li>
                            <li>
                                <a href="#">Jobs</a>
                            </li>
                            <li>
                                <a href="#">Subscriptions</a>
                            </li>
                            <li>
                                <a href="#">CPSC Certificates</a>
                            </li>
                            <li>
                                <a href="#">Ratings</a>
                            </li>
                            <li>
                                <a href="#">Shop Help</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="vg-container-lists">
                        <ul>
                            <li>
                                <a href="#" class="vg-title-list">sites</a>
                            </li>
                            <li>
                                <a href="#">DC</a>
                            </li>
                            <li>
                                <a href="#">DC UNIVERSE INFINITE</a>
                            </li>
                            <li>
                                <a href="#">DC Kids</a>
                            </li>
                            <li>
                                <a href="#">DC Shop</a>
                            </li>
                            <li>
                                <a href="#">MAD Magazine</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="vg-logo-bg-right"></div>
                <div class="vg-copyright-cookies">
                    <p>
                        All Site Content TM and © 2020 DC Entertainment, unless
                        otherwise noted here. All rights reserved.
                    </p>
                    <div>
                        <a href="#">Cookies Settings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="vg-wrapper-bottom">
            <div class="vg-container">
                <div class="left-content">
                    <button>SIGN UP NOW!</button>
                </div>
                <div class="right-content">
                    <div>
                        <a href="#" id="follow-us">FOLLOW US</a>
                    </div>
                    <div>
                        <a href="#">
                            <img
                                src="/img/footer-facebook.png"
                                alt="facebook-logo"
                            />
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img
                                src="/img/footer-twitter.png"
                                alt="twitter-logo"
                            />
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img
                                src="/img/footer-youtube.png"
                                alt="youtube-logo"
                            />
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img
                                src="/img/footer-pinterest.png"
                                alt="pinterest-logo"
                            />
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img
                                src="/img/footer-periscope.png"
                                alt="periscope-logo"
                            />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: "Footer"
};
</script>

<style lang="scss" scoped>
.vg-wrapper-top {
    padding: 4em 0;
    background-image: url("/img/footer-bg.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    color: white;
    /* background-image: url("/img/dc-logo-bg.png"); */
    .vg-container {
        display: flex;
        flex-wrap: wrap;
    }
}

.vg-wrapper-lists {
    display: flex;
    width: 63%;
    height: 350px;
}

.vg-logo-bg-right {
    min-width: 350px;
    width: 37%;
    height: 350px;
    background-image: url("/img/dc-logo-bg.png");
    background-size: 100%;
    background-position: center;
    background-repeat: no-repeat;
}

.vg-container-lists {
    margin-right: 5.5rem;
    margin-bottom: 2.5rem;
}

.vg-container-lists ul li {
    margin-bottom: 0.5rem;
}

.vg-container-lists ul li a {
    color: white;
    opacity: 0.5;
    &:hover {
        opacity: 1;
    }
}

.vg-container-lists ul li .vg-title-list {
    display: inline-block;
    margin-bottom: 0.8rem;
    text-transform: uppercase;
    font-weight: 800;
    opacity: 1;
}

.vg-copyright-cookies {
    a,
    p {
        opacity: 0.5;
        color: white;
        &:hover {
            opacity: 1;
        }
    }
}

/* wrapper bottom */

.vg-wrapper-bottom {
    min-height: 100px;
    background-color: #303030;
    .vg-container {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: repeat(2, 125px);
        .left-content,
        .right-content {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }
}

.left-content button {
    cursor: pointer;
    font-size: 1.3rem;
    color: white;
    font-weight: 600;
    background-color: #303030;
    border: 2px solid #0282f9;
    padding: 15px 15px;
}

.right-content div {
    margin-right: 0.8rem;
}

.right-content #follow-us {
    color: #0282f9;
    font-weight: 700;
}

@media all and (min-width: 600px) {
    .vg-wrapper-bottom .vg-container {
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: 250px;
        .left-content {
            justify-content: flex-start;
        }
        .right-content {
            justify-content: flex-end;
        }
    }
}
</style>
