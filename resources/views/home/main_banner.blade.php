<style>
  .main-banner {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
      padding: 20px;
      box-sizing: border-box;
  }

  .header-text h6 {
      font-weight: bold;
      margin: 0;
  }

  .header-text h2 {
      font-size: 2.5rem;
      font-weight: bolder;
      margin: 10px 0;
  }

  .header-text p {
      font-size: 1.2rem;
      line-height: 1.5;
      margin: 20px 0;
  }

  .buttons {
      display: flex;
      justify-content: center;
      gap: 10px;
  }
</style>

<div class="main-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="header-text">
                    <h6>{{ __('main.title1') }}</h6>
                    <h2>{{ __('main.title2') }}</h2>
                    <p>{{ __('main.sub_title') }}</p>
                    <div class="buttons">
                        <div class="border-button">
                            <a href="{{url('explore')}}">{{ __('main.btn_1') }}</a>
                        </div>
                        <div class="main-button">
                            <a href="https://edumidad.org/en/" target="_blank">{{ __('main.btn_2') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
