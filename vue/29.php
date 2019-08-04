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
        <my-counter v-for="c in 2"></my-counter>
    </div>
    <hr>
    <div id="app2">
        <my-counter></my-counter>

    </div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script>

    var component = {
        template: `
        <div style="border: 1px solid black;padding: 10px">
             <h1>Counter: {{ counter }}</h1>
             <button @click="add">Add to counter</button>
        </div>
        `,
        data: function () {
            return {
                counter: 0
            }
        },
        methods:{
            add:function () {
                this.counter++;
            }
        }
    };
    new Vue({
        el:'#app',
        components:{
          'my-counter':component
        },
    });
    new Vue({
        el:'#app2',
        components:{
            myCounter:component
        },
    })
</script>
</body>
</html>