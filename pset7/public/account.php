<?php

    // configuration
    require("../includes/config.php"); 
    
    $id = $_SESSION["id"];
    
    // account information
    $information = query("SELECT username, cash FROM users WHERE id=$id");
    
    render("account_form.php", ["title" => "Account", "information" => $information]);
    
?>
