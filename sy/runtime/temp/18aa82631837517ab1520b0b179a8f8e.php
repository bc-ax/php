<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpStudy\PHPTutorial\WWW\sy\public/../application/index\view\left.html";i:1514128699;}*/ ?>
﻿<HTML>
<HEAD>
    <TITLE></TITLE>
    <META http-equiv=Content-Type content="text/html; charset=utf-8">
    <STYLE type=text/css>
        .np {
            font-family: Webdings;
            font-size: 13px;
            color: #ffffff;
            cursor: hand;
        }

        A:link {
            COLOR: #000000;
            FONT-SIZE: 12px;
            TEXT-DECORATION: none
        }

        A:visited {
            COLOR: #000000;
            FONT-SIZE: 12px;
            TEXT-DECORATION: none
        }

        A:hover {
            COLOR: #4DC5E3;
            FONT-SIZE: 12px;
            TEXT-DECORATION: none
        }

        BODY {
            FONT-SIZE: 12px;
            scrollbar-face-color: #F0F0E5;
            scrollbar-shadow-color: #000000;
            scrollbar-highlight-color: #000000;
            scrollbar-3dlight-color: #F0F0E5;
            scrollbar-darkshadow-color: #F0F0E5;
            scrollbar-track-color: #F0F0E5;
            scrollbar-arrow-color: #000000
        }

        body {
            margin: 0px;
            padding: 0px;
        }

        TD {
            FONT-SIZE: 12px;
            line-height: 150%
        }

        .leftnav {
            background-color: #BFE1FD;
            background-image: url(Images/ico.gif);
            background-repeat: no-repeat;
            background-position: 10px;
            padding-left: 28px;
            height: 25px;
            line-height: 25px;
            border: solid 1px #FFFFFF;
            cursor: pointer;
        }
    </style>

    <SCRIPT language=javascript>
        function switchSysBar() {
            if (switchPoint.innerText == 3) {
                switchPoint.innerText = 4
                document.all("mnuList").style.display = "none"
                top.content.cols = "12,*"
            }
            else {
                switchPoint.innerText = 3
                document.all("mnuList").style.display = ""
                top.content.cols = "148,*"
            }
        }

        var leftm = function (params) {
            //执行的语句
        }
    </SCRIPT>
    <base target="main"/>
</HEAD>
<base target="main">
<BODY leftMargin="0" topMargin="0" marginheight="0" marginwidth="0" bgcolor="#FFFFFF">
<SCRIPT>
    function showitem(id, linkname) {
        return ("<span><a href='" + id + "' target=main>" + linkname + "</a></span><br>")
    }

    function switchoutlookBar(number) {
        var i = outlookbar.opentitle;
        outlookbar.opentitle = number;
        var id1, id2, id1b, id2b
        if (number != i && outlooksmoothstat == 0) {
            if (number != -1) {
                if (i == -1) {
                    id2 = "blankdiv";
                    id2b = "blankdiv";
                }
                else {
                    id2 = "outlookdiv" + i;
                    id2b = "outlookdivin" + i;
                    document.all("outlooktitle" + i).style.border = "1px none navy";
                    document.all("outlooktitle" + i).style.background = "#4DC5E3";
                    document.all("outlooktitle" + i).style.color = "#ffffff";
                    document.all("outlooktitle" + i).style.textalign = "center";
                }
                id1 = "outlookdiv" + number
                id1b = "outlookdivin" + number
                document.all("outlooktitle" + number).style.border = "1px none white";
                document.all("outlooktitle" + number).style.background = "#4DC5E3"; //title
                document.all("outlooktitle" + number).style.color = "#ffffff";
                document.all("outlooktitle" + number).style.textalign = "center";
                smoothout(id1, id2, id1b, id2b, 0);
            }
            else {
                document.all("blankdiv").style.display = "";
                document.all("blankdiv").sryle.height = "100%";
                document.all("outlookdiv" + i).style.display = "none";
                document.all("outlookdiv" + i).style.height = "0%";
                document.all("outlooktitle" + i).style.border = "1px none navy";
                document.all("outlooktitle" + i).style.background = "#4DC5E3";
                document.all("outlooktitle" + i).style.color = "#ffffff";
                document.all("outlooktitle" + i).style.textalign = "center";
            }
        }

    }

    function smoothout(id1, id2, id1b, id2b, stat) {
        if (stat == 0) {
            tempinnertext1 = document.all(id1b).innerHTML;
            tempinnertext2 = document.all(id2b).innerHTML;
            document.all(id1b).innerHTML = "";
            document.all(id2b).innerHTML = "";
            outlooksmoothstat = 1;
            document.all(id1b).style.overflow = "hidden";
            document.all(id2b).style.overflow = "hidden";
            document.all(id1).style.height = "0%";
            document.all(id1).style.display = "";
            setTimeout("smoothout('" + id1 + "','" + id2 + "','" + id1b + "','" + id2b + "'," + outlookbar.inc + ")", outlookbar.timedalay);
        }
        else {
            stat += outlookbar.inc;
            if (stat > 100)
                stat = 100;
            document.all(id1).style.height = stat + "%";
            document.all(id2).style.height = (100 - stat) + "%";
            if (stat < 100)
                setTimeout("smoothout('" + id1 + "','" + id2 + "','" + id1b + "','" + id2b + "'," + stat + ")", outlookbar.timedalay);
            else {
                document.all(id1b).innerHTML = tempinnertext1;
                document.all(id2b).innerHTML = tempinnertext2;
                outlooksmoothstat = 0;
                document.all(id1b).style.overflow = "auto";
                document.all(id2).style.display = "none";
            }
        }
    }

    function getOutLine() {
        outline = "<table " + outlookbar.otherclass + ">";
        for (i = 0; i < (outlookbar.titlelist.length); i++) {
            outline += "<tr><td linkname=outlooktitle" + i + " id=outlooktitle" + i + " ";
            if (i != outlookbar.opentitle)
                outline += " nowrap align=center style='cursor:hand;background-color:#4DC5E3;color:#ffffff;height:5;border:1 none navy' ";
            else
                outline += " nowrap align=center style='cursor:hand;background-color:#4DC5E3;color:white;height:5;border:1 none white' ";
            outline += outlookbar.titlelist[i].otherclass
            outline += " onclick='switchoutlookBar(" + i + ")'><span class=smallFont>";
            outline += outlookbar.titlelist[i].title + "</span></td></tr>";
            outline += "<tr><td linkname=outlookdiv" + i + " valign=top align=center id=outlookdiv" + i + " style='width:100%"
            if (i != outlookbar.opentitle)
                outline += ";display:none;height:0%;";
            else
                outline += ";display:;height:100%;";
            outline += "'><div linkname=outlookdivin" + i + " id=outlookdivin" + i + " style='overflow:auto;width:100%;height:100%'>";
            for (j = 0; j < outlookbar.itemlist[i].length; j++)
                outline += showitem(outlookbar.itemlist[i][j].key, outlookbar.itemlist[i][j].title);
            outline += "</div></td></tr>"
        }

        outline += "</table>"
        return outline

    }

    function show() {
        var outline;
        outline = "<div id=outLookBarDiv linkname=outLookBarDiv style='width=100%;height:100%'>"
        outline += outlookbar.getOutLine();
        outline += "</div>"
        document.write(outline);
    }

    function theitem(intitle, instate, inkey) {
        this.state = instate;
        this.otherclass = " nowrap ";
        this.key = inkey;
        this.title = intitle;
    }

    function addtitle(intitle) {
        outlookbar.itemlist[outlookbar.titlelist.length] = new Array();
        outlookbar.titlelist[outlookbar.titlelist.length] = new theitem(intitle, 1, 0);
        return (outlookbar.titlelist.length - 1);
    }

    function additem(intitle, parentid, inkey) {
        if (parentid >= 0 && parentid <= outlookbar.titlelist.length) {
            outlookbar.itemlist[parentid][outlookbar.itemlist[parentid].length] = new theitem(intitle, 2, inkey);
            outlookbar.itemlist[parentid][outlookbar.itemlist[parentid].length - 1].otherclass = " nowrap align=left style='height:5' ";
            return (outlookbar.itemlist[parentid].length - 1);
        }
        else
            additem = -1;
    }

    function outlook() {
        this.titlelist = new Array();
        this.itemlist = new Array();
        this.divstyle = "style='height:100%;width:100%;overflow:auto' align=center";
        this.otherclass = "border=0 cellspacing='0' cellpadding='0' style='height:100%;width:100%'valign=middle align=center ";
        this.addtitle = addtitle;
        this.additem = additem;
        this.starttitle = -1;
        this.show = show;
        this.getOutLine = getOutLine;
        this.opentitle = this.starttitle;
        this.reflesh = outreflesh;
        this.timedelay = 50;
        this.inc = 10;

    }

    function outreflesh() {
        document.all("outLookBarDiv").innerHTML = outlookbar.getOutLine();
    }

    function locatefold(foldlinkname) {
        for (var i = 0; i < outlookbar.titlelist.length; i++)
            if (foldlinkname == outlookbar.titlelist[i].title) {
                outlookbar.starttitle = i;
                outlookbar.opentitle = i;
            }

    }

    var outlookbar = new outlook();
    var tempinnertext1, tempinnertext2, outlooksmoothstat
    outlooksmoothstat = 0;

</SCRIPT>

<table cellspacing=0 cellpadding=0 border=0 height="100%" width="142" align="left">
    <tr>
        <td valign="top">
            <table width="100%" border=0 align=left cellpadding=0 cellspacing=0 id="mnuList"
                   style="float: left;HEIGHT: 100%">
                <tr>
                    <td bgcolor=#F7f7f7 id=outLookBarShow style="HEIGHT: 100%" valign=top align=middle
                        name="outLookBarShow">


                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="140" height="28" align="center"
                                    style="background: url(/static/Images/_21.gif) no-repeat;color:#FFFFFF; font-size:14px; font-weight:bold;">
                                    功能菜单
                                </td>
                            </tr>
                        </table>
                        <table width="138" cellpadding="3" cellspacing="1" bgcolor="#87B4E0">

                            <tr>
                                <td height="30" bgcolor="#5293D3"><strong
                                        style="color:#FFFFFF">&nbsp;&nbsp;系统配置</strong></td>
                            </tr>
                            <tr>
                                <td class="leftnav"><a href="/index/repass/index"
                                                       target="main">重置密码</a></td>
                            </tr>

                            <tr>
                                <td class="leftnav"><a href="/index/index/info"
                                                       target="main">个人信息</a></td>
                            </tr>

                            <tr>
                                <td height="30" bgcolor="#5293D3"><strong
                                        style="color:#FFFFFF">&nbsp;&nbsp;实验室管理</strong></td>
                            </tr>
                            <?php if(\think\Session::get('identity') == 0): ?>
                            <tr>
                                <td class="leftnav"><a href="/index/lab/add" target="main">添加实验室</a>
                                </td>
                            </tr>
                            <?php endif; ?>
                            <tr>
                                <td height="28" class="leftnav"><a href="/index/lab/index"
                                                                   target="main">实验室列表</a></td>
                            </tr>

                            <tr>
                                <td height="30" bgcolor="#5293D3"><strong
                                        style="color:#FFFFFF">&nbsp;&nbsp;设备管理</strong></td>
                            </tr>
                            <?php if(\think\Session::get('identity') == 0): ?>
                            <tr>
                                <td class="leftnav"><a href="/index/machine/add" target="main">添加设备</a>
                                </td>
                            </tr>
                            <?php endif; ?>
                            <tr>
                                <td class="leftnav"><a href="/index/machine/index" target="main">设备列表</a>
                                </td>
                            </tr>

                            <!--<tr>-->
                            <!--<td class="leftnav"><a href="add_destory.html"-->
                            <!--target="main">申请报废</a></td>-->
                            <!--</tr>-->
                            <?php if(\think\Session::get('identity') == 0): ?>
                            <tr>
                                <td class="leftnav"><a href="/index/repair/repair" target="main">设备报修</a>
                                </td>
                            </tr>
                            <?php endif; ?>


                            <!--<tr>-->
                            <!--<td height="30" bgcolor="#5293D3"  ><strong style="color:#FFFFFF">&nbsp;&nbsp;课程表管理</strong></td>-->
                            <!--</tr>-->

                            <!--<tr>-->
                            <!--<td class="leftnav"><a href="add_course.html" target="main">添加课表</a></td>-->
                            <!--</tr>-->

                            <tr>
                                <td height="30" bgcolor="#5293D3"><strong
                                        style="color:#FFFFFF">&nbsp;&nbsp;报修管理</strong></td>
                            </tr>
                            <tr>
                                <td class="leftnav"><a href="/index/repair/repair" target="main">添加报修</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="leftnav"><a href="/index/repair/index"
                                                       target="main">报修记录</a></td>
                            </tr>
                            <?php if(\think\Session::get('identity') == 0): ?>
                            <tr>
                                <td height="30" bgcolor="#5293D3"><strong
                                        style="color:#FFFFFF">&nbsp;&nbsp;学生管理</strong></td>
                            </tr>
                            <tr>
                                <td class="leftnav"><a href="/index/studentmanage/add" target="main">添加学生</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="leftnav"><a href="/index/studentmanage/index"
                                                       target="main">学生列表</a></td>
                            </tr>
                            <?php endif; ?>
                            <tr>
                                <td height="30" bgcolor="#5293D3"><strong
                                        style="color:#FFFFFF">&nbsp;&nbsp;考勤管理</strong></td>
                            </tr>
                            <?php if(\think\Session::get('identity') == 1): ?>
                            <tr>
                                <td class="leftnav"><a href="/index/attendance/attend" target="main">考勤报道</a>
                                </td>
                            </tr>
                            <?php endif; if(\think\Session::get('identity') == 0): ?>
                            <tr>
                                <td class="leftnav"><a href="/index/attendance/index?sort=0"
                                                       target="main">考勤记录</a></td>
                            </tr>
                            <?php endif; if(\think\Session::get('identity') == 1): ?>
                            <tr>
                                <td class="leftnav"><a href="/index/attendance/studentIndex"
                                                       target="main">考勤记录</a></td>
                            </tr>
                            <?php endif; ?>
                            <tr>
                                <td height="30" bgcolor="#5293D3"><strong
                                        style="color:#FFFFFF">&nbsp;&nbsp;公告管理</strong></td>
                            </tr>
                            <?php if(\think\Session::get('identity') == 0): ?>
                            <tr>
                                <td class="leftnav"><a href="/index/affiche/add"
                                                       target="main">发布公告</a></td>
                            </tr>
                            <?php endif; ?>
                            <tr>
                                <td class="leftnav"><a href="/index/affiche/index" target="main">公告列表</a></td>
                            </tr>


                        </table>
                    </td>
                </tr>
            </table>
        </td>
        <td width="3" bgcolor=#5293D3>
            <table border=0 align="center" cellpadding=0 cellspacing=0>
                <tr>
                    <td width="17" align=middle valign=center><span class='np' id='switchPoint' onClick='switchSysBar()'
                                                                    title="打开/关闭导航"
                                                                    style="font-family: Webdings;">3</span></td>
                </tr>
            </table>
        </td>
    </tr>
</table>