@extends('admin.main')
{{-- Optional @yeild --}}
@section('title',"Sale Point of Sale")
@section('content')
<div class="container">
    <div class="row">
        <!-- Card -->
        <div class="card">
            <!-- Card content -->
            <div class="card-body">
                <!-- Title -->
                <h4 class="card-title"><a> Take-Away</a></h4>
                <!-- Text -->
                <p class="card-text">
                    <!--Table-->
                    <table id="tablePreview" class="table col-5">
                        <!--Table head-->
                        <thead>
                            <tr>
                                <th>#</th>
                                <th> Item </th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Opt</th>
                            </tr>
                        </thead>
                        <!--Table head-->
                        <!--Table body-->
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>Ice crem</td>
                                <td>21</td>
                                <td>10.0</td>
                                <td>Bhaji</td>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>Coffee</td>
                                <td>3</td>
                                <td>230.0</td>
                                <td>Bhaji</td>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>Burger</td>
                                <td>4</td>
                                <td>400.0</td>
                                <td>Bhaji</td>
                            </tr>
                        </tbody>
                        <!--Table body-->
                    </table>
                    <!--Table-->
                </p>
                <!-- Button -->
                <a href="#" class="btn btn-primary">Button</a>
            </div>
        </div>
        <!-- Card -->
    </div>
</div>
@endsection