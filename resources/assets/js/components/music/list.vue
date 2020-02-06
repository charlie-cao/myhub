<template>
    <ol class="songs">
        <li class="song" v-for="result in results">
            <item :name=result.name :author=result.author :item_id=result.id :url=result.url></item>
        </li>
    </ol>
</template>
<style scoped>
    .title {
        background-color: #2e6da4;
        color: #fff;
    }

    .songs {
        list-style: none;
        padding: 0px;
    }

    .song {
        color: #000;
        padding: 4px;
        border-bottom: 1px solid #ccc;
    }

    .song:hover {
        background-color: #eee;
        color: #000;
        cursor: pointer;
    }

    .toolbar {
        position: absolute;
        right: 16px;
        color: red;
    }
</style>
<script>
    export default {
        data: function () {
            return {
                results: []
            }
        },
        methods: {
//            del() {
//                Hub.$emit('change','1');
////                alert(this.memo);
//            },
        },
        mounted() {
            let that = this;
            axios.get('/api/music/')
                .then(function (response) {
                    that.results = response.data;
                    console.log(response);
                })
                .catch(function (response) {
                    console.log(response);
                });

            console.log('Component mounted.')
        }
    }
</script>