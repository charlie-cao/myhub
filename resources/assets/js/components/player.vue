<template>
    <div class="col-sm-6">
        <player></player>
    </div>
    <div class="col-sm-6">
        <list></list>
    </div>
</template>
<script>
    Vue.component('item', require('./components/music/item.vue'));
    Vue.component('list', require('./components/music/list.vue'));
    Vue.component('player', require('./components/music/player.vue'));
</script>
<style lang="css">
</style>