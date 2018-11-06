<h1>Đây là chủ đề <span style="color:red;">ChuDeController</span></h1>
<table>
    <thead>
        <tr>
            <th> Mã </th>
            <th> Tên </th>
        </tr>
    </thead>
    <tbody>
        @foreach($danhsachchude as $chude)
            <tr>
                <td>{{ $chude->cd_ma}}</td>
                <td>{{$chude->cd_ten}}</td>
            </tr>
        @endforeach
    </tbody>
</table>