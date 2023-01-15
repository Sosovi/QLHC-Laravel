<x-layout>

    @if(@isset($chucvu))
        @include('admin.chucvus._Form_Edit')
    @else
        @include('admin.chucvus._Form_Add')
    @endif

    <div class="mt-4">
        <h3>DANH SÁCH CHỨC VỤ</h3>
        <hr>
        <table class="table table-striped table-bordered">
            <tr class="table-primary">
                <th>#</th>
                <th>Tên chức vụ</th>
                <th><i class="fa-duotone fa-trash"></i></th>
            </tr>

            @unless(count($chucvus) == 0)
                @foreach($chucvus as $index => $chucvu)
                    <x-ChucVu.tableRow :chucvu="$chucvu" :index="$index"/>
                @endforeach
            @else
                <tr>
                    <td colspan="4">Không tìm thấy chức vụ nào</td>
                </tr>
            @endunless

        </table>
    </div>

</x-layout>
