<template>
    <div class="inner-container">
        <img :src="poster" :alt="`image of ${title}`">
        <div class="title my-3">{{title.toUpperCase()}}</div>
        <div class="author">{{author}}</div>
        <div class="year">{{year}}</div>
    </div>
</template>

<script>
export default {
    name:'Album',
    props:{
        poster:String,
        title:String,
        author:String,
        year:String
    }
}

</script>


<style lang="scss" scoped>
@import "../style/colors.scss";
    .inner-container{
        background: $grey-bg;
        text-align: center;
        color: $grey-text;
        font-size: 18px;
        img{
            width: 100%;
        }
        .title{
            color: $white-text;
            font-weight: bold;
            font-size: 24px;
        }
    }
</style>