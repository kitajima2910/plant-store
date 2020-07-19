<div id="deleteModal" class="modal fade text-danger" role="dialog">
    <div class="modal-dialog ">
        <!-- Modal content-->
        <form method="post" id="deleteForm">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">THÔNG BAO</h4>
                </div>
                <div class="modal-body">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <p class="text-center">Bạn có thật sự muốn xoá ?</p>
                </div>
                <div class="modal-footer">
                    <div style="text-align: center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Huỷ bỏ</button>
                        <button type="submit" class="btn btn-danger btnOK" data-dismiss="modal">Đồng ý</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).on('click', '.delete', function() {
        let id = $(this).data('id');
        let url = '{{ route("$slot", ":id") }}';
        url = url.replace(':id', id);
        $('#deleteForm').attr('action', url);
    })

    $(document).on('click', '.btnOK', function() {
        $('#deleteForm').submit();
    })
</script>