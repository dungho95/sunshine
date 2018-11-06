<h1>Hello first action from <span style="color:red;">LoaiController</span></h1>

<table>
    <thead>
        <tr>
            <th> Mã </th>
            <th> Tên </th>
        </tr>
    </thead>
    <tbody>
        @foreach($danhsachloai as $loai)
            <tr>
                <td>{{ $loai->l_ma}}</td>
                <td>{{$loai->l_ten}}</td>
            </tr>
        @endforeach
    </tbody>
</table>