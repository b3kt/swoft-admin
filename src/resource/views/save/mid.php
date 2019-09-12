<!DOCTYPE html>
<html class="x-admin-sm">
<head>
    <?php $this->include('layouts/meta') ?>
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="x-nav">
            <span class="layui-breadcrumb">
                <a href="">首页</a>
                <a href="">演示</a>
                <a>
                    <cite>中间件列表</cite></a>
            </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"
       onclick="location.reload()" title="刷新">
        <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i>
    </a>
</div>
<div class="layui-fluid">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-body ">
                    <form class="layui-form layui-col-space5">
                        <div class="layui-input-inline layui-show-xs-block">
                            <input class="layui-input" placeholder="分类名" name="cate_name"></div>
                        <div class="layui-input-inline layui-show-xs-block">
                            <button class="layui-btn" lay-submit="" lay-filter="sreach"><i class="layui-icon"></i>增加
                            </button>
                        </div>
                    </form>
                    <hr>
                </div>
                <div class="layui-card-header">
                    <button class="layui-btn layui-btn-danger" onclick="delAll()">
                        <i class="layui-icon"></i>批量删除
                    </button>
                </div>
                <div class="layui-card-body ">
                    <table class="layui-table layui-form">
                        <thead>
                        <tr>
                            <th width="20">
                                <input type="checkbox" name="" lay-skin="primary">
                            </th>
                            <th width="70">ID</th>
                            <th>栏目名</th>
                            <th width="50">排序</th>
                            <th width="80">状态</th>
                            <th width="250">操作</th>
                        </thead>
                        <tbody class="x-cate">
                        <tr cate-id='1' fid='0'>
                            <td>
                                <input type="checkbox" name="" lay-skin="primary">
                            </td>
                            <td>1</td>
                            <td>
                                <i class="layui-icon x-show" status='true'>&#xe623;</i>
                                产品管理
                            </td>
                            <td><input type="text" class="layui-input x-sort" name="order" value="1"></td>
                            <td>
                                <input type="checkbox" name="switch" lay-text="开启|停用" checked="" lay-skin="switch">
                            </td>
                            <td class="td-manage">
                                <button class="layui-btn layui-btn layui-btn-xs"
                                        onclick="xadmin.open('编辑','admin-edit.html')"><i class="layui-icon">&#xe642;</i>编辑
                                </button>
                                <button class="layui-btn layui-btn-warm layui-btn-xs"
                                        onclick="xadmin.open('编辑','admin-edit.html')"><i class="layui-icon">&#xe642;</i>添加子栏目
                                </button>
                                <button class="layui-btn-danger layui-btn layui-btn-xs"
                                        onclick="member_del(this,'要删除的id')" href="javascript:;"><i class="layui-icon">&#xe640;</i>删除
                                </button>
                            </td>
                        </tr>
                        <tr cate-id='2' fid='1'>
                            <td>
                                <input type="checkbox" name="" lay-skin="primary">
                            </td>
                            <td>2</td>
                            <td>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="layui-icon x-show" status='true'>&#xe623;</i>
                                产品列表
                            </td>
                            <td><input type="text" class="layui-input x-sort" name="order" value="1"></td>
                            <td>
                                <input type="checkbox" name="switch" lay-text="开启|停用" checked="" lay-skin="switch">
                            </td>
                            <td class="td-manage">
                                <button class="layui-btn layui-btn layui-btn-xs"
                                        onclick="xadmin.open('编辑','admin-edit.html')"><i class="layui-icon">&#xe642;</i>编辑
                                </button>
                                <button class="layui-btn layui-btn-warm layui-btn-xs"
                                        onclick="xadmin.open('编辑','admin-edit.html')"><i class="layui-icon">&#xe642;</i>添加子栏目
                                </button>
                                <button class="layui-btn-danger layui-btn layui-btn-xs"
                                        onclick="member_del(this,'要删除的id')" href="javascript:;"><i class="layui-icon">&#xe640;</i>删除
                                </button>
                            </td>
                        </tr>
                        <tr cate-id='3' fid='2'>
                            <td>
                                <input type="checkbox" name="" lay-skin="primary">
                            </td>
                            <td>3</td>
                            <td>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                ├产品列表
                            </td>
                            <td><input type="text" class="layui-input x-sort" name="order" value="1"></td>
                            <td>
                                <input type="checkbox" name="switch" lay-text="开启|停用" checked="" lay-skin="switch">
                            </td>
                            <td class="td-manage">
                                <button class="layui-btn layui-btn layui-btn-xs"
                                        onclick="xadmin.open('编辑','admin-edit.html')"><i class="layui-icon">&#xe642;</i>编辑
                                </button>
                                <button class="layui-btn layui-btn-warm layui-btn-xs"
                                        onclick="xadmin.open('编辑','admin-edit.html')"><i class="layui-icon">&#xe642;</i>添加子栏目
                                </button>
                                <button class="layui-btn-danger layui-btn layui-btn-xs"
                                        onclick="member_del(this,'要删除的id')" href="javascript:;"><i class="layui-icon">&#xe640;</i>删除
                                </button>
                            </td>
                        </tr>
                        <tr cate-id='4' fid='2'>
                            <td>
                                <input type="checkbox" name="" lay-skin="primary">
                            </td>
                            <td>4</td>
                            <td>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                ├产品列表
                            </td>
                            <td><input type="text" class="layui-input x-sort" name="order" value="1"></td>
                            <td>
                                <input type="checkbox" name="switch" lay-text="开启|停用" checked="" lay-skin="switch">
                            </td>
                            <td class="td-manage">
                                <button class="layui-btn layui-btn layui-btn-xs"
                                        onclick="xadmin.open('编辑','admin-edit.html')"><i class="layui-icon">&#xe642;</i>编辑
                                </button>
                                <button class="layui-btn layui-btn-warm layui-btn-xs"
                                        onclick="xadmin.open('编辑','admin-edit.html')"><i class="layui-icon">&#xe642;</i>添加子栏目
                                </button>
                                <button class="layui-btn-danger layui-btn layui-btn-xs"
                                        onclick="member_del(this,'要删除的id')" href="javascript:;"><i class="layui-icon">&#xe640;</i>删除
                                </button>
                            </td>
                        </tr>
                        <tr cate-id='5' fid='0'>
                            <td>
                                <input type="checkbox" name="" lay-skin="primary">
                            </td>
                            <td>5</td>
                            <td>

                                <i class="layui-icon x-show" status='true'>&#xe623;</i>新闻
                            </td>
                            <td><input type="text" class="layui-input x-sort" name="order" value="1"></td>
                            <td>
                                <input type="checkbox" name="switch" lay-text="开启|停用" checked="" lay-skin="switch">
                            </td>
                            <td class="td-manage">
                                <button class="layui-btn layui-btn layui-btn-xs"
                                        onclick="xadmin.open('编辑','admin-edit.html')"><i class="layui-icon">&#xe642;</i>编辑
                                </button>
                                <button class="layui-btn layui-btn-warm layui-btn-xs"
                                        onclick="xadmin.open('编辑','admin-edit.html')"><i class="layui-icon">&#xe642;</i>添加子栏目
                                </button>
                                <button class="layui-btn-danger layui-btn layui-btn-xs"
                                        onclick="member_del(this,'要删除的id')" href="javascript:;"><i class="layui-icon">&#xe640;</i>删除
                                </button>
                            </td>
                        </tr>
                        <tr cate-id='6' fid='5'>
                            <td>
                                <input type="checkbox" name="" lay-skin="primary">
                            </td>
                            <td>6</td>
                            <td>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                ├国内新闻
                            </td>
                            <td><input type="text" class="layui-input x-sort" name="order" value="1"></td>
                            <td>
                                <input type="checkbox" name="switch" lay-text="开启|停用" checked="" lay-skin="switch">
                            </td>
                            <td class="td-manage">
                                <button class="layui-btn layui-btn layui-btn-xs"
                                        onclick="xadmin.open('编辑','admin-edit.html')"><i class="layui-icon">&#xe642;</i>编辑
                                </button>
                                <button class="layui-btn layui-btn-warm layui-btn-xs"
                                        onclick="xadmin.open('编辑','admin-edit.html')"><i class="layui-icon">&#xe642;</i>添加子栏目
                                </button>
                                <button class="layui-btn-danger layui-btn layui-btn-xs"
                                        onclick="member_del(this,'要删除的id')" href="javascript:;"><i class="layui-icon">&#xe640;</i>删除
                                </button>
                            </td>
                        </tr>
                        <tr cate-id='7' fid='5'>
                            <td>
                                <input type="checkbox" name="" lay-skin="primary">
                            </td>
                            <td>7</td>
                            <td>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                ├国外新闻
                            </td>
                            <td><input type="text" class="layui-input x-sort" name="order" value="1"></td>
                            <td>
                                <input type="checkbox" name="switch" lay-text="开启|停用" checked="" lay-skin="switch">
                            </td>
                            <td class="td-manage">
                                <button class="layui-btn layui-btn layui-btn-xs"
                                        onclick="xadmin.open('编辑','admin-edit.html')"><i class="layui-icon">&#xe642;</i>编辑
                                </button>
                                <button class="layui-btn layui-btn-warm layui-btn-xs"
                                        onclick="xadmin.open('编辑','admin-edit.html')"><i class="layui-icon">&#xe642;</i>添加子栏目
                                </button>
                                <button class="layui-btn-danger layui-btn layui-btn-xs"
                                        onclick="member_del(this,'要删除的id')" href="javascript:;"><i class="layui-icon">&#xe640;</i>删除
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="layui-card-body ">
                    <div class="page">
                        <div>
                            <a class="prev" href="">&lt;&lt;</a>
                            <a class="num" href="">1</a>
                            <span class="current">2</span>
                            <a class="num" href="">3</a>
                            <a class="num" href="">489</a>
                            <a class="next" href="">&gt;&gt;</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    layui.use(['form'], function () {
        form = layui.form;

    });

    /*用户-删除*/
    function member_del(obj, id) {
        layer.confirm('确认要删除吗？', function (index) {
            //发异步删除数据
            $(obj).parents("tr").remove();
            layer.msg('已删除!', {icon: 1, time: 1000});
        });
    }

    // 分类展开收起的分类的逻辑
    //
    $(function () {
        $("tbody.x-cate tr[fid!='0']").hide();
        // 栏目多级显示效果
        $('.x-show').click(function () {
            if ($(this).attr('status') == 'true') {
                $(this).html('&#xe625;');
                $(this).attr('status', 'false');
                cateId = $(this).parents('tr').attr('cate-id');
                $("tbody tr[fid=" + cateId + "]").show();
            } else {
                cateIds = [];
                $(this).html('&#xe623;');
                $(this).attr('status', 'true');
                cateId = $(this).parents('tr').attr('cate-id');
                getCateId(cateId);
                for (var i in cateIds) {
                    $("tbody tr[cate-id=" + cateIds[i] + "]").hide().find('.x-show').html('&#xe623;').attr('status', 'true');
                }
            }
        })
    })

    var cateIds = [];

    function getCateId(cateId) {
        $("tbody tr[fid=" + cateId + "]").each(function (index, el) {
            id = $(el).attr('cate-id');
            cateIds.push(id);
            getCateId(id);
        });
    }

</script>
</body>
</html>