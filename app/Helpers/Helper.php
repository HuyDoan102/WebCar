<?php

//order status name
const STATUS_PENDING = 'warning';
const STATUS_PROCESSING = 'info';
const STATUS_SHIPPED = 'success';
const STATUS_DELIVERED = 'danger';

const NAME_PENDING = "PENDING";
const NAME_PROCESSING = "PROCESSING";
const NAME_SHIPPED = "SHIPPED";
const NAME_DELIVERED = "DELIVERED";

const PENDING = 1;
const PROCESSING = 2;
const SHIPPED = 3;
const DELIVERED = 4;

if (!function_exists('convertClassOrderStatus')) {
    function convertClassOrderStatus($value = 0)
    {
        if ($value == DELIVERED) {
            return STATUS_DELIVERED;
        } elseif ($value == SHIPPED) {
            return STATUS_SHIPPED;
        } elseif ($value == PROCESSING) {
            return STATUS_PROCESSING;
        } else {
            return STATUS_PENDING;
        }
    }
}

if (!function_exists('convertNameOrderStatus')) {
    function convertNameOrderStatus($value = 0)
    {
        if ($value == DELIVERED) {
            return NAME_DELIVERED;
        } elseif ($value == SHIPPED) {
            return NAME_SHIPPED;
        } elseif ($value == PROCESSING) {
            return NAME_PROCESSING;
        } else {
            return NAME_PENDING;
        }
    }
}