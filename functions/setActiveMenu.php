<?php
function getCurrentPage() {
    return basename($_SERVER['PHP_SELF']);
}
function setActiveClass($page) {
    if (getCurrentPage() == $page) {
        echo 'class="active"';
    }
}

