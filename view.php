<?php
    //   $file = $_GET['file'];
    //  $path = implode(':',file($file));
    //   $contents = explode('::',implode(':',file($file)));
    // echo $contents.'<br>';
    //     foreach($contents as $content){
    //         echo $content.'<br>';
    //     }
?>
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
                <h6 class="text-center">BỘ NT & PTNT </h6>
                <h4>TRƯỜNG ĐẠI HỌC THỦY LỢI</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">KẾT QUẢ BÀI THI ỨNG DỤNG CÔNG NGHỆ THÔNG TIN</h3>
            </div>
        </div>
        <?php
           $files = scandir('result');
           $file = $_GET['file'];
           ?>
        <div class="row">
            <div class="col-3">
                <?php
                echo 'Số báo danh: '.explode('_',$files[3])[3]
            ?>
            </div>ile
            <div class="col-3">
                <?php
                echo 'Họ và tên: '.explode(':',file($file)[1])[1]
            ?>
            </div>
            <div class="col-3">
                <?php
                echo 'Điểm thi: '.explode(':',file($file)[4])[1]
            ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php
                echo 'Mã tệp tin bài làm: '.$file;
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <?php
                echo 'Ngày thi: '.explode('_',$files[4])[4]
            ?>
            </div>
            <div class="col-3">
                <?php
                echo 'Giờ nộp bài: '.explode('_',$files[5])[5]
            ?>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <h6 class="a">Thí sinh</h6>
            </div>
            <div class="col-4">
                <h6 class="a">Giám khảo 1</h6>
            </div>
            <div class="col-4">
                <h6 class="a">Giám khảo 2</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table" class="a">
                    <thead>
                        <tr>
                            <th scope="col">Số thứ tự</th>
                            <th scope="col">Nội dung câu hỏi</th>
                            <th scope="col">Điểm đạt</th>
                            <th scope="col">Đáp án đã chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //    for($i = 3;$i < count($file); $i++){
                     
                            //     echo '<tr>';
                            //  echo   '<th>'.$i.'</th>';
                            //   echo  '<td>'.explode('_',$files[$i])[3].'</td>';
                            //   echo  '<td>'.explode('_',$files[$i])[2].'</td>';
                            //    echo '<td>'.explode('_',$files[$i])[4].'</td>';
                            //    echo '<th>'.explode('_',$files[$i])[5].'</th>';
                            //   echo '<td>'.explode('.',explode('_',$files[$i])[6])[0].'</td>';
                            //    echo '<td><a href="view.php?file='.'result/'.$files[$i].'">'.'result/'.$files[$i].'</a></td>';       
                            //    echo '<td></td>';
                            //  }
                            for($i = 9;$i < count(file($file)); $i++){
                            echo '<tr>';
                            if($i >=9){
                                $j = $i - 8;
                            echo   '<th>'.$j.'</th>';
                            }
                            
                             echo  '<td>'.explode(':',file($file)[$i])[0].'</td>';
                             echo  '<td>'.explode(':',file($file)[10])[1].'</td>';
                              echo '<td>'.explode(':',file($file)[11])[1].'</td>';
                              echo '<tr>';
                            }
                            ?>
                    </tbody> 
                </table>
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