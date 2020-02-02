@extends('layout.main')

@section('title','Pizza')

@section('content')
    <!-- products listing -->
  <div class="row">
        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="#">
                        <br>
                        <img src="{{URL::asset('./images/chicken.png')}}" alt="profile Pic" height="200" width="200">
                    </a>
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="subheader"><br>
                    <span class="price-tag">$20</span> Chicken Pizza
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                        <label>
                            Select Size
                            <select>
                                <option value="small">
                                    Small
                                </option>
                                <option value="medium">
                                    Medium
                                </option>
                                <option value="large">
                                    Large
                                </option>

                            </select>
                        </label>
                        <a href="#" class="button  expanded">Add to Cart</a>
                    </div>
                </div>


            </div>
        </div>
    </div>



@endsection
