@extends("layout.primary")
@section("content")

<div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Fileds List</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> ID </th>
                            <th> Name </th>
                            <th> Address </th>
                            <th> Charge </th>
                            <th> User Name </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($allFileds as $filed)
                          <tr>
                            <td>
                              {{$filed->user->name}}
                            </td>
                            <td> {{$filed->name}}</td>
                           <td> {{$filed->adress}}</td>
                                      <td> {{$filed->charge}}</td>
                           <td> {{$filed->status}}</td>
                          </tr>
                         @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
@endsection