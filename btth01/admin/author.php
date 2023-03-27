<?php
require './header.php';
require '../addData.php';
require './function.php';

$conn = addData();
$query = "SELECT * FROM `tacgia`;";
$result = mysqli_query($conn, $query);

?>

<main class="container mt-5 mb-5">
  <div class="row">
    <div class="col-sm">
      <a href="add_author.php" class="btn btn-success">Thêm mới</a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tên tác giả</th>
            <th scope="col">Hình ảnh</th>
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
                <th scope="row"><?= html_escape($row['ma_tgia'])  ?></th>
                <td><?= html_escape($row['ten_tgia'])  ?></td>
                <td><?= html_escape($row['hinh_tgia'])  ?></td>
                <td>
                  <a href="edit_author.php?id=<?= $row['ma_tgia'] ?>">
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