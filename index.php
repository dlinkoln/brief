<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/vue-form-wizard@0.8.4/dist/vue-form-wizard.min.css">
    <style>
      .container {
        width:1170px;
        padding: 0 15px;
        margin:150px auto;
      }
    </style>
    <title>FORM HTML</title>
</head>
<body>

<div id="brief">
  <div class="container">
    <form-wizard title="Бриф" subtitle="">
      <tab-content title="Контактные данные">
        <input type="text" placeholder="Название компании">
        <input type="text" placeholder="Контактное лицо">
      </tab-content>
      <tab-content title="С какими системами знакомы? * ">
        Первый чекбокс<input type="radio" >
        Второй чекбокс<input type="radio" >
      </tab-content>
    </form-wizard>
    </div>
  <div>
</div>


<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js" type="application/javascript"></script>
<script src="https://unpkg.com/vue-form-wizard@0.8.4/dist/vue-form-wizard.js" type="application/javascript"></script>

<script type="application/javascript">
Vue.use(VueFormWizard)
let brief = new Vue({
  el:'#brief',
  data:{
  }
})
</script>
</body>
</html>