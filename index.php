<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container">

    <div class="row">
      <div class="col-2  d-none d-md-inline">
      </div>
      <div class="col">
        <h1 class="display-2 mt-3">Journal App</h1>
        <div class="row mb-5">
          <div class="col-10">
            <label for="exampleFormControlTextarea1" class="form-label">What's on your mind?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="col-2 d-flex flex-column">
            <button type="button" class="btn btn-primary mt-auto">Add</button>
          </div>
        </div><!-- row -->

        <div class="row">
          <h1 class="display-5 mb-3">Earlier entries</h1>
        </div>
        <div class="row mb-3">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="card-body">
                <h5 class="card-title">Today I went to the mooon...</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mi purus, venenatis eget rhoncus ut, consequat id nisl. Aliquam at justo nec purus euismod feugiat ut in erat. Ut elementum felis sit amet convallis interdum. Etiam in tellus dapibus, mattis nulla pulvinar, viverra ligula. Praesent in varius magna, sed porttitor ante. Donec ullamcorper purus sed nisi consectetur, eu sollicitudin dui lacinia.</p>
                <p class="card-text"><small class="text-muted">15th of December 2019</small></p>
              </div>
            </div>
          </div>
        </div><!-- row -->
      </div><!-- col -->
      <div class="col-2 d-none d-md-inline">
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>