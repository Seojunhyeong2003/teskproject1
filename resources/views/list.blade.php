<!DOCTYPE html>
<html>
  <head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Laravel CRUD</title>
  </head>
  <body>
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">메뉴</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">나에 대해</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">저의 정보</a></li>
            <li><a href="#" class="text-white">저의 이메일</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>Laravel CRUD</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
      <div class="container">
            <div class="row">
                <div class="">
                    <div class="">
                        <div class="">
                            <h2>게시판</h2>
                        </div>
                        <div class="card-body">

                            <div class="">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>제목</th>
                                            <th>내용</th>
                                            <th>수정</th>
                                            <th>삭제</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $item)
                                        <tr>
                                        <form action="updatedelete" method="get">
                                        <td><input type="hidden" name="id" value="{{$item['id']}}">{{$item['id']}}</td>
                                        <td><input type="hidden" name="title" value="{{$item['title'] }}">{{$item['title']}}</td>
                                        <td><input type="hidden" name="description" value="{{$item['description']}}">{{$item['description']}}</td>
                                        <td><input type="submit" value="수정" name="update"></td>
                                        <td><input type="submit" value="삭제"></td>
                                        </form>
                                        </tr>
                                    @endforeach
                                    <td align="right" colspan="5"><a href="/create" accept-charset="UTF-8" class="btn btn-secondary" title="Add New Post">
                                        <i aria-hidden="true"></i> 새 게시물 작성</a></td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer mt-auto py-3 bg-light">
            <div class="container">
                <span class="text-muted">동의대학교 소프트웨어융합학과 서준형</span>
            </div>
        </footer>
  </body>
</html>
