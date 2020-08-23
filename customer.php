<?php
    $mode ="お客";
    $edit = "<button class ='edit-btn dis' onclick='edit();'></button>";
    require "header.php";
    require "menu.php";
    require "footer.php";
?>


<style>
    .nav-header{
        background:linear-gradient(to right,#FFB833 , #FF7F00);
    }

    .tab.sel{
        border-bottom:5px orange solid;
    }

    .action-btn{
        background-color:orange;
        background-image:url('images/bell.png');
    }
</style>

<script>
    
    let actionBtn = document.getElementById('action-btn');

    console.log(actionBtn);

    actionBtn.addEventListener("click",function(){

        /*
        const AudioContext = window.AudioContext || window.webkitAudioContext;
        const audioCtx = new AudioContext();
        audioCtx.play();
        */


        let sound = new Audio('audio/order.mp3');

        sound.play();

        
    },false);

</script>