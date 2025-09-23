
<div class="card-header">
    <h3 class="card-title">
        <i class="fas fa-text-width"></i>
        FORM ORDER GIZI
    </h3>
</div>

    <table class="table">
        <tbody>
            <tr>
                <td>
                    <form id="dynamic-form" class="formtindakandpjp">

                        <div class="field_wrapperrrr">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-5"><label for="">PILIH DPJP</label>
                                        <select class="form-control  select2" name="kode_dpjp" id="kode_dpjp" placeholder="Cari opsi...">
                                        </select>

                                    </div>
                                    <div class="col-md-5">
                                        <label for="">Tata Laksana DPJP</label>
                                        <!-- <input class="form-control" placeholder="Tata Laksana DPJP" type="text-area" row="3" name="talaksanadpjp[]" value="" /> -->
                                        <textarea class="form-control" id="talaksanadpjp" name="talaksanadpjp" placeholder=""></textarea>

                                    </div>

                                    <div class="col-md-2">
                                        <a class="btn btn-success" href="javascript:void(0);" id="add_button" title="Add field">TAMBAH</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="ml-3">
        <button type="button" class="bg-success simpanorderabarang" id="simpanorderabarang">SIMPAN</button>

        <button type="button" class="add">Add More</button>
        <button type="button" class="del" onClick="delMore()">Delete</button>
    </p>



<script>
    $(document).ready(function() {
        var maxField = 10; //Input fields increment limitation
        var addButton = $('#add_button'); //Add button selector
        var wrapper = $('.field_wrapperrrr'); //Input field wrapper
        var fieldHTML = '<div class="form-group add"><div class="row">';
        fieldHTML = fieldHTML + '<div class="col-md-5"><label for="">Tata Laksana DPJP</label><textarea class="form-control" id="talaksanadpjp" name="talaksanadpjp" placeholder=""></textarea></div>';
        fieldHTML = fieldHTML + '<div class="col-md-2"><a href="javascript:void(0);" class="remove_button btn btn-danger">HAPUS</a></div>';
        fieldHTML = fieldHTML + '</div></div>';
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function() {
            //Check maximum number of input fields
            if (x < maxField) {
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e) {
            e.preventDefault();
            $(this).parent('').parent('').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>