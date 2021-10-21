<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/form.css">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fuild">
        <div class="row">
            <div class="col-3">
            <h6 class = "text-center">BỘ NT & PTNT </h6>
            <h4>TRƯỜNG ĐẠI HỌC THỦY LỢI</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class = "text-center">DANH SÁCH TỔNG HỢP KẾT QUẢ THI CỦA THI SINH</h3>
                    <table class="table" class = "a">
                        <thead>
                            <tr>
                                <th scope="col">Số thứ tự</th>
                                <th scope="col">Số báo danh</th>
                                <th scope="col">Mã bài thi</th>
                                <th scope="col">Ngày thi</th>
                                <th scope="col">Giờ nộp bài</th>
                                <th scope="col">Điểm thi </th>
                                <th scope="col">Tệp kết quả</th>
                                <th scope="col">Kí tên</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $files = scandir('result');
                                for($i = 3;$i < count($files); $i++){
                     
                                echo '<tr>';
                                if($i>=3){
                                    $j = $i - 2;
                                    echo   '<th>'.$j.'</th>';
                                }
                              echo  '<td>'.explode('_',$files[$i])[3].'</td>';
                              echo  '<td>'.explode('_',$files[$i])[2].'</td>';
                               echo '<td>'.explode('_',$files[$i])[4].'</td>';
                               echo '<th>'.explode('_',$files[$i])[5].'</th>';
                              echo '<td>'.explode('.',explode('_',$files[$i])[6])[0].'</td>';
                               echo '<td><a href="view.php?file='.'result/'.$files[$i].'">'.'result/'.$files[$i].'</a></td>';       
                               echo '<td></td>';
                            }
                           /* $marks = explode('.',$items[6]);
                            $marks1 = explode('.',$items1[6]);
                            $marks2 = explode('.',$items2[6]);
                            $path = 'result/'.$file_1;
                            $path1 = 'result/'.$file_2;
                            $path2 = 'result/'.$file_3;
                           echo '<tr>';
                             echo   '<th>1</th>';
                              echo  '<td>'.$items[3].'</td>';
                              echo  '<td>'.$items[2].'</td>';
                               echo '<td>'.$items[4].'</td>';
                               echo '<th>'.$items[5].'</th>';
                               echo '<td>'.$marks[0].'</td>';
                               echo '<td><a href="view.php?file='.$path.'">'.$path.'</a></td>';       
                               echo '<td></td>';
                           echo '</tr>';
                           echo '<tr>';
                           echo   '<th>2</th>';
                            echo  '<td>'.$items1[3].'</td>';
                            echo  '<td>'.$items1[2].'</td>';
                             echo '<td>'.$items1[4].'</td>';
                             echo '<th>'.$items1[5].'</th>';
                             echo '<td>'.$marks1[0].'</td>';
                             echo '<td><a href="view.php?file='.$path1.'">'.$path1.'</a></td>';       
                             echo '<td></td>';
                         echo '</tr>';
                         echo '<tr>';
                         echo   '<th>3</th>';
                          echo  '<td>'.$items2[3].'</td>';
                          echo  '<td>'.$items2[2].'</td>';
                           echo '<td>'.$items2[4].'</td>';
                           echo '<th>'.$items2[5].'</th>';
                           echo '<td>'.$marks2[0].'</td>';
                           echo '<td><a href="view.php?file='.$path2.'">'.$path2.'</a></td>';       
                           echo '<td></td>';
                       echo '</tr>';*/
                            ?>
                        </tbody>
                    </table>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
               <h5 class = "a"> Giám thị 01</h5>
            </div>
           <div class="col-4">
            <h5 class = "a">Giám thị 02</h5>
            </div>
            <div class="col-4">
                  <h5 class = "a">Trưởng ban coi thi</h5>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>