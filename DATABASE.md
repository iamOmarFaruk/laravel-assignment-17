## ডাটাবেইস ডিজাইন (বাংলা ব্যাখ্যা)

এই প্রজেক্টে আমরা ৬টি টেবিল ব্যবহার করছি: `users`, `categories`, `products`, `customers`, `invoices`, `invoice_products`। নিচে প্রতিটি টেবিলের ফিল্ড, রিলেশন ও Eloquent সম্পর্কের উদাহরণ দেওয়া হলো।

### 1) users
- **কলাম**: `id`, `name`, `mobile` (nullable), `otp` (nullable), `email`, `email_verified_at`, `password`, `remember_token`, `timestamps`
- **রিলেশন**:
  - একজন ইউজারের বহু `categories`, `products`, `customers`, `invoices`, `invoice_products` থাকতে পারে।

Eloquent উদাহরণ (মডেল `app/Models/User.php` এ):
```php
public function categories() { return $this->hasMany(\App\Models\Category::class); }
public function products() { return $this->hasMany(\App\Models\Product::class); }
public function customers() { return $this->hasMany(\App\Models\Customer::class); }
public function invoices() { return $this->hasMany(\App\Models\Invoice::class); }
public function invoiceProducts() { return $this->hasMany(\App\Models\InvoiceProduct::class); }
```

### 2) categories
- **কলাম**: `id`, `name`, `user_id`, `timestamps`
- **রিলেশন**:
  - `categories` belongsTo `users`
  - `categories` hasMany `products`

Eloquent উদাহরণ:
```php
// app/Models/Category.php
class Category extends Model {
    public function user() { return $this->belongsTo(User::class); }
    public function products() { return $this->hasMany(Product::class); }
}
```

### 3) products
- **কলাম**: `id`, `user_id`, `category_id`, `name`, `price(12,2)`, `unit`, `image` (nullable), `timestamps`
- **রিলেশন**:
  - `products` belongsTo `users`
  - `products` belongsTo `categories`
  - `products` belongsToMany `invoices` via `invoice_products`

Eloquent উদাহরণ:
```php
// app/Models/Product.php
class Product extends Model {
    public function user() { return $this->belongsTo(User::class); }
    public function category() { return $this->belongsTo(Category::class); }
    public function invoices() {
        return $this->belongsToMany(Invoice::class, 'invoice_products')
            ->withPivot(['qty','sale_price'])
            ->withTimestamps();
    }
}
```

### 4) customers
- **কলাম**: `id`, `name`, `email` (nullable), `mobile` (nullable), `user_id`, `timestamps`
- **রিলেশন**:
  - `customers` belongsTo `users`
  - `customers` hasMany `invoices`

Eloquent উদাহরণ:
```php
// app/Models/Customer.php
class Customer extends Model {
    public function user() { return $this->belongsTo(User::class); }
    public function invoices() { return $this->hasMany(Invoice::class); }
}
```

### 5) invoices
- **কলাম**: `id`, `total(14,2)`, `discount(14,2)`, `vat(14,2)`, `payable(14,2)`, `user_id`, `customer_id`, `timestamps`
- **রিলেশন**:
  - `invoices` belongsTo `users`
  - `invoices` belongsTo `customers`
  - `invoices` belongsToMany `products` via `invoice_products`

Eloquent উদাহরণ:
```php
// app/Models/Invoice.php
class Invoice extends Model {
    public function user() { return $this->belongsTo(User::class); }
    public function customer() { return $this->belongsTo(Customer::class); }
    public function products() {
        return $this->belongsToMany(Product::class, 'invoice_products')
            ->withPivot(['qty','sale_price'])
            ->withTimestamps();
    }
}
```

### 6) invoice_products (pivot)
- **কলাম**: `id`, `invoice_id`, `product_id`, `user_id`, `qty(14,2)`, `sale_price(14,2)`, `timestamps`
- **রিলেশন**:
  - `invoice_products` belongsTo `users`
  - `invoice_products` belongsTo `invoices`
  - `invoice_products` belongsTo `products`
  - `invoice_id + product_id` এর উপর unique index রাখা হয়েছে, একই ইনভয়েসে একই পণ্য একাধিকবার না যোগ করার জন্য।

Eloquent উদাহরণ:
```php
// app/Models/InvoiceProduct.php
class InvoiceProduct extends Model {
    protected $table = 'invoice_products';
    public function user() { return $this->belongsTo(User::class); }
    public function invoice() { return $this->belongsTo(Invoice::class); }
    public function product() { return $this->belongsTo(Product::class); }
}
```

## মাইগ্রেশন রান করার ধাপ
```bash
php artisan migrate
```

SQLite ব্যবহার করলে `.env` এ `DB_CONNECTION=sqlite` সেট করতে হবে এবং `database/database.sqlite` ফাইলটি থাকতে হবে (এই প্রজেক্টে দেওয়া আছে)।


