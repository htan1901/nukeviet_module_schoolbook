<!-- BEGIN: main -->
<div class="table-responsive" style="margin-bottom: 10%;background-color: azure;">
    <!-- BEGIN: error -->
    <div class="alert alert-danger">{ERROR}</div>
    <!-- END: error -->
    <h1 style="padding-top: 12px; color: red;text-align: center;">{LANG.app_name}</h1>
    <form action="{URL_ACTION}" method="post" style="text-align: left; padding-top: 16px;">
        <div style="display: flex; flex-direction: column; align-items: center; padding: 0 10% 0 10%; ">
            <label>{LANG.username}: </label>
            <input class="input-text" placeholder="Tên đăng nhập..." type="text" name="input_username"
                value="{USERNAME}">
            <br>
            <label>{LANG.password}: </label>
            <input class="input-text" type="password" name="input_password" value="{PASSWORD}">
            <br>
            <input type="submit" name="login" id="loginbtn" value="{LANG.login}">
        </div>

    </form>
    <style>
        :root {
            --input-border: #000000;
            --input-focus-h: 196;
            --input-focus-s: 64%;
            --input-focus-l: 37%;
        }

        input#loginbtn {
            color: white;
            width: 20%;
            height: 35px;
            background-color: rgb(98, 98, 203);
        }

        input#loginbtn:hover {
            background-color: rgb(69, 44, 209);
        }

        label {
            width: 45%;
            text-align: left;
        }

        .input-text {
            width: 45%;
            height: 50%;
            text-align: left;
            font-size: 16px;
            font-size: max(16px, 1em);
            font-family: inherit;
            padding: 0.25em 0.5em;
            background-color: #fff;
            border: 1px solid black;
            border-radius: 4px;
            transition: 180ms box-shadow ease-in-out;
            line-height: 1;
        }

        .input-text:focus {
            border-color: hsl(var(--input-focus-h),
                    var(--input-focus-s),
                    var(--input-focus-l));
            box-shadow: 0 0 0 3px hsla(var(--input-focus-h),
                    var(--input-focus-s),
                    calc(var(--input-focus-l) + 40%),
                    1);
            outline: 3px solid transparent;
        }
    </style>
</div>
<!-- END: main -->