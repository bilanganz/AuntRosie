<tr>
    <th scope="row">{{ $customer-> id }}</th>
    <td>{{ $customer->firstName }}</td>
    <td>{{ $customer->lastName }}</td>
    <td><a class="btn btn-primary btn-sm btn-outline-secondary" href="{{ URL::to('customers/' . $customer->id) }}" role="button">View</a></td>
    <td><a class="btn btn-primary btn-sm btn-outline-secondary" href="{{ URL::to('customers/' . $customer->id) . '/edit' }}" role="button">Edit</a></td>
</tr>