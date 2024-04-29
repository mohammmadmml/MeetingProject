<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $emp = Employee::create(['نام'=>'محمد', 'نام خانوادگی'=>'ملکوتی', 'ایمیل'=>'malakouti1383@gmail.com','شرح کار'=>'کامل کردن فرانت بخش لاگین سایت', 'تاریخ ارایه کار'=>'1403.2.1']);
        $emp = Employee::create(['نام'=>'رضا', 'نام خانوادگی'=>'علی یاری', 'ایمیل'=>'reza@gmail.com','شرح کار'=>'کامل کردن بکند بخش لاگین سایت', 'تاریخ ارایه کار'=>'1403.2.1']);
        $emp = Employee::create(['نام'=>'عرفان', 'نام خانوادگی'=>'محمدی', 'ایمیل'=>'erfan@gmail.com','شرح کار'=>'کامل کردن فرانت صفحه اصلی سایت', 'تاریخ ارایه کار'=>'1403.2.5']);
        $emp = Employee::create(['نام'=>'متین', 'نام خانوادگی'=>'نوایی', 'ایمیل'=>'matin@gmail.com','شرح کار'=>'کامل کردن نمودار های سایت', 'تاریخ ارایه کار'=>'1403.2.1']);
        $emp = Employee::create(['نام'=>'بهنام', 'نام خانوادگی'=>'تشکر', 'ایمیل'=>'behnam@gmail.com','شرح کار'=>'بر طرف کردن باگ های بخش ثبت نام سایت', 'تاریخ ارایه کار'=>'1403.2.3']);

    }
}
