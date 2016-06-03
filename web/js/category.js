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
            var category = '';
            $.each(list, function(index,item){
                category += '<option value="'+item.id+'">'+item.name+'</option>';
            });
            $('#parent_category').html(category);
        }
    });
}