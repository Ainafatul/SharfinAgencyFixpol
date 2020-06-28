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
            @foreach ($agents as $agent )
                @if($agent!= null &&$agent->approve == null)
                    <tr>
                        <td scope="row">{{$agent->agensi}}</td>
                        <td scope="row">{{$agent->pekerjaan}}</td>
                        <td scope="row">{{$agent->name}}</td>
                        <td scope="row">@if($agent->gender) {{"Laki - Laki"}} @else {{"Perempuan"}} @endif</td>
                        <td scope="row">{{$agent->alamat}}</td>
                        <td scope="row">{{$agent->email}}</td>
                        <td scope="row">{{$agent->no_tlp}}</td>
                        <td scope="row"><a href="/onAgentApprove/{{$agent->email}}" class="btn btn-primary">Approve</a></td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
