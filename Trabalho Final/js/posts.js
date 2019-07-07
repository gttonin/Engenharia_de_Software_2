

Vue.component('blog-post', {
    props: ['post'],

    computed: {
        linkPostagem() {
            return 'postagem.php?id=' + this.post.id
        },

        linkAutor() {
            return 'perfil.php?id=' + this.post.idAutor
        }
    },
})

new Vue({
    el: '#posts',

    data: {
        busca: '',
        categoriaSelecionada: '',
        pagina: 1,
        porPagina: 4,
        posts: []
    },

    computed: {
        categorias() {
            return this.posts.map(post => post.categoria).filter((value, index, self) => {
                return self.indexOf(value) === index;
            });
        },

        totalPaginas() {
            return Math.ceil(this.postsFiltrados.length / this.porPagina);
        },

        postsFiltrados() {

            return this.posts.filter(post => {
                if (!this.categoriaSelecionada) return true;
                return post.categoria ===  this.categoriaSelecionada;
            }).filter(post => 
                post.tituloPostagem.toLowerCase().indexOf(this.busca.toLowerCase()) > -1 || 
                post.autor.toLowerCase().indexOf(this.busca.toLowerCase()) > -1
            );
        },

        postsNaPagina() {
            const start = (this.pagina - 1) * this.porPagina;

            return this.postsFiltrados.slice(start, start + this.porPagina);

        }
    },

    mounted() {
        axios.get('http://localhost:8000/api/lerArtigosResumidos.php')
            .then(res => {
                this.posts = res.data;
            })
    },

    methods: {

        selecionarCategoria(categoria) {
            if (categoria === this.categoriaSelecionada) {
                this.categoriaSelecionada = '';
                return;
            }
    
            this.categoriaSelecionada = categoria;
        },

        paginaAnterior() {
            if (this.pagina === 1) return;

            this.pagina--;
        },

        paginaProxima() {
            if (this.pagina === this.totalPaginas) return;


            this.pagina++;
        }
    },

    watch: {
        categoriaSelecionada() {
            this.pagina = 1;
        },

        busca() {
            this.pagina = 1;
        }
    }

})
