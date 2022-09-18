<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        {{ $color = '' }}
        @for ($i = 1; $i < 10; $i++)
            <tr class="table table-striped">
                <th scope="row">{{ $i }}</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        @endfor
    </tbody>
</table>
