<div class="col-md-12">
  <h4>详细资料</h4>
  <?php global $current_user;  get_currentuserinfo();
    echo('用户名: ' . $current_user->user_login . "<br />");
    echo('用户ID: ' . $current_user->ID . "<br />");
    echo('电子邮箱: ' . $current_user->user_email . "<br />");
    echo('用户等级: ' . $current_user->user_level . "<br />");
    echo('昵称: ' . $current_user->nickname . "<br />");
    echo('注册时间: ' . $current_user->user_registered . "<br />");

  ?>

</div>
