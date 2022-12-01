<!-- BEGIN: main -->
<div class="table-responsive" style="margin-bottom: 10%;background-color: azure;">
    <script>
         start();
    </script>
    <!-- BEGIN: error -->
    <div class="alert alert-danger">{ERROR}</div>
    <!-- END: error -->

    <!-- BEGIN: showdialog -->
    <div class="alert alert-warning">{DIALOG}</div>
    <!-- END: showdialog -->

    <h1 style="padding-top: 12px; color: red;text-align: center; ">{LANG.name_game}</h1>
    <form action="{LINK_MAIN}" method="post" id="leftBox" style="margin-bottom: 20px;">
        <div style="padding-top: 16px;text-align: center;">
            <label>{LANG.TIME}: </label><input type="text" id="s_val"
                placeholder="Giây" value="{TIME}" name="TIME" readonly />
            <input type="text" hidden value="{INDEX}" name="INDEX_QUES">
            <label>{LANG.TOTAL_POINT}: </label><input type="text"
                value="{TOTAL_POINT}" name="TOTAL_POINT" readonly>
        </div>
        <br><br>
        <div style="margin-left: 33px; padding-left: 120px;">
            <input type="text" name="input_ngang_1_1" id="input_ngang_1"
                value="{ngang_1_1}"
                style="width: 30px;" maxlength="1">
            <input type="text" name="input_ngang_1_2" id="input_ngang_1"
                value="{ngang_1_2}"
                style="width: 30px;" maxlength="1">
            <input type="text" name="input_ngang_1_3" id="input_ngang_1"
                style="width: 30px;background-color: rgb(174, 250, 250);color: rgb(255, 0,
                0);" maxlength="1" value="{ngang_1_3}">
            <input type="text" name="input_ngang_1_4" id="input_ngang_1"
                value="{ngang_1_4}"
                style="width: 30px;" maxlength="1">
            <input type="text" name="input_ngang_1_5" id="input_ngang_1"
                value="{ngang_1_5}"
                style="width: 30px;" maxlength="1">
            <input type="text" name="input_ngang_1_6" id="input_ngang_1"
                value="{ngang_1_6}"
                style="width: 30px;" maxlength="1">
            <input type="text" name="input_ngang_1_7" id="input_ngang_1"
                value="{ngang_1_7}"
                style="width: 30px;" maxlength="1">
            <!-- BEGIN: showquestion1 -->
            <input type="submit" value="{LANG.question}" name="question_1">
            <input type="submit" value="{LANG.submit}" name="submit_1">
            <!-- END: showquestion1 -->
        </div>
        <br>
        <div style="margin-right: 30px;padding-left: 120px;">
            <input type="text" name="input_ngang_2_1" style="width: 30px;"
                maxlength="1" value="{ngang_2_1}">
            <input type="text" name="input_ngang_2_2" style="width: 30px;"
                maxlength="1" value="{ngang_2_2}">
            <input type="text" name="input_ngang_2_3" style="width: 30px;"
                maxlength="1" value="{ngang_2_3}">
            <input type="text" name="input_ngang_2_4" style="width:
                30px;background-color: rgb(174, 250, 250);color: rgb(255, 0, 0);"
                maxlength="1" value="{ngang_2_4}">
            <input type="text" name="input_ngang_2_5" style="width: 30px;"
                maxlength="1" value="{ngang_2_5}">
            <!-- BEGIN: showquestion2 -->
            <input type="submit" value="{LANG.question}" name="question_2">
            <input type="submit" value="{LANG.submit}" name="submit_2">
            <!-- END: showquestion2 -->
        </div>
        <br>
        <div style="padding-left: 120px;">
            <input type="text" name="input_ngang_3_1" style="width: 30px;"
                maxlength="1" value="{ngang_3_1}">
            <input type="text" name="input_ngang_3_2" style="width: 30px;"
                maxlength="1" value="{ngang_3_2}">
            <input type="text" name="input_ngang_3_3" style="width: 30px;"
                maxlength="1" value="{ngang_3_3}">
            <input type="text" name="input_ngang_3_4" style="width:
                30px;background-color: rgb(174, 250, 250);color: rgb(255, 0, 0);"
                maxlength="1" value="{ngang_3_4}">
            <input type="text" name="input_ngang_3_5" style="width: 30px;"
                maxlength="1" value="{ngang_3_5}">
            <input type="text" name="input_ngang_3_6" style="width: 30px;"
                maxlength="1" value="{ngang_3_6}">
            <input type="text" name="input_ngang_3_7" style="width: 30px;"
                maxlength="1" value="{ngang_3_7}">
            <input type="text" name="input_ngang_3_8" style="width: 30px;"
                maxlength="1" value="{ngang_3_8}">
            <input type="text" name="input_ngang_3_9" style="width: 30px;"
                maxlength="1" value="{ngang_3_9}">
            <input type="text" name="input_ngang_3_10" style="width: 30px;"
                maxlength="1" value="{ngang_3_10}">
            <!-- BEGIN: showquestion3 -->
            <input type="submit" value="{LANG.question}" name="question_3">
            <input type="submit" value="{LANG.submit}" name="submit_3">
            <!-- END: showquestion3 -->
        </div>
        <br>
        <div style="margin-left: 66px;padding-left: 120px;">
            <input type="text" name="input_ngang_4_1" style="width: 30px;"
                maxlength="1" value="{ngang_4_1}">
            <input type="text" name="input_ngang_4_2" style="width:
                30px;background-color: rgb(174, 250, 250);color: rgb(255, 0, 0);"
                maxlength="1" value="{ngang_4_2}">
            <input type="text" name="input_ngang_4_3" style="width: 30px;"
                maxlength="1" value="{ngang_4_3}">
            <input type="text" name="input_ngang_4_4" style="width: 30px;"
                maxlength="1" value="{ngang_4_4}">
            <input type="text" name="input_ngang_4_5" style="width: 30px;"
                maxlength="1" value="{ngang_4_5}">
            <input type="text" name="input_ngang_4_6" style="width: 30px;"
                maxlength="1" value="{ngang_4_6}">
            <input type="text" name="input_ngang_4_7" style="width: 30px;"
                maxlength="1" value="{ngang_4_7}">
            <!-- BEGIN: showquestion4 -->
            <input type="submit" value="{LANG.question}" name="question_4">
            <input type="submit" value="{LANG.submit}" name="submit_4">
            <!-- END: showquestion4 -->
        </div>

        <br>
        <div style="margin-left: 66px;padding-left: 120px;">

            <input type="text" name="input_ngang_5_1" style="width: 30px;"
                maxlength="1" value="{ngang_5_1}">
            <input type="text" name="input_ngang_5_2" style="width:
                30px;background-color: rgb(174, 250, 250);color: rgb(255, 0, 0);"
                maxlength="1" value="{ngang_5_2}">
            <input type="text" name="input_ngang_5_3" style="width: 30px;"
                maxlength="1" value="{ngang_5_3}">
            <input type="text" name="input_ngang_5_4" style="width: 30px;"
                maxlength="1" value="{ngang_5_4}">
            <input type="text" name="input_ngang_5_5" style="width: 30px;"
                maxlength="1" value="{ngang_5_5}">
            <!-- BEGIN: showquestion5 -->
            <input type="submit" value="{LANG.question}" name="question_5">
            <input type="submit" value="{LANG.submit}" name="submit_5">
            <!-- END: showquestion5 -->
        </div>

        <br>
        <div style="padding-left: 120px;">
            <input type="text" name="input_ngang_6_1" style="width: 30px;"
                maxlength="1" value="{ngang_6_1}">
            <input type="text" name="input_ngang_6_2" style="width: 30px;"
                maxlength="1" value="{ngang_6_2}">
            <input type="text" name="input_ngang_6_3" style="width: 30px;"
                maxlength="1" value="{ngang_6_3}">
            <input type="text" name="input_ngang_6_4" style="width:
                30px;background-color: rgb(174, 250, 250);color: rgb(255, 0, 0);"
                maxlength="1" value="{ngang_6_4}">
            <input type="text" name="input_ngang_6_5" style="width: 30px;"
                maxlength="1" value="{ngang_6_5}">
            <input type="text" name="input_ngang_6_6" style="width: 30px;"
                maxlength="1" value="{ngang_6_6}">
            <input type="text" name="input_ngang_6_7" style="width: 30px;"
                maxlength="1" value="{ngang_6_7}">
            <!-- BEGIN: showquestion6 -->
            <input type="submit" value="{LANG.question}" name="question_6">
            <input type="submit" value="{LANG.submit}" name="submit_6">
            <!-- END: showquestion6 -->
        </div>
        <br>
        <div style="margin-left: 33px;padding-left: 120px;">
            <input type="text" name="input_ngang_7_1" style="width: 30px;"
                maxlength="1" value="{ngang_7_1}">
            <input type="text" name="input_ngang_7_2" style="width: 30px;"
                maxlength="1" value="{ngang_7_2}">
            <input type="text" name="input_ngang_7_3" style="width:
                30px;background-color: rgb(174, 250, 250);color: rgb(255, 0, 0);"
                maxlength="1" value="{ngang_7_3}">
            <input type="text" name="input_ngang_7_4" style="width: 30px;"
                maxlength="1" value="{ngang_7_4}">
            <input type="text" name="input_ngang_7_5" style="width: 30px;"
                maxlength="1" value="{ngang_7_5}">
            <input type="text" name="input_ngang_7_6" style="width: 30px;"
                maxlength="1" value="{ngang_7_6}">
            <input type="text" name="input_ngang_7_7" style="width: 30px;"
                maxlength="1" value="{ngang_7_7}">
            <!-- BEGIN: showquestion7 -->
            <input type="submit" value="{LANG.question}" name="question_7">
            <input type="submit" value="{LANG.submit}" name="submit_7">
            <!-- END: showquestion7 -->
        </div>
        <br>
        <div style="padding-left: 120px;">
            <input type="text" name="input_ngang_8_1" style="width: 30px;"
                maxlength="1" value="{ngang_8_1}">
            <input type="text" name="input_ngang_8_2" style="width: 30px;"
                maxlength="1" value="{ngang_8_2}">
            <input type="text" name="input_ngang_8_3" style="width: 30px;"
                maxlength="1" value="{ngang_8_3}">
            <input type="text" name="input_ngang_8_4" style="width:
                30px;background-color: rgb(174, 250, 250);color: rgb(255, 0, 0);"
                maxlength="1" value="{ngang_8_4}">
            <input type="text" name="input_ngang_8_5" style="width: 30px;"
                maxlength="1" value="{ngang_8_5}">
            <input type="text" name="input_ngang_8_6" style="width: 30px;"
                maxlength="1" value="{ngang_8_6}">
            <input type="text" name="input_ngang_8_7" style="width: 30px;"
                maxlength="1" value="{ngang_8_7}">
            <!-- BEGIN: showquestion8 -->
            <input type="submit" value="{LANG.question}" name="question_8">
            <input type="submit" value="{LANG.submit}" name="submit_8">
            <!-- END: showquestion8 -->
        </div>
        <!-- BEGIN: showdone -->
        <input type="submit" value="{LANG.Done}" name="Done" style="float:
            right;">
        <!-- END: showdone -->
        <input type="submit" value="TEST" hidden name="time_out"
            id="submit_next_ques">
    </form>
</div>
<!-- END: main -->