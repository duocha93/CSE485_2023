<?php
include './header.php';
?>
<main class="container mt-5 mb-5">
  <div class="row">
    <div class="col-sm">
      <h3 class="text-center text-uppercase fw-bold">Xóa tác giả</h3>
      <form action="handle_add_article.php" method="POST">     
        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Mã tác giả</span>
          <input type="text" class="form-control" name="valueAuthor" value=" ">
        </div>
        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Tên tác giả</span>
          <input type="text" class="form-control" name="valueDays" value=" ">
        </div>
        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Hình ảnh</span>
          <input type="text" class="form-control" name="valueImg" value="./images/image/images/cayvagio.jpg ">
        </div>
        <div class="form-group  float-end ">
          <input type="submit" value="Xóa" class="btn btn-success">
          <a href="author.php" class="btn btn-warning ">Quay lại</a>
        </div>
      </form>
    </div>
  </div>
</main>

<?php
require './footer.php';
?>
