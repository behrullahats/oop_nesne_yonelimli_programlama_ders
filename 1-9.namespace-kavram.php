<?php
// Namespace Kavramı

// Dosyalarımızın isimsel organizasyonunu sağlar.Birden daha fazla sınıfı dosyamıza dahil ettiğimizde sınıf isimleri benzerlik gösterirse bu sorunu çözer.

// Cannot declare class User, normalde bu hatayı verir.
// User.php Class/user.php sayfalarında namespace kullanımını yaptım.

use class1\User;
use class2\User as Class2User;

require 'user.php';
require 'Class/user.php';


$a = new User;
$b = new Class2User;
