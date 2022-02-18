* Ket hop ca method va path => trung path -> xem method nao thi chay method do
=> Neu trung ca method va path -> chay tu tren xuong duoi

//Truyen dang tham so
Route::get('tintuc/{id?}' , function ($id=null) {
    $content = "Trang web co id = $id" ;
    return $content;
});
=> truyen tham so dung thu tu

* Validate route
Route::get('tintuc/{slug}-{id}.html' , function ($slug=null, $id=null) {
    $content = "Trang web co id = $id <br> slug = $slug" ;
    return $content;
    })->where(
    [
        'slug' => '.+',
        'id' => '[0-9]+'
    ]
);

* Doi ten cho route
Route::get('tintuc/{id?}/{slug?}.html' , function ($id=null, $slug=null) {
    $content = "Trang web co id = $id <br> slug = $slug" ;
    return $content;
    })->where(
    [
        'slug' => '.+',
        'id' => '[0-9]+'
    ]
)->name('admin/tin-tuc');

html: <a href="<?php echo route('admin/tin-tuc', ['id'=>3, 'slug'=>'unicode'])?>">Show news</a>

Route::resource('category', CategoriesController::class);
// Bo di 1 so method k dung den
Route::resource('category', CategoriesController::class)->except('create', 'edit');
// Chi lay cac method can dung
Route::resource('category', CategoriesController::class)->only('index', 'delete');


API, REST, RESTful
- API la giao thuc, một tập các quy tắc và cơ chế, một ứng dụng hay một thành phần sẽ tương tác với một ứng dụng hay thành phần khác
- REST là một dạng chuyển đổi cấu trúc dữ liệu, một kiểu kiến trúc để viết API. Nó sử dụng phương thức HTTP đơn giản để tạo cho giao tiếp giữa các máy, la 1 he thong cac rang buoc, gom 5 rang buoc, neu dap ung duoc 5 rang buoc thi goi la restful
- RESTful API là một tiêu chuẩn dùng trong việc thiết kế API cho các ứng dụng web (thiết kế Web services) để tiện cho việc quản lý các resource
