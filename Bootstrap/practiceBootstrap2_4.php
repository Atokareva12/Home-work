<?php 
    require "inc/header.php";
?>
<div class="row">
    <div class="col-md-2 col-md-push-0">1</div>
    <div class="col-md-2 col-md-pull-0">2</div>
</div>
<div class="row">
    <div class="col-md-2 col-md-push-6">3</div>
    <div class="col-md-2">4</div>
</div>
<div class="row order-1">
    <div class="col-md-4 col-md-push-8">Модуль 1</div>
    <div class="col-md-4 col-md-pull-4">Модуль 2</div>
</div>
<div class="row">
    <div class="col-md-4 col-md-push-4">Модуль 1</div>
    <div class="col-md-4 col-md-pull-3">Модуль 2</div>
</div>
<?php
    require "inc/footer.php";
?>