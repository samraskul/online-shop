<div class="table-responsive">
    <table class="table" id="settings-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Name</th>
        <th>Title</th>
        <th>Content</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($settings as $setting)
            <tr>
                <td>{{ $setting->id }}</td>
            <td>{{ $setting->name }}</td>
            <td>{{ $setting->title }}</td>
            <td>{{ $setting->content }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['admin.settings.destroy', $setting->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.settings.show', [$setting->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.settings.edit', [$setting->id]) }}" class='btn btn-default btn-xs'>
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
