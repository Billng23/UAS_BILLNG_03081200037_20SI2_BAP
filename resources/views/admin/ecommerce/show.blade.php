@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <div class="row">
         

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ecommerce {{ $ecommerce->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/ecommerce') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/ecommerce/' . $ecommerce->id . '/edit') }}" title="Edit ecommerce"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/ecommerce' . '/' . $ecommerce->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete ecommerce" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $ecommerce->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $ecommerce->Name }} </td></tr><tr><th> Shop </th><td> {{ $ecommerce->Shop }} </td></tr><tr><th> Product </th><td> {{ $ecommerce->product }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
