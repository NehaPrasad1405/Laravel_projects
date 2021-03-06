<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    
    <div class ="container">
    <div class ="jumbotron">
    <form method="POST" action="/blogs/store"> 
    @csrf()
    <h1>Create Blog:</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title"  placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <textarea class="form-control"  name="description" placeholder="Add your description" style="height:250px;"></textarea>
  </div>
  <div>
  <select class="custom-select" name="blog_category">
    <option selected>--Select Category--</option>
    @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    </div>
<div>
<select multiple class="custom-select" name="tag_id[]" style="margin-top:30px">
    <option selected>--Select Tag--</option>
    @foreach($tags as $tag)
        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
    </select>

</div>

  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
    </div>
    
    </div>
</body>
</html>