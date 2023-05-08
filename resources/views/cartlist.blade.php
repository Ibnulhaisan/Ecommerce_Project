@extends('master')
@section("content")
    <div class="custom-product">
        <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3>Result for products</h3>
            <a class="btn btn-success" href="ordernow">Ordernow</a><br><br>
            @foreach($products as $item)
                <div class="row searched-item cart-list-devider">
                  <div class="col-sm-3">
                      <a href="detail/{{$item->id}}">
                          <img class="trending-image" src="{{$item->gallery}}" alt="Chania">
                      </a>
                  </div>
                    <div class="col-sm-4">
                            <div class="">
                                <h3>{{$item->name}}</h3>
                                <h4>{{$item->description}}</h4>
                            </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="/removecart/{{$item->carts_id}}" class="btn btn-warning">Remove to Cart</a>
                    </div>
                </div>
            @endforeach
        </div>
            <a class="btn btn-success" href="ordernow">Ordernow</a><br><br>
    </div>
    </div>
@endsection







