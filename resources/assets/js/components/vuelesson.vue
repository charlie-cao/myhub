<style>
.card-divider {
  font-size: 16px;
  color: blue;
}
.my{
  background-color: beige;
}
</style>

<template>
    <div class="row">
        <div class="col-md-8 my">
          <pre>
            第一课
            JS数据类型 number string boolean null undefined
            Object func...
            Symbol(es6)
            {}[]
            数组的操作方法 [es4]
            pop push unshift shift  splice reverse sort 可变异数组
            indexOf slice lastIndexOf concat 返回新数组

            [es5]
            forEach filter map  some every  reduce

            [es6]
            find includes 






          </pre>
            <pre>
            VSCode 快捷键
            复制代码 shift + alt + 上/下
            删除行   shift + command + k
            格式化代码 shift + alt + f
            </pre>
            {{msg001}} {{msg002}}
            <div v-for="a in results">v-for用来遍历一个数组 数组内的数据是{{a.id}}</div>
            <div v-if="show">show</div>
            <input v-on:click="showhide" type="button" value="显示隐藏"/>
            <div v-pre>aaa</div>
        </div>
    </div>
</template>

<script>
//    import { AlertPlugin, ToastPlugin } from 'vux';
export default {
  data: function() {
    return {
      msg001: "msg001是一个数据",
      msg002: "msg002也是一个数据",
      show: true,
      results: []
    };
  },
  methods: {
    showhide() {
      this.show = !this.show;
    }
  },
  mounted() {
    let that = this;
    axios
      .get("api/music/")
      .then(function(response) {
        that.results = response.data;
        console.log("------------");
        console.log(response);
      })
      .catch(function(response) {
        console.log(response);
      });
    console.log("Component mounted.");

    let pm1 = 100;
    console.log(typeof(pm1));

  


    console.log()



  }
};
</script>
