<!-- BEGIN: main -->
<div class="table-responsive"style="text-align: center;margin-bottom: 10%;background-color: azure;">
    <!-- BEGIN: error -->
    <div class="alert alert-danger">{ERROR}</div>
    <!-- END: error -->
    <h1 style="text-align: center;padding-top: 12px; color: red;">{LANG.name_game}</h1>
    <h3 style="text-align: center;">{LANG.register_account}</h3>
    <form action="{URL_ACTION}" method="post">
        <label style="margin-right: 140px;padding-top: 10px;">{LANG.username} </label><br><input type="text" style="width: 200px;"
            name="input_username" value="{USERNAME}"><br>
        <label style="margin-right: 140px;padding-top: 10px;">{LANG.password} </label><br><input style="width:200px;"
            type="password" name="input_password" value="{PASSWORD}"><br>
        <label style="margin-right: 80px;padding-top: 10px;">{LANG.password_confirm} </label><br><input style="width:200px;"
            type="password" name="input_password_confirm">
        <div style="margin: auto; padding: 10px; width: 15%;"><input type="submit" name="register" class="btn" value="{LANG.register}"style="background-color: blue; color: white"></div>
    </form>
</div>
<!-- END: main -->