<ul class="nav-links center user-profile-nav scrolling-tabs">
    <li class="js-activity-tab  <? if($profile_nav=='activity'){ echo 'active';} ?>">
        <a   href="<?=ROOT_URL?>user/profile"><i class="fa fa-calculator" ></i> 活动日志</a>
    </li>

    <li class="js-projects-tab <? if($profile_nav=='have_join_projects'){ echo 'active';} ?>">
        <a  href="<?=ROOT_URL?>user/have_join_projects"><i class="fa fa-product-hunt" ></i> 参与项目</a>
    </li>
    <li class="js-groups-tab <? if($profile_nav=='custom_index'){ echo 'active';} ?>">
        <a href="<?=ROOT_URL?>user/custom_index"><i class="fa fa-arrows" ></i> 自定义首页</a>
    </li>
    <li class="js-groups-tab <? if($profile_nav=='preferences'){ echo 'active';} ?>">
        <a href="<?=ROOT_URL?>user/preferences"><i class="fa fa-eye" ></i> 界面设置</a>
    </li>
    <li class="js-groups-tab <? if($profile_nav=='notify'){ echo 'active';} ?>">
        <a data-target="div#groups" data-action="groups" data-toggle="tab" href="<?=ROOT_URL?>users/sven/groups"><i class="fa fa-envelope" ></i> 通知设置</a>
    </li>
    <li class="js-snippets-tab <? if($profile_nav=='profile_edit'){ echo 'active';} ?>">
        <a  href="<?=ROOT_URL?>user/profile_edit"><i class="fa fa-edit" ></i> 修改资料</a>
    </li>
    <li class="js-snippets-tab <? if($profile_nav=='password'){ echo 'active';} ?>">
        <a href="<?=ROOT_URL?>user/password"><i class="fa fa-lock" ></i> 修改密码</a>

    </li>
    <li class="js-groups-tab <? if($profile_nav=='custom'){ echo 'active';} ?>">
        <a data-target="div#groups" data-action="groups" data-toggle="tab" href="<?=ROOT_URL?>users/sven/groups">操作记录</a>
    </li>
</ul>