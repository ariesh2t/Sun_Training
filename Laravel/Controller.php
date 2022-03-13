<!--
    Query Builder la 1 lop db trong do chua nhieu phuong thuc ma laravel xay dung san nhu select, insert, update
    Eloquent ORM la phuong thuc chuyen doi tu he csdl sang mo hinh huong doi tuong
    - Tao ra user moi: new User(); Tham chieu den cac doi tuong; user->save()
    - SELECT: $user = User::find(1) -> Tim user co id=1
              $user = User::where("username", "LIKE", "David")->get();
    - UPDATE: $user = User::where("username", "LIKE", "David")->update();

    Auth: la qua trinh xac dinh thong tin xac thuc cua nguoi dung
    Có 2 cách để authorize trong laravel: Gates và Policies. + Gates chủ yếu dùng cho việc authorize các action riêng lẻ + Policies Class sẽ định nghĩa các rule liên quan tới 1 model hoặc resource cụ thể nào đó
-->
