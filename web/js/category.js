/**
 * Created by Administrator on 16-6-3.
 */
$(function(){
    getProductParentCategory();
});

//获取产品父类别
function getProductParentCategory(){
    $.ajax({
        url: 'index.php?r=category/get-category-list',
        type: 'POST',
        data: '',
        dataType: 'json',
        success: function(response) {
            var list = response.param.list;
            var category = '<option value="0">无</option>';
            $.each(list, function(index,item){
                category += '<option value="'+item.id+'">'+item.name+'</option>';
            });
            $('#parent_category').html(category);
        }
    });
}

//获取顶级菜单
function getTopCategory(){
    $.ajax({
        url: 'index.php?r=category/get-top-category-list',
        type: 'POST',
        data: '',
        dataType: 'json',
        success: function(response) {
            var tpl = $('#data_tpl').html();
            var list = response.param.list;
            var html = '';
            $.each(list, function(index,item){
                var newTr = tpl;
                newTr = newTr.replace(/%id/g,item.id);
                newTr = newTr.replace(/%name/g,item.name);
                newTr = newTr.replace(/%sort/g,item.sort);
                newTr = newTr.replace(/%create_time/g,item.create_time);

                html += newTr;
            });
            $('#data_list').html(html);
        }
    });
}