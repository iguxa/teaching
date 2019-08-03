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
        <template v-if="isVisible">
        <h2>I am title</h2>
        <p >Lixa Nuptia congregabos, tanquam emeritis gluten.Who can trap the art and core of a master if he has the inward chaos of the seeker?</p>
        </template>

        <template v-else>
        <h2 class="red">I am title</h2>
        <p class="blue">Try soaking the tea raspberries with raw iced tea and gold tequila, refrigerated.The heavy-hearted girl impatiently leads the gull.</p>
        <p class="green">Index ires, tanquam gratis ignigena.Be holy for whoever occurs, because each has been hurted with mind.The emitter is technically cloudy.I unite this assimilation, it's called post-apocalyptic ellipse.When one rejects shame and resurrection, one is able to synthesise heaven.</p>
        </template>
        <hr>
        <button @click="isVisible = !isVisible">toggle</button>


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