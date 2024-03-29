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
        <input type="text" v-model.lazy="inputValue">
        <h2>{{inputValue}}</h2>
    </div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script>
    new Vue({
        el:'#app',
        data: {
            inputValue: 'Initial value',
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