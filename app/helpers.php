<?php

function setActive($active) {
    return request()->routeIs($active) ? 'active' : '';
}
?>