@extends("layout.Layout")


@section("content")
    <div class="container mt-4">
        @if (Session('delete'))
            <div class="alert alert-danger mt-3 mb-3">
                {{Session("delete")}}
            </div>
        @endif
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">User Name</th>
            <th scope="col">Pizza Name</th>
            <th scope="col">Topping</th>
            <th scope="col">Sauce</th>
            <th scope="col">Price</th>
            <th scope="col">Edit Order</th>
            <th scope="col">Order Complete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pizzas as $pizza )
            <tr>
                <th scope="row">{{$pizza['id']}}</th>
                <th scope="row">{{$pizza['username']}}</th>
                <th scope="row">{{$pizza['pizza_name']}}</th>
                <th scope="row">{{$pizza['topping']}}</th>
                <th scope="row">{{$pizza['sauce']}}</th>
                <th scope="row">{{$pizza['price']}}$</th>


                <td><a class="btn btn-sm btn-warning" href="{{route("edit",$pizza->id)}}">Edit Order</a> </td>
                <td><a class="btn btn-sm btn-success" href="{{route("delete",$pizza->id)}}">Order Complete</a></td>
              </tr>

            @endforeach


        </tbody>

        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <!-- User Name -->
        <div class="md-form mt-4">
            <input type="text" id="materialRegisterFormEmail" class="form-control">
            <label for="materialRegisterFormEmail">User Name</label>
        </div>

        <!-- Pizza Name -->
        <div class="md-form mt-4">
            <input type="text" id="materialRegisterFormEmail" class="form-control">
            <label for="materialRegisterFormEmail">Pizza Name</label>
        </div>

        <div class="md-form mt-4">
            <input type="text" id="materialRegisterFormEmail" class="form-control">
            <label for="materialRegisterFormEmail">Topping</label>
        </div>

        <div class="md-form mt-4">
            <input type="text" id="materialRegisterFormEmail" class="form-control">
            <label for="materialRegisterFormEmail">Sauce</label>
        </div>

        <div class="md-form mt-4">
            <input type="text" id="materialRegisterFormEmail" class="form-control">
            <label for="materialRegisterFormEmail">Price</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-indigo text-white">Update</button>
      </div>
    </div>
  </div>
</div>





      </table>
    </div>
@endsection
