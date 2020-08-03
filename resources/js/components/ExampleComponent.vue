<template>
    <div class="container">
        <div ref="imageUpload" class="row justify-content-center mb-3">
            <div class="col-12 bg-dark text-white rounded py-3 my-2 text-center">Drop Image(s) Here</div>
        </div>
    </div>
</template>

<script>

    import Dropzone from 'dropzone';

    export default {
        data: function (){
            return {
                dropzone: null
            }
        },

        mounted() {
            this.dropzone = new Dropzone(this.$refs.imageUpload,{
                url: '/api/images'
            });
        }
    }
</script>
