<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Name</th>
        <th>Category Id</th>
        <th>User Id</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Short Description</th>
        <th>Long Description</th>
        <th>Specification</th>
        <th>Is Available</th>
        <th>Stock</th>
        <th>Rate</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Color</th>
        <th>Size</th>
        <th>Material</th>
        <th>Group</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category_id }}</td>
            <td>{{ $product->user_id }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->discount }}</td>
            <td>{{ $product->short_description }}</td>
            <td>{{ $product->long_description }}</td>
            <td>{{ $product->specification }}</td>
            <td>{{ $product->is_available }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->rate }}</td>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->model }}</td>
            <td>{{ $product->color }}</td>
            <td>{{ $product->size }}</td>
            <td>{{ $product->material }}</td>
            <td>{{ $product->group }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['admin.products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.products.show', [$product->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.products.edit', [$product->id]) }}" class='btn btn-default btn-xs'>
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
