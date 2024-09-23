<!DOCTYPE html>
<html>
  <head> 
  
  @include('manager.css')
  <style>
                .div_center{
         text-align: center;
         margin: auto;   
        }
.div_deg{
     text-align: center;
     margin: auto;
}

.title_deg{
color: white;
padding: 40px;
font-size: 30px;
font-weight: bold;
}

label{
    display: inline-block;
    width: 200px;
}

.div_pad{
    padding: 15px;
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
            <div class="div_deg">

            <div class="div_center">
            <h2 class="title_deg">Update Book</h2>
                <form action="{{url('update_book',$data->id)}}" method="post" enctype="multipart/form-data">
                       @csrf
                    <div class="div_pad">
                         <label>Book Title</label>
                        <input type="text" value="{{$data->title}}" name="book_name">
                        </div>
                        <div class="div_pad">
                        <label>Auther Name</label>
                        <input type="text" value="{{$data->auther_name}}" name="auther_name">
                        </div>
                        <div class="div_pad">
                        <label>Quantity</label>
                        <input type="number" value="{{$data->quantity}}" name="quantity">
                        </div>
                        <div class="div_pad">
                        <label>Description</label>
                        <textarea value="{{$data->desc}}" name="description"></textarea>
                        </div>
                        <div class="div_pad">
                          <label>Category</label>
                          <select name="category" required>

                           <option value="{{$data->category_id}}">{{$data -> category ->cat_title}}</option>
                          @foreach($category as $category)
                          <option value="{{$category -> id}}">{{$data -> category ->cat_title}}</option>    
                          @endforeach
                                </select>
                        </div>

                        <div class="div_pad">
                        <label>Book Image</label>
                        <img style="width: 80px; border-radius:50%;" scr="book/{{$data->auther_img}}">
                        <input type="file" name="book_img">
                        </div>

                        <div class="div_pad">
                        <label>Auther Image</label>
                        <img style="width: 80px; border-radius:50%;" scr="auther/{{$data->auther_img}}">
                        <input type="file" name="auther_img">
                        </div>
                        
                        <div class="div_pad">
                        <input type="submit" name="Add Book" class="btn btn-warning">
                        </div>

                    </form>

            </div>
        </div>
      </div>



      @include('manager.footer')
</html>