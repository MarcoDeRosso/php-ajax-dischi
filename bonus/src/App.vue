<template>
  <div id="app">
    <Header :genreList="genreList" :artistList="artistList" @option="searchAuthor" @search="searchAlbum"/>
    <Main class="position-relative" :albums="inputSearch"/>
  </div>
</template>

<script>
import axios from 'axios';
import Header from './components/Header.vue'
import Main from './components/Main.vue'


export default {
  name: 'App',
  components: {
    Header,
    Main
  },
  data(){
    return{
      albums:[],
      inputSearch: [],
      genreList:[],
      artistList:[]
    }
  },
  created(){
    axios.get('http://localhost/php-ajax-dischi/backend/api.php').then((result)=>{
      this.albums=result.data.response;
      this.searchAlbum("");
      this.searchAuthor("");
      this.genreArray();
      this.artistArray();
    })
  },
   methods: {
    searchAlbum(searchString) {
      this.inputSearch = this.albums.filter((element)=>{
        return element.genre.includes(searchString);
      })
    },
    genreArray(){
      this.albums.forEach((element)=>{
        if(!this.genreList.includes(element.genre)){
          this.genreList.push(element.genre)
        }
      })
    },
    searchAuthor(searchArtist) {
      this.inputSearch = this.albums.filter((element)=>{
        return element.author.includes(searchArtist);
      })
    },
    artistArray(){
      this.albums.forEach((element)=>{
        if(!this.artistList.includes(element.author)){
          this.artistList.push(element.author)
        }
      })
    },
  }
}
</script>

<style lang="scss">
@import "./style/app.scss"
</style>