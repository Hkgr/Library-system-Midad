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
                <div class="div_center">
                    <h2 class="title_deg">Add Book</h2>
                    <form action="{{url('store_book')}}" method="post" enctype="multipart/form-data">
                       @csrf
                    <div class="div_pad">
                         <label>Book Title</label>
                        <input type="text" name="book_name">
                        </div>
                        <div class="div_pad">
                        <label>Auther Name</label>
                        <input type="text" name="auther_name">
                        </div>
                        <div class="div_pad">
                        <label>Quantity</label>
                        <input type="number" name="quantity">
                        </div>
                        <div class="div_pad">
                        <label>Description</label>
                        <textarea name="description"></textarea>
                        </div>
                        <div class="div_pad">
                          <label>Category</label>
                          <select name="category" required>
                           <option>Select</option>
                          @foreach($data as $data)
                          <option value="{{$data -> id}}">{{$data -> cat_title}}</option>    
                          @endforeach
                                </select>
                        </div>

                        <div class="div_pad">
                        <label>Book Image</label>
                        <input type="file" name="book_img">
                        </div>

                        <div class="div_pad">
                        <label>Auther Image</label>
                        <input type="file" name="auther_img">
                        </div>
                        
                        <div class="div_pad">
                        <input type="submit" name="Add Book" class="btn btn-warning">
                        </div>

                    </form>
                </div>
            </div>
        </div>


        </div>
    


        @include('manager.footer')
</html>