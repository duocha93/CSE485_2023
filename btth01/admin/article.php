<?php
require './header.php';
require '../addData.php';
require './function.php';

$conn = addData();
$query = "SELECT * FROM `baiviet`;";
$result = mysqli_query($conn, $query);

?>

<main class="container mt-5 mb-5">
  <div class="row">
    <div class="col-sm">
      <a href="add_article.php" class="btn btn-success">Thêm mới</a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col" class="text-center">#</th>
            <th scope="col" class="text-center">Tiêu đề</th>
            <th scope="col" class="text-center">Tên bài hát</th>
            <th scope="col" class="text-center">Mã thể loại</th>
            <th scope="col" class="text-center">Tóm tắt</th>
            <th scope="col" class="text-center">Nội dung</th>
            <th scope="col" class="text-center">Mã tác giả</th>
            <th scope="col" class="text-center">Ngày viết</th>
            <th scope="col" class="text-center">Hình ảnh</th>
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
                <th scope="row"><?= html_escape($row['ma_bviet'])  ?></th>
                <td><?= html_escape($row['tieude'])  ?></td>
                <td><?= html_escape($row['ten_bhat'])  ?></td>
                <td><?= html_escape($row['ma_tloai'])  ?></td>
                <td><?= html_escape($row['tomtat'])  ?></td>
                <td><?= html_escape($row['noidung'])  ?></td>
                <td><?= html_escape($row['ma_tgia'])  ?></td>
                <td><?= html_escape($row['ngayviet'])  ?></td>
                <td><?= html_escape($row['hinhanh'])  ?></td>
                <td>
                  <a href="edit_article.php?id=<?= $row['ma_bviet'] ?>">
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