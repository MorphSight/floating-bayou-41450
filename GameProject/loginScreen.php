<?php

?>

<div class="d-flex flex-column min-vh-100">
    <div class="centerText p-2">
        <h2>Login!</h2>
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <input id="action" type="hidden" name="action" value="register">
    <button type="button" onclick="login()" class="btn btn-primary">Login</button>
    <div id="errorCreateUser"></div>
    <div id="mainMenuButtons" class="mt-auto p-2">
        <button class="btn-primary btn-block menuButton" onclick="endGame()">Back to Main Menu</button>
    </div>
</div>
