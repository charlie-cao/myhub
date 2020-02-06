<style>

    .card-divider{
        font-size: 16px;
        color:red;
    }

</style>

<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">音乐列表</div>
                    <div class="panel-body">
                        <ul>
                            <div class="columns medium-3" v-for="result in results">
                                <div class="card">
                                    <div class="card-divider">
                                        {{ result.name }}
                                    </div>
                                    <div class="card-section">
                                        <p>{{ result.memo }}.</p>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
//    import { AlertPlugin, ToastPlugin } from 'vux';

    export default {
        data: function (){
            return {
                results: []
            }
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
