<?php
/*
 * Relationship
 * 1-1
 *public function address()
    {
        return $this->hasOne(Address::class);
    }
 *{{$user->address->country}}
 * Nguoc lai la $this->belongsTo(User::class);
 *
 * 1-N
 * public function product()
    {
        return $this->hasMany(Address::class);
    }
 *<h2>{{$category->category_name}}</h2>
    @foreach($category->product as $product)
        <h3>{{$product->product_name}}</h3>
    @endforeach

* Scope
 * + Global scope: Ap dung cho tat ca cac model
 *
 * + Local scope: ap dung cho chi model
 * Model: public function scopeActive($query)
    {
        $query->where('active', 1);
    }
Controller:
$users = App\Models\User::popular()->orWhere->active()->get();  orWhere -> or
Co the truyen tham so vao phuong thuc
 *
 *
 * Mass Asignment: giup gan hang loat so luong lon dau vao vao trong csdl
 * $user = User::create($request->validated());
 * De tranh lo hong bao mat: them thuoc tinh fillable chi dinh cot nao co the gan hang loat
 * Ngoai ra co the dung protected $guarded = ['is_admin']; chi dinh cac cot khong duoc gan hang loat
 * => chi duoc dung 1 trong 2 thuoc tinh fillable hoac guarded
 * - La 1 lo hong he thong, co 2 cach de
 */
