<?php
// helpers/FormatHelper.php

function formatCurrency($amount) {
    return "Rp " . number_format($amount, 0, ',', '.');
}

function formatDate($date) {
    return date("d-m-Y", strtotime($date));
}
