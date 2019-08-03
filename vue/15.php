<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .circle{
            width: 100px;
            height: 100px;
            border-radius:50% ;
            border: 1px solid black;
            display: inline-block;
            margin: 40px;
        }
        .red {color: red;}
        .blue {color: blue;}
        .green {color: green;}
    </style>
</head>
<body>

    <div id="app">
        <h1 v-show="isVisible">I'm visible</h1>
        <h2 v-show="!isVisible">You can't see me!</h2>
        <hr>
        <button @click="isVisible = !isVisible">Toggle</button>
    </div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script>
    new Vue({
        el:'#app',
        data: {
            isVisible: true,
            type:'a',
        },
        computed:{
            circleClasses: function () {
                return {
                    'background':this.color,'height':this.height+'px'
                }

            }
        }
    })
</script>
</body>
</html>