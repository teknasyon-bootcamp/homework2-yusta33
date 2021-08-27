<?php

/**
 * posts.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - functions.php içerisinde oluşturacağınız `getRandomPostCount` fonksiyonunuza min
 * ve max değerleri gönderip bu fonksiyondan rastgele bir tam sayı elde etmeniz
 * gerekiyor. (min ve max için istediğiniz değerleri seçebilirsiniz. Random bir
 * tam sayı elde etmek için `rand` (https://www.php.net/manual/en/function.rand.php)
 * fonksiyonunu kullanabilirsiniz.)
 *
 * - Elde ettiğiniz bu sayıyı da kullanarak `getLatestPosts` fonksiyonunu
 * çalıştırmalısınız. Bu fonksiyondan aldığınız diziyi kullanarak `post.php` betik
 * dosyasını döngü içinde dahil etmeli ve her yazı için detayları göstermelisiniz.
 */
include_once "functions.php"; // functions.php'yi cektim.
$randomnum = getRandomPostCount(1,100); // random numaranın min = 1 , max = 100 olarak belirledim.
$posts = getLatestPosts($randomnum); // cikan random tamsayiyi degiskene attim.
foreach($posts as $id => $post){ // type degerine bagli olarak renk degisimi
    if($post['type'] == "urgent") {  //kirmizi renk icin
        echo "<div style = 'background-color:red' >";
    }elseif($post['type'] == "warning"){ // sari renk icin
        echo "<div style = 'background-color:yellow' >";
    }else{ //normal icin
        echo "<div>";
    }
    getPostDetails($id, $post['title']); // post detaylari icin
         echo "</div>";
}
