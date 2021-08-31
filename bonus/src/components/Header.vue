<template>
    <header class="d-flex justify-content-between align-items-center py-3">
        <img src="../assets/spotify-logo.png" alt="spotify-logo">
        <div>
            <label class="mx-2" for="genre">Cerca per genere:</label>
            <select v-model="searchString" name="genre" @change="$emit('search', searchString)" class="me-2">
                <option value="">All</option>
                <option v-for="(genre,index) in genreList" :key="index" :value="genre">{{genre}}</option>
            </select>
            <label class="mx-2" for="artist">Cerca per artista:</label>
            <select v-model="searchArtist" name="name" @change="$emit('option', searchArtist)" class="me-2">
                <option value="">All</option>
                <option v-for="(artist,index) in artistList" :key="index" :value="artist">{{artist}}</option>
            </select>
        </div>
    </header>
</template>

<script>
export default {
    name:'Header',
        data() {
        return {
            searchString: '',
            searchArtist:''
        }
    },
        props:{
        genreList:Array,
        artistList:Array
    }
}
</script>

<style lang="scss" scoped>
@import "../style/colors.scss";

    header{
        background: $grey-bg;
        margin-bottom: 48px;
        img{
            width: 75px;
        }
        label{
            color: $white-text;
            font-weight: bold;
        }
    }
</style>