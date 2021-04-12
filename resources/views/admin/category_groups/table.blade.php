<div class="table-responsive">
    <table class="table" id="categoryGroups-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Name</th>
        <th>Category Id</th>
        <th>Parent Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categoryGroups as $categoryGroup)
            <tr>
                <td>{{ $categoryGroup->id }}</td>
            <td>{{ $categoryGroup->name }}</td>
            <td>{{ $categoryGroup->category_id }}</td>
            <td>{{ $categoryGroup->parent_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['admin.categoryGroups.destroy', $categoryGroup->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.categoryGroups.show', [$categoryGroup->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.categoryGroups.edit', [$categoryGroup->id]) }}" class='btn btn-default btn-xs'>
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
