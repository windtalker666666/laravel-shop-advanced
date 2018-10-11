<?php

namespace App\Admin\Controllers;

use App\Models\Product;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use App\Models\Category;

class ProductsController extends CommonProductsController
{
    //use ModelForm; 移除
    public function getProductType()
    {
        return Product::TYPE_NORMAL;
    }

    protected function customGrid(Grid $grid)
    {
        // 使用 with 来预加载商品类目数据，减少 SQL 查询
        $grid->model()->with(['category']);
        $grid->id('ID')->sortable();
        $grid->title('商品名称');
        // Laravel-Admin 支持用符号 . 来展示关联关系的字段
        $grid->column('category.name', '类目');
        $grid->on_sale('已上架')->display(function ($value) {
            return $value ? '是' : '否';
        });
        $grid->price('价格');
        $grid->rating('评分');
        $grid->sold_count('销量');
        $grid->review_count('评论数');
    }

    protected function customForm(Form $form)
    {
        // 普通商品没有额外的字段，因此这里不需要写任何代码
    }
   
    
}
