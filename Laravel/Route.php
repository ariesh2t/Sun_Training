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
