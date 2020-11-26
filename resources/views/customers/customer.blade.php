<tr>
    <th scope="row">{{ $customer-> id }}</th>
    <td>{{ $customer->first_name }}</td>
    <td>{{ $customer->last_name }}</td>
    <td><a class="btn btn-primary btn-sm btn-outline-secondary" href="{{ URL::to('customers/' . $customer->id) }}" role="button">View</a></td>
    <td><a class="btn btn-primary btn-sm btn-outline-secondary" href="{{ URL::to('customers/' . $customer->id) . '/edit' }}" role="button">Edit</a></td>
    <td>
        <form action="{{ URL::to('/customers/destroy/'.$customer->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-primary btn-sm btn-outline-secondary" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
        </form>
    </td>
</tr>