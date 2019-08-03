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
        <h2>
            <a href="google.com" target="_blank" v-on:click.prevent="">Google</a>
        </h2>

        <h2 v-on:mousemove = "handleMouseMove">
            x: {{x}} \ Y: {{y}}
            <span v-on:mousemove.stop ="">Не изменять</span>
        </h2>
    </div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script>
    new Vue({
        el:'#app',
        data: {
            name: 'Vue !!!',
            x: 0,
            y: 0,
        },
        methods: {
            handleMouseMove: function (event) {

                this.x = event.clientX;
                this.y = event.clientY;
            }
        }
    })
</script>
</body>
</html>