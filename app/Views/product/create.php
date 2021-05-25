<?= $this->extend('layout/base') ?>

<?= $this->section('content') ?>
  <div class="container">
  
  <form action="/product/send" method="post">
    <?= csrf_field();?>

    <div class="form-group">
      <label for="product">product</label>
      <input name="product" type="text" class="form-control" id="product" aria-describedby="product">
      <small id="product" class="form-text text-muted">We'll never share your text with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="description">description</label>
      <input name="description" type="text" class="form-control" id="description">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
  </div>  

  <?= $this->endsection()?>