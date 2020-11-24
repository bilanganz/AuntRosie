<tr>
    <th scope="row">{{ $sale->id }}</th>
    <td>{{ $sale->customers->first_name  . ' ' . $sale->customers->last_name }}</td>
    <td>{{ $sale->inventory->first()->recipes->name }}</td>
    <td>{{ $sale->inventory->first()->pivot->quantity }}</td>
    <td>{{ $sale-> sales_date }}</td>
</tr>