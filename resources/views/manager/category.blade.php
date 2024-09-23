<!DOCTYPE html>
<html>
  <head> 
    @include('manager.css')

    <style type="text/css">
        .div_center{
         text-align: center;
         margin: auto;   
        }
        
        .center{
            margin: auto;
            width: 50%;
            text-align: center; 
            margin-top: 50px;
            border: 1px solid white;
        }

        th{
            background-color: skyblue;
            padding: 10px;
        }

        tr{
           border: 1px solid white; 
           padding: 10px;
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
            <div>
               @if(session() -> has('message'))
               <div class="alert alert-success">
                  {{session() -> get('message')}}
                </div>
               @endif
            </div>

          <h1>Add Category</h1>

          <form action="{{url('add_category')}}" method="POST">

          @csrf

            <span style="padding-right: 15px">
            <label>Category Name</label>
            <input type="text" name="category" required>
            </span>

            <input class="btn btn-primary" type="submit" value="Add Category">
         </form>
         
         <div>
            <table class="center">
                <tr>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
                
                 @foreach($data as $data)

                <tr>
                    <td>{{$data -> cat_title}}</td>
                    <td>
                        <a  class="btn btn-danger" href="{{url('cat_delete',$data->id)}}">Delete</a>
                        <a  class="btn btn-info" href="{{url('edit_delete',$data->id)}}">Update</a>

                    </td>
                </tr>

                @endforeach
            </table>
         </div>


          </div>
        </div>
       </div>
      
      @include('manager.footer')
</html>