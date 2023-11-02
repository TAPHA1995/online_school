@include('layout.master')
<br><br>

<br>
<div class="lesformation">
<div>
    <a href="/index_u" class="Package">
        <div class=" formation">Dévelopement web  fullstack php</div>
    </a>
    <div>
        <a href="" class="btn btn-orange">Editer</a>
        <a href="" class="btn btn-danger">Supprimer</a>
    </div>
</div>  
<div>
    <a href="" class="Package">
        <div class=" formation">Développement web frontend  php</div>
    </a>
    <div>
        <a href="" class="btn btn-orange">Editer</a>
        <a href="" class="btn btn-danger">Supprimer</a>
    </div>
</div> 
<div>
    <a href="" class="Package">
        <div class=" formation">Développement web backend  php</div>
    </a>
    <div>
        <a href="" class="btn btn-orange">Editer</a>
        <a href="" class="btn btn-danger">Supprimer</a>
    </div>
</div>
<div>
    <a href="" class="Package">
        <div class=" formation">Développement mobile</div>
    </a>
    <div>
        <a href="" class="btn btn-orange">Editer</a>
        <a href="" class="btn btn-danger">Supprimer</a>
    </div>
</div>
</div>
<style>
    .lesformation{
         display:flex;
        justify-content:center;
        flex-direction:row;
        flex-wrap:wrap;
        gap:10px;
    }
    .formation{
        display:flex;
       justify-content:center;
        font-size:20px;
        background-color:gray;
       width:200px;
       height:20vh;
       color:white;
       align-items:center;
       text-align:center;
      
    }
    a:hover{
        text-decoration:none;
    }
    .Package{
        display:flex;
        justify-content:center;
        flex-direction:column;
        text-decoration:none;
    }
   
</style>