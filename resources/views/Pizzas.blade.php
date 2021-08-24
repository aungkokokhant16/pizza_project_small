@extends("layout.Layout")


@section("content")
    <div class="container mt-4">

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
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>9.9$</td>
            <td><button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalLoginForm">Edit Order</button> </td>
            <td><button class="btn btn-sm btn-success">Order Complete</button> </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@fat</td>
            <td>10$</td>
            <td><button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalLoginForm">Edit Order</button> </td>
            <td><button class="btn btn-sm btn-success">Order Complete</button> </td>
          </tr>

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
