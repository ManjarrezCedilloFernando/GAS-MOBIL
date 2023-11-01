@include('layouts.header')
@include('layouts.aside')
@include('layouts.navbar')
<div class="row mt-4 mx-4">
        <!-- <div class="col-12">
            <div class="alert alert-light" role="alert">
                This feature is available in <strong>Argon Dashboard 2 Pro Laravel</strong>. Check it
                <strong>
                    <a href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank">
                        here
                    </a>
                </strong>
            </div> -->
            
            <div class="col-md-4">
              <div class="form-group">
                <div class="input-group mb-2">
                  <input class="form-control" placeholder="Buscador" type="text">
                  <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                </div>
              </div>
            </div>

            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Users</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Create Date</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="img/team-1.jpg" class="avatar me-3" alt="image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Admin</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">Admin</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">22/03/2022</p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <button class="botonamarillo btn mx-2" type="button">
                                                <i class="fas fa-user-edit" style="color: #ffffff;"></i>
                                            </button>
                                            <button class="btn btn-custom2 mx-2 d-inline" type="button">
                                                <i class="fas fa-trash-alt" style="color: #ffffff;"></i> 
                                            </button>
                                            <button class="btn btn-custom3 mx-2 d-inline" type="button">
                                                <i class="fas fa-eye" style="color: #ffffff;"></i> 
                                            </button>
                                        </div>
                                    </td>
                               </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="img/team-2.jpg" class="avatar me-3" alt="image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Creator</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">Creator</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">22/03/2022</p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <button class="botonamarillo btn mx-2" type="button">
                                                <i class="fas fa-user-edit" style="color: #ffffff;"></i>
                                            </button>
                                            <button class="btn btn-custom2 mx-2 d-inline" type="button">
                                                <i class="fas fa-trash-alt" style="color: #ffffff;"></i> 
                                            </button>
                                            <button class="btn btn-custom3 mx-2 d-inline" type="button">
                                                <i class="fas fa-eye" style="color: #ffffff;"></i> 
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="img/team-1.jpg" class="avatar me-3" alt="image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Member</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">Member</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">22/03/2022</p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <button class="botonamarillo btn mx-2" type="button">
                                                <i class="fas fa-user-edit" style="color: #ffffff;"></i>
                                            </button>
                                            <button class="btn btn-custom2 mx-2 d-inline" type="button">
                                                <i class="fas fa-trash-alt" style="color: #ffffff;"></i> 
                                            </button>
                                            <button class="btn btn-custom3 mx-2 d-inline" type="button">
                                                <i class="fas fa-eye" style="color: #ffffff;"></i> 
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
      @include('layouts.footer')