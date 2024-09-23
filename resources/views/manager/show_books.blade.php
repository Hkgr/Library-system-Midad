<!DOCTYPE html>
<html>
  <head> 
    @include('manager.css')
    <style>
        .table_center{
            text-align:center;
            margin: auto;
        }
        th{
            background-color: skyblue;
            padding: 10px;
        }

        tr{
           border: 1px solid white; 
           padding: 10px;
        }
        .img{
            width: 80px;
            border-radius:50%;
        }
        </style>
  </head>
  <body>
   @include('manager.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('manager.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

           <div>
                <table class="table_center">
                <tr>
                <th>Book Title</th>
                <th>Auther Name</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Category</th>
                <th>Auther Image</th>
                <th>Book Image </th>
            </tr>
             @foreach ($book as $book)
            <tr>
                <td>{{$book->title}}</td>
                <td>{{$book->auther_name}}</td>
                <td>{{$book->quantity}}</td>
                <td>{{$book->desc}}</td>
                <td>{{$book->category->cat_title}}</td>
                <td>
                    <img class="img" src="auther/{{$book->auther_img}}">
                </td>
                <td>
                <img class="img" src="book/{{$book->book_img}}">
                </td>
    </tr>
    @endforeach
            </table>

        </div>


        </div></div></div>

      @include('manager.footer')
</html>