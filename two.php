 <?php
   if($_GET["1"] || $_GET["2"])
   $ketqua = 0;
  if($_GET['ketqua'] == '-') {
    echo "kết quả = ". ($_GET['1'] - $_GET['2']). "<br>";}
    
    //  if($_GET['ketqua'] == '+') {
    //  echo "kết quả = ". ($_GET['1'] + $_GET['2']). "<br>";}
        
    //  if($_GET['ketqua'] == '*') {
    //  echo "kết quả = ". ($_GET['1'] * $_GET['2']). "<br>";}
            

    //  if($_GET['ketqua'] == '/') {
    //  echo "kết quả = ". ($_GET['1'] / $_GET['2']). "<br>";}
                


?>




<html>
    <head>
        <title>Bài tập</title>
    </head>
    <body>
    <form action="http://localhost:8080/1/two.php" method="GET">
    Nhập số thứ 1: <input type="text" name="1"/><br>
    Nhập số thứ 2: <input type="text" name="2"/><br>
    phép tinh: <input type="text" name="ketqua"/>
    <input type="submit"/>
    </form>



 







    </body>
</html>