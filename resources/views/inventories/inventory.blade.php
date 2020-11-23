<tr>
    <th scope="row">{{ $inventory->id }}</th>
    <td>{{ $inventory->recipes->name }}</td>
    <td>{{ $inventory->quantity }}</td>
    <td>{{ $inventory->price }}</td>
    <td>{{ $inventory->production_date }}</td>
    <td><a class="btn btn-primary btn-sm btn-outline-secondary" href="{{ URL::to('inventories/' . $inventory->id) }}" role="button">View</a></td>
    <td><a class="btn btn-primary btn-sm btn-outline-secondary" href="{{ URL::to('inventories/' . $inventory->id) . '/edit' }}" role="button">Edit</a></td>
    <td>
        <form action="{{ URL::to('/inventories/destroy/'.$inventory->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-primary btn-sm btn-outline-secondary" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
        </form>
    </td>
</tr>