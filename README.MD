PHP OOP

#Function
- selain menambahkan properties, kita juga bisa menambahkan function ke object
- cara dengan mendeklarasikan function tersebut didalam block class
- sama seperti function biasanya, kita juga bisa menambahkan return value dan parameter
-  untuk mengakses function tersebut, kita juga bisa menggunakan tanda -> dan diikuti dengan nama methodnya. sama seperti mengakses properties.

#This Keyword
- saat kita membuat kode didalam function didalam class, kita bisa menggunakan kata kunci this untuk mengakses object saat ini.
- misal kadang kita butuh mengakses properties atau functionn lain di class yang sama.

#Constant
- Properties di class bisa diubah, mirip seperti variable.
- untuk membuat constant kita bisa menggunakan kata kunci const sejak php 7.4 tanpa tanda $
- cara mengakses nya dengan cara
    NamaClass::NAMA_CONSTANT

#Self Keyword
-  jika didalam class (misal di function) kita ingin mengakses constant, kita perlu mengakses menggunakan NamaClass::NAMA_CONSTANT
- namun jika didalam class yang sama, kita bisa menggunakan kata kunci self untuk mempermudah.

#Constructor
- di PHP kita bisa membuat constructor, constructor adalah function yang akan dipanggil saat pertama kali Object dibuat.
- mirip seperti function, kita bisa memberi parameter di constructor
- Nama constructor di PHP haruslah __construct()

#Destructor
- jika constructor adalah function yang akan dipanggil ketika object dibuat
- Destructor adalah function yang akan dipanggil ketika object dihapus dari memory
- biasanya ketika object tersebut sudah tidak lagi digunakan, atau ketika aplikasi akan mati
- untuk membuat function destructor, kita bisa menggunakan nama function __destruct()
-  khusus untuk destructor, kita tidak boleh menambahkan function argument
- dalam penggunaan sehari-hari, ini misal cocok untuk menutup koneksi ke DB atau menutup proses menulis ke file, sehingga tidak terjadi memory leak.


#Inheritance
- Inheritance atau Pewarisan adalah kemampuan untuk menurunkan sebuah class ke class lain
- dalam artian, kita bisa membuat class Parent dan class Child
- Class Child, hanya bisa punya satu class Parent, namun class Parent bisa punya banyak class Child,
- saat sebuah class diturunkan, maka semua properties dan function yang ada di class Parent, secara otomatis akan dimiliki oleh class child.
- untuk melakukan pewarisan, di class Child, kita harus menggunakan kata kunci extends lalu diikuti dengan nama class parent nya.

#NameSpace
- saat kita membuat aplikasi, bisa dipastikan kita akan banyak sekali membuat class
- jika class terlalu banyak, kadang akan menyulitkan kita untuk mencari atau mengklasifikasikan jenis-jenis class
- PHP memiliki fitur namespace, dimana kita bisa menyimpan class-class kita didalam namespace
- Namespace bisa nested, dan jika kita ingin mengakses class yang terdapat di namespace, kita perlu menyebutkan nama namespacenya
- namespace bagus ketika kita punya beberapa class yang sama, dengan menggunakan namespace nama class sama tidak akan menjadi error di PHP
- untuk membuat namespace, kita bisa menggunakan kata kunci namespace
- jika kita ingin membuat sub namespace, kita cukup gunakan karakter \ setelah namespace sebelumnya
- selain class, kita juga menggunakan function dan constant di namespace
- dan jika kita ingin menggunakan function atau constant tersebut, kita bisa menggunakannya dengan diawali dnegan nama namespacenya.
- secara default saat kita membuat kode di PHP sebenarnya itu disimpan di global namespace
- Global namespace adalah namespace yang tidak memiliki nama namespace


#Import
- jika terlalu sering menggunakan class, function atau constant yang sama, maka terlalu banyak duplikasi dengan menyebut namespace yang sama berkali-kali
- hal ini bisa kita hindari dengan cara mengimport class, function atau constant tersebut dengan menggunakan kata kunci use.

- Jika menggunakan alias pakai kata kunci as
- import banyak dengan cara tambahkan {} dan isi didalamnya


#Visibility
- adalah kemampuan properties, functino dan constant dapat diakses dari mana saja
- secara default, visibility adalah public, yang artinya bisa diakses dimana saja
- kata kunci var secara default adalah public
- acces level => public, protected, dan private


#Function Overriding
- adalah kemampuan mendeklarasikan ulang function di child class, yang sudah ada diparent class
- saat kita melakukan proses overriding tersebut, secara otomatis ketika kita membuat object dari class child, function yang di class parent tidak bisa diakses lagi.


#Parent Keyword
- kadang kita ingin mengakses function yang terdapat di class parent yang sudah terlanjur kita override di class child
- untuk mengakses function milik class parent, kita bisa menggunakan kata kunci parent 
- sederhananya, parent digunakan untuk mengakses class parent.

#Constructor Overriding
- karena constructor sama seperti function, maka constructor pun bisa kita deklarasikan ulang di class Child nya
- sebenarnya di PHP, kita bisa mengoverride function dengan arguments yang berbeda, namun sangat tidak disarankan.
- jika kita melakukan override function dengan arguments berbeda, maka PHP akan menampilkan WARNING
- namun berbeda dengan constructor overriding, kita boleh mengoverride dengan mengubah argumentsnya, namun direkomendasikan untuk memanggil parent constructor.


#Polymorphism
- berasal dari bahasa yunani yang berarti banyak bentuk
- dalam OOP, polymorphism adalah kemampuan sebuah object berubah bentuk menjadi bentuk lain
- polymorphism erat hubungannya dengan inheritance


#Type Check & Casts
- sebelum melakukan konversi, pastikan kita mealkukan type check (tipe data), dengan menggunakan kata kunci instanceof
- hasil dari instanceof adalah boolean


#Abstract Class
- adalah class tersebut tidak bisa dibuat sebagai object secara langsung, hanya bisa diturunkan
- untuk membuat nya kita menggunakan kata kunci abstract sebelum kata kunci class
- sehingga abstract class bisa kita gunakan sebagai kontrak untuk child class nya

#Abstract Function
- saat kita membuat class abstract, kita juga bisa membuat abstract function
- saat kita membuat funtion nya kita tidak boleh membuat block functionnya
- abstract function wajib di override di child classnya
- abstract function tidak boleh memiliki access modifier privte.



#Getter dan Setter
- encapsulation artinya memastikan data sensitif sebuah object tersembunyi dari akses luar
- hal ini bertujuan agar kita bisa menjaga agar data sebuah object tetap baik dan valid
- biasanya menggunakan access modifier private
- agar bisa diubah kita makan menyediakan function untuk mengubah dan mendapatkan properties tersebut.

- di PHP, proses encapsulation sudah dibuat standarisasinya, dimana kita bisa menggunakan getter dan setter method
- Getter adalah function yang dibuat untuk mengambil data field
-  Setter adalah function untuk mengubah data field


#Interface
- sebenarnya yang lebih tepat disebut contract adalah Interface
- ini bukan UI
- perbedaan dengan abstract class adlah semua method otomatis abstract, tidak memiliki block
- di interface tidak boleh memiliki properties, hanya boleh memiliki constant
- untuk mewariskan interface kita tidak menggunakan extends melainkan implements
- dan berbeda dari class, kita bisa implements lebih dari satu interface

#Interface Inheritance
- Interface juga bisa mengimplement interface lain, bisa lebih dari 1, namun jika ingin mewarisi interface lain, kita menggunakan kata kunci extends, bukan implements.


#Trait
- trait mirip dengan abstract class, kita bisa membuat konkrit function atau abstract function
- yang membedakan adalah, di trait bisa kita tambahkan kedalam class lebih dari satu
- trait mirip seperti extension, dimana kita bisa menambahkan konkrit function kedalam class dengan trait
- secara sederhana trait adalah digunakan untuk menyimpan function-function yang bisa digunakan ulang di beberaap class
- untuk menggunakan trait di class, kita bisa menggunakan kata kunci use.

#Trait Overriding
- selain konkrit function, di trait kita juga bisa menambahkan abstract function
- jika terdapat abstract function di trait, maka secar otomatis functin tersebut harus di override di class yang menggunakan trait tersebut.

- Jika sebuah class memiliki parent class yang memiliki function yang sama dengan function di trait, maka secara otomatis trait akan mengoverride function tersebut.
- namun jika kita membuat function yang sama di class nya, maka secara otomatis kita akn mengoverride function di trait
- sehingga posisinya seperti ini parentclass =  override by=>Trait=override by=>childclass

#Trait Confilic
- jika kita menggunakan lebih dari satu trait, dan ada function yang sama di trait tersebut
- maka hal ini akan menyebabkan conflict
- jika terjadi konflik seperti ini , kita bisa mengatasinya dengan menggunakan kata kunci insteadof.

#Trait Inheritance
- trait bisa menggunakan trait lain, mirip seperti interface yang bisa implement interface lain
- untuk menggunakan trait lain dari trait, penggunaanya sama seperti trait digunakan di class

#Final Class
- jika menggunakan kata kunci ini maka class tidak bisa diwariskan lagi
- secara otomatis semua child class nya akan error

#Final Function
- kata kunci final juga bisa digunakan di function
- jika function di tambahkan kata final maka function tersebut tidak akan bisa dioverride lagi
-  ini sangat cocok jika kita ingin mengunci implementasi dari sebuah method agar tidak bisa diubah lagi oleh child class nya


#Anonymous Class
- atau class tanpa nama
- kemampuan mendeklarasikan class, sekaligus menginstansiasi objectnya secara langsung
- anonymous class sangat cocok ketika kita berhadapan dengan kasus membuat implementasi interface atau abstract class sederhana, tanpa harus membuat implementasi class nya

#static keyword
- adalah keyword yang bisa kita kgunakan untuk membuat properties atau function di class bisa diakses secara langsung tanpa menginstansiasi class terlebih dahulu
- saat kita buat static properties atau function, secara otomatis hal itu tidak akan berhubungan lagi dengan class instance yang kita buat
- untuk cara mengakses static properties dan function sama seperti mengakses constant, kita bisa menggunakan operator ::
-  static function tidak bisa mengakses function biasa, karena function biasa menempel pada class instance sedangkan static function tidak.


#stdClass
- adalah class kosong bawaan dari PHP
- biasanya digunakan ketika kita melakukan konversi dari tipe lain menjadi tipe object
- sangat berguna ketika misa kita ingin melakukan konversi dari tipe data array ke object secara otomatis


#Object Iteration
- saat kita membuat object dari sebuah class, kita bisa melakukan iterasi ke semua properties yang terdapat di object tersebut menggunakan foreach
- hal ini mempermudah kita saat ingin mengakses semua properties yang ada di object
- secara default, hanya properties yang public yang bisa diakses oleh foreach

#Iterator
- sebelumnya kita melakukan iterasi data di properties secara otomatis menggunakan foreach
- jika kita ingin menangani hal ini secara manual, kita bisa menggunakan iterator
- iterator adalah interface yang digunakan untuk melakukan iterasi, namun membuat iterator secara manual lumayan cukup ribet, oleh karena itu sekarang kita akan gunakan Array Iterator, yaitu iterator yang menggunakan array sebagai data iterasi nya
- dan agar class kita bisa di iterasi secara manual, kita bisa menggunakan interface IteratorAggreagate, disana kita hanya butuh mengoverride function getIterator() yang mengembalikan data Iterator.


#Generator
- pembuatan iterator secara manual sangatlah ribet
- untungnya di PHP, terdapat fitur generator, yang bisa kita gunakan untuk membuat Iterator secara otomatis hanya dengan menggunakan kata kunci yield


#Object Cloning
- kadang kita ada kebutuhan untuk menduplikasi sebuah object
- biasanya untuk melakukan hal ini, kita bisa membuat object baru, lalu menyalin semua properties di object awal ke object baru
- untungnya di php mendukung object cloning
- kita bisa menggunakan perintah clone untuk membuat duplikasi object
- secara otomatis semua properties di object awal akan diduplikasi ke object baru

#__clone() function
- kadang menyalin semua properties bukanlah yang kita inginkan
- misal saja kita hanya ingin menyalin beberapa properties saja, tidak ingin semuanya
- jika kita ingin memodifikasi cara PHP melakukan clone, kita bisa membuat function di dalam class nya dengan nama function __clone()
- function __clone() akan dipanggil di object hasil duplikasi setelah proses duplikasi selesai
- jadi jika kita ingin menghapus beberapa properties, bisa kita lakukan di function __clone()


#Comparing Object
- sama seperti tipe data yang lain, untuk membandingkan dua buah object, kita bisa menggunakan operator == dan ===
- operator == membandingkan semua properties yang terdapat di object tersebut, dan tiap properties jugakan dibandingkan menggunakan operator ==
- sedangkan operator ===, maka akan membandingkan apakan object identik, artinya mengacu ke object yang sama.


#Magic Function
- adalah function-function yang sudah ditentukan kegunaannya di PHP
- kita tidak bisa membuat function tersebut, kecuali memang sudah ditentukan kegunaannya
- contoh magic function sebelumnya __construct(), __destruct(), __clone()
- contoh lainnya
 *__toString function
 *__invoke() function
 *__debugInfo() function
 lainnya di
 php.net/manual/en/language.oop5.magic.php


#Overloading
- adalah kemampuan secara dinamis membuat properties atau function
- ini mirip meta programming di bahasa pemrograman lain seperti ruby
- namun ini berbeda dengan function overloading di bahasa pemrograman lain seperti Java
- overloading ini erat kaitannya dengan magic function yang sebelumnya sudah kita bahas

#properties overloading
- saat kita mengakses properties, maka secara otomatis properties akan diakses
- namun jika ternyata properties tersebut tidak tersedia di objectnya, maka PHP tidak secara otomatis akan menjadi error
- PHP akan melakukan fallback ke magic function
- dengan demikian kita bisa membuat properties secara dinamis dengan memandafaatkan magic function tersebut
- ada beberapa magic function yang bisa kita gunakan untuk properties overlaoding


#Function Overloading
- saat kita mengakses function, maka secara otomatis function akan diakses
- namun jika ternyata function tersebut tidak tersedia di objectnya, maka PHP tidak secara otomatis menjadikan itu error
- PHP akan melakukan fallback ke magic function
- dengan demikian kita bisa membuat function secara dinamis dengan memanfaatkan magic function tersebut
- ada beberapa magic function yang bisa kita gunakan untuk function overloading 


#Covariance dan Contravariance
- saat kita mengoverride function dari parent class, biasanya di child class kita akan membuat function yang sama dengan function yang ada di parent
- covariance memungkinkan kita mengoverride return function yang di parent dengan return value yang lebih spesifik

- sedangkan contravariance adalah memperbolehkan sebuah child class untuk membuat function argument yang lebih tidak spesifik dibandingkan parent nya


#DateTime
- di PHP kita bisa menggunakan class DateTime untuk memanipulasi data waktu
- ada banyak sekali function di class DateTime yang bisa kita gunakan untuk memanipulasi data waktu

- kadang kita hanya ingin memanipulasi waktu dan tanggal sebagian saja, misal hanya menambah 1 tahun, atau mengurai beberapa hari
- hal ini bisa dilakukan dengan function add milik DateTime
- namun function add tersebut menerima parameter berupa dateInterval
- saat menggunakan DateInterval duration, kita perlu menentukan berapa banyak kita menambah interval
- untuk permuadatan duration, harus diawali dengan karakter P yang artinya period.

- kita bisa menggunakan function setTimeZone untuk mengubah timezone DateTime

- Kadang kita ingin membuat representasi string dari DateTime yang sudah kita buat
- Hal ini bisa kita lakukan menggunakan function format()
- function format() menerima argument berupa format string, ini bisa kita gunakan untuk memanipulasi cara kiat menampilkan string format waktu


#Exception
- di PHP, error direpsentasikan dengan istilah exception, dan semua direpresentasikan dalam bentuk class exception
- kita bisa menggunakan class exception sendriri, atau menggunakan yang sudah disediakan oleh PHP
- jika kita ingin membuat exception, maka kita harus membuat class yang implement interface Throwable atau turunan-turunannya
