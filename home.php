<?php 
include('connection.php');
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

$query = mysqli_query($conn, "select * from meals_data");
$no = 1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Meals Database</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <aside class="sidebar bg-primary d-flex flex-column justify-content-center align-items-center">
    <?php 
      if ($_SESSION['level'] == 'admin') {
        echo '<button type="button" class="btn mb-4 btn-add" data-bs-toggle="modal" data-bs-target="#addModal"
          title="Add Data">
          <img src="public/plus.svg" alt="plus">
        </button>';
      } 
    ?>

    <button type="button" class="btn btn-logout" data-bs-toggle="modal" data-bs-target="#logoutModal" title="Logout">
      <img src="public/logout.svg" alt="logout">
    </button>
  </aside>
  <main class="text-center ms-5">
    <h1 class="text-center py-3">The Meals Database</h1>
    <div class="mx-auto w-75 pb-4">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Meals</th>
            <th scope="col">Category</th>
            <th scope="col">Country</th>
            <?php 
            if ($_SESSION['level'] == 'admin') {
              echo '<th scope="col">Action</th>';
            } 
            ?>
          </tr>
        </thead>
        <tbody>
          <?php 
          
          while ($row = mysqli_fetch_array($query)) { 
          ?>
          <tr>
            <th scope='row'><?php echo $no;?></th>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['category'];?></td>
            <td><?php echo $row['country'];?></td>
            <?php
              if ($_SESSION['level'] == 'admin') {?>
            <td>
              <a href="#" type="button" class="btn btn-primary btn-xs" data-bs-toggle="modal"
                data-bs-target="#modal<?php echo $row['id']; ?>">Edit</a>
              <a href="javascript:;" data-id="<?php echo $row['id'] ?>" class="btn btn-danger" data-bs-toggle="modal"
                data-bs-target="#modal-konfirmasi">Delete</a>

              <!-- Modal Edit -->
              <div class="modal fade text-start" id="modal<?php echo $row['id']; ?>" tabindex="-1"
                aria-labelledby="tambahModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form action="utils/update.php?op=in" method="post">
                      <div class="modal-header">
                        <h5 class="modal-title" id="tambahModalLabel">Edit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>Id: <?php echo $row['id']; ?></p>
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['id']; ?>">
                        <div class="mb-3">
                          <label for="meal" class="form-label">Meal</label>
                          <input type="text" class="form-control" id="meal" name="meal"
                            value="<?php echo $row['name']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="category" class="form-label">Category</label>
                          <input type="text" class="form-control" id="category" name="category"
                            value="<?php echo $row['category']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="country" class="form-label">Country</label>
                          <input type="text" class="form-control" id="country" name="country"
                            value="<?php echo $row['country']; ?>">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            </td>
            <?php } ?>
          </tr>
          <?php
          $no++;
          };
          ?>
        </tbody>
      </table>
    </div>
  </main>

  <!-- Modal Logout -->
  <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure want to log out?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <a href="utils/logout.php" type="button" class="btn btn-primary">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Delete -->
  <div class="modal fade" id="modal-konfirmasi" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Delete Current Data?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="javascript:;" class="btn btn-danger" id="delete-true-data">Delete</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Add -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="utils/create.php?op=in" method="post">
          <div class="modal-header">
            <h5 class="modal-title" id="addModalLabel">Add Meal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="id" class="form-label">Id</label>
              <input type="text" class="form-control" id="id" name="id">
            </div>
            <div class="mb-3">
              <label for="meal" class="form-label">Meal</label>
              <input type="text" class="form-control" id="meal" name="meal">
            </div>
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <input type="text" class="form-control" id="category" name="category">
            </div>
            <div class="mb-3">
              <label for="country" class="form-label">Country</label>
              <input type="text" class="form-control" id="country" name="country">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save new meal</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="index.js"></script>
</body>

</html>