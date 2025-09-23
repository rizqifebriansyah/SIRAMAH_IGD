<table id="tabelstok" class="table tabelstok">
    <thead class="bg-warning">
        <th></th>
        <th>A</th>
        <th>B</th>
        <th>O</th>
        <th>AB</th>

        <!-- <th>Action</th> -->
    </thead>
    <tbody>
        <tr>
            <td class="bg-secondary">{{$stok[0]->jenis}}</td>
            <td>{{$stok[0]->stock_current}}</td>
            <td>{{$stok[1]->stock_current}}</td>
            <td>{{$stok[2]->stock_current}}</td>
            <td>{{$stok[3]->stock_current}}</td>
            <!-- <td><a class="btn btn-warning btn-sm edit" href="#">
                                                        <i class="fas fa-pen"></i>
                                                        EDIT
                                                    </a> | <a class="btn btn-primary btn-sm " href="#">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </a></td> -->
        </tr>
        <tr>
            <td class="bg-danger">Stock OUT</td>
            <td>{{$stok[0]->stock_out}}</td>
            <td>{{$stok[1]->stock_out}}</td>
            <td>{{$stok[2]->stock_out}}</td>
            <td>{{$stok[3]->stock_out}}</td>
            <!-- <td></td> -->
        </tr>
        <tr>
            <td class="bg-success">Stock IN</td>
            <td>{{$stok[0]->stock_in}}</td>
            <td>{{$stok[1]->stock_in}}</td>
            <td>{{$stok[2]->stock_in}}</td>
            <td>{{$stok[3]->stock_in}}</td>
            <!-- <td></td> -->
        </tr>
    </tbody>
</table>



<script>
    $(function() {
        $("#tabelstok").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
</script>