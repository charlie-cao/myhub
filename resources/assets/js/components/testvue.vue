<style>
.card-divider {
  font-size: 16px;
  color: red;
}
.active {
  color: blue;
}
</style>

<template>
    <div>
        Hello Vue
        <hr/>
        <span>Message: {{ msg }} {{reversedMessage}}</span>
        <span v-once>这个将不会改变: {{ msg }}</span>
        <hr/>
        <p>Using mustaches: {{ rawHtml }}</p>
        <p>Using v-html directive: <span v-html="rawHtml"></span></p>
        <button v-bind:disabled="isButtonDisabled">Button</button>
        <p v-if="seen">现在你看到我了</p>
        <a v-bind:href="url">url</a>
        <a :href="url">...</a>
        <a v-on:click="doSomething">doSomething</a>
        <a @click="doSomething">...</a>
        <form v-on:submit.prevent="onSubmit">修饰符</form>

        <div id="demo">{{ fullName }}</div>
        <div v-bind:class="{ active: isActive }">444433333isActive</div>
        <div v-bind:style="{ color: activeColor, fontSize: fontSize + 'px' }">v-bind:style</div>
        <div v-bind:style="styleObject">v-bind:style="styleObject"</div>

        <h1 v-if="ok">Yes</h1>
        <h1 v-if="ok">Yes</h1>
        <h1 v-else>No</h1>
        <template v-if="ok">
        <h1>Title</h1>
        <p>Paragraph 1</p>
        <p>Paragraph 2</p>
        </template>
        <ul id="example-1">
        <li v-for="item in items">
            {{ item.message }}
        </li>
        </ul>
        <ul id="example-2">
        <li v-for="(item, index) in items">
            {{ parentMessage }} - {{ index }} - {{ item.message }}
        </li>
        </ul>
        <ul id="v-for-object" class="demo">
  <li v-for="value in object">
    {{ value }}
  </li>
</ul>
    </div>
</template>


<script>
//    import { AlertPlugin, ToastPlugin } from 'vux';

export default {
  data: function() {
    return {
      ok: true,
      url: "baidu.com",
      msg: "文本插值",
      rawHtml: "<b>粗体字</b>",
      isButtonDisabled: false,
      seen: false,
      firstName: "Foo",
      lastName: "Bar",
      fullName: "Foo Bar",
      isActive: true,
      activeColor: "red",
      fontSize: 30,
      styleObject: {
        color: "red",
        fontSize: "13px"
      },
      results: [],
      parentMessage: "Parent",
      items: [{ message: "Foo" }, { message: "Bar" }],
      object: {
        firstName: "John",
        lastName: "Doe",
        age: 30
      }
    };
  },
  computed: {
    // 计算属性的 getter
    reversedMessage: function() {
      // `this` 指向 vm 实例
      return this.msg;
    }
  },
  watch: {
    firstName: function(val) {
      this.fullName = val + " " + this.lastName;
    },
    lastName: function(val) {
      this.fullName = this.firstName + " " + val;
    }
  },
  mounted() {
    let that = this;
    // axios.get('/api/music/')
    //     .then(function (response) {
    //         that.results = response.data;
    //         console.log(response);
    //     })
    //     .catch(function (response) {
    //         console.log(response);
    //     });

    console.log("Component mounted.");
  },
  methods: {
    doSomething: function() {}
  }
};
</script>
