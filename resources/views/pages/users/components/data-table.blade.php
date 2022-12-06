<div>
  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#Reg. No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                {{-- <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot> --}}
                                <tbody>
                                    @forelse ($user as $value)
                                         <tr>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>
                                            <button class="btn-circle btn-{{ $value->status == 1 ? 'success' : 'danger' }} btn-sm" data-toggle="modal"
                                                data-target="#changeStatus"><i class="fas fa-{{ $value->status == 1 ? 'check' : 'exclamation-triangle' }}"></i></button>
                                        </td>
                                        <td>{{ $value->adminUser ? $value->adminUser->first_name : '' }}</td>
                                        <td>2011/01/25</td>
                                        <td>
                                            <button class="btn-circle btn-primary btn-sm" data-toggle="modal"
                                                data-target="#showUser"><i class="fas fa-book"></i></button>
                                            <button class="btn-circle btn-danger btn-sm" data-toggle="modal"
                                                data-target="#changeStatus"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    @empty
                                         <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>
                                            <button class="btn-circle btn-primary btn-sm" data-toggle="modal"
                                                data-target="#showUser"><i class="fas fa-book"></i></button>
                                            <button class="btn-circle btn-danger btn-sm" data-toggle="modal"
                                                data-target="#changeStatus"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
</div>
