<script>
    import Favorite from './Favorite.vue';
    
    export default {
        props: ['attributes'],
        components: { Favorite },
        data(){
            return{
                editing: false,
                body: this.attributes.body
            };
        },

        methods: {
            update(){
                axios.patch('/replies/' + this.attributes.id, {
                    body: this.body
                });

                this.editing = false;
            },

            destroy() {
              axios.delete('/replies/' + this.attributes.id);

              console.log('Something')

              $(this.$el).fadeOut(300, function () {
                flash('Your reply has been deleted.');
                });
            }
        }
    }
</script>
