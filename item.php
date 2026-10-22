
<?php
  include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Breath of the wild items</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
  <?php

include 'head.php'; 

?>
</head>

<body>
  
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-10">
    
        <?php if (isset($_SESSION['response'])) { ?>
        <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b><?= $_SESSION['response']; ?></b>
        </div>
        <?php } unset($_SESSION['response']); ?>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-4">
        <h3 class="text-center text-primary">Add item</h3>
        <form action="action.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $id; ?>">
          <div class="form-group">
            <input type="text" name="name" value="<?= $name; ?>" class="form-control" placeholder="Enter name" required>
          </div>
          <div class="form-group">
            <input type="text" name="item" value="<?= $item; ?>" class="form-control" placeholder="Enter description" required>
          </div>
          <div class="form-group">
            <input type="tel" name="desc" value="<?= $desc; ?>" class="form-control" placeholder="Enter game item type" required>
          </div>
          <div class="form-group">
            <input type="hidden" name="oldimage" value="<?= $photo; ?>">
            <input type="file" name="image" class="custom-file">
            <img src="<?= $photo; ?>" width="120" class="img-thumbnail">
          </div>
          <div class="form-group">
            <?php if ($update == true) { ?>
            <input type="submit" name="update" class="btn btn-success btn-block" value="Update Record">
            <?php } else { ?>
            <input type="submit" name="add" class="btn btn-primary btn-block" value="Add Record">
            <?php } ?>
          </div>
        </form>
      </div>
      <div class="col-md-8">
        <?php
          $query = 'SELECT * FROM item';
          $stmt = $conn->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();
        ?>
        
        <h1 class="text-center text-primary">Breath of the wild items</h1>
        <table class="table table-hover" id="data-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Image</th>
              <th>Name</th>
              <th>Description</th>
              <th>Item type</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?= $row['id']; ?></td>
              <td><img src="<?= $row['photo']; ?>" width="25"></td>
              <td><?= $row['name']; ?></td>
              <td><?= $row['item']; ?></td>
              <td><?= $row['desc']; ?></td>
              <td>
                <a href="details.php?details=<?= $row['id']; ?>" class="badge badge-primary p-2">Details</a> |
                <a href="action.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Do you want delete this record?');">Delete</a> |
                <a href="item.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2">Edit</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#data-table').DataTable({
      paging: true
    });
  });
  </script>
</body>
<section class="footer" id="Contact">
    <footer>
      <div class="footer_box">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <div class="footer-widget">
                <div class="widget-about"> 
                  <p>Our contact details.</p>
                  <ul class="contact-details">
                    <li>
                      <i class="fas fa-phone-alt"></i> Call Us:
                      <a href="#">07509389041</a>
                    </li>
                    <li>
                      <i class="fas fa-envelope-open-text"></i>
                      <a href="#">GamerWearhouse.@gmail.com</a>
                    </li>
                  </ul>
                  <ul class="social_icons">
                    <li><a href="https://en-gb.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/?lang=en-gb"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            


            <div class="col-lg-3 col-sm-6">
              <div class="footer-widget">
                <div class="footer-menu">
                  <h4 class="footer-widget-title">Popular Category</h4>
                  <ul>
                    <li>
                      <a href="#">event's</a>
                    </li>
                    <li>
                      <a href="#">tournments</a>
                    </li>
                    <li>
                      <a href="#">new guides</a>
                    </li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="footer-widget">
                <div class="footer-menu">
                  <h4 class="footer-widget-title">Our Company</h4>
                  <ul>
                    <li>
                        <a href="#">About Us</a>
                      </li>
                      <li>
                        <a href="#">How It Works</a>
                      </li>  
                      <li>
                        <a href="#">Contact Us</a>
                      </li>
                      <li>
                      <a href="#">Blog</a>
                    </li>
                  </ul>
                </div>
              </div>
              
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="footer-widget">
                <div class="footer-menu p-0">
                  <h4 class="footer-widget-title">Help Support</h4>
                  <ul>
                    <li>
                      <a href="#">Support Forum</a>
                    </li>
                    <li>
                      <a href="#">Terms & Conditions</a>
                    </li>
                    <li>
                      <a href="#">Support Policy</a>
                    </li> 
                    <li>
                      <a href="#">FAQs</a>
                    </li> 
                  </ul>
                </div>
             
              </div>
            
            </div>
          </div>
        </div>
      </div>
  
      <div class="mini-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright-text">
                <p>© 2020
                  <a href="#">TheGamerWearhouse</a>.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="theme-switches">
        <div data-theme="light" class="switch" id="switch-1"></div>
        <div data-theme="sky" class="switch" id="switch-2"></div>
        <div data-theme="purple" class="switch" id="switch-3"></div>
        <div data-theme="dark" class="switch" id="switch-4"></div>
      </div>
    </footer>
  </section>
<div class="back-to-top">
  <a title="Go to Top" href="#"><i class="fas fa-chevron-up"></i></a>
</div>


<script src="js/java.js"></script>
<script src="js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>




</html>