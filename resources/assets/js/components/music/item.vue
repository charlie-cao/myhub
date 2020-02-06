<template>
    <div>
        <span class="name" v-on:click="change_song">{{ name }}</span>
        <span class="author">{{ author }}</span>
        <span class="toolbar">
                <i class="glyphicon glyphicon-remove red" v-on:click="del"></i>
            </span>
    </div>
</template>
<style>
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
        props: ['name', 'author', 'item_id', 'url'],
        data: function () {
            return {}
        },
        methods: {
            change_song() {
                Hub.$emit('change', this.name, this.url);
            },
            del() {
                Hub.$emit('del', this.name);
            },
        }
    }
</script>