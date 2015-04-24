<!DOCTYPE html>
<html>
<head>
  <title>My Weblog</title>
  <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!-- navbar start -->
  <?php include 'elements/navbar.php' ?>
  <!-- navbar end -->
  <div class="container">
  <div class="row">
    <div class="col-md-10">
      <h1>My Web Log</h1>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-8">
      <div class="post">
        <div class="title">
          <a href="#"><h2>Post Title</h2></a>  
        </div>
        <div class="attribute">
          Posted by: <strong>Admin</strong> at <span class="time">00:00</span> 
          Labels :  <span class="label label-default"><i class="fa fa-tag"></i>  tags 1</span>   
                    <span class="label label-default"><i class="fa fa-tag"></i> tags 2</span>
          <span class="pull-right"><a href="#">0 comments</a></span>
        </div>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, quos architecto totam facere, ullam rerum similique est quae, odio doloremque exercitationem quasi, ducimus aliquam quisquam voluptas voluptatem minima amet quia.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet similique, non earum quae aut esse commodi illo saepe fugiat corrupti nobis quis quibusdam iste quisquam officiis molestias! Reprehenderit facere, possimus!</p>
        </div>
        <div class="readmore"><a href="#" class="btn btn-success btn-sm">Readmore...</a></div>
        <span class="clear"></span>
      </div>

      <div class="post">
        <div class="title">
          <a href="#"><h2>Post With Image</h2></a>  
        </div>
        <div class="attribute">
          Posted by: <strong>Admin</strong> at <span class="time">00:00</span> 
          Labels :  <span class="label label-default"><i class="fa fa-tag"></i>  tags 1</span>   
                    <span class="label label-default"><i class="fa fa-tag"></i> tags 2</span>
          <span class="pull-right"><a href="#">0 comments</a></span>
        </div>
        <div class="content">
          <img src="assets/images/post.jpg" alt="" class="img-thumbnail">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, quos architecto totam facere, ullam rerum similique est quae, odio doloremque exercitationem quasi, ducimus aliquam quisquam voluptas voluptatem minima amet quia.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet similique, non earum quae aut esse commodi illo saepe fugiat corrupti nobis quis quibusdam iste quisquam officiis molestias! Reprehenderit facere, possimus!</p>
        </div>
        <div class="readmore"><a href="#" class="btn btn-success btn-sm">Readmore...</a></div>
        <span class="clear"></span>
      </div>

      <div class="post">
        <div class="title">
          <a href="#"><h2>Post With Video</h2></a>  
        </div>
        <div class="attribute">
          Posted by: <strong>Admin</strong> at <span class="time">00:00</span> 
          Labels :  <span class="label label-default"><i class="fa fa-tag"></i>  tags 1</span>   
                    <span class="label label-default"><i class="fa fa-tag"></i> tags 2</span>
          <span class="pull-right"><a href="#">0 comments</a></span>
        </div>
        <div class="content">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/PFfK6-6vEZ0" frameborder="0" allowfullscreen></iframe>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, quos architecto totam facere, ullam rerum similique est quae, odio doloremque exercitationem quasi, ducimus aliquam quisquam voluptas voluptatem minima amet quia.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet similique, non earum quae aut esse commodi illo saepe fugiat corrupti nobis quis quibusdam iste quisquam officiis molestias! Reprehenderit facere, possimus!</p>
        </div>
        <div class="readmore"><a href="#" class="btn btn-success btn-sm">Readmore...</a></div>
        <span class="clear"></span>
      </div>

      <div class="post">
        <div class="title">
          <a href="#"><h2>Post Title</h2></a>  
        </div>
        <div class="attribute">
          Posted by: <strong>Admin</strong> at <span class="time">00:00</span> 
          Labels :  <span class="label label-default"><i class="fa fa-tag"></i>  tags 1</span>   
                    <span class="label label-default"><i class="fa fa-tag"></i> tags 2</span>
          <span class="pull-right"><a href="#">0 comments</a></span>
        </div>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, quos architecto totam facere, ullam rerum similique est quae, odio doloremque exercitationem quasi, ducimus aliquam quisquam voluptas voluptatem minima amet quia.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet similique, non earum quae aut esse commodi illo saepe fugiat corrupti nobis quis quibusdam iste quisquam officiis molestias! Reprehenderit facere, possimus!</p>
        </div>
        <div class="readmore"><a href="#" class="btn btn-success btn-sm">Readmore...</a></div>
        <span class="clear"></span>
      </div>

      <div class="center" style="width: 200px;">
      <ul class="pager">
        <li class="previous"><a href="#">&larr; Older</a></li>
        <li class="next"><a href="#">Newer &rarr;</a></li>
      </ul>
    </div>
    </div>
    <div class="col-sm-4 sidebar">
      <?php include 'elements/sidebar.php'; ?>
    </div>
  </div>
  </div>
  <div class="row footer center">
    &copy <?php echo date('Y') ?> <a href="#">My Weblog</a>
  </div>

  <!-- javascript -->
  <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>