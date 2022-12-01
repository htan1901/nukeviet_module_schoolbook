<!-- BEGIN: main -->
<div class="table-responsive" style="margin-bottom: 10%;background-color: azure;">
    <!-- BEGIN: error -->
    <div class="alert alert-danger">{ERROR}</div>
    <!-- END: error -->
    <h1 style="padding-top: 12px; color: red;text-align: center;">{LANG.name_game}</h1>
    <form action="{URL_ACTION}" method="post" style="text-align: center; padding-top: 16px;">
        <label>{LANG.username}: </label><input type="text" style="width: 200px;" name="input_username" 
            value="{USERNAME}">
        <label>{LANG.password}: </label><input style="width:200px;" type="password" name="input_password"
            value="{PASSWORD}">

        <div
            style="margin: auto; padding-left: 200px; padding-top: 20px; padding-bottom: 10px; width: 15%;float:left; ">
            <input type="submit" name="login" class="btn" value="{LANG.login}"
                style="background-color: blue;color: white;">
        </div>
        <!-- <div style="margin: auto; padding-left: 60px;padding-top: 20px;padding-bottom: 10px; width: 15%;"><a
                href="{LINK_REGISTER}" class="btn"
                style="background-color: blue;color: white;">{LANG.register_account}</a></div> -->

    </form>
</div>
<!-- END: main -->