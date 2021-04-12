<div class="table-responsive">
    <table class="table" id="pages-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Title</th>
        <th>Content</th>
        <th>Admin Id</th>
        <th>Is Active</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
            <td>{{ $page->title }}</td>
            <td>{{ $page->content }}</td>
            <td>{{ $page->admin_id }}</td>
            <td>{{ $page->is_active }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['admin.pages.destroy', $page->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.pages.show', [$page->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.pages.edit', [$page->id]) }}" class='btn btn-default btn-xs'>
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
