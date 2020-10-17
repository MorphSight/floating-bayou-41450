<?php

require_once('_App/TemplateManager.php');
require_once('_View/BaseView.php');
require_once('_View/HeaderPage.php');

?>
<!DOCTYPE HTML>
<html>
    <?php
        TemplateManager::GetHeader()->drawHtml();
    ?>
<body onload="startGame()">
    <div id="GameContent">Hello</div>
</body>
</html>

<script type="text/javascript">
    let inputSelection;

    function setInputSelection(selectionID){
        inputSelection = selectionID;
    }

    function startGame(){
        let content = document.getElementById('GameContent');
        content.innerHTML = "Loading";
        takeTurnAndRefreshScreen();
    }

    function takeTurnAndRefreshScreen(){
        const content = document.getElementById('GameContent');
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function (){
            if (this.readyState === 4 && this.status === 200){
                content.innerHTML = this.responseText;
            }
            else {
                content.innerHTML = "An issue occurred, could not start game";
            }
        }
        xhttp.open("PUT", "gameContent.php", true);
        xhttp.setRequestHeader("Content-type", inputSelection);
        xhttp.send();
    }