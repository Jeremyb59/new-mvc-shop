<?php
if (!empty($_GET['code'])) {
    $select_user_option = array(
        'order_by' => 'id'
    );
    $user_need_activate = get_all('users', $select_user_option);
    foreach ($user_need_activate as $user) {
        if ($user['verificationCode'] == $_GET['code']) {
            $verifi_id_user = $user['id'];
        }
    }
    if (!isset($verifi_id_user)) {
        show_404();
        exit;
    }
    $user_edit = array(
        'id' => $verifi_id_user,
        'verified' => 1
    );
    save('users', $user_edit);
    echo "<div style='padding-top: 200px' class='container'><div style='text-align: center;' class='alert alert-success'><strong>Done!</strong> Bạn đã kích hoạt tài khoản thành công, giờ bạn đã có thể đăng nhập vào website của quán Chị Kòi. Hãy đến <a href='admin.php'>Đăng nhập</a></div></div>";
    require('content/views/register/result.php');
}
