<template>
    <div class="index d-flex flex-column">
        <div class="d-flex banner">
                    <img :src="atualImgUrl" alt="" />
        </div>
        <div
            class="index-text d-flex flex-column p-5 justify-content-evenly align-items-center"
        >
            <h1>Jóias finas como você</h1>
            <a class="btn" href="/categories">Veja Tudo</a>
            <h4>Seja a primeira a ver todas as novidade exclusivas.</h4>
        </div>
    </div>
</template>
<script>
export default {
    name: "BannerComponent",
    data() {
        return {
            bannerImgs: [
                "/images/banner1.jpeg",
                "/images/banner2.jpeg",
                "/images/banner3.jpeg",
            ],
            atualImgUrl: "/images/banner1.jpeg",
            atualImgIndex: 1,
        };
    },
    methods: {
        carrouselStart() {
            setInterval(this.carrouselChange, 4000);
        },
        carrouselChange() {
            if (this.atualImgIndex >= this.bannerImgs.length) {
                this.atualImgIndex = 1;
                return (this.atualImgUrl =
                    this.bannerImgs[this.atualImgIndex - 1]);
            }
            this.atualImgIndex += 1;
            return (this.atualImgUrl = this.bannerImgs[this.atualImgIndex - 1]);
        },
    },
    mounted() {
        this.carrouselStart();
    },
};
</script>
<style scoped>
.banner {
    height: 35vh;
    position: relative;
}
.banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
}
.index {
    height: calc(100vh - 100px);
}

.index-text {
    height: calc(100% - 35vh);
}
.index-text h1 {
    padding: 0 35px;
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    text-align: center;
    color: #645e56;
}
.index-text h4 {
    font-family: "Roboto", sans-serif;
    font-weight: 100;
    text-align: center;
    color: #645e56;
}
.btn {
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    background-color: #645e56;
    width: 180px;
    border: none;
    color: #fff;
}
.btn:hover {
    background-color: #433e37;
    border: none;
}
</style>
