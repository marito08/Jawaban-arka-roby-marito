<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php
  include('connect.php');

  $sql = $pdo->prepare("SELECT tbl_product.id as id,tbl_cashier.name as cashier, tbl_product.name as product, tbl_category.name as category, tbl_product.price as price FROM tbl_product LEFT JOIN tbl_cashier ON tbl_cashier.id = tbl_product.id_cashier LEFT JOIN tbl_category ON tbl_product.id_category = tbl_category.id ");

  $sql->execute();
  $no = 1;
  ?>
  <nav class="navbar navbar-light bg-light justify-content-between">
    <div class="container">
       <a class="navbar-brand">Navbar</a>
        <form class="form-inline" action="">
          <!-- Button trigger modal Add-->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add
          </button>
        </form>
    </div>
  </nav>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Cashier</th>
          <th scope="col">Product</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = $sql->fetch() ) :?>
          <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $row['cashier']?></td>
            <td><?= $row['product']?></td>
            <td><?= $row['category'] ?></td>
            <td><?= $row['price'] ?></td>
            <td>
              <a href="" class="editModal" data-toggle="modal" data-target="#editdataModal" id="<?= $row['id']?>">Edit</a>
              <a href="delete.php?id=<?= $row['id']?>" onclick="return confirm('Anda ingin menghapus data ?')">Hapus</a>
            </td>
          </tr>
        <?php endwhile;?>
      </tbody>
    </table>
     <!-- modal edit data -->
    <div class="modal fade" id="editdataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    </div>
    <!-- /modal data -->
    <!-- modal add data -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="add.php" method="POST">
              <div class="form-group">
                <?php 
                  $cashier = $pdo->prepare("SELECT * FROM tbl_cashier");
                  $cashier->execute();
                ?>
                <label for="cashier">Cashier</label>
                <select class="form-control" id="cashier" name="cashier">
                  <?php while($row = $cashier->fetch() ) :?>
                    <option value="<?= $row['id']?>">
                      <?= $row['name']; ?>
                    </option>
                  <?php endwhile; ?>
                </select>
              </div>
              <div class="form-group">
                <?php 
                  $category = $pdo->prepare("SELECT * FROM tbl_category");
                  $category->execute();
                ?>
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category">
                  <?php while($row = $category->fetch() ) :?>
                    <option value="<?= $row['id']?>">
                      <?= $row['name']?>
                    </option>
                  <?php endwhile; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="product">Product</label>
                <input type="text" class="form-control" name="product" id="product" placeholder="product">
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="price">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /modal data -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>