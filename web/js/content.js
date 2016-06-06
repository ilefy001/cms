/**
 * Created by Administrator on 16-6-6.
 */
//获取内容列表
function getContentList(){
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