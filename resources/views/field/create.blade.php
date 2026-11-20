@extends("layout.primary")

@section("content")
    <div class="row">


 <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add new Filed</h4>
                    <p class="card-description">  </p>
                     <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                    <form class="forms-sample" method="post" action="{{route('filed.store')}}">
                    @csrf  
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">name</label>
                        <div class="col-sm-9">
                          <input type="text" name="name" class="form-control" id="exampleInputUsername2" placeholder="name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">adress</label>
                        <div class="col-sm-9">
                          <input type="text" name="adress" class="form-control" id="exampleInputEmail2" placeholder="adress">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">charge</label>
                        <div class="col-sm-9">
                          <input type="text" name="charge" class="form-control" id="exampleInputMobile" placeholder="charge">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">status</label>
                        <div class="col-sm-9">
                          <input type="text" value="waiting"  name="status" class="form-control" id="exampleInputPassword2" placeholder="status">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">user ID</label>
                        <div class="col-sm-9">
                          <input type="text"  name="user_id" class="form-control" id="exampleInputPassword2" placeholder="status">
                        </div>
                      </div>
                     
                     
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
             
</div>


@endsection