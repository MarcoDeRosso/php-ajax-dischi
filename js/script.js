Vue.config.devtools = true; 

new Vue(    
    {
        el: '#app',
        data: {
            discs: [],
            filteredDiscs:[],
            genreList:[],
            checkedGenre:''
        },
        created() {
            axios.get('http://localhost/php-ajax-dischi/backend/api.php')
                .then((response) => {
                    this.discs = response.data;
            })   
        },
        methods:{
            genreArray: function(){
                this.discs.forEach((element)=>{
                  if(!this.genreList.includes(element.genre)){
                    this.genreList.push(element.genre)
                  }
                })
              },
            getApi(){
                axios.get('http://localhost/php-ajax-dischi/backend/api-filtered.php'+'?genere='+this.checkedGenre)
                .then((response) => {
                    this.filteredDiscs = response.data;
            }) 
            }
        }

    }
);


