@extends('backend.layout.app')

@section('contentAdmin')
    <div class="content-wrapper">
        <div class="container-fluid py-4">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-4">History Form</h2>
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <div class="table-responsive">
                                <table class="table table table-striped table-hover row-border" id="historyTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Date</th>
                                            <th>User</th>
                                            <th>Action</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    <tbody id="historyTableBody">
                                        <tr>
                                            <td>1</td>
                                            <td>fa</td>
                                            <td>54</td>
                                            <td>das</td>
                                            <td>54</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>das</td>
                                            <td>54</td>
                                            <td>das</td>
                                            <td>54</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>das</td>
                                            <td>54</td>
                                            <td>das</td>
                                            <td>54</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>das</td>
                                            <td>54</td>
                                            <td>das</td>
                                            <td>54</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>das</td>
                                            <td>54</td>
                                            <td>das</td>
                                            <td>54</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>das</td>
                                            <td>54</td>
                                            <td>das</td>
                                            <td>54</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>das</td>
                                            <td>54</td>
                                            <td>das</td>
                                            <td>54</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>das</td>
                                            <td>54</td>
                                            <td>das</td>
                                            <td>54</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>das</td>
                                            <td>54</td>
                                            <td>das</td>
                                            <td>54</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>das</td>
                                            <td>54</td>
                                            <td>das</td>
                                            <td>54</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>das</td>
                                            <td>54</td>
                                            <td>das</td>
                                            <td>54</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>das</td>
                                            <td>54</td>
                                            <td>das</td>
                                            <td>54</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>das</td>
                                            <td>54</td>
                                            <td>das</td>
                                            <td>54</td>
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
    <!-- Modal for viewing upload details -->
    <div class="modal fade" id="uploadDetailsModal" tabindex="-1" aria-labelledby="uploadDetailsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadDetailsModalLabel">Upload Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="uploadDetailsBody">
                    <!-- Upload details will be dynamically populated here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
