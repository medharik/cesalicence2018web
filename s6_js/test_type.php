<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

</head>
<body>
    <div id="app">
    <input type="text" v-model="message" value="{{message}}">
    <hr>
    <a   v-on:click="h">Afficher</a>
    <hr>
    {{message}}
    <div class="s" v-if="seen">
    {{message}}
    </div>
    <ul>
        <li v-for="p in produits">{{ p.produit }}</li>
    </ul>
        <ol>
  <!-- Create an instance of the todo-item component -->
  <todo-item></todo-item>
</ol>
<hr>

<table border="1" align="center">
<produit v-for="p in produits" v-bind:pr="p"  ></produit>
</table>
    
    </div>



    <script>
    new Vue({
'el': '#app',
data:{
   message:'on est le :'+ new Date().toLocaleString(),
   seen :false,
   produits:[
      { 
          produit:'produit 1',
         
    },
    {
        produit:'produit 2'
    }
   ]
},
methods:{
    h: function(){
           this.seen=!this.seen;
      //  alert(this.seen)
    }
}
    });
// Define a new component called todo-item
Vue.component('todo-item', {
  template: '<li>This is a todo</li>'
})
Vue.component('produit',{
    props:['pr'],
    template:'<tr><td>{{pr.produit}}</td></tr>'
});
    </script>
</body>
</html>