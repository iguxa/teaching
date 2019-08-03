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
        .red {background: red;}
        .blue {background: blue;}
        .green {background: green;}
    </style>
</head>
<body>

    <div id="app">
        <div
                class="circle"
                @click="isActive = !isActive"
                :class="getCssClasses">

        </div>
        <div class="circle"
        :class="[color,{'red':isActive}]"
        >
        </div>
        <input type="text" v-model="color">

    </div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script>
    new Vue({
        el:'#app',
        data: {
            isActive: false,
            color:'blue',
        },
        computed:{
            getCssClasses: function () {
                return {
                    'red':this.isActive,
                    'green':!this.isActive
                }
            }
        }
    })
</script>
</body>
</html>