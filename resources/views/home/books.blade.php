<div class="currently-market">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2><em>{{ __('books.books') }}</em> {{ __('books.sub') }}</h2>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="filters">
            <ul>
              <li data-filter=".msc" class="active">{{ __('books.allbooks') }}</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="row grid">

          @foreach($data as $data)
            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="book/{{$data->book_img}}" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>{{$data->title}}</h4>
                  <span class="author">
                    <img src="book/{{$data->auther_img}}" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>{{$data->auther_name}}</h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                  {{ __('books.ava') }}<br><strong>{{$data->quantity}}</strong><br> 
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                  {{ __('books.desc') }}<br><strong>{{$data->desc}}</strong><br> 
                  </span>
                  <br>
                  <div class="">
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#borrowModal{{$data->id}}">
                    {{ __('books.read') }} 
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="borrowModal{{$data->id}}" tabindex="-1" aria-labelledby="borrowModalLabel{{$data->id}}" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="borrowModalLabel{{$data->id}}">{{ __('books.dates') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="{{url('borrow_books', $data->id)}}" method="POST">
                      @csrf
                      <div class="mb-3">
                        <label for="start_date" class="form-label">{{ __('books.start_date') }}</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                      </div>
                      <div class="mb-3">
                        <label for="end_date" class="form-label">{{ __('books.end_date') }}</label>
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                      </div>
                      <button type="submit" class="btn btn-primary">{{ __('books.Confirm') }}</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('books.cancel') }}</button>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
