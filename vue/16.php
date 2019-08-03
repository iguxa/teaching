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
        <ul>
            <li v-for="(person,index) in people">{{index+1}}. {{person.name}} <b>{{person.age}}</b></li>
        </ul>
        <hr>
        <ol>
            <li v-for="num of 4">{{num}}</li>
        </ol>
        <hr>
        <ul>
            <li v-for="(value,key,index) in person"><em>{{index+1}}</em> {{value}} <b>{{key}}</b></li>
        </ul>

    </div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script>
    new Vue({
        el:'#app',
        data: {
            people:[
                {name:'Vlad', age:30},
                {name:'Max', age:30},
                {name:'Elena', age:30},
                {name:'Volodya', age:30},
            ],
            person:{
                name:'Max',
                age:50,
                job:'Frontend'
            }
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