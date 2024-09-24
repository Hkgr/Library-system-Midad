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
        .title_deg{
color: white;
padding: 40px;
font-size: 30px;
font-weight: bold;
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
          <h2 class="title_deg">Borrow Book</h2>

          <div>
                <table class="table_center">
                <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Book Title</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Book Image</th>
            </tr>
             @foreach ($data as $data)
            <tr>
                <td>{{$data->user->name}}</td>
                <td>{{$data->user->email}}</td>
                <td>{{$data->user->phone}}</td>
                <td>{{$data->book->title}}</td>
                <td>{{$data->book->quantity}}</td>
                <td>{{$data->status}}</td>
                <td>
                    <img class="img" src="auther/{{$data->  book->auther_img}}">
                </td>
                <td>
                <img class="img" src="book/{{$data->book->book_img}}">
                </td>
                
              <td><a href="{{url('book_delete',$data->book->id)}}" class="btn btn-danger">Delete</a> </td>
              @endforeach
              </tr>
            </table>

        </div>

          </div>
        </div>
       </div>
      @include('manager.footer')
</html>