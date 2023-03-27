<?php
require './header.php';
require '../addData.php';
require './function.php';

$conn = addData();
$query = "SELECT * FROM `theloai`;";
$result = mysqli_query($conn, $query);

?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <a href="add_category.php" class="btn btn-success">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên thể loại</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <th scope="row"><?= html_escape($row['ma_tloai'])  ?></th>
                                <td><?= html_escape($row['ten_tloai'])  ?></td>
                                
                                <td>
                                <a href="edit_category.php?id=<?= $row['ma_tloai'] ?>">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                </td>
                                <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php
                            }
                        }
                        ?>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </main> 
<?php
require './footer.php'
?>