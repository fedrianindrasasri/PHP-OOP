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
