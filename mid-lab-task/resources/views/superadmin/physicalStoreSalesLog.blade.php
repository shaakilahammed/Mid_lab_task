<a href="/admin">Home</a> | 
              <a href="{{ route('Sales.sold.download') }}"> Download Sales Report </a> | 
              <a href="{{ route('Sales.pdf.pending.download') }}">Download Pending Log</a> ||| 
              <a href="/logout">logout</a>
              {{-- <a href="{{ route('Sales.excel.upload') }}">Upload Data With Excel</a> --}}

              <table border="1">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Payment Type </th>
                    <th>Status </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($Physicalstore as $key => $data)
                        <tr>
                            <th>{{ $data->id }}</th>
                            <td>{{ $data->customer_name }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->product_id }}</td>
                            <td>{{ $data->product_name }}</td>
                            <td>{{ $data->unit_prics }}</td>
                            <td>{{ $data->quantity }}</td>
                            <td>{{ $data->total_price }}</td>
                            <td>{{ $data->payment_type }}</td>
                            <td>{{ $data->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            

