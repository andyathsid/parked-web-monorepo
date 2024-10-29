@extends('backend.layout.app')

@section('contentAdmin')
    <div class="content-wrapper">
        <div class="container-fluid py-4">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-4">User Management</h2>
                    <div class="card shadow">
                        <div class="card-header text-white d-flex justify-content-end align-items-center">
                            <a href="/UserAdd" class="btn btn-primary m-3"><i class="fa-solid fa-plus font-weight-bold"></i>
                                Add</a>
                        </div>
                        <div class="card-body p-4">
                            <div class="table-responsive">
                                <table class="table table table-striped table-hover row-border" id="historyTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Date</th>
                                            <th>User</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody id="historyTableBody">
                                        <tr>
                                            <td>1</td>
                                            <td>fa</td>
                                            <td>54</td>
                                            <td>das</td>
                                            <td>
                                                <button class=""></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
