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
        <h2>Счетчик = {{counter}}</h2>
        <button @click="riseCounter">Увеличить</button>
        <hr>
        <h2 v-on:mouseover="onHover">Счетчик 2 = {{counter2}}</h2>
        <button v-on:click="counter2++">Увеличить</button>
    </div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script>
    new Vue({
        el:'#app',
        data: {
            counter: 0,
            counter2: 0,
        },
        methods:{
            riseCounter : function () {
                this.counter++;
            },
            onHover : function (event) {
                event.target.style.color = 'red';
            }
        }
    })
</script>
</body>
</html>