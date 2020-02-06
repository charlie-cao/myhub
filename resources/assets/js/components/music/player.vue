<template>

    <div>
        <div class="mp3">
            <div class="img col-sm-4" :style="{backgroundImage: 'url(' + img + ')' }">
                {{ imgurl }}
                {{ timeNow }} {{ timeDuration }}
            </div>

            <audio ref="player" src="musics/gao_bai_qi_qiu.mp3" autoplay></audio>
            <div class="ctrl col-sm-8">
                <div>{{name}}</div>
                <div class="progress">
                    <div ref="pro" class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0"
                         aria-valuemax="100" style="width: 0%;">
                    </div>
                </div>
                <div class="text-center">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-fast-backward"></i>
                        </button>
                        <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-backward"></i>
                        </button>
                        <button type="button" class="btn btn-default" v-on:click="enter"><i
                                class="glyphicon glyphicon-play"></i></button>
                        <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-forward"></i>
                        </button>
                        <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-fast-forward"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="song-word">
            <div class="red-line"></div>
            <div class="w">塞纳河畔
                <br/>左岸的咖啡
                <br/>我手一杯 品尝你的美
                <br/>留下唇印的嘴
                <br/>Wu~

                <br/>花店玫瑰 名字写错谁
                <br/>告白气球 风吹到对街
                <br/>微笑在天上飞

                <br/>你说你有点难追 想让我知难而退
                <br/>礼物不需挑最贵 只要香榭的落叶
                <br/>喔~ 营造浪漫的约会 不害怕搞砸一切
                <br/>拥有你就拥有 全世界

                <br/>亲爱的 爱上你 从那天起
                <br/>甜蜜的很轻易
                <br/>亲爱的 别任性 你的眼睛
                <br/>在说我愿意

                <br/>塞纳河畔 左岸的咖啡
                <br/>我手一杯 品尝你的美
                <br/>留下唇印的嘴
                <br/>Wu~

                <br/>花店玫瑰 名字写错谁
                <br/>告白气球 风吹到对街
                <br/>微笑在天上飞

                <br/>你说你有点难追 想让我知难而退
                <br/>礼物不需挑最贵 只要香榭的落叶
                <br/>喔~ 营造浪漫的约会 不害怕搞砸一切
                <br/>拥有你就拥有 全世界

                <br/>亲爱的 爱上你 从那天起
                <br/>甜蜜的很轻易
                <br/>亲爱的 别任性 你的眼睛
                <br/>在说我愿意

                <br/>亲爱的 爱上你 恋爱日记
                <br/>飘香水的回忆
                <br/>一整瓶 的梦境 全都有你
                <br/>搅拌在一起
                <br/>亲爱的别任性 你的眼睛
                <br/>在说我愿意
            </div>
        </div>
    </div>

</template>


<style lang="css" scoped>
    .mp3 {
        display: -webkit-box;
        padding: 8px;
        border: 1px solid #eee;
        border-radius: 4px;
    }

    .progress {
        margin: 8px 0px 8px 0px;
        height: 4px;
    }

    .img {
        /*background:url('~@/images/bg.jpg') center center no-repeat;*/
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        height: 80px;
        width: 80px;
        color: #fff;
        border-radius: 80px;
        animation: 5s linear infinite myrotate;
        -webkit-animation: 5s linear infinite myrotate;
    }

    @keyframes myrotate {
        form {
            transform: rotateZ(0deg);
        }
        to {
            transform: rotateZ(360deg);
        }
    }

    @-webkit-keyframes myrotate { /* Safari and Chrome */
        form {
            transform: rotateZ(0deg);
        }
        to {
            transform: rotateZ(360deg);
        }
    }

    .red-line {
        height: 1px;
        background-color: red;
        margin-top: 20px;
        opacity: 0.1;
    }

    .w {
        -webkit-animation: 200s linear infinite myrotate2;
    }

    @-webkit-keyframes myrotate2 {
        form {
            transform: translate(0, 0);
        }
        to {
            transform: translate(0, -900px);
        }
    }

    .song-word {
        top: 8px;
        position: relative;
        display: block;
        margin-top: 8px;
        padding: 10px;
        overflow-y: hidden;
        clear: both;
        background-color: #f9f9f9;
        height: 500px;
        text-align: center;
        border-radius: 4px;
    }
</style>
<script>
    //获得一个音乐资源组 检查并播放资源
    export default {
        data() {
            return {
                img: "./tmp/gbqq.jpg",
                imgurl: "urlurlurl",
                auth: "xxxx",
                mp3url: "xxxx",
                name: "告白气球",
                mp3time: "ddddd",
                id: "ddddd",
                timeDuration: null,
                timeNow: null,
                pause: 0
            }
        },
        created() {
            Hub.$on('change', (name, url) => { //Hub接收事件
                //接受list-item的改变歌曲事件
                this.name = name;
                console.log(url);
                console.log(this.$refs.player.src = url);
//                this.$player.src = "./"+url;
            });
        },
        methods: {
            play() {

            },
            stop() {

            },
            next() {

            },
            change() {

            },
            up() {

            },
            enter() {
                const self = this;
                if (self.pause == 0) {
                    self.$refs.player.pause();
                    self.pause = 1;
                } else {
                    self.$refs.player.play();
                    self.pause = 0;
                }

//                alert(this.imgurl);
            },
            addEventListeners: function () {
                const self = this;
                self.$refs.player.addEventListener('timeupdate', self._currentTime),
                    self.$refs.player.addEventListener('canplay', self._durationTime)
            },
            removeEventListeners: function () {
                const self = this;
                self.$refs.player.removeEventListener('timeupdate', self._currentTime)
                self.$refs.player.removeEventListener('canplay', self._durationTime)
            },
            _currentTime: function () {
                const self = this;
                self.timeNow = parseInt(self.$refs.player.currentTime)
                self.$refs.pro.style.width = parseInt((self.timeNow / self.timeDuration) * 100) + "%";

            },
            _durationTime: function () {
                const self = this;
                self.timeDuration = parseInt(self.$refs.player.duration)
            }
        },
        computed: {
            upper() {
                return this.imgurl.toUpperCase();
            }
        },
        mounted() {
            this.addEventListeners();

            /*加载后调用*/
//            axios.get('/api/music/')
//                .then(function (response) {
////                    that.results = response.data;
//                    console.log(response);
//                })
//                .catch(function (response) {
//                    console.log(response);
//                });
        }
    }


</script>