<?php

function getRoute($r){
    if(request()->routeIs($r)){
        return "class='active'";
    }
}

function adminRoute($r){
    if(request()->routeIs($r)){
        return "active current-page";
    }
}