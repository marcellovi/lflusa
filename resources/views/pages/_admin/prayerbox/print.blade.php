<!DOCTYPE html>
<html>
<head>
    <title>LFL PRAYER BOX</title>
    <style>
        /* CSS for a print-friendly page */
        @media print {
            body { font-family: Arial, sans-serif; }
            table { width: 100%; border-collapse: collapse; }
            th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        }
    </style>
</head>
<body>
<h2>Date From {{ date_format($startOfWeek,'Y-m-d') }} to {{ date_format($endOfWeek,'Y-m-d') }}</h2>
<table>
    <thead>
    <tr>
        <th>Names</th>
        <th>Type</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($listPrayerBox as $lpb)
        <tr>
            <td> {{ $lpb->names }}</td>
            <td>{{ $lpb->type  }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<script>
    // Optional: Trigger the print dialog when the page loads
    window.onload = function() {
        window.print();
    };
</script>
</body>
</html>



