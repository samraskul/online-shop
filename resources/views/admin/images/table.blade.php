<div class="table-responsive">
    <table class="table" id="images-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Url</th>
        <th>Type</th>
        <th>Imageable Id</th>
        <th>Imageable Type</th>
        <th>Admin Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($images as $image)
            <tr>
                <td>{{ $image->id }}</td>
            <td>{{ $image->url }}</td>
            <td>{{ $image->type }}</td>
            <td>{{ $image->imageable_id }}</td>
            <td>{{ $image->imageable_type }}</td>
            <td>{{ $image->admin_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['admin.images.destroy', $image->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.images.show', [$image->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.images.edit', [$image->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
