<?php
require_once('admin/models/purchase.php');
global $userNav;
if (!empty($userNav)) {
    $options = array(
        'where' => 'status = 3 and user_id =' . $userNav,
        'order_by' => 'createtime DESC'
    );
    $cancelledOrders  = get_all('orders', $options);
    $title = 'Đơn hàng đã hủy';
    $your_Purchase  = 'class="active open"';
    $status = array(
        0 => 'Đã xác nhận đơn hàng',
        2 => 'Đang giao hàng',
        1 => 'Đã giao hàng',
        3 => 'Đơn hàng đã hủy'
    );
}
require('admin/views/purchase/cancelled.php');
