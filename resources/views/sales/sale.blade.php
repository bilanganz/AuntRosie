<tr>
    <th scope="row">{{ $sale->id }}</th>
    <td>{{ $sale->customers->first_name  . ' ' . $sale->customers->last_name }}</td>
    <td>{{ $sale-> sales_date }}</td>
    <td><a class="btn btn-primary btn-sm btn-outline-secondary" href="{{ URL::to('sales/' . $sale->id) }}" role="button">View</a></td>
    <td><a class="btn btn-primary btn-sm btn-outline-secondary disabled" href="{{ URL::to('sales/' . $sale->id) . '/edit' }}" role="button">Edit</a></td>
    <td>
        <form action="{{ URL::to('/sales/destroy/'.$sale->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-primary btn-sm btn-outline-secondary" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
        </form>
    </td>
</tr>