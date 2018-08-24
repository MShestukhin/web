var app=new Vue({
    el: '#app',
    data: {
      message: 'Hello Vue.js!'
    }
  })
  var app2 = new Vue({
    el: '#app-2',
    data: {
      message: 'Вы загрузили эту страницу в: ' + new Date().toLocaleString()
    }
  })