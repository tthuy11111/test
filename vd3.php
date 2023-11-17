<!DOCTYPE html>
<html lang="en">
<body>

<?php
// Viết một chương trình PHP để in ra số chẵn từ 1 đến 10.
    echo "1. Số chẵn từ 1 đến 10 là: ";
    for ($i = 1; $i <= 10; $i++) {
      if ($i % 2 == 0) {
      echo $i . " ";
      }
    }
echo "<br>";
// Viết một chương trình PHP để kiểm tra xem một số nguyên có phải là số nguyên tố hay không.
    function test($n) {
      if ($n <= 1) {
      return false;
      }

      for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
        return false;
        }
      }
      return true;
    }
    $n = 11;
    if (test($n)) {
      echo "2. Số ". $n . " là số nguyên tố";
    } else {
      echo "2. Số ". $n . " không phải là số nguyên tố";
    }
echo "<br>";
// Viết một hàm PHP có tên inHinhChuNhat nhận vào hai tham số là chiều rộng và chiều cao, và in ra một hình chữ nhật sử dụng dấu sao (*) với kích thước đã cho.
    function inHinhChuNhat($width, $height) {
      for ($i = 0; $i < $height; $i++) {
        for ($j = 0; $j < $width; $j++) {
          echo "*";
        }
        echo "<br>";
      }
    }
  // Gọi hàm này để in ra một hình chữ nhật có chiều rộng là 5 và chiều cao là 3.
    echo "3. Ta có hình chữ nhật với chiều rộng là 5 và chiều cao là 3 như sau: ". "<br>";
    inHinhChuNhat(5, 3);
?>
</body>
</html>