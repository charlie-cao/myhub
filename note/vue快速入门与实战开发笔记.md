## 第一天

## 第二天



## 第三天

##### 第二天复习
-  v-model(如果checkbox,select多选是数组，提供一个value属性)
(radio checkbox分组靠的是v-model),
check selected 不存在
- 修饰符 .number .lazy
- 按键修饰符 .enter .ctrl .keyCode
##### vue事件
- 事件 
  - @事件.stop 可以阻止事件冒泡 阻止事件传播
  - @事件.capture 可以进行事件捕获
  - @事件.prevent 阻止默认行为
  - @事件.once 只触发一次
  - @事件.self 只有碰到自己的时候才触发
  - 不错，挺好的。
  ```
   <div @click="parent">
        <div @click="child">
            <div @click="grandson"></div>
        </div>
   </div>
  ```
  ```
    stopPropagation,cancelBubble = true;
    preventDefault,returnValue=false;
    jquery once
    e.srcElement&&e.tage 判断事件源绑定事件
  ```
##### filters 
实例上可用的过滤器
```
{{ '123' | my(1,2,3)}}

new Vue({
    el:'xxxx'
    filters:{
        my(data,p1,p2,p3){
          return 'jw'+data;
        }
    }
})
//全局过滤器 要放在声名前
Vue.filter('my',(data)=>{
    return 'jw'+data;
})

```

##### computed 
计算属性 不是方法
- 区别：属性会缓存，方法不会有缓存 computed 会根据依赖的属性进行缓存 可以提高性能。
- 两部分组成有get 和 set（不能只写set）一般情况下 通过js赋值影响其他人或者表单元素设置值时候会调用set方法
```
<input type="checkbox" v-model="checkAll"> 
<br>
<input type="checkbox" v-for="product in products" v-model="product.isSelected" > 

let vm = new Vue({
  el:'#app',
  computed:{
    checkAll:{
      get(){
      //返回什么结果就会赋予checkall属性
        return this.products.every(item=>item.isSelected)
      },
      set(val){
      //val 是给checkAll 赋值的时候传递过来的
        this.products.forEach(item=>item.isSelected = val);
      }
    }
  },
  data:{
    products:[{isSelected:true},{isSelected:true}]
  }

})

```
- 实时校验 用计算属性
```
<input type="text" v-model="a"> {{msg}}

let vm = new Vue({
  el:"#app",
  computed:{
    a:{
      get(){
        
      },
      set(val){
        this.msg = val;
      }
    }
  },
  data:{
    msg:''
  }
})



```

