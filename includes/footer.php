</div><!-- /.blog-main -->

<aside class="col-md-4 blog-sidebar">
  <div class="p-3">
    <h3>About</h3>
    <p><?php echo $siteDescription ?></p>
    <h4 class="font-italic">Categories</h4>
    <ol class="list-unstyled mb-0">
      <?php
      $categories = select("SELECT * FROM categories");

      foreach ($categories as $category) {
        echo '<li><a href="posts.php?category=' . $category['id'] . '">' . $category['name'] . '</a></li>';
      }
      ?>
    </ol>
  </div>
</aside><!-- /.blog-sidebar -->

</div><!-- /.row -->

</main><!-- /.container -->

<footer class="bg-dark blog-footer">
  <p>Scott Alton &copy; 2020</p>
</footer>


<script src="./js/main.js"></script>
</body>

</html>