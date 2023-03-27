<?php
include 'header.php';
require './addData.php';
$conn = addData();
$query = "SELECT * FROM `baiviet`";
$result = mysqli_query($conn, $query);

?>

<body>
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/slideshow/slide01.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./images/slideshow/slide02.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./images/slideshow/slide03.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</body>
<main class="container-fluid mt-3">
  <h3 class="text-center text-uppercase mt-3 mb-4 text-secondary fs-2">TOP bài hát yêu thích</h3>
  <div class="row gy-3">
    <?php
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-sm-3">
          <div class="card mb-2" id="card" style="width: 100%;">
            <img src=<?= $row['hinhanh'] ?? "./images/image/images/longme.jpg" ?> class="card-img-top" id="cardImg" alt="Hình ảnh minh họa">
            <div class="card-body">
              <h5 class="card-title text-center" style="font-family: Times New RomanTimes;">
                <a href="./detail.php?ma_bviet=<?= $row['ma_bviet'] ?>" class="text-decoration-none text-dark" id="cardTitle">
                 <strong> <?= $row['tieude'] ?></strong>
                </a>
              </h5>

            </div>
          </div>
        </div>
    <?php
      }
    }
    ?>
  </div>
</main>

<?php include 'footer.php'; ?>