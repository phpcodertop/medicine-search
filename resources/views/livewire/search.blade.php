<div class="container">
    <div class="row">
        <div class="col-lg-12 card-margin">
            <div class="card search-form">
                <div class="card-body p-0">

                        <div class="row">
                            <div class="col-12">
                                <div class="row no-gutters">
                                    <div class="col-lg-11 col-md-6 col-sm-12 p-0">
                                        <input type="text" wire:model="search" placeholder="Search..." class="form-control" id="search" name="search">
                                    </div>
                                    <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                        <button type="submit" class="btn btn-base">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-margin">
                <div class="card-body">
                    <div class="row search-body">
                        <div class="col-lg-12">
                            <div class="search-result">
                                <div class="alert alert-info text-center">
                                    <h3>Medicines Search Page</h3>
                                </div>
                                <div class="result-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Medicine Name</th>
                                                    <th>Price (EGP)</th>
                                                    <th>Ingredients</th>
                                                    <th>Image</th>
                                                    <th>Effect</th>
                                                    <th>Other</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($medicines as $medicine)
                                                <tr>
                                                    <td>{{ $medicine->name }}</td>
                                                    <td>{{ $medicine->price }}</td>
                                                    <td>{{ $medicine->ingredients }}</td>
                                                    <td>
                                                        <img width="50" height="50" src="{{ $medicine->image }}" alt="">
                                                    </td>
                                                    <td>{{ $medicine->effect }}</td>
                                                    <td>{{ $medicine->other }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">
                                                        There is no data.
                                                    </td>
                                                </tr>
                                            @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <nav class="d-flex justify-content-center">
                        {{ $medicines->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
