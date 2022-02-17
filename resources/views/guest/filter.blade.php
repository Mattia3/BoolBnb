@extends('layouts.guest')
@section('page_title', 'filter')
    
@section('content')
<div>
  <div class="background-hero"></div>

  <div class="row">
    <div class="col-5 mt-5">
      <div class="container">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
        </div>
        
        <div class="d-flex justify-content-between my-4">
          <h3>Servizi</h3>
          <button type="button" class="btn btn-primary">+ Filter</button>
        </div>

        <div class="row row-cols-3 container-check">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Checked checkbox
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Checked checkbox
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Checked checkbox
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Checked checkbox
            </label>
          </div>
          
        </div>

        <div class="row row-cols-2 mt-5">

          <div class="col d-flex">
            <label for="field_square_mt " class="title-form">Stanze</label>
            <div class="wrap">
              <form action="">
                <input class="btn-counter input-incremate" type="button" value="-"/>
                <input class="total-item input-incremate" type="text" value="1" />
                <input class="btn-counter input-incremate" type="button" value="+" />
              </form>
            </div>
          </div>

          <div class="col d-flex">
            <label for="field_square_mt " class="title-form">Letti</label>
            <div class="wrap">
              <form action="">
                <input class="btn-counter-one input-incremate" type="button" value="-"/>
                <input class="total-item-1 input-incremate" type="text" value="1" />
                <input class="btn-counter-one input-incremate" type="button" value="+" />
              </form>
            </div>
          </div>

          <div class="col d-flex mt-4">
            <label for="field_square_mt " class="title-form">Bagni</label>
            <div class="wrap">
              <form action="">
                <input class="btn-counter input-incremate" type="button" value="-"/>
                <input class="total-item input-incremate" type="text" value="1" />
                <input class="btn-counter input-incremate" type="button" value="+" />
              </form>
            </div>
          </div>

        </div>

        <div class="container-range">
          <label for="customRange1" class="form-label">Raggio di ricerca</label>
          <input type="range" class="form-range w-50" id="customRange1">
        </div>
      </div>

    <div class="col-7 "></div>
  </div>
</div>


@endsection