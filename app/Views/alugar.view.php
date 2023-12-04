<?php componente('topo')?>
<main>
    <div class="container">
        <div class="box1"></div>
        <div class="box2"></div>
    </div>

</main>
<style>
    body{background:#ffd237;}
    main{
        display:flex;
        align-items:center;
        justify-content:center;
        padding:2vw;
    }
    .container{
        min-width:380px;
        min-height:280px;
        padding:10px; 
        width: 80vw;
        height:35vw;
        display:flex;
        background:white;
        border-radius:1vw;
    }.box1{
        border-radius:1vw;
        width:40%;
        height:100%;
    }.box2{
        border-radius:1vw;
        height:100%;
        width:30%;
        margin-left:1vw;
    }
</style>
<?php componente('rodape')?>