@extends('layout.Admin')

@section('content')
    <div style="background: #e5e5e5;height: 100vh">
        <div class="container page-container">
            <div>
                <div style="padding-bottom: 100px;padding-top: 50px">
                    <div class="card m-lg-auto" style="padding: 24px 64px">
                        <table class="table">
                            <thead class="thead-dark">
                            <h2>PENDING AGENT</h2>
                            <br>
                            <tr>
                                <th scope="col">Agensi</th>
                                <th scope="col">Pekerjaan</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
                                <th scope="col">No Tlp</th>
                                <th scope="col">Approve</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($datas as $data )
                                @if($data!= null)
                                    <tr>
                                        <td scope="row">{{$data->agency}}</td>
                                        <td scope="row">{{$data->job}}</td>
                                        <td scope="row">{{$data->name}}</td>
                                        <td scope="row">@if($data->gender) {{"Laki - Laki"}} @else {{"Perempuan"}} @endif</td>
                                        <td scope="row">{{$data->address}}</td>
                                        <td scope="row">{{$data->email}}</td>
                                        <td scope="row">{{$data->phone}}</td>
                                        <td scope="row"><a href="{{route('onAgentApproved',['id'=>$data->id])}}" class="btn btn-primary w-100">Approve</a></td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
