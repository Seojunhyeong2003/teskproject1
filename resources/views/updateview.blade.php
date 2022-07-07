<!DOCTYPE html>
<html>
  <head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Create View</title>
  </head>
  <body>
    <div>
  <h1>작성</h1>
  <div>
    <form action="updatedata" method="get">
      @csrf
      <label for="">포스트 이름</label>
      <input type="text" name="title" id="" value={{$title}} class="form-control mt-4 mb-2">
      <label for="">포스트 내용</label>
      <div class="form-group">
        <textarea rows="10" name="description" value={{$description}} class="form-control" id=""></textarea>
      </div>
      <input type="hidden" name="" value="{{$id}}">
      <button type="submit" class="btn btn-secondary mb-3">저장하기</button>
    </form>
  </div>
</div>
  </body>
</html>




