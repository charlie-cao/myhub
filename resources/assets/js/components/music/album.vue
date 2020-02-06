<template>
    <div class="box-body mu-warp">
        <a-player
                ref="aplayer"
                :narrow="narrow"
                :autoplay="autoplay"
                :showlrc="showlrc"
                :mutex="mutex"
                :fold="fold"
                :speed="speed"
                :theme="theme"
                :mode="mode"
                :preload="preload"
                :listmaxheight="listmaxheight"
                :music="music"
                @play="getLyricAsync">
        </a-player>
        <div class="flex-warp">
            <div>item</div>
            <div>item</div>
            <div>item</div>
            <div>item</div>
            <div>item</div>
            <div>item</div>
        </div>
        <div class="grid-warp">
            <div>item</div>
            <div>item</div>
            <div>item</div>
            <div>item</div>
            <div>item</div>
            <div>item</div>
        </div>
        <div class="mu-header">
            <h1 class="title">网易云流行榜</h1>
        </div>
        <scroller :on-refresh="refresh"
                  :on-infinite="infinite"
                  style=" position: relative ">
            <div v-for="(item, index) in items" class="mu-row" :class="{'grey-bg': index % 2 == 0}">
                <ul class="au">
                    <li class="img"><img src="tmp/album/1.jpg"/></li>
                    <li class="title">标题</li>
                    <li class="auth">作者</li>
                    <li class="style">专辑风格</li>
                    <li class="memo">专辑描述</li>
                    <li class="c-time">发布时间</li>
                    <li class="num">歌曲数量</li>
                    <li class="btn">操作按钮</li>
                    <li class="item">{{ item }}</li>
                </ul>
            </div>
        </scroller>
    </div>
</template>
<script>
import { mapState } from "vuex";
/**
 * 相册组件
 */
export default {
  data() {
    return {
      playerOptions: {
        // videojs options
        height: "360",
        muted: true,
        language: "en",
        playbackRates: [0.7, 1.0, 1.5, 2.0],
        sources: [
          {
            type: "video/mp4",
            src:
              "https://cdn.theguardian.tv/webM/2015/07/20/150716YesMen_synd_768k_vp8.webm"
          }
        ],
        poster: "/static/images/author.jpg"
      },
      aplayer: null,
      narrow: false,
      autoplay: true,
      showlrc: true,
      mutex: false,
      fold: true,
      speed: 1,
      theme: "#ad7a86",
      mode: "circulation",
      preload: "metadata",
      listmaxheight: "200px",
      music: [
        {
          id: 0,
          title: "阳光",
          author: "周杰伦",
          url: "http://localhost:3000/musics/gao_bai_qi_qiu.mp3",
          pic: "./tmp/gbqq.jpg",
          lrc: "loading"
        },
        {
          id: 1,
          title: "阳光2",
          author: "周杰伦2",
          url: "http://localhost:3000/musics/gao_bai_qi_qiu.mp3",
          pic: "./tmp/gbqq.jpg",
          lrc: "loading"
        }
      ],
      items: [],
      results: ""
    };
  },
  computed: mapState([
    // 映射 this.count 为 store.state.count
    "count",
    "test1",
    "test2"
  ]),
  mounted: function() {
    this.aplayer = this.$refs.aplayer;
    console.log(this.$store.getters.doneTodos);

    for (var i = 1; i <= 20; i++) {
      this.items.push(i + " - keep walking, be 2 with you.");
    }
    this.top = 1;
    this.bottom = 20;

    var that = this;

    axios
      .get("/api/music/album")
      .then(function(response) {
        that.results = response.data;
        console.log(response.data);
      })
      .catch(function(response) {
        console.log(response);
      });
  },
  methods: {
    getLyricAsync: function() {
      setTimeout(
        () =>
          (this.music[0].lrc =
            "[ti:告白气球] \n" +
            "[ar:周杰伦] \n" +
            "[al:周杰伦的床边故事] \n" +
            "[offset:0] \n" +
            "\n" +
            "[00:00.98]告白气球 \n" +
            "[00:04.19]词：方文山 \n" +
            "[00:06.29]曲：周杰伦 \n" +
            "[00:07.78]演唱：周杰伦 \n" +
            "[00:17.78] \n" +
            "[00:23.65]塞纳河畔 左岸的咖啡 \n" +
            "[00:26.45]我手一杯 品尝你的美 \n" +
            "[00:28.94] \n" +
            "[00:29.49]留下唇印的嘴 \n" +
            "[00:31.89] \n" +
            "[00:34.42]花店玫瑰 名字写错谁 \n" +
            "[00:37.18]告白气球 风吹到对街 \n" +
            "[00:40.18]微笑在天上飞 \n" +
            "[00:42.59] \n" +
            "[00:44.27]你说你有点难追 想让我知难而退 \n" +
            "[00:49.40]礼物不需挑最贵 只要香榭的落叶 \n" +
            "[00:54.67]喔 营造浪漫的约会 不害怕搞砸一切 \n" +
            "[01:00.01]拥有你就拥有 全世界 \n" +
            "[01:04.15] \n" +
            "[01:05.13]亲爱的 爱上你 从那天起 \n" +
            "[01:11.48]甜蜜的很轻易 \n" +
            "[01:14.59] \n" +
            "[01:15.70]亲爱的 别任性 你的眼睛 \n" +
            "[01:21.36] \n" +
            "[01:22.08]在说我愿意 \n" +
            "[01:25.42] \n" +
            "[01:49.14]塞纳河畔 左岸的咖啡 \n" +
            "[01:51.72]我手一杯 品尝你的美 \n" +
            "[01:54.20] \n" +
            "[01:54.87]留下唇印的嘴 \n" +
            "[01:57.31] \n" +
            "[01:59.81]花店玫瑰 名字写错谁 \n" +
            "[02:02.39]告白气球 风吹到对街 \n" +
            "[02:04.70] \n" +
            "[02:05.44]微笑在天上飞 \n" +
            "[02:07.99] \n" +
            "[02:09.61]你说你有点难追 想让我知难而退 \n" +
            "[02:14.78]礼物不需挑最贵 只要香榭的落叶 \n" +
            "[02:19.65] \n" +
            "[02:20.18]喔 营造浪漫的约会 不害怕搞砸一切 \n" +
            "[02:25.40]拥有你就拥有 全世界 \n" +
            "[02:29.42] \n" +
            "[02:30.46]亲爱的 爱上你 从那天起 \n" +
            "[02:36.87]甜蜜的很轻易 \n" +
            "[02:39.98] \n" +
            "[02:41.01]亲爱的 别任性 你的眼睛 \n" +
            "[02:46.74] \n" +
            "[02:47.33]在说我愿意 \n" +
            "[02:51.16] \n" +
            "[02:51.85]亲爱的 爱上你 恋爱日记 \n" +
            "[02:57.46] \n" +
            "[02:58.06]飘香水的回忆 \n" +
            "[03:01.49] \n" +
            "[03:02.42]一整瓶 的梦境 全都有你 \n" +
            "[03:08.11] \n" +
            "[03:08.82]搅拌在一起 \n" +
            "[03:12.29] \n" +
            "[03:13.16]亲爱的别任性 你的眼睛 \n" +
            "[03:20.01] \n" +
            "[03:35]在说我愿意"),
        5000
      );
    },
    refresh: function(done) {
      var self = this;
      setTimeout(function() {
        var start = self.top - 1;
        for (var i = start; i > start - 10; i--) {
          self.items.splice(0, 0, i + " - keep walking, be 2 with you.");
        }
        self.top = self.top - 10;
        done();
      }, 1500);
    },

    infinite: function(done) {
      var self = this;
      setTimeout(function() {
        var start = self.bottom + 1;
        for (var i = start; i < start + 10; i++) {
          self.items.push(i + " - keep walking, be 2 with you.");
        }
        self.bottom = self.bottom + 10;
        done();
      }, 1500);
    }
  }
};
</script>
<style lang="less" scoped>
.flex-warp {
  display: flex;
  background-color: #3f729b;
}
.flex-warp > div {
  color: #fff;
  background-color: tan;
}
.grid-warp {
  display: grid;
  grid-template-rows: 200px 100px;
  grid-template-columns: repeat(4, 100px);
  background-color: #2e6da4;
}
.grid-warp > div {
  color: #fff;
  border: 1px solid #000;
}
@base: rgba(178, 186, 194, 0.15);

* {
  box-sizing: border-box;
}
.au {
  list-style: none;
  padding: 0px;
  font-size: 14px;
}
.au > .img {
  float: left;
  margin-right: 8px;
}

.mu-warp {
  display: block;
  height: 450px;
  padding: 0px;
  //        border: 1px solid @base;
}

.mu-row {
  /*width: 100%;*/
  height: 160px;
  font-size: 16px;
  padding: 4px;
  color: #444;
  background-color: #fff;
}

.grey-bg {
  background-color: #eee;
}

.mu-header {
  position: relative;
  top: 0;
  left: 0;
  height: 44px;
  width: 100%;
  border-bottom: 1px solid rgba(178, 186, 194, 0.15);
  /*box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);*/
  background-color: #fff;
  z-index: 1000;
  color: #666;
}

.mu-header > .title {
  font-size: 16px;
  line-height: 44px;
  text-align: center;
  margin: 0 auto;
}
.aplayer {
  margin: 0px;
}
</style>