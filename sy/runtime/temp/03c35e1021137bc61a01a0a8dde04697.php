<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"C:\Users\ljx\Desktop\sy\public/../application/index\view\repass\repass.html";i:1514212255;}*/ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>无标题文档</title>

    <link href="/static/Css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="/static/Css/cb.css" rel="stylesheet" type="text/css"/>
    <link href="/static/Css/n.css" rel="stylesheet" type="text/css"/>
    <style>
        .biankuangs {
            border: solid #A6D2FF 1px;
            border-top: 0px;
        }

        #item_text2, #item_text1, #itemtypes2, #item_text3 { /**/
            display: none;
        }

        .button {
            background-color: #008CBA; /* Green */
            border: none;
            color: white;
            padding: 6px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button2 {
            border-radius: 4px;
            font-size: 13px;
        }

    </style>
    <script>
        function gooo(id) {
            if (id != "") {
                location.href = '?x=' + id;
            }
        }

        function change_itemtypes2(name) {


            document.getElementById("types2").value = "";
            document.getElementById("types3").value = "";
            if (name == '1') {
                document.getElementById("item_text2").style.display = "block";

                document.getElementById("item_text3").style.display = "none";

            } else if (name == '3') {

                document.getElementById("item_text2").style.display = "none";
                document.getElementById("item_text3").style.display = "block";
            } else {

                document.getElementById("item_text2").style.display = "none";
                document.getElementById("item_text3").style.display = "none";
            }

        }

        function change_itemtypes23(name) {
            document.getElementById("types2").value = "";
            if (name == '1') {
                document.getElementById("item_text2").style.display = "block";
            } else {

                document.getElementById("item_text2").style.display = "none";
            }
        }

        function apply1() {
            var f = document.form1;
            if (f.old_pass.value == "") {
                alert('原密码不能为空');
                return false;
            }
            if (f.new_pass.value == "") {
                alert('新密码不能为空');
                return false;
            }
        }
    </script>
</head>

<body>
<table width="99%" height="25" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:4px;">
    <tr>
        <td width="17" background="/static/Images/bj4.gif"><img src="/static/Picture/r.gif" width="16" height="16"/>
        </td>
        <td width="466" background="/static/Images/bj4.gif"><?php echo \think\Session::get('userInfo.realname'); ?>:你好！欢迎光临
        </td>
        <td width="162" align="center" background="/static/Images/bj4.gif">

        </td>
    </tr>
</table>
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td width="1%" align="left" background="/static/Images/b2.jpg"><img src="/static/Picture/b1.jpg" width="10"
                                                                            height="26"/></td>
        <td width="68%" background="/static/Images/b2.jpg">
            <table width="211" border="0" align="left" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="20" align="left"><img src="/static/Picture/tz.gif" width="10" height="16"/></td>
                    <td width="191" align="left" class="biao">重置密码</td>
                </tr>
            </table>
        </td>
        <td width="31%" align="right" background="/static/Images/b2.jpg"><img src="/static/Picture/b3.jpg" width="9"
                                                                              height="26"/></td>
    </tr>
</table>
<form method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return apply1();">
    <table width="99%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#AEDEF4">
        <tr>
            <td width="20%" height="25" align="center" bgcolor="#FFF9DF">用户名</td>
            <td colspan="" align="left" bgcolor="#FFFFFF" class="t5">
                <div align="left">
                    <?php echo \think\Session::get('userInfo.username'); ?>
                </div>
            </td>
        </tr>

        <tr>
            <td height="25" align="center" bgcolor="#FFF9DF">密码</td>
            <td colspan="" align="left" bgcolor="#FFFFFF" class="t5">
                <div align="left">
                    <input name="old_pass" type="password" size="70"/>
                </div>
            </td>
        </tr>
        <tr>
            <td height="25" align="center" bgcolor="#FFF9DF">新密码</td>
            <td colspan="" align="left" bgcolor="#FFFFFF" class="t5">
                <div align="left">
                    <input name="new_pass" type="password" size="70"/>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" height="25" align="left" bgcolor="#FFFFFF"><label>
                <button class="button button2" style="margin-left: 400px">修改</button>
                <button type="reset" class="button button2">重置</button>
            </label></td>
        </tr>
    </table>

</form>
</body>
</html>
