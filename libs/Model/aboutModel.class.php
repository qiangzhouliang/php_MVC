<?php
    class aboutModel{
        function aboutinfo(){
            return file_get_contents('data/about.txt');
        }
    }
?>