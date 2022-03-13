<?php
/**
 * -- Accessors dùng để tạo thêm 1 thuộc tính cho model sau khi thực hiện truy vấn
 * public function getFullNameAttribute()
 * {
 *      return $this->first_name . ' ' . $this->last_name;
 * }
 * Mutators dùng để thay đổi, format lại giá trị của một 1 thuộc tính nào đó trong model
 * public function setUsernameAttribute($username)
 * {
 *        $this->attributes['username'] = Str::slug($username);
 * }
 * 
 * 
 * -- Scope
 * + Global scope: Ap dung cho tat ca cac model
 *
 * + Local scope: ap dung cho chi model
 * Model: public function scopeActive($query)
 * {
 *     $query->where('active', 1);
 * }
 * 
 * 
 * -- Middleware giống như một lớp bảo vệ nằm trước các controller nhận các request từ 
 *      route để xử lý, kiểm tra các request đó có hợp lệ hay không rồi mới đưa request đó vào controller để xử lý.
 * Global middleware: Được khai báo trong file Kernel.php -> $middleware. 
 *      Middleware này nhận hết tất các request truy cập vào ứng dụng để xử lý.
 * Group middleware: Được khai báo trong file Kernel.php -> $middlewareGroups. 
 *      Middleware này chia ra làm 2 nhóm là web và api, 2 nhóm middleware này được config mặc định ứng với 
 *      2 file web.php và api.php trong thư mục routes. Những route nào được viết trong 2 file đó sẽ được nhận group middleware tương ứng.
 * Route Middleware: Được khai báo trong file Kernel.php -> $routeMiddleware. 
 *      Là những middleware cơ bản, có thể gọi ở bất kì route nào mà mình muốn middleware kiểm tra.
 * 
 */