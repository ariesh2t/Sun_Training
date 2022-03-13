* Quản lý database
- Tạo, sửa, đổi tên bảng
- Thêm, sửa, xóa cột trong bảng
* Xem tat ca cac migrate duoc tao tu truoc den nay
php artisan migrate:status

* Tao migrate moi
php artisan make:migration table_name
Ex: php artisan make:migration crate_categories_table
=> Chạy migration:
php artisan migrate (Chạy những migrate chưa chạy)
* Xóa cv cua migrate truoc do:
php artisan migrate:rollback
php artisan migrate:rollback --step=5 (khoi phuc 5 lan di chuyen cuoi cung)
* Xóa all cv cua migrate:
php artisan migrate:reset
* Refresh migrate:
php artisan migrate:refresh (rollback all migrate va chay lai migrate)
* Fresh migrate:
php artisan migrate:fresh (Drop cac bang)
* Create table
Schema::create('table_name',function () {
    $table->increments('id');                       => id la so nguyen, khoa chinh, tu tang
    $table->timestamps();                           => tao ra cot created_at va updated_at
    $table->charset = 'utf8mb4';                    => chi dinh bo ky tu duoc su dung
    $table->collation = 'utf8mb4_unicode_ci';
    $table->temporary();                            => chi dinh la bang tam, chỉ hiển thị với phiên cơ sở dữ liệu của kết nối hiện tại và tự động bị loại bỏ khi kết nối bị đóng:
});

=> Checking For Table / Column Existence
if (Schema::hasTable('users')) {
    //
}

if (Schema::hasColumn('users', 'email')) {
    //
}

* Update table
Schema::table('table_name', function () {
    $table->string('id');
});

* Rename table
Schema::rename($from, $to);

* Drop table
Schema::drop('users');
Schema::dropIfExists('users');

* Column Modifiers
- Su dung 1 so cong cu sua doi khi them cot vao bang
Schema::table('users', function (Blueprint $table) {
    $table->string('email')->nullable();                => cho phep null
    $table->after('password', function ($table) {
        $table->string('address_line1');
        $table->string('address_line2');                => thu tu cot
        $table->string('city');
    });
});

* Updating Column Attributes
Schema::table('users', function (Blueprint $table) {
    $table->string('name', 50)->nullable()->change();   => change method cho phep sua loai va thuoc tinh cua cot
    $table->renameColumn('from', 'to');                 => sua ten cot
    $table->dropColumn('votes');
    $table->dropColumn(['votes', 'avatar', 'location']);
});

* Foreign Key Constraints
+ create
$table->foreign('cat_id')->references('cat_id')->on('categories')->onDelete('cascade');
+ drop
$table->dropForeign('posts_user_id_foreign');
$table->dropForeign(['user_id']);           => drop mang khoa ngoai

* Seeder: Gieo du lieu that
+ Chi co 1 phuong thuc run
Tao class ben ngoai
class catSeeder extends Seeder {
    public function run(){
        DB::table('categories')->insert([
            ['cat_name' => Str::random(10), 'cat_desc' => Str::random(50)],
            ['cat_name' => Str::random(10), 'cat_desc' => Str::random(50)],
            ['cat_name' => Str::random(10), 'cat_desc' => Str::random(50)]
        ]);
    }
}
goi lai vao run()
$this->call([
    catSeeder::class,
    productSeeder::class,
]);

* Factory: Gieo du lieu hang loat
* Faker: Thu vien tao giu lieu gia

