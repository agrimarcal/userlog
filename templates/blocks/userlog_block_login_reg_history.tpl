<div class="outer">
    <{foreach from=$block key=log_id item=user}>
        <div class="<{cycle values="even,odd"}> border">
            <span class="bold"><{if $user.loginOrRegister == "register"}><{$smarty.const._REGISTER}><{elseif $user.loginOrRegister == "login"}><{$smarty.const._LOGIN}><{/if}></span>
            <span class="">
                <{if $user.success eq 1}>
                    <a href="<{$xoops_url}>/userinfo.php?uid=<{$user.uid}>"><{$user.uname}></a>
                <{/if}>
                <{if $xoops_isadmin}>
                    -
                    <a href="<{$smarty.const.USERLOG_ADMIN_URL}>/logs.php?options[log_id]=<{$log_id}>,<{$log_id+1}>"><{$smarty.const._AM_USERLOG_LOG_ID}>
                        :<{$log_id}></a>
                <{/if}>
            </span>
            <span style="color: <{$user.color}>;" class="bold"><{$user.msg}></span>
            <b>
                <span> <{$smarty.const._AM_USERLOG_LOG_TIME}>: <{$user.log_time}></span>
        </div>
    <{/foreach}>
</div>
