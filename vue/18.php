<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>

    <div id="app">
        <h2>Counter {{counter}} \ {{counter2}}</h2>
        <h3>Result: {{result()}}</h3>
        <h3>Computed Result: {{computedResult}}</h3>
        <button @click="add">Add</button>
        <button @click="sub">Sub</button>
        <button @click="counter2++">Add counter 2</button>
    </div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script>
    new Vue({
        el:'#app',
        data: {
            counter : 0,
            counter2 : 0,
        },
        methods:{
          add :function () {
              this.counter++;
          },
          sub :function () {
              this.counter--;
          },
          result :function () {
              console.log('Result was called');
              return this.counter>3 ? 'More than 3' :'Less than 3';
          }
        },
        computed:{
            computedResult :function () {
                console.log('computedResult was called');
                return this.counter>3 ? 'More than 3' :'Less than 3';
            }
        },
        watch:{
            counter: function () {
                console.log('From watch object '+ this.counter);
            }
        }
    })
</script>
</body>
</html>